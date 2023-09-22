@extends('layouts.landing')

@section('title', 'Dashboard')

@section('content')
    <div class="w-full my-6">
        
        <div class="mx-5">
            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h1 class="font-bold text-2xl text-center text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">My Personal Branding</h1>
                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-8">
                    <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full h-96 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="{{ URL('pic/img-2.jpeg')}}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                        <h3 class="text-md text-slate-800">
                            <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Programming
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">I </p>
                        </div>
                    </div>
                    </div>
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full h-96 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="{{ URL('pic/img-3.jpeg')}}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-md text-slate-800">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Editor
                            </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

