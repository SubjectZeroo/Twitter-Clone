<x-layout>
    <div class=" w-full md:w-1/2 h-full">
        @foreach ($users as $user)
            <div class="w-full flex items-center justify-between hover:bg-lighter p-3 border-t border-lighter">
                <a href="{{ $user->path() }}" class="flex">
                    <img src="{{ $user->avatar }}" alt="{{ $user->usernames }}"
                        class="w-12 h-12 rounded-full border border-lighter">
                    <div class="hidden lg:block ml-4">
                        <p class="text-sm font-bold leading-tight">{{ $user->name }}</p>
                        <p class="text-sm  leading-tight">{{ '@' . $user->username }} </p>
                    </div>
                </a>
                <x-follow-button :user='$user'>
                </x-follow-button>
            </div>
        @endforeach
        {{ $users->links() }}
    </div>
</x-layout>
