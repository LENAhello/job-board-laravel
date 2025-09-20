<x-layout>

    {{-- 
        TODO: 
        * Make clickable category tag to show all jobs that has the same category
        * Make the same logic for on-site / remote tag
        * Add apply button if needed and if i have energi for that!!!!
    --}}
    
    <div class="w-full flex items-start justify-between">
        <a href="/jobs" class="rounded-xl py-2 px-4 mt-2 font-semibold"><span class="text-xl font-extrabold mr-2">&#8592;</span> Back</a>
    </div>
    @if(session('success'))
    <div class="mt-2 flex items-center space-x-2 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg">
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
    @endif
    <div class="max-w-3xl mx-auto mt-8 bg-white shadow-lg rounded-2xl p-6">
        
    <!-- Job Title + Company -->
    <div class="mb-4">
        <h1 class="text-2xl font-bold text-gray-900">{{ $job->title }}</h1>
        <p class="text-lg text-gray-600">{{ $job->company }}</p>
    </div>

    <!-- Job Meta Info -->
    <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
        <a href="{{ $job->is_remote ? route('jobs.remote') : route('jobs.onsite') }}" class="px-2 py-1 bg-gray-100 rounded-lg">
            {{ $job->is_remote ? 'Remote' : 'On-site' }}
        </a>
        <a href="{{ route('jobs.showCategory', $job->category->id)}}" class="px-2 py-1 bg-blue-100 text-blue-800 rounded-lg">
            Category: {{ $job->category->name }}
        </a>
        <span>
            Posted: {{ $job->posted_at}}
        </span>
    </div>

    <!-- Salary -->
    <div class="mb-6">
        <p class="text-lg font-semibold text-green-600">
            💰 {{ $job->salary ? '$' . $job->salary : 'Not specified' }}
        </p>
    </div>

    <!-- Description -->
    <div class="prose max-w-none text-gray-700 mb-6">
        {{$job->description}}
    </div>

    <!-- Apply Button Hello -->
    {{-- <div class="mt-6">
        <a href="{{ route('jobs.apply', $job->id) }}"
           class="inline-block px-6 py-3 bg-indigo-600 text-white font-medium rounded-xl shadow hover:bg-indigo-700 transition">
           Apply Now
        </a>
    </div> --}}

</div>
</x-layout>
