<x-layout>

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    @foreach ($post->comments as $comment)
        <p>{{ $comment->content }} : {{ $comment->author }}</p>
    @endforeach
</x-layout>