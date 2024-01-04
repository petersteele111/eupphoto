<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <div id="spinner">
                <div class="loader">
                    <img src="{{ asset('img/logo_200x134_min.png') }}" alt="Loading...">
                    <p>Loading...</p>
                </div>
            </div>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
              <!-- Alpine Lightbox component-->
    <div x-data="caesarLightbox"
    @lightboxelementclick.window="handleLightboxChange(event)"
    @keyup.escape.window="currentImageUrl = null"
    @keyup.left.window="loadPrevious()"
    @keyup.right.window="loadNext()">
    <!-- Disable lightbox on mobile?
        class="hidden md:block"
    -->


    <!-- Overlay. Only show if we have a currentImageUrl. If click event target is the overlay, set the currentImageUrl to null (I.e close the lightbox) -->
    <div class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center z-[9999] bg-[#000000c9] p-5 md:p-10"
        x-show="currentImageUrl" x-cloak @click="if($event.target == $el){ currentImageUrl = null }">
        <!-- Inner. Centered by parent flex -->
        <div class="relative bg-white md:max-w-[85%] mx-auto  p-3">
            <!-- Close button -->
            <button @click="currentImageUrl = null" class="absolute -top-5 -right-5 w-10 h-10 z-[8888] flex items-center justify-center text-white bg-black border-2 border-white rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>

            <!-- Image. Set max height to keep within viewport -->
            <img :src="currentImageUrl" class="w-full max-h-[90vh] object-cover rounded border border-gray-200">

            <!-- Click area wrapper. Fix to bottom on mobile to keep buttons in same place and prevent overflowing viewport when tall images fill the screen -->
            <div class="fixed bottom-0 md:absolute md:top-0 left-0 w-full h-full">
                <div class="flex h-full justify-between">
                    <!-- Click area to browse left -->
                    <a class="w-[40%] h-full group relative cursor-pointer" @click.prevent="loadPrevious">
                        <!-- Button (dummy element) -->
                        <div class="absolute left-10 bottom-10 md:top-[50%] w-16 h-16 flex items-center justify-center md:opacity-0 md:group-hover:opacity-100 transition ease-in-out duration-150 text-white bg-[#0000007d] rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </div>
                    </a>
                    <!-- Click area to browse right -->
                    <a class="w-[40%] h-full group relative cursor-pointer" @click.prevent="loadNext">
                        <!--  Button (dummy element) -->
                        <div class="absolute right-10 bottom-10 md:top-[50%] w-16 h-16 flex items-center justify-center md:opacity-0 md:group-hover:opacity-100 transition ease-in-out duration-150 text-white bg-[#0000007d] rounded-full cursor-pointer"
                            @click="loadNext()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10  " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

        </div>
    </body>
</html>
