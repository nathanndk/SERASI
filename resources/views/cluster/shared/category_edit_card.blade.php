<!-- Main Content -->
<div class="w-full lg:w-3/4 px-4">
    <div class="card shadow-lg">
        <div class="mb-3">
            @include('shared.success_message')
        </div>

        <!-- Create New Category Form -->
        <div class="card">
            <div class="card-body">
                <h4 class="text-lg font-semibold mb-4">Make a New Category</h4>
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <textarea id="category" name="category" rows="3" class="form-textarea mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter Category"></textarea>
                        @error('category')
                        <span class="text-sm text-red-500 mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Create</button>
                    </div>
                </form>
            </div>
        </div>

        <hr>

        <!-- Category Table -->
        <div class="container mt-4">
            <table class="min-w-full bg-white divide-y divide-gray-200 shadow-md rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($threadCategories as $category)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-lg font-semibold text-gray-900">{{ $category->category }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            @if ($editing ?? false)
                            <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post" class="inline">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <textarea class="form-textarea w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 transition ease-in-out duration-150" id="category_{{ $category->id }}" name="category" rows="1" cols="20">{{ $category->category }}</textarea>
                                </div>
                                <div>
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-medium rounded-md transition ease-in-out duration-150">Update</button>
                                </div>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Main Content -->
