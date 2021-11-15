<div class="lg:w-1/5 border-r border-lighter px-2 lg:px-6 py-2 flex flex-col justify-between">
    <div>
        <button class="h-12 w-12 hover:bg-lightblue text-3xl rounded-full text-blue">
            <i class="fab fa-twitter"></i>
        </button>
        <div>
            <ul>
                <li>
                    <a href="{{ route('home') }}"
                        class="hover:text-blue flex items-center py-2 px-4 hover:bg-lightblue rounded-full mr-auto mb-3">
                        <i class="fas fa-home text-2xl mr-4"></i>
                        <p class="text-large font-semibold text-left hidden lg:block">Home</p>
                    </a>
                </li>
                <li>
                    <a href="/explore"
                        class="hover:text-blue flex items-center py-2 px-4 hover:bg-lightblue rounded-full mr-auto mb-3">
                        <i class="fas fa-hashtag text-2xl mr-4"></i>
                        <p class="text-large font-semibold text-left hidden lg:block">Explore</p>
                    </a>
                </li>
                <li>
                    <a class="hover:text-blue flex items-center py-2 px-4 hover:bg-lightblue rounded-full mr-auto mb-3">
                        <i class="far fa-bell text-2xl mr-4"></i>
                        <p class="text-large font-semibold text-left hidden lg:block">Notifications</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile', auth()->user()) }}"
                        class="
                        hover:text-blue flex items-center py-2 px-4 hover:bg-lightblue rounded-full mr-auto mb-3">
                        <i class="far fa-user text-2xl mr-4"></i>
                        <p class="text-large font-semibold text-left hidden lg:block">Profile</p>
                    </a>
                </li>
            </ul>
            {{-- <button
                class="text-white bg-blue rounded-full font-semibold focus:outline-none w-12 h-12 lg:h-auto lg:w-full p-3 hover:bg-darkblue">
                <p class="hidden lg:block">Tweet</p>
                <i class="lg:hidden fas fa-plus "></i>
            </button> --}}
        </div>
    </div>




</div>
