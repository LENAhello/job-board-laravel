<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center items-center h-screen bg-gradient-to-bl from-primary/90 to-secondary/90">
    <div class="w-[90%] max-w-lg bg-white/10 backdrop-blur-md rounded-2xl p-8 shadow-2xl text-center">
        
        <!-- Heading -->
        <h1 class="text-4xl font-extrabold text-white drop-shadow mb-4">
            Take your career to the next level
        </h1>
        <p class="text-lg text-white mb-8">
            Sign up today and get started
        </p>

        <!-- Buttons -->
        <div class="flex flex-col space-y-4">
            <!-- Job Seeker -->
            <a href="{{ route('auth.signup') }}"
               class="flex items-center justify-center space-x-2 bg-primary hover:bg-primary/90 text-secondary font-semibold py-3 rounded-xl shadow-md transition duration-300">
               <svg xmlns="http://www.w3.org/2000/svg" 
               fill="none" viewBox="0 0 24 24" 
               stroke-width="1.5" stroke="currentColor" 
               class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M12 4.5v15m7.5-7.5h-15"/>
                </svg>
                <span>Sign Up</span>
            </a>

            <!-- Job Publisher -->
            <a href="{{ route('auth.login') }}"
               class="flex items-center justify-center space-x-2 bg-secondary hover:bg-secondary/80 text-primary font-semibold py-3 rounded-xl shadow-md transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" 
                     fill="none" viewBox="0 0 24 24" 
                     stroke-width="1.5" stroke="currentColor" 
                     class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                          d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 1115 0v.75H4.5v-.75z"/>
                </svg> 
                <span>Log In</span>
            </a>
        </div>

        <!-- Accent Call to Action -->
        <div class="mt-6">
            <a href="/jobs"
               class="inline-block px-6 py-2 bg-accent text-primary font-semibold rounded-full shadow-md hover:bg-accent/90 transition duration-300">
                Browse Jobs
            </a>
        </div>
    </div>
</body>
</html>
