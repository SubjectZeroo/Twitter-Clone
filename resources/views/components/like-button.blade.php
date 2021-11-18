<div class="flex">
    <form method="POST" action="/tweets/{{ $tweet->id }}/like"
        {{ $tweet->isLikeBy(auth()->user()) ? 'hidden' : '' }}>
        @csrf
        <div
            class="flex items-center mr-4  {{ $tweet->isLikeBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500' }}">

            <button type="submit" class="text-xs text-gray-600 hover:text-red-600">
                <i class="far fa-heart mr-3 "></i>
                {{ $tweet->likes ?: 0 }}
            </button>
        </div>
    </form>
    <form method="POST" action="/tweets/{{ $tweet->id }}/like"
        {{ $tweet->isLikeBy(auth()->user()) ? '' : 'hidden' }}>
        @csrf
        @method('DELETE')
        <div class="flex items-center {{ $tweet->isDislikeBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500' }}">

            <button type="submit" class="text-xs text-gray-600 hover:text-red-600">
                <i class="far fa-heart mr-3 text-red-600"></i>
                {{ $tweet->likes ?: 0 }}
            </button>
        </div>
    </form>
</div>
