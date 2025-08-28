@extends('layouts.app')

@section('content')
    <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-10">
        
        <!-- Avatar -->
        <div class="flex-shrink-0 mb-6 md:mb-0 md:w-1/3 flex justify-center">
            <img src="{{ asset('assets/images/avatar.jpg') }}" 
                 alt="Avatar" 
                 class="w-40 h-40 md:w-56 md:h-56 rounded-full shadow-lg object-cover">
        </div>

        <!-- Intro text -->
        <div class="md:w-2/3 text-center md:text-left">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
                Hi, I'm <span class="text-blue-600">Dien Nguyen</span> 👋
            </h2>

            <p class="mt-4 text-base md:text-lg text-gray-600 leading-relaxed">
                I'm a web developer specializing in modern applications with 
                <span class="font-semibold">Laravel</span>, 
                <span class="font-semibold">Livewire</span>, and 
                <span class="font-semibold">Tailwind CSS</span>.
            </p>

            <!-- CTA Buttons -->
            <div class="mt-6 flex flex-col sm:flex-row sm:justify-center md:justify-start gap-4">
                <a href="/projects" 
                   class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                    🚀 View Projects
                </a>
                <a href="/contact" 
                   class="px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition">
                    ✉️ Contact Me
                </a>
                <a href="/cv.pdf" 
                   class="px-6 py-3 border border-gray-400 text-gray-700 rounded-lg hover:bg-gray-100 transition">
                    📄 Download CV
                </a>
            </div>
        </div>
    </div>
@endsection
