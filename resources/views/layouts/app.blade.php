<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Crud Operation | Laravel')</title>

    @vite('resources/css/app.css')
</head>

<body>
    <header class="bg-red-500/20 p-2 text-center text-white">
        <h4 class="text-2xl">Crud Operation | Laravel</h4>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="p-2 bg-gray-200 mt-3 text-center">
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>
</body>

</html>