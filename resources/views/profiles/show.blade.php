<x-layout>
    <div class="w-full md:w-1/2 h-full">
        <header class=" mb-6 relative">
            <div class="relative">
                <img class="mb-2" src="https://picsum.photos/700/223?grayscale" alt="">
                <img src="{{ $user->avatar }}" alt=""
                    class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                    style="left: 50%" width="150">
            </div>
            <div class="px-5 py-3 flex justify-between items-center mb-9">
                <div style="max-width: 270px">
                    <h2 class="font-bold text-2xl mb-0"> {{ $user->name }} </h2>
                    <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>
                <div class="flex">
                    @can('edit', $user)
                        <a href="{{ $user->path('edit') }}"
                            class="rounded-full  py-2 px-4 text-xs mr-2 text-white font-semiblod bg-blue hover:bg-darkblue">Edit
                            Profile</a>
                    @endcan
                    <x-follow-button :user='$user'>
                    </x-follow-button>
                </div>
            </div>
            <p class="text-sm px-5 py-3">
                {{ $user->description }}
            </p>
        </header>
        @include('_timeline' , [
        'tweets' => $tweets
        ])
    </div>


    {{-- <div class="hero h-64 bg-cover">
        <img class="mb-2" src="https://picsum.photos/700/223?grayscale" alt="">
    </div>
    <div class="bg-white shadow">
        <div class="container mx-auto flex items-center relative">
            <div class="w-1/4">
                <img src="{{ $user->avatar }}" alt="" class="rounded-full h-3 w-32 absolute left-0 top-0 -mt-15">
            </div>
            <div class="w-1/2">
                <ul class="list-reset flex">
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-blue-600">
                        <a href="#" class="text-gray-600 hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Tweets</div>
                            <div class="text-lg tracking-tight font-bold text-blue-600">60</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid">
                        <a href="#" class="text-gray-600 hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                            <div class="text-lg tracking-tight font-bold text-blue-600">60</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid ">
                        <a href="#" class="text-gray-600 hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Followers</div>
                            <div class="text-lg tracking-tight font-bold text-blue-600">60</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid ">
                        <a href="#" class="text-gray-600 hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                            <div class="text-lg tracking-tight font-bold text-blue-600">60</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Tweets</span>
                            <span>60</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-1/4 flex justify-end items-center">
                <div class="mr-6">
                    <button class="bg-blue-600 hover:bg-blue-400 text-white font-medium py-2 px-4 rounded-full">
                        Following
                    </button>
                </div>
                <div>
                    <a href="#" class="text-gray-600"><i class="fa fa-ellipsis-v fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div> --}}


</x-layout>
