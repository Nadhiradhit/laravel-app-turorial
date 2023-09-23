@extends('layouts.landing')

@section('title', 'Dashboard')

@section('content')
    <section id="dash">
        <div class="w-full h-[20rem] mt-6">
            <div class="mx-20">
                <div class="mx-auto max-w-2xl px-4 py-10 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:gap-x-8">
                        <div class="group relative">
                            <h1 class="z-20 text-[2.5rem] lg:text-[3rem] font-bold uppercase text-transparent text-center sm:text-center lg:text-left bg-clip-text bg-gradient-to-r from-blue-500 to-green-400 mx-5 my-6"> {{ $welcomeMessage }} </h1>
                        </div>
                        <div class="group relative">
                        <article class="prose border rounded-md px-3 py-3 my-4 sm:mx-10">
                            <h1>My Article</h1>
                            <p>
                                For years parents have espoused the health benefits of eating garlic bread with cheese to their
                                children, with the food earning such an iconic status in our culture that kids will often dress
                                up as warm, cheesy loaf for Halloween.
                            </p>
                            <x-button href="url('https://www.youtube.com/@nadhiradhit');"> </x-button>
                        </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="personal-brand">
        <div class="w-full my-6">
            <div class="mx-5">
                <div class="">
                    <div class="mx-auto max-w-2xl px-4 py-[22rem] sm:px-6 sm:py-[16rem] lg:py-24 lg:max-w-7xl lg:px-8">
                    <h1 class="font-bold text-2xl text-center">My Personal Branding</h1>
                    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-8">
                        <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full h-96 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="{{ URL('pic/img-2.jpeg')}}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                            <h3 class="text-md">
                                <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Programming
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">I like to be a fullstack developer </p>
                            </div>
                        </div>
                        </div>
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full h-96 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="{{ URL('pic/img-3.jpeg')}}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-md">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Editor
                                </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">I can do some editing video for my personal use or maybe comercial use</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

