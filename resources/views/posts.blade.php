<x-layout>

    @foreach ($posts as $post)
        {{-- @dd($loop) --}}
        <article class="{{ $loop->even ? 'paros' : 'ptln' }}">
            <h1>
                <a href='posts/{{ $post->id }}'>{{ $post->title }}</a>
            </h1>
            <p>{{ $post->lead }}</p>
        </article>
    @endforeach

</x-layout>
