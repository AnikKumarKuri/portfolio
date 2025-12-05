@extends('layouts.app')

@section('content')
<section class="relative min-h-screen text-white bg-[#05060f] overflow-hidden font-sans noise">

    {{-- Animated gradient background --}}
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(99,102,241,0.18),transparent_55%),radial-gradient(circle_at_bottom,rgba(236,72,153,0.16),transparent_55%)] animate-pulse"></div>

    {{-- Floating particles --}}
    <div class="pointer-events-none absolute inset-0 z-[2] overflow-hidden">
        @for($i=0; $i<24; $i++)
            <span
                class="absolute rounded-full bg-white/10 blur-[1px] animate-float"
                style="
                    width: {{ rand(6,14) }}px;
                    height: {{ rand(6,14) }}px;
                    top: {{ rand(0,100) }}%;
                    left: {{ rand(0,100) }}%;
                    animation-delay: {{ rand(0,10) }}s;
                    animation-duration: {{ rand(8,18) }}s;
                "
            ></span>
        @endfor
    </div>

    {{-- Glow blobs --}}
    <div class="pointer-events-none absolute -top-32 -left-32 w-[520px] h-[520px] bg-indigo-600/30 blur-[140px] rounded-full"></div>
    <div class="pointer-events-none absolute top-40 -right-40 w-[560px] h-[560px] bg-pink-500/30 blur-[160px] rounded-full"></div>
    <div class="pointer-events-none absolute bottom-0 left-1/2 -translate-x-1/2 w-[680px] h-[680px] bg-purple-500/20 blur-[180px] rounded-full"></div>

    <div id="home" class="relative z-[3] max-w-6xl mx-auto px-4 pt-16 pb-10">

        {{-- HERO --}}
        <div class="grid md:grid-cols-2 gap-14 items-center mt-6">
            {{-- Left --}}
            <div>
                <p class="text-indigo-300 text-sm mb-2 tracking-[0.25em] uppercase">
                    Hi, I’m
                </p>

                <h1 class="text-5xl md:text-6xl font-black leading-[1.05] tracking-tight">
                    {{ $profile->name ?? 'Anik Kumar' }}
                </h1>

                <h2 class="text-3xl md:text-4xl font-extrabold mt-3 bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent tracking-tight">
                    {{ $profile->title ?? 'Laravel Developer' }}
                </h2>

                <p class="text-gray-300 mt-5 max-w-lg leading-relaxed text-[1.05rem]">
                    {{ $profile->subtitle ?? 'I build fast, modern web apps with Laravel, MySQL, and clean UI.' }}
                </p>

                <div class="mt-8 flex gap-3 flex-wrap">
                    <a href="#projects" class="btn-primary">
                        View Projects
                    </a>

                    <a href="#contact" class="btn-secondary">
                        Contact Me
                    </a>
                </div>

                {{-- Socials --}}
                <div class="mt-6 flex gap-5 text-sm text-gray-400">
                    @if($profile?->github)
                        <a href="{{ $profile->github }}" target="_blank" class="hover:text-white transition">GitHub</a>
                    @endif
                    @if($profile?->linkedin)
                        <a href="{{ $profile->linkedin }}" target="_blank" class="hover:text-white transition">LinkedIn</a>
                    @endif
                    @if($profile?->facebook)
                        <a href="{{ $profile->facebook }}" target="_blank" class="hover:text-white transition">Facebook</a>
                    @endif
                    @if($profile?->twitter)
                        <a href="{{ $profile->twitter }}" target="_blank" class="hover:text-white transition">Twitter</a>
                    @endif
                </div>

                {{-- Quick chips --}}
                <div class="mt-8 flex flex-wrap gap-3">
                    <div class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-gray-200">
                        ✅ Full-Stack Laravel
                    </div>
                    <div class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-gray-200">
                        ⚡ REST APIs
                    </div>
                    <div class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-gray-200">
                        🎨 Clean UI
                    </div>
                </div>
            </div>

            {{-- Right --}}
            <div class="flex justify-center md:justify-end">
                <div class="relative w-64 h-64 md:w-80 md:h-80">
                    {{-- glowing ring --}}
                    <div class="absolute inset-0 rounded-full bg-gradient-to-tr from-indigo-500 to-pink-500 blur-2xl opacity-40 animate-pulse"></div>

                    <div class="relative rounded-full bg-gradient-to-tr from-indigo-500 to-pink-500 p-[3px] shadow-xl shadow-pink-500/30">
                        <img
                            src="{{ $profile?->profile_image ? asset('storage/'.$profile->profile_image) : asset('image/profile.jpg') }}"
                            alt="{{ $profile->name ?? 'Profile' }}"
                            class="w-full h-full rounded-full object-cover bg-gray-900"
                        >
                    </div>

                    {{-- floating badge --}}
                    <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 px-4 py-2 rounded-xl bg-black/60 border border-white/10 backdrop-blur-md text-sm shadow-lg">
                        Available for work 🚀
                    </div>
                </div>
            </div>
        </div>

        {{-- divider --}}
        <div class="my-20 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        {{-- ABOUT --}}
        <div id="about" class="grid md:grid-cols-3 gap-10 items-start">
            <div class="md:col-span-1">
                <h2 class="text-3xl font-bold tracking-tight">About Me</h2>
                <p class="text-gray-400 mt-2 text-sm">
                    A short intro about who you are
                </p>
            </div>

            <div class="md:col-span-2">
                <div class="p-7 md:p-9 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl leading-relaxed text-gray-200 text-[1.02rem]">
                    {{ $profile->about ?? "I'm a backend-focused Laravel developer who loves turning ideas into solid products. I work with Laravel, REST APIs, authentication systems, and responsive UI." }}
                </div>

                <div class="mt-6 grid sm:grid-cols-3 gap-4">
                    @if($profile?->email)
                        <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                            <p class="text-xs text-gray-400">Email</p>
                            <p class="font-semibold">{{ $profile->email }}</p>
                        </div>
                    @endif
                    @if($profile?->phone)
                        <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                            <p class="text-xs text-gray-400">Phone</p>
                            <p class="font-semibold">{{ $profile->phone }}</p>
                        </div>
                    @endif
                    @if($profile?->location)
                        <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                            <p class="text-xs text-gray-400">Location</p>
                            <p class="font-semibold">{{ $profile->location }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- divider --}}
        <div class="my-20 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        {{-- SKILLS --}}
        <div id="skills">
            <div class="flex items-end justify-between">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight">Skills</h2>
                    <p class="text-gray-400 text-sm mt-1">Tools I use to build products</p>
                </div>
            </div>

            @php
                $barGradients = [
                    'from-indigo-500 to-pink-500',
                    'from-emerald-400 to-teal-500',
                    'from-orange-400 to-rose-500',
                    'from-sky-400 to-indigo-500',
                    'from-yellow-400 to-orange-500',
                    'from-purple-400 to-fuchsia-500',
                ];
            @endphp

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @forelse($skills as $skill)
                    @php $g = $barGradients[$loop->index % count($barGradients)]; @endphp

                    <div class="group p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400/70 hover:bg-white/10 transition hover-lift">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold text-lg">{{ $skill->name }}</p>
                            @if($skill->level !== null)
                                <span class="text-xs text-gray-400">{{ $skill->level }}%</span>
                            @endif
                        </div>

                        @if($skill->level !== null)
                            <div class="mt-4 h-2 bg-white/10 rounded-full overflow-hidden relative">
                                <div class="h-full bg-gradient-to-r {{ $g }} transition-all duration-700"
                                     style="width: {{ $skill->level }}%"></div>

                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent
                                            translate-x-[-100%] group-hover:translate-x-[100%]
                                            transition-transform duration-1000"></div>
                            </div>
                        @endif

                        <p class="mt-3 text-sm text-gray-400 group-hover:text-gray-300 transition">
                            {{ $skill->level ? 'Proficiency based on real projects' : 'Constantly improving' }}
                        </p>
                    </div>
                @empty
                    <p class="text-gray-400">No skills added yet.</p>
                @endforelse
            </div>
        </div>

        {{-- divider --}}
        <div class="my-20 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        {{-- PROJECTS --}}
        <div id="projects">
            <div class="flex items-end justify-between">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight">Projects</h2>
                    <p class="text-gray-400 text-sm mt-1">Selected works I’m proud of</p>
                </div>
            </div>

            <div class="mt-9 grid md:grid-cols-2 lg:grid-cols-3 gap-7">
                @forelse($projects as $project)
                    <a href="{{ route('projects.show', $project->slug) }}"
                       class="group block rounded-2xl bg-white/5 border border-white/10 overflow-hidden hover-lift">

                        <div class="relative h-48 bg-gradient-to-r from-indigo-500 to-pink-500">
                            @if($project->image)
                                <img src="{{ asset('storage/'.$project->image) }}"
                                     class="w-full h-full object-cover opacity-90 group-hover:opacity-100 transition"
                                     alt="">
                            @endif
                            <div class="absolute inset-0 bg-black/25"></div>
                        </div>

                        <div class="p-6">
                            <h3 class="font-bold text-xl tracking-tight">{{ $project->title }}</h3>
                            <p class="text-gray-400 mt-2 leading-relaxed line-clamp-3">
                                {{ $project->description }}
                            </p>

                            <div class="mt-4 flex gap-3 text-sm">
                                @if($project->live_link)
                                    <span class="btn-ghost">Live Demo</span>
                                @endif
                                @if($project->github_link)
                                    <span class="btn-ghost">GitHub</span>
                                @endif
                            </div>

                            <p class="mt-5 text-indigo-300 text-sm font-semibold tracking-wide">
                                View Details →
                            </p>
                        </div>
                    </a>
                @empty
                    <p class="text-gray-400">No projects added yet.</p>
                @endforelse
            </div>
        </div>

        {{-- divider --}}
        <div class="my-20 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        {{-- CONTACT --}}
        <div id="contact" class="grid md:grid-cols-2 gap-10 items-start">
            <div>
                <h2 class="text-3xl font-bold tracking-tight mb-2">Let’s Talk</h2>
                <p class="text-gray-400 text-sm">
                    Have a project or idea? Send me a message and I’ll reply soon.
                </p>

                <div class="mt-6 space-y-3 text-sm text-gray-300">
                    @if($profile?->email) <p>📧 {{ $profile->email }}</p> @endif
                    @if($profile?->phone) <p>📞 {{ $profile->phone }}</p> @endif
                    @if($profile?->location) <p>📍 {{ $profile->location }}</p> @endif
                </div>
            </div>

            <div>
                @if(session('success'))
                    <div class="mb-4 p-3 rounded-xl bg-green-500/20 text-green-300 border border-green-500/30">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST"
                      class="p-7 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl space-y-4">
                    @csrf

                    <input type="text" name="name" placeholder="Your Name"
                           value="{{ old('name') }}"
                           class="input-soft">

                    <input type="email" name="email" placeholder="Your Email"
                           value="{{ old('email') }}"
                           class="input-soft">

                    <textarea rows="5" name="message" placeholder="Your Message"
                              class="input-soft">{{ old('message') }}</textarea>

                    <button type="submit" class="w-full btn-primary">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        {{-- FOOTER --}}
        <footer class="mt-20 pt-8 border-t border-white/10 text-gray-400 text-sm flex flex-col md:flex-row justify-between items-center gap-3">
            <p>© {{ date('Y') }} {{ $profile->name ?? 'Anik Kumar' }} — Built with Laravel</p>
            <p class="text-xs text-gray-500">Designed & developed by you ✨</p>
        </footer>

    </div>

    {{-- small css animations --}}
    <style>
        @keyframes float {
            0%   { transform: translateY(0) translateX(0); opacity:.25; }
            50%  { transform: translateY(-35px) translateX(15px); opacity:.6; }
            100% { transform: translateY(0) translateX(0); opacity:.25; }
        }
        .animate-float { animation: float linear infinite; }
    </style>

</section>
@endsection
