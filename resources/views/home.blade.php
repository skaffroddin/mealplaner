<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background-light text-text-main dark:bg-background-dark dark:text-white">
    @include('layouts.header')

    <main class="mt-40 mx-auto container">
        <!-- Banner section -->
        <div class="flex gap-10 items-center">
            <div>
                <h1 class="text-6xl font-semibold">Recipe and Meal Plan App with AI</h1>
                <p class="mt-4 text-xl">Save time in planning meals according to available ingredients and help users to maintain a healthy, customized diet.</p>
                <div class="mt-6">
                    <button type="button" class="bg-primary text-white py-2 px-4 rounded hover:bg-accent-1 transition">Try for Free</button>
                    <button type="button" class="button focus:outline-none">
                        <svg class="w-4 h-4 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
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

        <!-- Don't Forget section -->
        <div class="mt-10 flex flex-col md:flex-row gap-20 justify-between">
            <div class="md:w-1/2">
                <div class="mt-28">
                    <h2 class="text-2xl font-semibold text-[#171543]">Don't Forget Your Nutrients</h2>
                    <p class="mt-2 text-gray-600">Replenish the nutrients you need in a day with our tailored plans.</p>
                </div>
                <div class="mt-5 flex flex-wrap gap-3">
                    <button type="button" class="bg-secondary text-white py-2.5 px-5 text-sm font-medium rounded-full">Calories</button>
                    <button type="button" class="bg-secondary text-white py-2.5 px-5 text-sm font-medium rounded-full">Carbohydrates</button>
                    <button type="button" class="bg-secondary text-white py-2.5 px-5 text-sm font-medium rounded-full">Proteins</button>
                    <button type="button" class="bg-secondary text-white py-2.5 px-5 text-sm font-medium rounded-full">Fats</button>
                </div>
            </div>

            <!-- Nutritional Stats Cards -->
            <div class="md:w-1/2">
                <div class="flex flex-col gap-5">
                    <div class="card">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Required Recipe</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore recipes based on your dietary needs.</p>
                        <div class="flex gap-3 mt-5">
                            <button type="button" class="button">7:00</button>
                            <button type="button" class="button">10:00</button>
                            <button type="button" class="button">13:00</button>
                            <button type="button" class="button">18:00</button>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily Nutritional Needs</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Track your daily nutrient intake effortlessly.</p>
                        <div class="my-10">
                            <div class="my-2">
                                <div class="flex justify-between">
                                    <div class="mb-1 text-lg font-medium dark:text-white">Calories</div>
                                    <div class="mb-1 text-lg font-medium dark:text-white">1100/2000</div>
                                </div>
                                <div class="w-full h-6 bg-gray-200 rounded-lg dark:bg-gray-700">
                                    <div class="h-6 progress-bar rounded-lg" style="width: 55%;"></div> <!-- No need to specify color here; it uses the global styles -->
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="flex justify-between">
                                    <div class="mb-1 text-lg font-medium dark:text-white">Carbohydrates</div>
                                    <div class="mb-1 text-lg font-medium dark:text-white">300/325</div>
                                </div>
                                <div class="w-full h-6 bg-gray-200 rounded-lg dark:bg-gray-700">
                                    <div class="h-6 progress-bar rounded-lg" style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="flex justify-between">
                                    <div class="mb-1 text-lg font-medium dark:text-white">Proteins</div>
                                    <div class="mb-1 text-lg font-medium dark:text-white">10/75</div>
                                </div>
                                <div class="w-full h-6 bg-gray-200 rounded-lg dark:bg-gray-700">
                                    <div class="h-6 progress-bar rounded-lg" style="width: 13%;"></div>
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
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nutritional Tracking</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Track your nutrients easily, so you never miss any!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>
