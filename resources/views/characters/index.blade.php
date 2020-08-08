@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="characters">
            <h2 class="uppercase tracking-wider text-white-500 text-lg font-semibold">Characters</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($characters as $character)
                    <div class="character mt-8">
                        <a href="#"><img src="{{ $character['thumbnail'] }}" alt="{{ $character['name'].' avatar' }}" class="hover:opacity-75 transition ease-in-out duration-150"></a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $character['name'] }}</a>
                            <div class="text-sm truncate text-gray-400">{{ $character['comics'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex justify-between mt-16">
            <a href="#">Previous</a>
            <a href="#">Next</a>
        </div>
    </div>
@endsection