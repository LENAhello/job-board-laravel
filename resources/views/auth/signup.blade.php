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
