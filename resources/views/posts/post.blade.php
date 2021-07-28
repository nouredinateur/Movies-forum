@extends('layouts.app')

@section('content')
    <div class="mt-10 flex justify-center">
        <div   class="w-8/12 bg-white p-6 rounded-lg">
            <div class=" mb-10 bg-gray-100 p-10 ">
                <div class="flex justify-around">
                    <div>
                        <img class="h-96 shadow	" src="/{{ $post->image }}" alt="{{ $post->title }}">
                    </div>
                    <div class="w-2/4">
                        <p class="text-3xl font-bold mb-10" >{{ $post->title }}</p>
                        <p>Date: {{ $post->release_date }}</p>
                    </div>
                </div>
                
                    @include('posts.comments', ['comments' => $post->comments, 'post_id' => $post->id])
                <div>
                    <form method="post" action="{{ route('comment') }}">
                        @csrf
                        <div class="w-full">
                            <div>
                                <input class="mt-10 mb-5 w-full bg-white p-5 rounded-lg" type="text" placeholder="Comment here"  name="comment">
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            </div>
                            <div class="form-group">
                                <input class="bg-blue-500 text-white px-10 py-4 rounded font-medium" type="submit" value="Comment" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection