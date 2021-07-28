@extends('layouts.app')

@section('content')
    <div class="mt-10 flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('login')}}" method="post">
            @csrf
           
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Your email" id="" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('email') border-red-500 @enderror" value="{{ old('email') }}" >
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Your Password" id="" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('password') border-red-500 @enderror" value="" >
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                {{ session('status') }}
                </div>
            @endif
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" >Login</button>
            </div>
        </form>
        </div>
    </div>
@endsection