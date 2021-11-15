<div class="w-full md:w-1/2 h-full">
    <div class="px-5 py-3 border-b border-lighter flex items-center justify-between">
        <h1 class="text-xl font-bold">Home</h1>
        <i class="far fa-star text-xl text-blue"></i>
    </div>
    <div class="px-5 py-3 border-b-8 border-lighter flex">
        <div>
            <img src="{{ auth()->user()->avatar }}" alt="" class="w-12 h-12 rounded-full border border-lighter">
        </div>
        <form method="POST" action="/tweets" class="w-full px-4 relative">
            @csrf
            <textarea name="body" placeholder="What's up?" class="mt-3 pb-3 w-full focus:outline-none"></textarea>
            <div class="flex items-center">
                <i class="text-lg text-blue mr-4 far fa-image"></i>
            </div>
            <button type="submit"
                class="h-10 px-4 text-white font-semiblod bg-blue hover:bg-darkblue focus:outline-none rounded-full absolute bottom-0 right-0">Tweet</button>
        </form>
        @error('body')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror

    </div>
    @include('_timeline')
</div>
