<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
   
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    @include('layouts.header')

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm mt-12">
        <div class="flex justify-center mb-6">
            <!-- Font Awesome Icon -->
            <i class="fas fa-sign-in-alt text-4xl text-indigo-600 animate-bounce"></i>
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="you@example.com">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="••••••••">
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-md hover:bg-indigo-700 transition duration-200">Login</button>
        </form>

        <!-- Login with Google Button -->
        <div class="text-center mt-4">
            <a href="{{ route('login.google') }}" class="flex items-center justify-center space-x-2 text-indigo-600 hover:text-indigo-500">
                <i class="fab fa-google text-lg"></i> <!-- Google Icon without bold -->
                <span class="font-semibold">Login with Google</span>
            </a>
        </div>

        <!-- Create Account Link -->
        <div class="text-center mt-4">
            <span class="text-gray-600">Don't have an account?</span>
            <a href="{{ route('register.create') }}" class="text-indigo-600 hover:text-indigo-500 font-semibold">Create Account</a>
        </div>
    </div>
</body>
</html>
