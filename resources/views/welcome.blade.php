<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center items-center h-screen bg-linear-to-bl to-[#ceabb0] from-[#5B3751]">
    
    <div class="h-[40%] p-4 rounded-xl flex flex-col items-center justify-evenly">
        <h1 class="text-3xl font-bold text-[#e0e2dd]">Take your career to the next level</h1>
        <p class="text-xl">Please choose your role</p>
        
        <div class="flex  w-[80%] justify-between">
            <a href="/jobs" class="bg-[#5B3751] py-2 px-3 rounded-3xl text-[#e0e2dd] font-medium mr-2">I am a Job Seeker</a>
            <a href="/job/create" class="bg-[#e0e2dd] py-2 px-3 rounded-3xl text-[#5B3751] font-medium">I am a Job Publisher</a>
        </div>
    </div>

</body>
</html>
