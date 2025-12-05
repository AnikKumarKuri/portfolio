@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-[#05060f] text-white">
    <!-- Navbar spacing -->
    <div class="max-w-6xl mx-auto px-4 pt-16 pb-10">

        <!-- HERO -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <!-- Left -->
            <div>
                <p class="text-sm text-indigo-300 mb-2">Hi, I'm</p>

                <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                    Anik Kumar <br>
                    <span class="text-indigo-400">Laravel Developer</span>
                </h1>

                <p class="text-gray-300 mt-4 max-w-lg">
                    I build fast, modern web apps with Laravel, MySQL, and clean UI.
                </p>

                <div class="mt-6 flex gap-3">
                    <a href="#projects"
                       class="px-6 py-3 rounded-xl bg-indigo-500 hover:bg-indigo-600 font-semibold transition">
                        View Projects
                    </a>

                    <a href="#contact"
                       class="px-6 py-3 rounded-xl border border-white/20 hover:border-indigo-400 font-semibold transition">
                        Contact Me
                    </a>
                </div>
            </div>

            <!-- Right (Profile Image Circle) -->
            <div class="flex justify-center md:justify-end">
                <div class="w-64 h-64 md:w-80 md:h-80 rounded-full bg-gradient-to-tr from-indigo-500 to-pink-500 p-1">
                    <img src="{{ asset('image/profile.jpg') }}"
                         alt="Anik Kumar"
                         class="w-full h-full rounded-full object-cover bg-gray-900">
                </div>
            </div>
        </div>

        <!-- ABOUT -->
        <div id="about" class="mt-20">
            <h2 class="text-3xl font-bold mb-4">About Me</h2>
            <p class="text-gray-300 leading-relaxed max-w-3xl">
                I'm a backend-focused Laravel developer who loves turning ideas into solid products.
                I work with Laravel, REST APIs, authentication systems, and responsive UI.
            </p>
        </div>

        <!-- SKILLS -->
        <div id="skills" class="mt-20">
            <h2 class="text-3xl font-bold mb-6">Skills</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @forelse($skills as $skill)
                    <div class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400 transition">
                        <p class="font-semibold">{{ $skill->name }}</p>

                        @if($skill->level !== null)
                            <div class="mt-3 h-2 bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full bg-indigo-500" style="width: {{ $skill->level }}%"></div>
                            </div>
                        @endif
                    </div>
                @empty
                    <p class="text-gray-400">No skills added yet.</p>
                @endforelse
            </div>
        </div>

        <!-- PROJECTS -->
        <div id="projects" class="mt-20">
            <h2 class="text-3xl font-bold mb-6">Projects</h2>

            <div class="grid md:grid-cols-3 gap-6">
                @forelse($projects as $project)
                    <div class="rounded-2xl bg-white/5 border border-white/10 overflow-hidden hover:scale-[1.02] transition">
                        <div class="h-40 bg-gradient-to-r from-indigo-500 to-pink-500">
                            @if($project->image)
                                <img src="{{ asset('storage/'.$project->image) }}"
                                     class="w-full h-full object-cover" alt="">
                            @endif
                        </div>

                        <div class="p-5">
                            <h3 class="font-bold text-xl">{{ $project->title }}</h3>
                            <p class="text-gray-400 mt-2 line-clamp-3">
                                {{ $project->description }}
                            </p>

                            <div class="mt-4 flex gap-3 text-sm">
                                @if($project->live_link)
                                    <a target="_blank" class="text-indigo-400 hover:underline" href="{{ $project->live_link }}">
                                        Live Demo
                                    </a>
                                @endif
                                @if($project->github_link)
                                    <a target="_blank" class="text-indigo-400 hover:underline" href="{{ $project->github_link }}">
                                        GitHub
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-400">No projects added yet.</p>
                @endforelse
            </div>
        </div>

        <!-- CONTACT -->
        <div id="contact" class="mt-20">
            <h2 class="text-3xl font-bold mb-6">Contact Me</h2>

            <form class="max-w-2xl space-y-4">
                <input type="text" placeholder="Your Name"
                       class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
                <input type="email" placeholder="Your Email"
                       class="w-full p-3 rounded-lg bg-white/5 border border-white/10">
                <textarea rows="5" placeholder="Your Message"
                          class="w-full p-3 rounded-lg bg-white/5 border border-white/10"></textarea>

                <button type="submit"
                        class="px-6 py-3 bg-indigo-500 rounded-lg hover:bg-indigo-600 font-semibold">
                    Send Message
                </button>
            </form>
        </div>

        <!-- FOOTER -->
        <footer class="mt-20 pt-10 border-t border-white/10 text-gray-400 text-sm">
            © {{ date('Y') }} Anik Kumar — Built with Laravel
        </footer>

    </div>
</section>
@endsection
