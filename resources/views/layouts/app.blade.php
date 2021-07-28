<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', "Movies Forum")}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul  class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            @can('accessAdmin')
            <li>
                <a href="{{route('dashboard')}}" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3">Post</a>
            </li>
            @endcan
        </ul>
        <ul  class="flex items-center">
        @auth
            <li>
                <a href="" class="p-3">{{ auth()->user()->name}}</a>
            </li>
            <li>
                <form action="{{route('logout')}}" method="post"   class="inline  p-3">
                @csrf
                    <button  type="submit">Logout</button>
                </form>
            </li>
        @endauth
        @guest
            <li>
                <a href="{{route('login')}}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="p-3">Sign-up</a>
            </li>    
        @endguest     
        </ul>

    </nav>
    @yield('content')
</body>
</html>