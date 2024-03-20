<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\ThreadCategory;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ThreadController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'forum_type_id' => 'required|integer',
        ]);

        // Memulai query dengan filter status approved dan forum type id
        $threads = Thread::where('status', 'approved')
            ->where('forum_type_id', $request->forum_type_id)
            ->orderBy('created_at', 'DESC');

        // Pencarian Thread
        if ($request->has('search')) {
            $searchTerm = $request->get('search');
            $threads->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%');
            });
        }

        // Ambil hasil query dengan pagination
        $threads = $threads->paginate(5);

        return view('forum.index', [
            'threads' => $threads,
        ]);
    }


    public function show(Thread $thread)
    {
        return view('threads.show', compact('thread'));
    }

    public function edit(Request $request, Thread $thread)
    {
        // if (auth()->user()->id !== $thread->user_id) {
        //     abort(404);
        // }

        $this->authorize('thread.edit', $thread);

        $editing = true;

        return view('threads.show', compact('thread', 'editing'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:5|max:254',
            // 'thread_category_id' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $isAdmin = auth()->user()->role == 3;

        $imagePath = null;

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('thread_image', 'public');

            Storage::disk('public')->delete($request->user()->photo ?? '');
        }

        $thread = new Thread;
        $thread->title = $request->title;
        $thread->content = $request->content;
        $thread->status = $isAdmin ? 'approved' : 'pending';
        $thread->photo = $imagePath;
        $thread->created_at = now();
        $thread->created_by = auth()->id();
        $thread->updated_at = now();
        $thread->updated_by = auth()->id();
        $thread->user_id = auth()->id();
        $thread->forum_type_id = $request->forum_type_id;
        $thread->thread_category_id = $request->thread_category_id;



        $thread->save();

        if (!$isAdmin) {
            // Mendapatkan pengguna dengan peran (role) 3
            $adminUser = User::where('role', 3)->first();

            // Buat notifikasi
            $notification = new Notification;
            $notification->ref_id = $thread->id; // ID thread yang baru saja dibuat
            $notification->modules = 'threads';
            $notification->keterangan = auth()->user()->name . ' request to make a thread: "' . $thread->title . '"';
            $notification->isRead = 0;
            $notification->created_at = now();
            $notification->created_by = Auth::id();
            $notification->updated_at = now();
            $notification->user_id = $adminUser->id;

            $notification->save();
        }

        $approvalMessage = $isAdmin ? 'Thread created successfully!' : 'Thread created successfully, wait for admin approval!';

        return redirect()->route('forum', ["forum_type_id" => $request->forum_type_id])->with('success', $approvalMessage);
    }


    public function destroy(Thread $thread)
    {
        $this->authorize('thread.delete', $thread);

        $thread->delete();

        return redirect('/threads')->with('success', 'Thread deleted successfully!');
    }

    public function update(Request $request, Thread $thread)
    {
        $this->authorize('thread.edit', $thread);

        request()->validate([
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:5|max:254',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mendapatkan peran pengguna yang sedang menjalankan permintaan
        $userRole = auth()->user()->role;

        $thread->title = $request->input('title', '');
        $thread->content = $request->input('content', '');

        $thread->fill($request->except('photo'));

        if ($request->hasFile('photo')) {
            if ($thread->photo) {
                Storage::disk('public')->delete($thread->photo);
            }
            $imagePath = $request->file('photo')->store('thread_image', 'public');
            $thread->photo = $imagePath;
        }

        if ($userRole == 3) {
            $thread->status = 'approved';
        } else {
            // Jika bukan, ubah status menjadi 'pending'
            $thread->status = 'pending';
        }

        $thread->updated_at = now();
        $thread->save();

        if ($thread->status == 'approved' && $userRole == 3) {
            return redirect()->route('forum', ["forum_type_id" => $thread->forum_type_id])->with('success', 'Thread updated!');
        } else if ($thread->status == 'pending' && $userRole == 3) {
            return redirect()->route('admin.approval', ["forum_type_id" => $thread->forum_type_id])->with('success', 'Thread updated!');
        } else if ($thread->status == 'pending') {
            return redirect()->route('forum', ["forum_type_id" => $thread->forum_type_id])->with('success', 'Thread updated successfully, wait for admin approval!');
        }
    }



    public function getCategory()
    {
        $threadCategories = ThreadCategory::all();

        return view('threads.shared.submit_thread', compact('threadCategories'));
    }

}
