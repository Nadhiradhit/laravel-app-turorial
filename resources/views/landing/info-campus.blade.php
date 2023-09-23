@extends('layouts.landing')

@section('title', 'Campus')

@section('content')
    <section>
        <div class="hero min-h-screen bg-base-200">
            <div class="hero-content flex-col lg:flex-row">
                <x-slider/>
              <div>
                <h1 class="text-5xl font-bold">Politeknik Negeri Media Kreatif</h1>
                <p class="py-6">
                    This is my campus and i'm in major technology of multimedia, and my campuss is locate on south jakarta.
                </p>
                <button class="btn btn-primary">
                    <a href="https://polimedia.ac.id/">See Profile!</a>
                </button>
              </div>
            </div>
        </div>
    </section>
@endsection