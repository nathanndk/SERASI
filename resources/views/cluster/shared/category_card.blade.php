<!-- Main Content -->
<div class="w-full lg:w-3/4 px-4">


    <div class="row">
        <div class="col">
            @include('shared.success_message')
            <div class="card">
                <div class="card-body">
                    <h4 class="text-lg font-semibold mb-4">Make a New Category</h4>
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="flex flex-col mb-4">
                            <textarea id="category" name="category" rows="3" class="form-textarea mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter New Category..."></textarea>
                            @error('category')
                            <span class="text-sm text-red-500 mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row mt-4">
        <div class="col">
            <div class="container">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($threadCategories as $category)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($editing ?? false)
                                    <form action="{{ route('categories.update', $category->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="mb-3">
                                            <textarea class="form-textarea w-full border border-gray-300 rounded-md" style="height: auto; min-height: 38px;" id="category" name="category" rows="1">{{ $category->category }}</textarea>
                                            @error('category')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                        </div>
                                    </form>
                                @else
                                    <span class="text-lg font-semibold">{{ $category->category }}</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex space-x-2">
                                    @if ($editing ?? false)
                                        <button class="inline-block px-2 py-1 bg-gray-400 text-white rounded-md opacity-50 cursor-not-allowed">Edit</button>
                                    @else
                                        <a href="{{ route('categories.edit', $category->id) }}" class="inline-block px-2 py-1 bg-gray-800 text-white rounded-md hover:bg-gray-700 text-decoration-none">Edit</a>
                                    @endif
                                    <a href="{{ route('categories.show', $category->id) }}" class="inline-block px-2 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-500 text-decoration-none">Show</a>
                                    <form method="post" action="{{ route('categories.destroy', $category->id) }}" class="inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="inline-block px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-500" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Main Content -->
