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
    @if(session('success'))
    <div class="my-2 flex items-center space-x-2 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg">
        <!-- Success Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             fill="none" viewBox="0 0 24 24" 
             stroke-width="2" stroke="currentColor" 
             class="w-6 h-6 text-green-600">
          <path stroke-linecap="round" stroke-linejoin="round" 
                d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <!-- Message -->
        <span class="font-medium">{{ session('success') }}</span>
    </div>
    @elseif(session('error'))
    <div class="my-2 flex items-center space-x-2 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg">
        <!-- Success Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" 
            fill="none" viewBox="0 0 24 24" 
            stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" 
            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
        </svg>
          
        <!-- Message -->
        <span class="font-medium">{{ session('error') }}</span>
    </div>
    @endif
    <div class="flex flex-col gap-5">
        @foreach($jobs as $job)
        <div class="shadow-md rounded-xl p-6 border-2 border-secondary hover:shadow-xl transition duration-200 flex flex-col justify-between">
            <h2 class="text-xl font-semibold text-primary mb-2">{{ $job['title'] }}</h2>
            <p class="italic text-primary mb-2">
                {{ $job['company'] }} -
                <span class="font-medium {{ $job['is_remote'] ? 'text-green-700' : 'text-red-700' }}">
                    {{ $job['is_remote'] ? 'Remote' : 'On-site' }}
                </span>
            </p>
            <p class="text-sm text-primary/80 leading-relaxed">
                {{ $job['description'] }}
            </p>
            <div class="flex justify-between items-end">
                <a href="{{ route('jobs.showCategory', $job->category->id)}}" class="px-2 py-1 border-2 border-secondary/50 bg-white text-secondary text-sm font-semibold rounded-lg text-center">
                    {{ $job->category->name }}
                </a>
                <a href="{{ route('jobs.show', $job['id']) }}" class="px-4 py-2 rounded-xl bg-secondary w-[20%] text-white font-bold text-center mt-2 self-end">More Details</a>
            </div>
        </div>
        @endforeach
    </div>    

    <div class="my-4">
        {{ $jobs->links() }}
    </div>
</x-layout>