<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portfolio</title>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
                
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="font-poppins h-full bg-brown-101">
    <nav id="menu" class="relative bg-brown-101 border-b-2 border-blue-105">
        <div class="container mx-auto px-4 py-6 flex items-center justify-between overflow-x-none">
            <div class="brand z-50">
                <a href="{{route('admin')}}" class="font-black text-blue-105 text-2xl">
                    <span class="border-2 px-0.5 py-1 border-blue-105">T</span>eguh.
                </a>
            </div>
            <ul class="flex items-center z-50 text-blue-103 ">
                <li class="px-2 font-semibold hover:text-blue-101">
                    <a href="{{route('admin.gallery')}}">Galleries</a>
                </li>
                <li class="px-2 font-semibold hover:text-blue-101">
                    <a href="{{route('admin.skill')}}">Skill</a>
                </li>
                <li class="px-2 font-semibold hover:text-blue-101">
                    <a href="{{route('admin.projects')}}">Projects</a>
                </li>
            </ul>
            <div class="telp flex font-semibold text-blue-105">
                @guest
                    +6281288450678
                    @if(Route::has('regiter'))
                        <ul class="flex items-center z-50">
                            <li class="px-2 font-semibold hover:text-blue-101">
                                <a href="/register">Register</a>
                            </li>
                        </ul>
                    @endif
                    @else
                        <ul class="flex items-center z-50">
                            <li class="px-2 font-semibold hover:text-blue-101">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            @can('admin-user')
                            <li class="px-2 font-semibold hover:text-blue-101">
                                <a href="/">Home</a>
                            </li>
                            @endcan
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                @endguest
            </div>
        </div>
    </nav>
    <!-- Home -->
    @yield('content')
        
    <!-- table -->
    @yield('table')
    <!-- table end -->
    
</body> 
</html>