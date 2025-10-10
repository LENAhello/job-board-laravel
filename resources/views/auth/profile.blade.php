<x-layout>
    <div class="max-w-5xl mx-auto py-10 space-y-10 size-full">
       
        <div class="flex justify-between items-center">
            <div class="text-start">
                <h1 class="text-2xl font-bold text-primary">Welcome, {{ $user->name }}</h1>
            </div>
            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('jobs.create') }}"
                        class="bg-primary/20 text-primary p-2 rounded-lg font-semibold">
                        Create New Job
                    </a>
                @endif
            @endauth
        </div>

        {{-- Jobs posted by user --}}
        @if ($user->role === 'admin')
        
        <div>
            @if($user->jobs->isEmpty())
            <p class="text-gray-500">You haven’t posted any jobs yet.</p>
            @else
            <h2 class="text-xl font-semibold text-primary mb-4">Your Posted Jobs</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($user->jobs as $job)
                        <div class="bg-white shadow rounded-xl p-5 border border-gray-100">
                            <h3 class="text-xl font-bold text-primary">{{ $job->title }}</h3>
                            <p class="text-gray-600">{{ $job->company }}</p>
                            <p class="text-sm text-gray-400">{{ $job->posted_at }}</p>
                            <a href="{{ route('jobs.show', $job->id) }}" class="text-secondary font-medium mt-2 inline-block hover:underline">View Job</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        @else

        <div>
            @if($user)
            <p class="text-gray-500 mb-4">You haven’t applied to any jobs yet.</p>
            <a href=" {{ route('jobs.index') }}" class="underline text-primary decoration-2 font-bold mt-2 hover:text-shadow-primary/50 hover:text-shadow-md/20">Apply Now</a>
            @else
            <h2 class="text-2xl font-semibold text-primary mb-4">Your Applications</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($user->applications as $application)
                        <div class="bg-white shadow rounded-xl p-5 border border-gray-100">
                            <h3 class="text-xl font-bold text-primary">{{ $application->job->title }}</h3>
                            <p class="text-gray-600">{{ $application->job->company }}</p>
                            <p class="text-sm text-gray-400">Applied on {{ $application->created_at->format('M d, Y') }}</p>
                            <a href="{{ route('jobs.show', $application->job->id) }}" class="text-accent font-medium mt-2 inline-block hover:underline">View Job</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        @endif

        {{-- Jobs the user applied to --}}
        {{-- <div>
            <h2 class="text-2xl font-semibold text-primary mb-4">Your Applications</h2>
            @if($user->applications->isEmpty())
                <p class="text-gray-500">You haven’t applied to any jobs yet.</p>
            @else
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($user->applications as $application)
                        <div class="bg-white shadow rounded-xl p-5 border border-gray-100">
                            <h3 class="text-xl font-bold text-primary">{{ $application->job->title }}</h3>
                            <p class="text-gray-600">{{ $application->job->company }}</p>
                            <p class="text-sm text-gray-400">Applied on {{ $application->created_at->format('M d, Y') }}</p>
                            <a href="{{ route('jobs.show', $application->job->id) }}" class="text-accent font-medium mt-2 inline-block hover:underline">View Job</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div> --}}
    </div>
</x-layout>