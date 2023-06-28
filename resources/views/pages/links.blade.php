@extends('layouts.home')

@section('title', 'Home')

@section('content')

    <div class="min-h-screen bg-base-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <h1 class="text-center text-4xl text-gray-100 lg:text-5xl font-bold py-12 lg:py-24">
                TheECGaming's Links
            </h1>
        </div>

        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <ul class="flex flex-col gap-4 lg:gap-8">
                <li><a href="#!" class="btn btn-primary w-full btn-lg">Twitch</a></li>
                <li><a href="#!" class="btn bg-red-600 hover:bg-red-700 text-white w-full btn-lg">Youtube</a></li>
                <li><a href="#!" class="btn btn-secondary w-full btn-lg">Business Email</a></li>
                <li><a href="#!" class="btn bg-teal-400 hover:bg-teal-500 text-white w-full btn-lg">TikTok</a></li>
                <li><a href="#!" class="btn bg-orange-600 hover:bg-orange-700 text-white w-full btn-lg">Soundcloud</a></li>
                <li><a href="#!" class="btn bg-green-500 hover:bg-green-600 text-white w-full btn-lg">Spotify</a></li>
            </ul>
        </div>
    </div>

@endsection
