<x-layout>
    <div class="px-5 py-3 w-full md:w-1/2 h-full">
        {{-- @foreach ($users as $user)
            <div class="flex items-center mb-5">
                <a href="{{ $user->path() }}">
                    <img src="{{ $user->avatar }}" alt="{{ $user->usernames }}'s avatar" width="60"
                        class="mr-4 rounded">

                    <div>
                        <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                    </div>
                </a>
            </div>
        @endforeach
        {{ $users->links() }} --}}
        @foreach ($users as $user)
            <a href="{{ $user->path() }}" class="w-full flex hover:bg-lighter p-3 border-t border-lighter">
                <img src="{{ $user->avatar }}" alt="{{ $user->usernames }}"
                    class="w-12 h-12 rounded-full border border-lighter">
                <div class="hidden lg:block ml-4">
                    <p class="text-sm font-bold leading-tight">{{ $user->name }}</p>
                    <p class="text-sm  leading-tight">{{ '@' . $user->username }} </p>
                </div>
                <button class="ml-auto text-sm text-blue py-1 px-4 rounded-full border-2 border-blue">
                    Follow
                </button>
            </a>
        @endforeach
        {{ $users->links() }}
    </div>
</x-layout>
