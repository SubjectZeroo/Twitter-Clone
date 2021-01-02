<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Follows</h3>
    <ul>
            @foreach (auth()->user()->follows as $user)
                <li class="mb-4">
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
            @endforeach
    </ul>
</div>

