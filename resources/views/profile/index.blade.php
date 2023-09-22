@extends('layouts.landing')

@section('title', 'Profile')

@section('content')
    <div class="w-full mt-24">
        <h1 class="text-center text-[3rem] font-bold">About Me</h1>
        <div class="grid grid-cols-2 gap-x-2 mt-5">
            <div class="mx-5">
                
            </div>
            <div class="">
                <img class="h-auto max-w-lg ml-auto mr-32" src="{{url('pic/img.jpg')}}" alt="image description">
            </div>
        </div>
    </div>
@endsection