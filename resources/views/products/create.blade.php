@extends('layouts.app')

@section('title', 'Create Product')

@section('content')

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-3">Create a New Product</h1>
        <div class="bg-white shadow-md rounded px-8 p-6 mb-2">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Product Name:</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter product name">
                    @error('name')
                        <div>{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">Category:</label>
                    <select name="category_id" id="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="0">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div>{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Price:</label>
                    <input type="text" name="price" id="price" value="{{ old('price') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter product price">
                    @error('price')
                        <div>{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="bg-gray-200 px-6 py-2 rounded">Create Product</button>
            </form>
        </div>


        <div class="bg-white shadow-md rounded px-8 p-6 mb-3">
            @include('partials.button')
        </div>
    </div>
@endsection
