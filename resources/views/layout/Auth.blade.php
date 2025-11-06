<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | KerjainAjaa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-b from-gray-900 to-gray-800 dark:bg-gray-900">

    <div class="flex flex-col items-center justify-center min-h-screen px-6 py-8 mx-auto">
        <a href="/"
            class="group flex items-center mb-6 text-3xl font-extrabold italic text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 transition-all duration-500 hover:scale-105">
            <span class="group-hover:tracking-wider">KerjainAjaa</span>
        </a>


        <div
            class="w-full bg-gradient-to-b from-gray-900 to-gray-800 rounded-lg shadow dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
