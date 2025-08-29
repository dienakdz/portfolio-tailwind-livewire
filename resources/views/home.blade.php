@extends('layouts.app')

@section('content')
    <section class="flex flex-col md:flex-row items-center justify-between min-h-screen container-custom">
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-[#42446E] font-bold text-6xl dark:text-[#D9D9D9]">Hi 👋, <br> My name is <br> <span
                    class="linear-right">Nguyen Minh Dien</span> <br> I build things for web</h1>
        </div>
        <div class="md:w-1/2 flex justify-center md:justify-end mt-6 md:mt-0">
            <div class="rounded-full p-[6px] bg-gradient-to-b from-[#00C0FD] to-[#E70FAA] inline-block">
                <img src="{{ asset('assets/images/avatar.jpg') }}" alt="" class="rounded-full w-xs h-xs ">
            </div>
        </div>
    </section>
    <section class="container-custom text-center">
        <div>
            <p class="text-[#42446E] font-bold dark:darkText text-[48px]">My Tech Stack</p>
            <p class="lightContent text-[32px] dark:darkContent font-normal"> Technologies I’ve been working with recently
            </p>
        </div>
        <div class="grid grid-cols-6 gap-x-[100px] gap-y-[80px] mt-[140px] mb-[200px]">
            <img src="{{ asset('assets/images/logo-html.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-css.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-js.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-jquery.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-react.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-tailwind.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-boostrap.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-php.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-laravel.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-vscode.svg') }}" alt="" class="w-[120px] h-[120px]">
            <img src="{{ asset('assets/images/logo-github.svg') }}" alt=""
                class="rounded-full w-[120px] h-[120px] bg-black dark:bg-transparent">
            <img src="{{ asset('assets/images/git-icon.svg') }}" alt="" class="w-[120px] h-[120px]">
        </div>
    </section>
    <section class="container-custom">
        <div class="text-center">
            <p class="text-[#42446E] font-bold dark:darkText text-[48px]">Projects</p>
            <p class="lightContent text-[32px] dark:darkContent font-normal">Things I’ve built so far</p>
        </div>
        <div class="grid grid-cols-3 gap-x-[48px] gap-y-[65px] mt-[100px] mb-[200px]">
            @foreach ($projects as $project)
                <div class="rounded-4xl flex flex-col overflow-hidden shadow-lg dark:shadow-none">
                    <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}">

                    <div class="flex flex-col p-[25px] bg-white dark:bg-projects flex-1">
                        <p class="text-black font-medium text-[28px] dark:darkText flex-1">{{ $project->title }}</p>
                        <p class="lightContent font-light text-lg mt-[20px] mb-[20px] dark:darkText flex-1">
                            {{ $project->short_desc }}</p>
                        <p class="lightContent text-sm mb-[20px] dark:darkText">Tech stack :
                            {{ is_array($project->tech_stack) ? implode(', ', $project->tech_stack) : $project->tech_stack }}
                        </p>

                        <div class="flex items-center justify-between w-full">
                            <div class="flex gap-2">
                                <img src="{{ asset('assets/images/icons-link.png') }}"
                                    class="w-[20px] h-[20px] bg-black dark:bg-none" alt="">
                                <a href="{{ $project->link_demo ?? '#' }}" class="text-base underline dark:text-white">Link
                                    Preview</a>
                            </div>
                            <div class="flex gap-2">
                                <img src="{{ asset('assets/images/logo-github.svg') }}"
                                    class="w-[20px] h-[20px] bg-black dark:bg-none" alt="">
                                <a href="{{ $project->link_github ?? '#' }}"
                                    class="text-base underline dark:text-white">View Code</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
