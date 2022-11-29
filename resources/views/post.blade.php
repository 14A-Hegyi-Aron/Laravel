<x-layout>

    <article>
        <h1>{{ $post->title }}</h1>

        <p>
            Kategória:
            <a href="/categories/{{ $post->category->slug }}">
                {{ $post->category->name }}</a>
        </p>
        <p>
            Szerző:
            <a href="/authors/{{ $post->author->id }}">
                {{ $post->author->name }}</a>
        </p>

        {!! $post->body !!}
    </article>

</x-layout>
