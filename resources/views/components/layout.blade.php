<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Musify' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark text-white">
    <x-navbar />
    
    <main class="container mx-auto px-4 py-6">
        {{ $slot }}
    </main>
    
    <x-footer />
</body>
</html>
