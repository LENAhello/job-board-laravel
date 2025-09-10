<x-layout>

    {{--
        TODO: 
        * search field and filter option
        * maybe in component folder to use in job publisher as well
        * add the other props (category, salary, posted_at)
    --}}
    <div class="w-full flex items-start">
        <a href="/" class="rounded-xl py-2 px-4 mt-2 font-semibold"><span class="text-xl font-extrabold mr-2">&#8592;</span> Back</a>
    </div>
    <div class="flex flex-col gap-5">
        @foreach($jobs as $job)
        <div class="shadow-md rounded-xl p-6 border-2 border-[#CEABB0] hover:shadow-xl transition duration-200 flex flex-col justify-between">
            <h2 class="text-xl font-semibold text-[#5B3751] mb-2">{{ $job['title'] }}</h2>
            <p class="italic text-[#5B3751] mb-2">
                {{ $job['company'] }} -
                <span class="font-medium {{ $job['is_remote'] ? 'text-green-700' : 'text-red-700' }}">
                    {{ $job['is_remote'] ? 'Remote' : 'On-site' }}
                </span>
            </p>
            <p class="text-sm text-[#5B3751]/80 leading-relaxed">
                {{ $job['description'] }}
            </p>
            <a href="{{ route('jobs.show', $job['id']) }}" class="px-4 py-2 rounded-xl bg-[#CEABB0] text-white font-bold text-center mt-2 self-end">More Details</a>
        </div>
        @endforeach
    </div>    

    <div class="my-4">
        {{ $jobs->links() }}
    </div>
</x-layout>