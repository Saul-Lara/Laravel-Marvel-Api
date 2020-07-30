<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel App - Laravel</title>

    <link rel="stylesheet" href="{{ url('css/main.css') }}">

    <script src="https://kit.fontawesome.com/d95ad0b2c9.js" crossorigin="anonymous"></script>

</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a href="#"><img src="{{ url('img/logo.png') }}" alt="logo" class="w-32"></a>
                </li>

                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">Comics</a>
                </li>

                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Characters</a>
                </li>

                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Creators</a>
                </li>

            </ul>

            <div class="flex items center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 py-1" placeholder="Search...">
                </div>
                <div class="ml-4">
                    <a href="#">
                        <img src="{{ url('img/avatar.png') }}" alt="avatar" class="rounded-full w-8 h-8 ">
                    </a>
                </div>
            </div>
            
        </div>
    </nav>

    @yield('content')

</body>
</html>