<x-layout>

    <div class="grid grid-cols-3 gap-4 p-2">
        @foreach ($posts as $post)
            <div class="border rounded-2xl p-4 bg-pink-50 shadow">
                <h1 class="text-2xl font-bold text-pink-700">{{ $post->title }}</h1>
                <p class="text-gray-700">{{ $post->body }}</p>
            </div>
        @endforeach
    </div>

    {{ $posts->links() }}
</x-layout>