<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Abhishek Shakya | Laravel Workspace')</title>
    
    {{-- Tailwind CSS CDN (you can replace this with compiled assets) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Add your CSS/JS links here if you're using Laravel Mix or Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    {{-- Navbar --}}
    <nav class="bg-white shadow mb-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ url('/') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Abhishek Shakya | Laravel | CRUD OPERATION</a>
                <div>
                    <a href="{{ route('posts.index') }}" class="text-gray-600 hover:text-indigo-600 mr-4">Posts</a>
                    <a href="{{ route('posts.create') }}" class="text-gray-600 hover:text-indigo-600 mr-4">Create</a>
                    
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="mt-16 py-6 border-t text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} My Laravel Blog. All rights reserved.
    </footer>

</body>
</html>