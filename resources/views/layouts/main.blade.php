<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel App - Laravel</title>

    <link rel="stylesheet" href="{{ url('css/main.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" crossorigin="anonymous"></script>

    <livewire:styles>

</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ url('/') }}"><img src="{{ url('img/logo.png') }}" alt="logo" class="w-32"></a>
                </li>

                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ url('/') }}" class="hover:text-gray-300">Comics</a>
                </li>

                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Characters</a>
                </li>

                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Creators</a>
                </li>

            </ul>

            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown />
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="{{ url('img/avatar.png') }}" alt="avatar" class="rounded-full w-8 h-8 ">
                    </a>
                </div>
            </div>
            
        </div>
    </nav>

    @yield('content')

    <livewire:scripts>

</body>
</html>