@extends('layouts.app')

@section('content')

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-3">Category List</h1>
        <div class="bg-white shadow-md rounded px-8 p-6 mb-2">
            <div class="mb-3">
                <a href="{{ route('categories.create') }}" class="bg-gray-200 px-4 py-1 p-1 rounded hover:bg-red-600">Add Category</a>
            </div>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">Products Count</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">{{ $category->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $category->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $category->products_count }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a class="bg-gray-200 px-4 py-1 p-1 rounded hover:bg-blue-600"
                                    href="{{ route('categories.edit', $category) }}">Edit</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500/20 px-4 py-1 p-1 rounded hover:bg-red-600 ml-2" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="hover:bg-gray-100">
                            <td colspan="5">
                                <p class="text-center">Category not found</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="my-3">
                {{ $categories->links() }}
            </div>
        </div>
        <div class="bg-white shadow-md rounded px-8 p-6 mb-3">
            <a href="{{ route('products.index') }}" class="bg-gray-200 px-4 py-1 p-1 rounded hover:bg-red-600">Back to Products List</a>
        </div>
    </div>
@endsection