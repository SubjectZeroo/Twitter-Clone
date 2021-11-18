@unless(auth()->user()->is($user))
    <form method="POST" action="{{ route('follow', $user->username) }}">
        @csrf
        <button type="submit" class="ml-auto text-sm text-blue py-1 px-4 rounded-full border-2 border-blue">
            {{ auth()->user()->following($user)
                ? 'Unfollow Me'
                : 'Follow Me' }}
        </button>
    </form>
@endunless
