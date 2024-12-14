@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-3">Edit Category</h1>
        <div class="bg-white shadow-md rounded px-8 p-6 mb-2">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="categoryName">Category Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" placeholder="Enter category name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('name')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="bg-gray-200 px-6 py-2 rounded">Update Category</button>
            </form>
        </div>
        <div class="bg-white shadow-md rounded px-8 p-6 mb-3">
            @include('partials.button')
        </div>
    </div>
@endsection