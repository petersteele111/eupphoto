<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-3xl">
                    <p>Your Albums</p>
                </div>
                <div class="flex flex-wrap">
                    @foreach(Auth::user()->albums()->get() as $album)
                        <div class="w-1/2 md:w-1/3 lg:w-1/4 p-2">
                            <a href="{{ route('albums.photos', $album->id) }}">
                                <img src="{{ asset('storage/' . $album->cover_image) }}" alt="Album Cover Image">
                                <p class="text-white text-2xl text-center">{{$album->title}}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
