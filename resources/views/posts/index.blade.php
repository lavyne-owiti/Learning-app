@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg mt-xl-4">
            <form action="{{ route('posts')}}" method="post" class="mb-xl-4">
                @csrf
                <div class="mb-xl-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id ="body" cols="30" row="4" class="bg-gray-100 border-1 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"  placeholder="Post something!"
                    ></textarea>

                    @error('body')
                        <div class ="text-red-500 mt-xl-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium ">
                    Post
                </button>
            </form>

            @if ($posts->count())
                    @foreach( $posts as $post)
                        <x-post :post="$post"/>
                    @endforeach

                    {{ $posts->links() }}

                @else
                    <p>{There are no posts</p>
                @endif
            
        </div>

    </div>

@endsection