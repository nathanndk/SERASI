<div class="card mt-3 shadow-md">
    <div class="card-body">
        <div class="mt-1">
            <h1 class="card-title font-semibold text-2xl">Category</h1>
            <form id="searchForm" action="{{ route('thread-categories.search') }}" method="post">
                @csrf
                <div class="grid grid-cols-1 gap-4">
                    @php
                    $threadCategories = [
                        1 => 'Book',
                        2 => 'Life',
                        3 => 'Sports',
                        4 => 'Food',
                        5 => 'Music',
                        6 => 'Movie',
                        7 => 'Game',
                        8 => 'Programming',
                        9 => 'Custom',
                    ];
                    @endphp

                    @foreach($threadCategories as $id => $name)
                    <div class="flex items-center">
                        <input id="category-{{ $id }}" name="categories[]" value="{{ $id }}" type="checkbox" class="form-checkbox text-blue-600 h-4 w-4">
                        <label for="category-{{ $id }}" class="ml-2 text-sm  text-gray-700">{{ $name }}</label>
                    </div>
                    @endforeach
                </div>

                <!-- Search Category button -->
                <button type="submit" class="btn btn-dark mt-3 px-4 py-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-large rounded-lg text-lg dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-2">Search</button>
            </form>
        </div>
    </div>
</div>
