@php
    $forum_type_id = request()->get('forum_type_id');
@endphp
@extends('layouts.header')

@section('content')
<div class="container py-4">
    <div class="mx-auto max-w-md">
        <h3 class="font-bold text-2xl text-gray-800 mb-4">Share Your Thread</h3>
        <hr class="mb-4">
        <form action="{{ route('threads.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="content" class="form-label">Description</label>
                <textarea class="form-control" id="content" name="content" rows="3" style="overflow-wrap: break-word;"></textarea>
                @error('content')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="image" class="form-label">Image</label>
                <input type="file" accept="image/*" class="form-control" id="photo" name="photo">
                <p class="form-text text-muted">Accepted formats: JPG, JPEG, PNG, GIF. Maximum size: 3MB.</p>
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <input type="hidden" class="form-control" id="forum_type_id" name="forum_type_id" value="{{ $forum_type_id }}">
            </div>

            <div class="mb-4">
                <label for="category_id" class="form-label">Thread Category</label>
                <select name="thread_category_id" id="category_id" class="form-select" style="border: 1px solid;">
                    <option value="">Select Category</option>
                    @foreach ($threadCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                    <option value="custom">Custom</option>
                </select>
                <div id="custom_category_form" style="display: none;">
                    <label for="custom_thread_category" class="form-label">Custom Category</label>
                    <input type="text" class="form-control" id="custom_thread_category" name="custom_thread_category">
                </div>
                @error('thread_category_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <script>
                document.getElementById('category_id').addEventListener('change', function() {
                    var customForm = document.getElementById('custom_category_form');
                    if (this.value === 'custom') {
                        customForm.style.display = 'block';
                        customForm.querySelector('input').setAttribute('required', 'required');
                    } else {
                        customForm.style.display = 'none';
                        customForm.querySelector('input').removeAttribute('required');
                    }
                });
            </script>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Create Thread</button>
            </div>
        </form>
    </div>
</div>
<hr>
@endsection

<script>
    const textarea = document.getElementById('content');

    textarea.addEventListener('input', function() {
        if (this.scrollHeight > this.clientHeight) {
            this.style.height = this.scrollHeight + 'px';
        }
    });
</script>
