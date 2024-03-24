@extends('layouts.header')

@section('content')
<div class="container bg-gray-100 px-4 py-2" style="max-width: 24cm;">
    <h3 class="font-bold text-3xl text-gray-800 mt-7 mb-4">Notifications</h3>
    <hr class="mb-4">

    @foreach($notifications as $notification)
        <!-- Add JavaScript onClick event handler to make the entire box clickable -->
        <div class="mt-2 px-6 py-4 {{ $notification->isRead ? 'bg-gray-200' : 'bg-white' }} rounded-lg shadow-lg w-full cursor-pointer"
            onclick="event.preventDefault(); window.location='{{ route('notifications.update', $notification) }}'; document.getElementById('mark-as-read-form-{{ $notification->id }}').submit();">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                </div>
                <p class="text-sm text-gray-500">
                    <i class="fas fa-clock me-1"></i>{{ $notification->created_at->diffForHumans() }}
                </p>
            </div>
            <div class="flex items-center">
                <img class="w-12 h-12 rounded-full" src="{{ $notification->user->getImageURL() }}" alt="{{ $notification->user->name }}">
                <p class="ml-4 text-base">{{ $notification->keterangan }}</p>
            </div>
            <div class="flex justify-end"> <!-- Fixed a typo in the class attribute -->
                <form id="mark-as-read-form-{{ $notification->id }}"
                    action="{{ route('notifications.update', $notification) }}"
                    method="POST" style="display: none;">
                    @csrf
                    @method('PUT')
                </form>
            </div>
        </div>
    @endforeach

    <!-- Pagination Links -->
    <div class="flex justify-content-center"> <!-- Fixed a typo in the class attribute -->
        {{ $notifications->links() }}
    </div>
</div>
<script type="module">
    console.log(window.Echo); // Fixed casing of 'Window' to 'window'
    let user_id = {{ Auth::user()->id }};
    console.log("Mendengarkan pesan baru untuk user:", user_id);
    window.Echo.channel(`notification.${user_id}`).listen( // Fixed casing of 'Window' to 'window'
        ".notification-event",
        (event) => {
            console.log("Mendengarkan pesan baru:", event);
            // Lakukan tindakan yang sesuai dengan pesan yang diterima
            // reload page
            location.reload();
        }
    );
</script>
@endsection
