<div class="card mt-3 shadow-md">
    <div class="card-body">
        <div class="mt-1">
            <h1 class="card-title font-semibold text-2xl">Category</h1>
            <form id="searchForm" action="{{ route('thread-categories.search') }}" method="post">
                @csrf
                <!-- Include forum_type_id as a hidden input -->
                <input type="hidden" name="forum_type_id" value="{{ request()->get('forum_type_id') }}">

                <div class="grid grid-cols-1 gap-4">
                    @foreach($threadCategories as $id => $name)
                    <div class="flex items-center">
                        <input id="category-{{ $id }}" name="categories[]" value="{{ $id }}" type="checkbox" class="form-checkbox text-blue-600 h-4 w-4">
                        <label for="category-{{ $id }}" class="ml-2 text-sm text-gray-700">{{ $name }}</label>
                    </div>
                    @endforeach
                </div>
                <!-- Search Category button -->
                <button type="submit" class="btn btn-dark mt-3 px-4 py-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-large rounded-lg text-lg ml-2">Search</button>
            </form>
        </div>
    </div>
</div>
