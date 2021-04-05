@extends('layouts.app')

@section('content')
    {{-- <h3> profile page for {{ $user->name }} </h3>

    <hr>
    --}}
    <header class="mb-6 relative">
        <div class="relative">
            <img
            class="mb-2"
            src="https://picsum.photos/700/223?grayscale"
            alt="">
            <img
            src="{{ $user->avatar }}"
            alt=""
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left: 50%"
            width="150"
            >
        </div>
        <div class="flex justify-between items-center mb-9">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0"> {{  $user->name }}  </h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                @endcan


                <x-follow-button :user='$user'>
                </x-follow-button>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, possimus! Esse eum consequatur repudiandae eos iste fugiat veritatis provident laudantium nesciunt ratione reiciendis, ullam et harum molestiae sequi, vitae nulla?</p>



    </header>
    @include('_timeline' , [
        'tweets' => $tweets
    ])
@endsection
