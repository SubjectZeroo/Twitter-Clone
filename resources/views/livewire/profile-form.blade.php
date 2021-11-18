<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">Name</label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text" name="name" id="name" value="" required>

        {{-- @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror --}}
    </div>
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text" name="username" id="username" value="" required>

        {{-- @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror --}}
    </div>
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description">Description</label>
        <textarea name="description" id="description"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>

        {{-- @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror --}}
    </div>
    <div class="mb-6 ">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">Avatar</label>
        <div class="flex">
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="file" name="avatar" id="avatar" value="">

        </div>
        {{-- @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror --}}
    </div>
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="email" name="email" id="email" value="" required>

        {{-- @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror --}}
    </div>
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="password" name="password" id="password" required>

        {{-- @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror --}}
    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">Password
            Confirmation</label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="password" name="password_confirmation" id="password_confirmation" required>

        {{-- @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror --}}
    </div>
    <div class="mb-6">
        <button type="submit" class="bg-blue text-white rounded py-2 px-4 hover:bg-blue">

            Update Profile
        </button>
    </div>
</form>
