<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-950 text-white">

    {{-- Navbar --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-black/50 backdrop-blur border-b border-white/10">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="font-bold text-xl tracking-wide">Anik</a>

            <div class="hidden md:flex gap-6 text-sm font-medium">
                <a href="#about" class="hover:text-indigo-400">About</a>
                <a href="#skills" class="hover:text-indigo-400">Skills</a>
                <a href="#projects" class="hover:text-indigo-400">Projects</a>
                <a href="#contact" class="hover:text-indigo-400">Contact</a>
            </div>
        </div>
    </nav>

    {{-- Page Content --}}
    <main class="pt-24">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="border-t border-white/10 mt-16">
        <div class="max-w-6xl mx-auto px-4 py-6 text-center text-sm text-gray-400">
            © {{ date('Y') }} Anik Kumar — Built with Laravel
        </div>
    </footer>
</body>
</html>
