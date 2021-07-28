@extends('layouts.app')

@section('content')
    <div class=" mt-10  flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-4">
                    <label class="p-4" for="title">Movie Title</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror" name="title" placeholder='Title'>
                    @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-4">
                    <label class="p-4" for="image">Movie Cover</label>
                    <input type="file" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('image') border-red-500 @enderror" name="image" placeholder='Cover'>
                    @error('image')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div>
                    <label class="p-4" for="date">Realease date</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('date') border-red-500 @enderror" type="date" name="date">
                    @error('date')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mt-4 p-2">
                    <button type="submit" class="bg-blue-500 text-white px-10 py-4 rounded font-medium" >Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection