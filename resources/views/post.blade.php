@extends('layouts.app') 

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white shadow p-6 rounded">
    <h1 class="text-2xl font-bold mb-6">Post</h1>

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
<h1>All Blog Posts</h1>
@foreach($posts as $post)
    <div class="mb-4 p-4 bg-gray-100 rounded">
        <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
        <p class="text-gray-700"><small>{{ Str::limit($post->body, 100) }}</small></p>
        <div class="mt-2">
            
            <a href="{{ route('posts.edit', $post->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
            <form style="display:inline-block" action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Delete?')">
                @csrf
                @method('DELETE')
                <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1 dark:bg-red-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-red-800" type="submit">Delete</button>
            </form>
        </div>
    </div>
    
    
@endforeach
@endsection