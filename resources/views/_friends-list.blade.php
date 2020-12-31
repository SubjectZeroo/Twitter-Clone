<h3 class="font-bold text-xl mb-4">Follows</h3>
<ul>
        @foreach (auth()->user()->follows as $user)
            <li class="mb-4">
                <div class="flex items-center text-sm">
                    <img
                    src="https://picsum.photos/id/{{ $user->id }}/50"
                    alt=""
                    class="rounded-full mr-2"
                    >
                    {{ $user->name }}
                </div>
            </li>
        @endforeach
</ul>
