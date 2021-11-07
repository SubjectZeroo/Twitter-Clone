<div class="border border-blue-400 rounded-lg px-8 py-6 mb-5">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's up doc"></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="https://picsum.photos/id/{{ auth()->user()->id }}/50" alt="" class="rounded-full mr-2">
            <button class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-white h-10" type="submit">
                Tweet a root
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror

</div>
