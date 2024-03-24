@extends('layouts.header')

@section('content')
    <div class="container py-4">
        <div class="row">
            @include('layouts.sidebar')

            <div class="col-lg-6">
                <div class="mt-3">
                    <h1 class="text-2xl font-semibold mb-4">Search Results</h1>

                    @foreach($threads as $thread)
                        <div class=" p-4 mb-1">
                            @include('threads.shared.thread_card', ['thread' => $thread])
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mt-3">
                    @include('shared.search_bar')
                </div>
                <hr class="my-6">
                <div class="mt-3">
                    @include('forum.shared.category')
                </div>
            </div>
        </div>
    </div>
@endsection
