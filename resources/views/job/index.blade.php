<x-layout>

    <h1>Jobs</h1>

    @foreach ($jobs as $job)
        <div>{{ $job['title'] }}</div>
    @endforeach
</x-layout>