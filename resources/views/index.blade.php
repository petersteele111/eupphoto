<x-app-layout>
        <div class="relative bg-transparent flex flex-col justify-center items-center mt-[-80px]" style="height: calc(100vh);">
            <div id="background" class="absolute inset-0 bg-cover bg-center" style="background-image: url({{ asset('img/home_1920_min.jpg') }});"></div>
            <div class="absolute inset-0 bg-black bg-opacity-20"></div>

            <div class="content-center text-center relative mb-4">
                <p class="text-sm md:text-lg text-white font-semibold">PORTRAIT AND LANDSCAPE PHOTOGRAPHY</p>
            </div>
    
            <div class="content-center text-center relative mb-12">
                <p class="text-5xl md:text-7xl text-white font-bold">EUP Photography</p>
            </div>
    
            <button onclick="location.href='{{ route('portfolio.index')}}'" class="bg-red-600 hover:bg-red-800 text-white font-bold py-4 px-8 rounded transform transition duration-200 ease-in-out hover:-translate-y-1">
                View My Work
            </button>
        </div>

        {{-- Down arrow indicating more content below --}}
        {{-- <div class="fixed bottom-0 pb-4 w-full flex justify-center">
            <a href="#next-section" class="scroll-link mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 animate-bounce text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div> --}}

        

    {{-- Section for recent work styled with Tailwind CSS
    <div class="px-12 pt-16 w-100">
        <div class="popular-photos" id="next-section">
            <h2 class="uppercase tracking-wider text-white text-5xl text-center font-semibold">Recent Work</h2>
            <p class="text-white text-center text-xl my-12">Here are some of my recent shots that I have really enjoyed, I hope you do to!</p>
            <div class="grid">
                @foreach(['Abram Falls_small.jpg', 'delilah_small.jpg', 'kids-christmas_small.jpg', 'pj-santa_small.jpg', 'reccenter_small.jpg', 'Tahquamenon Falls FALL_small.jpg', 'Northern Lgihts 3_small.jpg', 'Northern Lights 2_small.jpg', 'Sophie_small.jpg', 'Smoky Mountains_small.jpg', 'pj-wall_small.jpg', 'home_1920_min.jpg'] as $image)
                    <div class="grid-item relative group">
                        <img src="{{ asset('img/' . $image) }}" data-src="{{ asset('img/' . $image) }}" class="hover:opacity-75 transition ease-in-out duration-150 caesar-lightbox">
                        <i class="fas fa-search absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-3xl opacity-0 transition duration-500 group-hover:opacity-100 pointer-events-none"></i>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
</x-app-layout>

<script>
    var images = [
        "{{ asset('img/Northern Lights 2.jpg') }}",
        "{{ asset('img/Tahquamenon Falls FALL.jpg') }}",
        "{{ asset('img/home_1920_min.jpg') }}",
    ];
</script>