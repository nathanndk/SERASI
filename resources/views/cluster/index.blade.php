@extends('layouts.header')

@section('content')

<div class="container py-4">
    <div class="row">
        <div class="flex flex-wrap -mx-4">
        @include('layouts.sidebar_cluster')

        @include('cluster.shared.category_card')
    </div>
</div>

@endsection
