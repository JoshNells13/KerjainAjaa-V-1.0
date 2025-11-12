<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | KerjainAjaa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-b from-gray-900 to-gray-800 dark:bg-gray-900 text-gray-900 dark:text-white min-h-screen">

    <!-- Navbar -->
    <nav class="sticky top-0 bg-gradient-to-b from-gray-900 to-gray-800 dark:bg-gray-800 border-gray-700 z-50">
        <div class="max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <!-- Toggle Button (Mobile) -->
                <button id="sidebarToggle"
                    class="md:hidden p-2 text-white bg-gray-800 rounded-lg hover:bg-gray-700 transition">
                    <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>

                <a href="{{ route('ShowDashboard') }}"
                    class="text-2xl font-extrabold italic bg-gradient-to-r from-sky-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                    KerjainAjaa
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <span class="hidden sm:inline text-white dark:text-gray-300">
                    Hello, <strong>{{ Auth::user()->name ?? 'Guest' }}</strong>!
                </span>
                <a data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                    class="cursor-pointer px-3 py-2 rounded-lg bg-gradient-to-r from-pink-500 to-purple-500 text-white hover:opacity-90">
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside id="sidebar"
        class="fixed top-0 left-0 h-screen w-64 bg-gradient-to-b from-gray-900 to-gray-800 text-gray-100 flex flex-col justify-between shadow-xl transform -translate-x-full transition-transform duration-300 md:translate-x-0 z-40">
        <div class="overflow-y-auto mt-6 space-y-1">
            <ul>
                <li>
                    <a href="{{ route('ShowDashboard') }}"
                        class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 hover:bg-gray-700 group
            {{ request()->routeIs('ShowDashboard') ? 'bg-gray-700 text-white' : 'text-gray-300' }}">
                        <i class="fa-solid fa-house mr-3 text-sky-400 group-hover:scale-110 transition-transform"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ShowTaskPage') }}"
                        class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 hover:bg-gray-700 group
            {{ request()->routeIs('ShowTaskPage') ? 'bg-gray-700 text-white' : 'text-gray-300' }}">
                        <i
                            class="fa-solid fa-tasks mr-3 text-emerald-400 group-hover:scale-110 transition-transform"></i>
                        <span>My Task</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ShowCategoryPage') }}"
                        class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 hover:bg-gray-700 group
            {{ request()->routeIs('ShowCategoryPage') ? 'bg-gray-700 text-white' : 'text-gray-300' }}">
                        <i
                            class="fa-solid fa-layer-group mr-3 text-blue-400 group-hover:scale-110 transition-transform"></i>
                        <span>My Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ShowTaskCompleted') }}"
                        class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 hover:bg-gray-700 group
            {{ request()->routeIs('ShowTaskCompleted') ? 'bg-gray-700 text-white' : 'text-gray-300' }}">
                        <i
                            class="fa-solid fa-check-circle mr-3 text-purple-400 group-hover:scale-110 transition-transform"></i>
                        <span>Task Completed</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 hover:bg-gray-700 group">
                        <i class="fa-solid fa-gear mr-3 text-amber-400 group-hover:rotate-90 transition-transform"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Overlay -->
    <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-30 md:hidden"></div>

    <!-- Modal Logout -->
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 hover:bg-gray-200 rounded-lg w-8 h-8 flex justify-center items-center dark:hover:bg-gray-600"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        Logout?</h3>
                    <a href="/logout" data-modal-hide="popup-modal"
                        class="text-white bg-red-600 hover:bg-red-800 rounded-lg text-sm inline-flex items-center px-5 py-2.5">
                        Yes, I'm sure
                    </a>
                    <button data-modal-hide="popup-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Layout -->
    <div class="flex flex-col md:flex-row">
        <main class="flex-1 p-6 md:ml-64 transition-all duration-300">
            @yield('content')

        </main>
    </div>

    <!-- Footer -->


    <!-- Sidebar Script -->
    <script>
        const sidebar = document.getElementById("sidebar");
        const toggle = document.getElementById("sidebarToggle");
        const overlay = document.getElementById("overlay");
        const menuIcon = document.getElementById("menuIcon");

        toggle.addEventListener("click", () => {
            const hidden = sidebar.classList.contains("-translate-x-full");
            sidebar.classList.toggle("-translate-x-full");
            overlay.classList.toggle("hidden");

            // Ubah ikon jadi X
            if (hidden) {
                menuIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>';
            } else {
                menuIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>';
            }
        });

        overlay.addEventListener("click", () => {
            sidebar.classList.add("-translate-x-full");
            overlay.classList.add("hidden");
            menuIcon.innerHTML =
                '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>';
        });
    </script>

    <script src="https://kit.fontawesome.com/a2d9d6cfd4.js" crossorigin="anonymous"></script>
</body>

</html>
