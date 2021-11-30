<form wire:submit.prevent="save" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">Name</label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text" name="name" wire:model="name">

        @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text" name="username" id="username" wire:model="username">

        @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6 ">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">Avatar</label>
        <div class="flex">
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="file" name="avatar">

        </div>
        @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="email" name="email" id="email" wire:model="email">

        @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description">Description</label>
        <textarea name="description" wire:model="description"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>

        @error('description')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6">
        {{-- <button type="submit" class="bg-blue text-white rounded py-2 px-4 hover:bg-blue">
            Update Profile
        </button> --}}
        <button type="submit"
            class="h-10 font-semibold focus:outline-none rounded-full  inline-flex items-center justify-center py-3 px-6 border border-transparent text-base leading-6  text-white bg-blue hover:bg-darkblue  focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out disabled:opacity-50">
            <svg wire:loading wire:target="save" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            <span>Update Profile</span>
        </button>
    </div>
</form>
