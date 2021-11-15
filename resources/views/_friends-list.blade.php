{{-- <div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Follows</h3>
    <ul>
            @forelse (auth()->user()->follows as $user)
                <li class=" {{ $loop->last ? '' : 'mb-4' }}">
                    <div >
                        <a class="flex items-center text-sm" href="{{ route('profile', $user) }}">
                            <img
                            src="https://picsum.photos/id/{{ $user->id }}/50"
                            alt=""
                            class="rounded-full mr-2"
                            >

                            {{ $user->name }}
                        </a>
                    </div>
                </li>
                @empty
                    <li class=""> No friends yet</li>

            @endforelse
    </ul>
</div> --}}
<div class="md:block hidden w-1/3 h-full border-l border-lighter py-2 px-6 overflow-y-scroll relative">

    <div class="w-full rounded-lg bg-lightest my-4">
        <div class="p-3">
            <p class="text-lg font-bold">Friend List</p>
        </div>
        @forelse (auth()->user()->follows as $user)
            <a href="{{ route('profile', $user) }}" class="w-full flex hover:bg-lighter p-3 border-t border-lighter">
                <img src="{{ $user->avatar }}" alt="{{ $user->usernames }}"
                    class="w-12 h-12 rounded-full border border-lighter">
                <div class="hidden lg:block ml-4">
                    <p class="text-sm font-bold leading-tight">{{ $user->name }}</p>
                    <p class="text-sm  leading-tight">{{ '@' . $user->username }} </p>
                </div>
                {{-- <button class="ml-auto text-sm text-blue py-1 px-4 rounded-full border-2 border-blue">
                    Follow
                </button> --}}
            </a>
        @empty
            No friends yet

        @endforelse
        {{-- <a class="w-full flex  hover:bg-lighter p-3 border-t border-lighter">
            <img src="" alt="" class="w-12 h-12 rounded-full border border-lighter">
            <div class="hidden lg-block ml-4">
                <p class="text-sm font-bold leading-tight">Steph Dietz</p>
                <p class="text-sm font-bold leading-tight"> </p>
            </div>
            <a class="ml-auto text-sm text-blue py-1 px-4 rounded-full border-2 border-blue">
                Follow
            </a>
        </a>
        <a class="w-full flex  hover:bg-lighter p-3 border-t border-lighter">
            <img src="" alt="" class="w-12 h-12 rounded-full border border-lighter">
            <div class="hidden lg-block ml-4">
                <p class="text-sm font-bold leading-tight">Steph Dietz</p>
                <p class="text-sm font-bold leading-tight"> </p>
            </div>
            <a class="ml-auto text-sm text-blue py-1 px-4 rounded-full border-2 border-blue">
                Follow
            </a>
        </a> --}}
        <button class="p-3 w-full hover:bg-lighter text-left text-blue border-t border-lighter">
            Show More
        </button>
    </div>
</div>
