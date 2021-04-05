<x-app>
    <div>
        @foreach ($users as $user)
            <div class="flex items-center mb-5">
                <a href="{{ $user->path() }}">
                    <img
                        src="{{ $user->avatar }}"
                        alt="{{ $user->usernames}}'s avatar"
                        width="60"
                        class="mr-4 rounded">

                    <div>
                        <h4 class="font-bold">{{'@' . $user->username }}</h4>
                    </div>
                 </a>
            </div>
        @endforeach
        {{ $users->links() }}
    </div>
</x-app>
