<div class="w-full md:w-1/2 h-full">
    <div class="px-5 py-3 border-b border-lighter flex items-center justify-between">
        <h1 class="text-xl font-bold">Home</h1>
        <i class="far fa-star text-xl text-blue"></i>
    </div>

    <div class="px-5 py-3 border-b-8 border-lighter flex">
        <div>
            <img src="{{ auth()->user()->avatar }}" alt="" class="w-12 h-12 rounded-full border border-lighter">
        </div>
        <livewire:tweet-form />
    </div>
    @include('_timeline')
</div>
