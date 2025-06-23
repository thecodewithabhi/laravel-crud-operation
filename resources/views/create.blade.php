@extends('layouts.app') 

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white shadow p-6 rounded">
    <h1 class="text-2xl font-bold mb-6">Create New Post</h1>

    {{-- Show Validation Errors --}}
    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        {{-- Title --}}
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}"
                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-indigo-500" required>
        </div>

        {{-- Content --}}
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
            <textarea id="content" name="body" rows="6"
                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-indigo-500" required>{{ old('content') }}</textarea>
        </div>

        {{-- Submit --}}
        <div>
            <button type="submit"
                class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700 transition">Create</button>
            <a href="{{ route('posts.index') }}" class="ml-4 text-gray-600 hover:text-gray-800">Cancel</a>
        </div>
    </form>
</div>
@endsection