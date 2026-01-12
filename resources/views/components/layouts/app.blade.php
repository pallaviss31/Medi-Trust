<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .category-card:hover img { transform: scale(1.1); }
    </style>
     @livewireStyles
</head>
<body class="bg-gray-100">

    {{-- <!-- Navbar -->
    <nav class="bg-indigo-600 text-white px-6 py-4 flex justify-between">
        <h1 class="text-xl font-bold">PharmaStore</h1>

        <div class="space-x-4">
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">Cart</a>
            <a href="#" class="hover:underline">Orders</a>
        </div>
    </nav>
        <!-- Sidebar -->
        <div class="w-full bg-white shadow-md h-10 fixed top-0 left-0 mt-14">
            <ul class="flex space-x-6 justify-center">
                <li class="px-3 py-2 hover:bg-gray-200"><a href="#" class="block">Dashboard</a></li>
                <li class="px-3 py-2 hover:bg-gray-200"><a href="#" class="block">Products</a></li>
                <li class="px-3 py-2 hover:bg-gray-200"><a href="#" class="block">Categories</a></li>
                <li class="px-3 py-2 hover:bg-gray-200"><a href="#" class="block">Orders</a></li>
                <li class="px-3 py-2 hover:bg-gray-200"><a href="#" class="block">Users</a></li>
            </ul>
        </div> --}}

    <!-- Page Content -->
    <main class="p-6">
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
