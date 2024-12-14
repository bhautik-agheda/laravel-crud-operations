@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-3">Product List</h1>
        <div class="bg-white shadow-md rounded px-8 p-6 mb-2">
            <div class="mb-3">
                <a href="{{ route('products.create') }}" class="bg-gray-200 px-4 py-1 p-1 rounded hover:bg-red-600">Add Product</a>
            </div>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">Category</th>
                        <th class="border border-gray-300 px-4 py-2">Price</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">{{ $product->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->category->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->price }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a class="bg-gray-200 px-4 py-1 p-1 rounded hover:bg-blue-600" href="{{ route('products.edit', $product) }}">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500/20 px-4 py-1 p-1 rounded hover:bg-red-600 ml-2" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="hover:bg-gray-100">
                            <td colspan="5">
                                <p class="text-center">Product not found</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="my-3">
                {{ $products->links() }}
            </div>
        </div>
        <div class="bg-white shadow-md rounded px-8 p-6 mb-3">
            <a href="{{ route('categories.index') }}" class="bg-gray-200 px-4 py-1 p-1 rounded hover:bg-red-600">Back to Categories List</a>
        </div>
    </div>
@endsection