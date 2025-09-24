<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
@include('layouts.header')
<main class="container mx-auto mt-10 px-6 text-center">
    @yield('content')
</main>
<footer class="mt-10 py-6 bg-white text-center shadow-md">
    <p class="text-gray-600">&copy; 2025 Brand. All rights reserved.</p>
</footer>
</body>
</html>