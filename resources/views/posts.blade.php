<x-layout>
    @foreach ($posts as $post)
        <article id="app">
            <test-component></test-component>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h1>

            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
    <script src="/js/app.js"></script>
</x-layout>
{{--<script>--}}
{{--    import TestComponent--}}
{{--    export default {--}}
{{--        components: {TestComponent}--}}
{{--    }--}}
{{--</script>--}}
