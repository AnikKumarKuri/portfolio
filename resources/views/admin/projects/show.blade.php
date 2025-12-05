@extends('layouts.app')
@section('title',$project->title)

@section('content')
<section class="relative text-white bg-[#05060f] min-h-screen overflow-hidden">

    <!-- glows -->
    <div class="pointer-events-none absolute -top-32 -left-32 w-[520px] h-[520px] bg-indigo-600/30 blur-[140px] rounded-full"></div>
    <div class="pointer-events-none absolute top-40 -right-40 w-[560px] h-[560px] bg-pink-500/30 blur-[160px] rounded-full"></div>

    <div class="max-w-5xl mx-auto px-4 py-12">

        <!-- Back Button -->
        <a href="{{ url('/#projects') }}"
           class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition mb-6">
            ← Back to projects
        </a>

        <!-- Project Card -->
        <div class="rounded-3xl bg-white/5 border border-white/10 overflow-hidden shadow-2xl">

            <!-- Image -->
            <div class="relative h-[280px] md:h-[380px] bg-gradient-to-r from-indigo-500 to-pink-500">
                @if($project->image)
                    <img src="{{ asset('storage/'.$project->image) }}"
                         class="w-full h-full object-cover opacity-95" alt="">
                @endif
                <div class="absolute inset-0 bg-black/30"></div>

                <!-- floating title -->
                <div class="absolute bottom-6 left-6 right-6">
                    <h1 class="text-3xl md:text-5xl font-black drop-shadow">
                        {{ $project->title }}
                    </h1>
                </div>
            </div>

            <!-- Body -->
            <div class="p-6 md:p-10">
                <p class="text-gray-200 leading-relaxed text-lg">
                    {{ $project->description }}
                </p>

                <!-- Tags (optional if you add tech later) -->
                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full text-xs bg-white/5 border border-white/10">Laravel</span>
                    <span class="px-3 py-1 rounded-full text-xs bg-white/5 border border-white/10">MySQL</span>
                    <span class="px-3 py-1 rounded-full text-xs bg-white/5 border border-white/10">TailwindCSS</span>
                </div>

                <!-- Links -->
                <div class="mt-8 flex flex-wrap gap-3">
                    @if($project->live_link)
                        <a target="_blank"
                           class="px-6 py-3 rounded-xl bg-indigo-500 hover:bg-indigo-600 shadow-lg shadow-indigo-500/30 font-semibold transition"
                           href="{{ $project->live_link }}">
                            Live Demo 🚀
                        </a>
                    @endif

                    @if($project->github_link)
                        <a target="_blank"
                           class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 hover:border-indigo-400 hover:bg-white/10 font-semibold transition"
                           href="{{ $project->github_link }}">
                            GitHub Code
                        </a>
                    @endif
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
