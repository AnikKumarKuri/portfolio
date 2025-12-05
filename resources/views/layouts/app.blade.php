<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Portfolio')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-[#05060f] text-white">

    <!-- MAIN NAV -->
    <header class="sticky top-0 z-50 backdrop-blur-xl bg-black/30 border-b border-white/5">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="font-bold text-lg tracking-wide">
                {{ $profile->name ?? 'Portfolio' }}
            </a>

            <!-- Links -->
            <nav class="hidden md:flex gap-6 text-sm text-gray-300">
                <a href="#about" class="hover:text-white transition">About</a>
                <a href="#skills" class="hover:text-white transition">Skills</a>
                <a href="#projects" class="hover:text-white transition">Projects</a>
                <a href="#contact" class="hover:text-white transition">Contact</a>
            </nav>

            <!-- Auth Buttons -->
            <div class="flex items-center gap-3 text-sm">

                @auth
                    <a href="{{ route('admin.projects.index') }}"
                       class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 hover:border-indigo-400 hover:bg-white/10 transition font-semibold">
                        Admin Panel
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="px-4 py-2 rounded-lg bg-red-500/20 text-red-300 border border-red-500/30 hover:bg-red-500/30 transition font-semibold">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="px-4 py-2 rounded-lg bg-indigo-500 hover:bg-indigo-600 transition font-semibold">
                        Login
                    </a>
                @endauth

            </div>
        </div>
    </header>


    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

</body>
</html>
