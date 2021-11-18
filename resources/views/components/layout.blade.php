<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>

<body>
    <div id="app" class="flex container h-screen w-full">
        @include('_sidebar-links')
        {{ $slot }}
        @include('_friends-list')
        {{-- @if (auth()->check())
            <x-navbar></x-navbar>
            <section class="px-8">
                <main class="container mx-auto">
                    <div class="lg:flex lg:justify-between">
                        <div class="lg:w-32">
                            @include('_sidebar-links')
                        </div>
                        <div class="lg:flex-1 lg:mx-11" style="max-width: 700px">
                            {{ $slot }}
                        </div>
                        <div class="lg:w-1/6">
                            @include('_friends-list')
                        </div>
                    </div>
                </main>
            </section>
        @endif --}}
    </div>
    @livewireScripts
</body>

</html>
