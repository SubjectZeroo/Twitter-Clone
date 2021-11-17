{{-- <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img src="https://picsum.photos/id/{{ $tweet->user->id }}/50" alt="" class="rounded-full mr-2">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <p class="text-sm mb-3">{{ $tweet->body }}</p>

        <x-like-button :tweet="$tweet"></x-like-button>
    </div>
</div> --}}
<div class="flex flex-col-reverse {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="w-full p-4 border-b hover:bg-lighter flex">
        <div class="flex-none mr-4">
            <img src="{{ $tweet->user->avatar }}" alt="" class="h-12 w-12 rounded-full flex-none">
        </div>
        <div class="w-full">
            <div class="flex items-center w-full">
                <a href="{{ route('profile', $tweet->user) }}">
                    <p class="font-semibold"> {{ $tweet->user->name }} </p>
                </a>

                <a href="{{ route('profile', $tweet->user) }}" class="text-sm text-dark ml-2">
                    {{ '@' . $tweet->user->username }}
                </a>
                <p class="text-sm text-dark ml-2"> {{ $tweet->created_at->diffForHumans() }} </p>
                <i class="fas fa-angle-down text-dark ml-auto"></i>
            </div>
            <p class="py-2">
                {{ $tweet->body }}
            </p>
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center text-sm text-dark">
                    <i class="far fa-heart mr-3"></i>
                    <p>0</p>
                </div>
            </div>
        </div>
    </div>
</div>
