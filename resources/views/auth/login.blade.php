<x-layout>

    <body class="flex items-center justify-center min-h-screen bg-gradient-to-tr from-secondary/90 to-primary/90">
        <!-- Back button -->
        <div class="w-full flex items-start">
            <a href="/" class="rounded-xl py-2 px-4 mt-2 font-semibold text-white"><span class="text-xl font-extrabold mr-2">&#8592;</span> Back</a>
        </div>
        <div class="w-full max-w-md bg-white/10 backdrop-blur-lg rounded-2xl p-8 shadow-2xl">
            <!-- Header -->
            <h2 class="text-3xl font-bold text-center text-secondary mb-6">
                Welcome Back
            </h2>
    
            <!-- Form -->
            <form method="POST" {{-- action="{{ route('login') }}" --}} class="space-y-5">
                @csrf
    
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-primary/80 mb-1">Email</label>
                    <input type="email" name="email" required
                           class="w-full px-4 py-2 rounded-lg bg-white/80 text-gray-900 border border-secondary/30 focus:ring-2 focus:ring-accent focus:outline-none">
                </div>
    
                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-primary/80 mb-1">Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-2 rounded-lg bg-white/80 text-gray-900 border border-secondary/30 focus:ring-2 focus:ring-accent focus:outline-none">
                </div>
    
                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center text-sm text-primary/80">
                        <input type="checkbox" name="remember" class="mr-2 rounded border-secondary/30 text-accent focus:ring-accent">
                        Remember Me
                    </label>
                    <a {{-- href="{{ route('password.request') }}" --}} class="text-sm text-accent hover:underline">Forgot password?</a>
                </div>
    
                <!-- Submit -->
                <button type="submit"
                        class="w-full py-3 bg-primary text-secondary font-semibold rounded-lg shadow-md hover:bg-primary/90 transition">
                    Log In
                </button>
            </form>
    
            {{-- <!-- Footer -->
            <p class="mt-6 text-center text-sm text-secondary/80">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-accent hover:underline">Sign up</a>
            </p> --}}
        </div>
    </body>
</x-layout>    