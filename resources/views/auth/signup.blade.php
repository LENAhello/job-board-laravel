<x-layout>
    <body class="flex items-center justify-center min-h-screen bg-gradient-to-tr from-secondary/90 to-primary/90">
        <!-- Back button -->
        <div class="w-full flex items-start">
            <a href="/" class="rounded-xl py-2 px-4 mt-2 font-semibold text-white"><span class="text-xl font-extrabold mr-2">&#8592;</span> Back</a>
        </div>
        <div class="w-full max-w-md bg-white/10 backdrop-blur-lg rounded-2xl p-8 shadow-2xl">
            <!-- Header -->
            <h2 class="text-3xl font-bold text-center text-secondary mb-6">
                Create an Account
            </h2>
    
            <!-- Form -->
            <form method="POST" action="{{ route('auth.signup') }}" class="space-y-5">
                @csrf
    
                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-primary/80 mb-1">Full Name</label>
                    <input type="text" name="name" required
                           class="w-full px-4 py-2 rounded-lg bg-white/80 text-gray-900 border border-secondary/30 focus:ring-2 focus:ring-accent focus:outline-none">
                    @error('name')
                        <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                           <x-warning-icon/> 
                           <p>{{ $message }}</p>
                       </div>
                    @enderror
                </div>
    
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-primary/80 mb-1">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 rounded-lg bg-white/80 text-gray-900 border border-secondary/30 focus:ring-2 focus:ring-accent focus:outline-none">
                    @error('email')
                        <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                           <x-warning-icon/> 
                           <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
    
                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-primary/80 mb-1">Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-2 rounded-lg bg-white/80 text-gray-900 border border-secondary/30 focus:ring-2 focus:ring-accent focus:outline-none">
                    @error('password')
                        <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                           <x-warning-icon/> 
                           <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
    
                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-medium text-primary/80 mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                           class="w-full px-4 py-2 rounded-lg bg-white/80 text-gray-900 border border-secondary/30 focus:ring-2 focus:ring-accent focus:outline-none">
                    @error('password_confirmation')
                        <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                           <x-warning-icon/> 
                           <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>

    
                <!-- Role -->
                <div class="mb-4">
                    <label for="role" class="block text-sm font-medium text-primary mb-2">
                        Choose Your Role
                    </label>
                    <div class="relative">
                        <select id="role" name="role" required
                            class="block w-full rounded-lg bg-secondary/70 text-white py-2 px-4 focus:ring-2 focus:ring-accent ring-2 ring-primary focus:outline-none appearance-none shadow-md">
                            <option class="text-gray-800" value="job_seeker">Job Seeker</option>
                            <option class="text-gray-800" value="admin">Admin</option>
                        </select>
                        <!-- dropdown icon -->
                        <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit"
                        class="w-full py-3 bg-accent text-primary font-semibold rounded-lg shadow-md hover:bg-accent/90 transition">
                    Sign Up
                </button>
            </form>
    
            {{-- <!-- Footer -->
            <p class="mt-6 text-center text-sm text-secondary/80">
                Already have an account?
                <a href="{{ route('login') }}" class="text-accent hover:underline">Log in</a>
            </p> --}}
        </div>
    </body>
</x-layout>
