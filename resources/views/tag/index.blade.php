<x-layout>
    <h1>Tags</h1>

    @foreach ($tags as $tag)
        <h1>{{ $tag->title }}</h1>
    @endforeach
</x-layout>