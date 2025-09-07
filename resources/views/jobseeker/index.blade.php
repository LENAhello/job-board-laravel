<x-layout>

    {{--
        TODO: 
        * search field and filter option
        * maybe in component folder to use in job publisher as well
        * add the other props (category, salary, posted_at)
    --}}
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full mt-4">
        @foreach($jobs as $job)
        <div class="shadow-md rounded-xl p-6 border-2 border-[#CEABB0] hover:shadow-xl transition duration-200">
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
        </div>
        @endforeach
    </div>    
</x-layout>