{{--@extends('components.layout')--}}
<x-layout>

    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'mt-6' : '' }}">
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach



{{--@section('banner')--}}
{{--    <h1>My Blog</h1>--}}
{{--@endsection--}}

{{--@section('content')--}}

{{--@endsection--}}
</x-layout>
