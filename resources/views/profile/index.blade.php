@extends('layouts.landing')

@section('title', 'Profile')

@section('content')
    <section>
        <div class="w-full mt-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2 mt-10">
                <div class=" flex md:items-end md:justify-end justify-center mx-5">
                    <img class="lg:h-[30rem] lg:max-w-lg rounded-[1.5rem] mr-9 " src="{{url('pic/img.jpg')}}" alt="image description">
                </div>
                <div class="mx-5">
                    <h1 class="text-[2.3rem] font-medium font-dancingText mt-2 ">About me</h1>
                    <p class="text-[3rem] font-bold font-plusJakarta">{{ $nama }}</p>
                    <p class="text-[1rem] font-thin font-plusJakarta text-slate-500 text-justify">
                        Hello right now i'm {{ $umur }} years old, right now i live in {{ $tempat }} i've been here like 13 years. <br/>
                        I like to play {{ $hobi }} coz its my hobby actually.
                    </p>
                    <div class="grid grid-cols-2 grid-flow-row">
                        <div class="mockup-code mt-10 w-[2rem]">
                            <pre data-prefix="$"><code>npm i daisyui</code></pre> 
                            <pre data-prefix=">" class="text-warning"><code>installing...</code></pre> 
                            <pre data-prefix=">" class="text-success"><code>Done!</code></pre>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection