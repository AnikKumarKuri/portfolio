@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- HERO --}}
<section class="max-w-6xl mx-auto px-4 py-20 flex flex-col md:flex-row items-center gap-10">
    <div class="flex-1">
        <p class="text-indigo-400 font-semibold mb-3">Hi, I’m</p>
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
            Anik Kumar <br>
            <span class="text-indigo-400">Laravel Developer</span>
        </h1>
        <p class="text-gray-400 mt-6 text-lg">
            I build fast, modern web apps with Laravel, MySQL, and clean UI.
        </p>

        <div class="mt-8 flex gap-4">
            <a href="#projects" class="px-6 py-3 bg-indigo-500 hover:bg-indigo-600 rounded-xl font-semibold">
                View Projects
            </a>
            <a href="#contact" class="px-6 py-3 border border-white/20 hover:border-indigo-400 rounded-xl font-semibold">
                Contact Me
            </a>
        </div>
    </div>

   <div class="flex-1 flex justify-center">
    <div class="w-64 h-64 md:w-80 md:h-80 rounded-full bg-gradient-to-tr from-indigo-500 to-pink-500 p-1">
        <img 
            src="{{ asset('image/profile.jpg') }}" 
            alt="Anik Kumar"
            class="w-full h-full rounded-full object-cover bg-gray-900"
        >
    </div>
</div>

</section>

{{-- ABOUT --}}
<section id="about" class="max-w-6xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold mb-6">About Me</h2>
    <p class="text-gray-400 leading-relaxed text-lg">
        I’m a backend-focused Laravel developer who loves turning ideas into solid products.
        I work with Laravel, REST APIs, authentication systems, and responsive UI.
    </p>
</section>

{{-- SKILLS --}}
<section id="skills" class="max-w-6xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold mb-8">Skills</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach (['Laravel','PHP','MySQL','Tailwind','JavaScript','Git','API Dev','Vue/React'] as $skill)
            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400 transition">
                <p class="font-semibold">{{ $skill }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- PROJECTS --}}
<section id="projects" class="max-w-6xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold mb-8">Projects</h2>

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

</section>

{{-- CONTACT --}}
<section id="contact" class="max-w-6xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold mb-6">Contact Me</h2>

    <form class="max-w-xl space-y-4" method="POST" action="#">
        @csrf
        <input class="w-full p-3 rounded-xl bg-white/5 border border-white/10"
               type="text" name="name" placeholder="Your Name">

        <input class="w-full p-3 rounded-xl bg-white/5 border border-white/10"
               type="email" name="email" placeholder="Your Email">

        <textarea class="w-full p-3 rounded-xl bg-white/5 border border-white/10"
                  name="message" rows="5" placeholder="Your Message"></textarea>

        <button class="px-6 py-3 bg-indigo-500 hover:bg-indigo-600 rounded-xl font-semibold">
            Send Message
        </button>
    </form>
</section>

@endsection
