@extends('layouts.app')

@section('content')
<section class="relative min-h-screen text-white bg-[#05060f] overflow-hidden">

    <!-- Background glow blobs -->
    <div class="pointer-events-none absolute -top-32 -left-32 w-[520px] h-[520px] bg-indigo-600/30 blur-[140px] rounded-full"></div>
    <div class="pointer-events-none absolute top-40 -right-40 w-[560px] h-[560px] bg-pink-500/30 blur-[160px] rounded-full"></div>
    <div class="pointer-events-none absolute bottom-0 left-1/2 -translate-x-1/2 w-[680px] h-[680px] bg-purple-500/20 blur-[180px] rounded-full"></div>

 

    <div id="home" class="max-w-6xl mx-auto px-4 pt-16 pb-10">

        <!-- HERO -->
        <div class="grid md:grid-cols-2 gap-12 items-center mt-6">
            <!-- Left -->
            <div>
                <p class="text-indigo-300 text-sm mb-2 tracking-widest uppercase">
                    Hi, I’m
                </p>

                <h1 class="text-5xl md:text-6xl font-black leading-tight">
                    {{ $profile->name ?? 'Anik Kumar' }}
                </h1>

                <h2 class="text-3xl md:text-4xl font-extrabold mt-2 bg-gradient-to-r from-indigo-400 to-pink-400 bg-clip-text text-transparent">
                    {{ $profile->title ?? 'Laravel Developer' }}
                </h2>

                <p class="text-gray-300 mt-4 max-w-lg leading-relaxed">
                    {{ $profile->subtitle ?? 'I build fast, modern web apps with Laravel, MySQL, and clean UI.' }}
                </p>

                <div class="mt-7 flex gap-3 flex-wrap">
                    <a href="#projects"
                       class="px-7 py-3 rounded-xl bg-indigo-500 hover:bg-indigo-600 shadow-lg shadow-indigo-500/30 font-semibold transition">
                        View Projects
                    </a>

                    <a href="#contact"
                       class="px-7 py-3 rounded-xl border border-white/20 bg-white/5 hover:bg-white/10 hover:border-indigo-400 font-semibold transition">
                        Contact Me
                    </a>
                </div>

                <!-- Socials -->
                <div class="mt-5 flex gap-4 text-sm text-gray-400">
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

                <!-- Quick stats chips -->
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

            <!-- Right -->
            <div class="flex justify-center md:justify-end">
                <div class="relative w-64 h-64 md:w-80 md:h-80">
                    <!-- glowing ring -->
                    <div class="absolute inset-0 rounded-full bg-gradient-to-tr from-indigo-500 to-pink-500 blur-2xl opacity-40"></div>

                    <div class="relative rounded-full bg-gradient-to-tr from-indigo-500 to-pink-500 p-[3px] shadow-xl shadow-pink-500/20">
                        <img src="{{ $profile?->profile_image ? asset('storage/'.$profile->profile_image) : asset('image/profile.jpg') }}"
     alt="{{ $profile->name ?? 'Profile' }}"
     class="w-full h-full rounded-full object-cover bg-gray-900">

                    </div>

                    <!-- floating badge -->
                    <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 px-4 py-2 rounded-xl bg-black/60 border border-white/10 backdrop-blur-md text-sm">
                        Available for work 🚀
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION DIVIDER -->
        <div class="my-20 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        <!-- ABOUT -->
        <div id="about" class="grid md:grid-cols-3 gap-10 items-start">
            <div class="md:col-span-1">
                <h2 class="text-3xl font-bold">About Me</h2>
                <p class="text-gray-400 mt-2 text-sm">
                    A short intro about who you are
                </p>
            </div>

            <div class="md:col-span-2">
                <div class="p-6 md:p-8 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl leading-relaxed text-gray-200">
                    {{ $profile->about ?? "I'm a backend-focused Laravel developer who loves turning ideas into solid products. I work with Laravel, REST APIs, authentication systems, and responsive UI." }}
                </div>

                <!-- info row -->
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

        <!-- SECTION DIVIDER -->
        <div class="my-20 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        <!-- SKILLS -->
       <!-- SKILLS -->
<div id="skills">
    <div class="flex items-end justify-between">
        <div>
            <h2 class="text-3xl font-bold">Skills</h2>
            <p class="text-gray-400 text-sm mt-1">Tools I use to build products</p>
        </div>
    </div>

    @php
        // Different gradient styles for bars
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
            @php
                $g = $barGradients[$loop->index % count($barGradients)];
            @endphp

            <div class="group p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400/70 hover:bg-white/10 transition">
                
                <div class="flex justify-between items-center">
                    <p class="font-semibold text-lg">{{ $skill->name }}</p>
                    @if($skill->level !== null)
                        <span class="text-xs text-gray-400">{{ $skill->level }}%</span>
                    @endif
                </div>

                @if($skill->level !== null)
                    <!-- bar background -->
                    <div class="mt-4 h-2 bg-white/10 rounded-full overflow-hidden relative">
                        
                        <!-- progress fill -->
                        <div class="h-full bg-gradient-to-r {{ $g }} transition-all duration-700"
                             style="width: {{ $skill->level }}%"></div>

                        <!-- animated shine layer -->
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

        <!-- SECTION DIVIDER -->
        <div class="my-20 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        <!-- PROJECTS -->
        <div id="projects">
            <div class="flex items-end justify-between">
                <div>
                    <h2 class="text-3xl font-bold">Projects</h2>
                    <p class="text-gray-400 text-sm mt-1">Selected works I’m proud of</p>
                </div>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($projects as $project)
                    <div class="group rounded-2xl bg-white/5 border border-white/10 overflow-hidden hover:border-indigo-400/70 hover:-translate-y-1 transition duration-300">
                        
                        <!-- image/top -->
                        <div class="relative h-44 bg-gradient-to-r from-indigo-500 to-pink-500">
                            @if($project->image)
                                <img src="{{ asset('storage/'.$project->image) }}"
                                     class="w-full h-full object-cover opacity-90 group-hover:opacity-100 transition" alt="">
                            @endif

                            <div class="absolute inset-0 bg-black/20"></div>
                        </div>

                        <!-- body -->
                        <div class="p-5">
                            <h3 class="font-bold text-xl">{{ $project->title }}</h3>
                            <p class="text-gray-400 mt-2 line-clamp-3">
                                {{ $project->description }}
                            </p>

                            <div class="mt-4 flex gap-3 text-sm">
                                @if($project->live_link)
                                    <a target="_blank"
                                       class="px-3 py-2 rounded-lg bg-white/5 border border-white/10 hover:border-pink-400 hover:bg-white/10 transition"
                                       href="{{ $project->live_link }}">
                                        Live Demo
                                    </a>
                                @endif
                                @if($project->github_link)
                                    <a target="_blank"
                                       class="px-3 py-2 rounded-lg bg-white/5 border border-white/10 hover:border-indigo-400 hover:bg-white/10 transition"
                                       href="{{ $project->github_link }}">
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

        <!-- SECTION DIVIDER -->
        <div class="my-20 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        <!-- CONTACT -->
        <div id="contact" class="grid md:grid-cols-2 gap-10 items-start">
            <div>
                <h2 class="text-3xl font-bold mb-2">Let’s Talk</h2>
                <p class="text-gray-400 text-sm">
                    Have a project or idea? Send me a message and I’ll reply soon.
                </p>

                <div class="mt-6 space-y-3 text-sm text-gray-300">
                    @if($profile?->email)
                        <p>📧 {{ $profile->email }}</p>
                    @endif
                    @if($profile?->phone)
                        <p>📞 {{ $profile->phone }}</p>
                    @endif
                    @if($profile?->location)
                        <p>📍 {{ $profile->location }}</p>
                    @endif
                </div>
            </div>

            <div>
                @if(session('success'))
                    <div class="mb-4 p-3 rounded-xl bg-green-500/20 text-green-300 border border-green-500/30">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST"
                      class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-xl space-y-4">
                    @csrf

                    <input type="text" name="name" placeholder="Your Name"
                           value="{{ old('name') }}"
                           class="w-full p-3 rounded-lg bg-black/40 border border-white/10 focus:border-indigo-400 focus:ring-0 outline-none">

                    <input type="email" name="email" placeholder="Your Email"
                           value="{{ old('email') }}"
                           class="w-full p-3 rounded-lg bg-black/40 border border-white/10 focus:border-indigo-400 focus:ring-0 outline-none">

                    <textarea rows="5" name="message" placeholder="Your Message"
                              class="w-full p-3 rounded-lg bg-black/40 border border-white/10 focus:border-indigo-400 focus:ring-0 outline-none">{{ old('message') }}</textarea>

                    <button type="submit"
                            class="w-full px-6 py-3 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg font-semibold hover:opacity-90 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="mt-20 pt-8 border-t border-white/10 text-gray-400 text-sm flex flex-col md:flex-row justify-between items-center gap-3">
            <p>© {{ date('Y') }} {{ $profile->name ?? 'Anik Kumar' }} — Built with Laravel</p>
            <p class="text-xs text-gray-500">Designed & developed by you ✨</p>
        </footer>

    </div>
</section>
@endsection
