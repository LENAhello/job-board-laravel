<x-layout>

    <h2 class="text-3xl font-bold text-start my-4"> {{$remoteCount}} Remote Jobs</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full my-4 ">
        @foreach ($jobs as $job )
        <div class="shadow-md rounded-xl p-6 border-2 border-[#CEABB0] hover:shadow-xl transition duration-200 flex flex-col justify-between">
            <h2 class="text-xl font-semibold text-[#5B3751] mb-2">{{ $job['title'] }}</h2>
            <p class="italic text-[#5B3751] mb-2">
                {{ $job['company'] }} -
                <span class="font-medium {{ $job['is_remote'] ? 'text-green-700' : 'text-red-700' }}">
                    {{ $job['is_remote'] ? 'Remote' : 'On-site' }}
                </span>
            </p>
            <div class="flex justify-between items-end">
                <a href="{{ route('jobs.showCategory', $job->category->id)}}" class="px-2 py-1 border-2 border-[#CEABB0]/50 bg-white text-[#CEABB0]  text-sm font-semibold rounded-lg w-[30%] text-center">
                    {{ $job->category->name }}
                </a>
                <a href="{{ route('jobs.show', $job['id']) }}" class="px-4 py-2 rounded-xl bg-[#CEABB0] text-white font-bold text-center mt-2 self-end">View Job</a>
            </div>
        </div>
        @endforeach
    </div> 
</x-layout>