@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="random-comics">
            <h2 class="uppercase tracking-wider text-white-500 text-lg font-semibold">Comics of this month</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ url('img/cover1.jpg') }}" alt="Comic 1" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Silver surfer</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>icono calendario</span>
                            <span class="ml-2">Feb 20 2020</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ url('img/cover2.jpg') }}" alt="Comic 1" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Silver surfer</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>icono calendario</span>
                            <span class="ml-2">Feb 20 2020</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ url('img/cover3.jpg') }}" alt="Comic 1" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Silver surfer</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>icono calendario</span>
                            <span class="ml-2">Feb 20 2020</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection