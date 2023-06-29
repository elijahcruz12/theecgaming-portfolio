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
                <li><a href="{{ route('home') }}" class="btn btn-neutral w-full btn-lg">Portfolio</a></li>
                <li><a href="https://twitter.com/theecgaming1" class="btn bg-blue-600 hover:bg-blue-700 text-white w-full btn-lg">Twitter</a></li>
                <li><a href="https://patreon.com/theecgaming" class="btn bg-orange-600 hover:bg-orange-700 text-white w-full btn-lg">Patreon</a></li>
                <li><a href="https://open.spotify.com/artist/0fJS52M3av9GOYaXHeQgSs?si=ByvymzfKTHun-_CfE6vRvg" class="btn bg-green-500 hover:bg-green-600 text-white w-full btn-lg">Spotify</a></li>
                <li><a href="https://soundcloud.com/theecgaming" class="btn bg-orange-600 hover:bg-orange-700 text-white w-full btn-lg">Soundcloud</a></li>
                <li><a href="https://music.apple.com/us/artist/theecgaming/1661283220" class="btn bg-red-600 hover:bg-red-700 text-white w-full btn-lg">Apple Music</a></li>
                <li><a href="mailto:theecgamingbusiness@gmail.com" class="btn btn-secondary w-full btn-lg">Business Email</a></li>
                <li><a href="https://youtube.com/@theecgaming1" class="btn bg-red-600 hover:bg-red-700 text-white w-full btn-lg">Youtube</a></li>
                <li><a href="https://www.tiktok.com/@theecgaming" class="btn bg-teal-400 hover:bg-teal-500 text-white w-full btn-lg">TikTok</a></li>
                <li><a href="https://twitch.tv/theecgaming" class="btn btn-primary w-full btn-lg">Twitch</a></li>
                <li><a href="https://github.com/elijahcruz12" class="btn w-full btn-lg">Github</a></li>
            </ul>
        </div>
    </div>

@endsection
