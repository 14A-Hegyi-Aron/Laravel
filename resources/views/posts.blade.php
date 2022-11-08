<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'even' : 'odd' }}">
            <h1><a style="text-decoration: none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <p>{{ $post->lead }}</p>
        </article>
    @endforeach
</x-layout>

