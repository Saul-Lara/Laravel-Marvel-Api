@extends('layouts.main')

@section('content')
    <!-- start comic info -->
    <div class="comic-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{ url('img/cover1.jpg') }}" alt="Comic 1" class="w-70 md:w-96">
            <div class="md:ml-20">
                <h2 class="text-4xl font-semibold">Silver Surfer</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span><i class="far fa-calendar-alt"></i></span>
                    <span class="ml-2">Feb 20 2020</span>
                    <span class="mx-2">|</span>
                    <span>Pages: 32</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas perferendis earum provident illo distinctio, nihil ratione laborum ea et tempore accusantium ipsum corporis odio quidem eveniet rerum fuga nam repellendus.
                </p>

                <div class="mt-16">
                    <h4 class="text-white font-semibold">Creators</h4>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 mt-2">
                        <div class="ml-8">
                            <div>Christos Gage</div>
                            <div class="text-sm text-gray-400">Writer</div>
                        </div>
                        <div class="ml-8">
                            <div>Vc Travis Lanham</div>
                            <div class="text-sm text-gray-400">Letterer</div>
                        </div>
                        <div class="ml-8">
                            <div>Vc Travis Lanham</div>
                            <div class="text-sm text-gray-400">Letterer</div>
                        </div>
                        <div class="ml-8">
                            <div>Vc Travis Lanham</div>
                            <div class="text-sm text-gray-400">Letterer</div>
                        </div>
                        <div class="ml-8">
                            <div>Vc Travis Lanham</div>
                            <div class="text-sm text-gray-400">Letterer</div>
                        </div>
                        <div class="ml-8">
                            <div>Vc Travis Lanham</div>
                            <div class="text-sm text-gray-400">Letterer</div>
                        </div>
                        <div class="ml-8">
                            <div>Vc Travis Lanham</div>
                            <div class="text-sm text-gray-400">Letterer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end comic info -->

    <div class="comic-characters border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Characters</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ url('img/cover1.jpg') }}" alt="Comic 1" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Spider-Woman (Jessica Drew)</a>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ url('img/cover2.jpg') }}" alt="Comic 1" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Spider-Woman (Jessica Drew)</a>
                    </div>
                </div>                
            </div>
        </div>
    </div>


@endsection