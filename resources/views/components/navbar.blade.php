<div class="bg-white mb-3">
    <div class="container mx-auto flex items-center py-4">

        <nav class="w-2/5">
            <a href=""
                class="text-gray-600 text-sm mr-4 font-semibold pb-6 border-b-2 border-solid border-transparent   hover:text-blue-600 hover:border-blue-600"><i
                    class="fa fa-home fa-lg"></i>
                Home</a>
            <a href=""
                class="text-gray-600 text-sm mr-4 font-semibold pb-6 border-b-2 border-solid border-transparent   hover:text-blue-600 hover:border-blue-600"><i
                    class="fa fa-bell fa-lg"></i>
                Notifications</a>
            <a href=""
                class="text-gray-600 text-sm mr-4 font-semibold pb-6 border-b-2 border-solid border-transparent   hover:text-blue-600 hover:border-blue-600"><i
                    class="fa fa-envelope fa-lg"></i>
                Messages</a>
        </nav>

        <div class="w-1/5">
            <a href=""><i class="fab fa-twitter fa-lg text-blue-600"></i></a>
        </div>
        <div class="w-2/5 flex justify-end">
            <div class="mr-4 relative">
                <input type="text" class="bg-gray-200 h-8 px-4 py-2 text-xs w-48 rounded-full"
                    placeholder="Search Twitter">
            </div>

            <div class="mr-4">
                <a href="#">
                    <img src="{{ Auth::user()->avatar }}" alt="avatar" class="h-8 w-8 rounded-full">
                </a>
            </div>
            <div>
                {{-- <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-full">
                    Tweet
                </button> --}}
                <button href="{{ route('logout') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-full" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            </div>

        </div>
    </div>
</div>
