@extends('layouts.app')

@section('content')
    {{-- <h3> profile page for {{ $user->name }} </h3>

    <hr>
     --}}
    <header class="mb-6 relative">
        <img class="mb-2" src="https://picsum.photos/700/223?grayscale" alt="">
        <div class="flex justify-between items-center mb-10">
            <div>
               <h2 class="font-bold text-2xl mb-0"> {{  $user->name }}  </h2>
               <p class="text-sm">Joined {{ $user->created_at->diffForHumans()}}</p>
            </div>
            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-lg sjadow py-2 px-2 text-white">Follow Me</a>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, possimus! Esse eum consequatur repudiandae eos iste fugiat veritatis provident laudantium nesciunt ratione reiciendis, ullam et harum molestiae sequi, vitae nulla?</p>

        <img
            src="https://picsum.photos/id/{{ $user->id }}/200"
            alt=""
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top:138px"
        >

    </header>
    @include('_timeline' , [
        'tweets' => $user->tweets
    ])
@endsection
