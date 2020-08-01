@extends('layouts.main')

@section('content')
    <!-- start comic info -->
    <div class="comic-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $comic['thumbnail']['path'].'/portrait_uncanny.'.$comic['thumbnail']['extension'] }}" alt="{{ $comic['title'].' Cover' }}" class="w-70 md:w-96">
            </div>
            <div class="md:ml-20">
                <h2 class="text-4xl font-semibold">{{ $comic['title'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span><i class="far fa-calendar-alt"></i></span>
                    <span class="ml-2">{{ \Carbon\Carbon::parse($comic['dates'][0]['date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span><i class="far fa-file"></i> {{ $comic['pageCount'] }} pages</span>
                    
                    @foreach ($comic['prices'] as $price)
                        @if($price['type'] == 'printPrice')
                        <span class="mx-2">|</span>
                        <span><i class="fas fa-dollar-sign"></i> {{ $price['price'] }} USD</span>
                        @endif
                    @endforeach
                </div>

                <p class="text-gray-300 mt-8">
                    @if ($comic['description'])
                        {{ $comic['description'] }}
                    @else
                        <p>Description not available</p>
                    @endif
                </p>

                <div class="mt-16">
                    <h4 class="text-white font-semibold">Creators</h4>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 mt-2">
                       @foreach ($comic['creators']['items'] as $creator)
                        <div class="ml-8">
                            <div>{{ $creator['name'] }}</div>
                            <div class="text-sm text-gray-400">{{ ucfirst($creator['role']) }}</div>
                        </div>
                       @endforeach
                    </div>
                </div>

                <div class="mt-12">
                    @foreach ($comic['urls'] as $url)
                        @if($url['type'] == 'detail')
                        <a href="{{ $url['url'] }}" class="flex inline-flex items-center bg-red-600 text-white-900 rounded font-semibold px-5 py-4 hover:bg-red-700 transition ease-in-out duration-150">
                            <i class="fas fa-info-circle"></i> <span class="ml-2">More information in marvel.com</span>
                        </a>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- end comic info -->

    <div class="comic-characters border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Characters</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @if (count($characters) > 0)
                    @foreach ($characters as $character)
                    <div class="mt-8">
                        <a href="{{ url("/characters/".$character['id'] ) }}">
                            <img src="{{ $character['thumbnail']['path'].'/portrait_uncanny.'.$character['thumbnail']['extension'] }}" alt="{{ $character['name'].' avatar' }}" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $character['name'] }}</a>
                        </div>
                    </div>
                    @endforeach
                @else
                    Data not available
                @endif
            </div>
        </div>
    </div>

@endsection