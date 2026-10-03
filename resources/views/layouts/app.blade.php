<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RidosaurusApp - LaravelSetup')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex gap-6 font-semibold">
            <a href="{{ url('/about') }}" class="hover:text-blue-200">About</a>
            <a href="{{ url('/contact') }}" class="hover:text-blue-200">Contact</a>
        </div>
    </nav>

    <main class="container mx-auto p-6 mt-4">
        @yield('content')
    </main>
</body>
</html>