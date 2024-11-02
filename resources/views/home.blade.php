<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
        /* Additional CSS styles can be defined here or in your app.css */
        body {
            background-color: #f7fafc; /* Light gray for light mode */
            color: #1a202c; /* Dark gray for text */
        }
        body.dark {
            background-color: #2d3748; /* Dark gray for dark mode */
            color: #f7fafc; /* Light gray for text in dark mode */
        }
        .header {
            background-color: #ff7f50; /* Coral color for the header */
            color: white; /* White text in header */
        }
        .button {
            background-color: #ff7f50; /* Coral color for buttons */
            color: white; /* White text on buttons */
            border-radius: 9999px; /* Full rounded */
        }
        .nutrient-button {
            background-color: white;
            color: #1a202c; /* Dark gray for text */
            border: 1px solid #cbd5e0; /* Light gray border */
        }
        .nutrient-button:hover {
            background-color: #edf2f7; /* Light gray on hover */
        }
        .card {
            background-color: white; /* White background for cards */
            border: 1px solid #e2e8f0; /* Light gray border */
            border-radius: 0.5rem; /* Rounded corners */
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .features-title {
            color: #171543; /* Dark blue for feature titles */
        }
        .progress-bar {
            background-color: #ff7f50; /* Coral for progress bars */
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-white">
    @include('layouts.header')

    <main class="mt-40 mx-auto container">
        <!-- Banner section -->
        <div class="flex gap-10 items-center">
            <div>
                <h1 class="text-6xl font-semibold">Recipe and Meal Plan App with AI</h1>
                <p class="mt-4 text-xl">Save time in planning meals according to available ingredients and help users to maintain a healthy, customized diet.</p>
                <div class="mt-6">
                    <button type="button" class="button text-sm px-5 py-2.5 me-2 mb-2">Try for Free</button>
                    <button type="button" class="button focus:outline-none text-sm p-2.5 text-center inline-flex items-center me-2 mb-2">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </button>
                </div>
            </div>
            <div>
                <img src="https://www.metropolisindia.com/upgrade/blog/upload/2023/04/ezgif.com-gif-maker-32.jpg" alt="Healthy Meal" class="rounded-xl shadow-lg">
            </div>
        </div>

        <!-- Don't forget section -->
        <div class="mt-10 flex flex-col md:flex-row gap-20 justify-between">
            <div class="md:w-1/2">
                <div class="mt-28">
                    <h2 class="text-2xl font-semibold text-[#171543]">Don't Forget Your Nutrients</h2>
                    <p class="mt-2 text-gray-600">Replenish the nutrients you need in a day with our tailored plans.</p>
                </div>
                <div class="mt-5 flex flex-wrap gap-3">
                    <button type="button" class="nutrient-button py-2.5 px-5 text-sm font-medium rounded-full">Calories</button>
                    <button type="button" class="nutrient-button py-2.5 px-5 text-sm font-medium rounded-full">Carbohydrates</button>
                    <button type="button" class="nutrient-button py-2.5 px-5 text-sm font-medium rounded-full">Proteins</button>
                    <button type="button" class="nutrient-button py-2.5 px-5 text-sm font-medium rounded-full">Fats</button>
                </div>
            </div>

            <!-- Nutritional Stats Cards -->
            <div class="md:w-1/2">
                <div class="flex flex-col gap-5">
                    <div class="card p-5">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Required Recipe</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore recipes based on your dietary needs.</p>
                        <div class="flex gap-3 mt-5">
                            <button type="button" class="button font-medium rounded-full text-sm px-5 py-2.5">7:00</button>
                            <button type="button" class="button font-medium rounded-full text-sm px-5 py-2.5">10:00</button>
                            <button type="button" class="button font-medium rounded-full text-sm px-5 py-2.5">13:00</button>
                            <button type="button" class="button font-medium rounded-full text-sm px-5 py-2.5">18:00</button>
                        </div>
                    </div>
                    <div class="card p-5">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily Nutritional Needs</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Track your daily nutrient intake effortlessly.</p>
                        <div class="my-10">
                            <div class="my-2">
                                <div class="flex justify-between">
                                    <div class="mb-1 text-lg font-medium dark:text-white">Calories</div>
                                    <div class="mb-1 text-lg font-medium dark:text-white">1100/2000</div>
                                </div>
                                <div class="w-full h-6 bg-gray-200 rounded-lg dark:bg-gray-700">
                                    <div class="h-6 progress-bar rounded-lg" style="width: 55%"></div>
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="flex justify-between">
                                    <div class="mb-1 text-lg font-medium dark:text-white">Carbohydrates</div>
                                    <div class="mb-1 text-lg font-medium dark:text-white">300/325</div>
                                </div>
                                <div class="w-full h-6 bg-gray-200 rounded-lg dark:bg-gray-700">
                                    <div class="h-6 progress-bar rounded-lg" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="flex justify-between">
                                    <div class="mb-1 text-lg font-medium dark:text-white">Proteins</div>
                                    <div class="mb-1 text-lg font-medium dark:text-white">10/75</div>
                                </div>
                                <div class="w-full h-6 bg-gray-200 rounded-lg dark:bg-gray-700">
                                    <div class="h-6 progress-bar rounded-lg" style="width: 13%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="mt-14">
            <h2 class="text-3xl font-bold text-center mb-10">Our Features</h2>
            <div class="flex flex-col md:flex-row gap-10 justify-center">
                <div class="max-w-sm card">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Recipe Search by Ingredients</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Add some ingredients, and I will find you the perfect recipe!</p>
                    </div>
                </div>
                <div class="max-w-sm card">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Personalized Meal Plans</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Plan your meals easily with our customized meal plans.</p>
                    </div>
                </div>
                <div class="max-w-sm card">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Health Tracking</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Keep track of your daily nutritional intake and goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>
