<doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            @vite('resources/css/app.css')
            <title>@yield('title')</title>
        </head>
        <body>
            <nav class="flex items-center gap-4 p-4 bg-gray-800 text-white">
    <a href="/" class="font-bold text-xl text-blue-400">Websiteku</a>
    <a href="/" class="hover:text-blue-300">Home</a>
    <a href="/about" class="hover:text-blue-300">About</a>
    {{-- Menggunakan route name lebih disarankan di Laravel --}}
    <a href="{{ route('fines.index') }}" class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700 transition">
        Data Denda
    </a>
</nav>
            @yield('content')
        </body>
    </html>