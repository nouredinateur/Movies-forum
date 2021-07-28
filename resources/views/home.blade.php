@extends('layouts.app')

@section('content')
    <div class=" mt-10  flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="p-10 ">
                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <div class=" mb-10 bg-gray-100 p-10 ">
                                <div class="flex justify-around">
                                    <div>
                                        <img class="h-96" src="{{ $post->image }}" alt="{{ $post->title }}">
                                    </div>
                                    <div class="w-2/4">
                                        <p class="text-3xl font-bold mb-10" >{{ $post->title }}</p>
                                        <p>Date: {{ $post->release_date }}</p>
                                    </div>
                                </div>
                                <div class="w-4/5 mt-20 ml-96">
                                    <a class="bg-blue-500 text-white  ml-96 px-10 py-4 rounded font-medium" href="{{ route('post', $post->id) }}">Engage</a>
                                </div>
                            </div>
                            
                        @endforeach
                    {{ $posts->links() }}
                    @else
                        <p>No Posts yet :c</p>
                    @endif
            </div>
        </div>
    </div>
@endsection