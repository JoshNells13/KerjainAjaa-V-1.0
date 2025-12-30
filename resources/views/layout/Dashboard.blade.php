<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | KerjainAjaa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        .animate-slide-in {
            animation: slideIn 0.3s ease-out forwards;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">

    <!-- Top Navbar -->
    <nav class=" fixed top-0 left-0 right-0 z-50 glass-effect border-b border-purple-100 shadow-sm">
        <div class=" px-4 lg:px-6 py-4">
            <div class=" flex items-center justify-between">
                <!-- Left Section -->
                <div class="flex items-center gap-4">
                    <!-- Mobile Menu Toggle -->
                    <button id="sidebarToggle"
                        class="lg:hidden p-2 rounded-xl bg-purple-50 text-purple-600 hover:bg-purple-100 transition-colors">
                        <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <!-- Logo -->
                    <a href="{{ route('ShowDashboard') }}" class="flex items-center gap-2 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                            <span class="text-white font-bold text-xl">K</span>
                        </div>
                        <span class="text-xl font-bold gradient-text hidden sm:block">KerjainAjaa</span>
                    </a>
                </div>

                <!-- Right Section -->
                <div class="flex items-center gap-3">
                    <!-- User Info -->
                    <div class="hidden md:flex items-center gap-3 px-4 py-2 bg-purple-50 rounded-full">
                        <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-semibold text-sm">{{ substr(Auth::user()->name ?? 'G', 0, 1) }}</span>
                        </div>
                        <span class="text-gray-700 font-medium">{{ Auth::user()->name ?? 'Guest' }}</span>
                    </div>

                    <!-- Logout Button -->
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                        class="px-4 py-2 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-full font-medium hover:shadow-lg hover:scale-105 transform transition-all duration-200 text-sm">
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside id="sidebar"
        class="fixed top-0 left-0 h-full w-72 bg-white border-r border-purple-100 shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-40 overflow-y-auto">

        <!-- Sidebar Header -->
        <div class="p-6 border-b border-purple-100 mt-20 lg:mt-0">
            {{-- <div class="flex items-center gap-3 lg:hidden mb-6">
                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center">
                    <span class="text-white font-bold text-xl">K</span>
                </div>
                <span class="text-xl font-bold gradient-text">KerjainAjaa</span>
            </div>

            <div class="flex items-center gap-3 p-3 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl">
                <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <span class="text-white font-bold text-lg">{{ substr(Auth::user()->name ?? 'G', 0, 1) }}</span>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-gray-900 font-semibold truncate">{{ Auth::user()->name ?? 'Guest' }}</p>
                    <p class="text-gray-500 text-sm truncate">{{ Auth::user()->email ?? 'guest@email.com' }}</p>
                </div>
            </div> --}}
        </div>

        <!-- Navigation Menu -->
        <nav class=" p-8 space-y-2">
            <div class="px-3 mb-2">
                <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Menu</span>
            </div>

            <a href="{{ route('ShowDashboard') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 group
                {{ request()->routeIs('ShowDashboard') ? 'bg-gradient-to-r from-purple-500 to-purple-600 text-white shadow-lg shadow-purple-200' : 'text-gray-700 hover:bg-purple-50' }}">
                <div class="w-10 h-10 rounded-lg flex items-center justify-center
                    {{ request()->routeIs('ShowDashboard') ? 'bg-white/20' : 'bg-purple-100 text-purple-600' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <span class="font-medium">Dashboard</span>
            </a>

            <a href="{{ route('ShowTaskPage') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 group
                {{ request()->routeIs('ShowTaskPage') ? 'bg-gradient-to-r from-purple-500 to-purple-600 text-white shadow-lg shadow-purple-200' : 'text-gray-700 hover:bg-purple-50' }}">
                <div class="w-10 h-10 rounded-lg flex items-center justify-center
                    {{ request()->routeIs('ShowTaskPage') ? 'bg-white/20' : 'bg-blue-100 text-blue-600' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <span class="font-medium">My Tasks</span>
            </a>

            <a href="{{ route('ShowCategoryPage') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 group
                {{ request()->routeIs('ShowCategoryPage') ? 'bg-gradient-to-r from-purple-500 to-purple-600 text-white shadow-lg shadow-purple-200' : 'text-gray-700 hover:bg-purple-50' }}">
                <div class="w-10 h-10 rounded-lg flex items-center justify-center
                    {{ request()->routeIs('ShowCategoryPage') ? 'bg-white/20' : 'bg-pink-100 text-pink-600' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                </div>
                <span class="font-medium">Categories</span>
            </a>

            <a href="{{ route('ShowTaskCompleted') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 group
                {{ request()->routeIs('ShowTaskCompleted') ? 'bg-gradient-to-r from-purple-500 to-purple-600 text-white shadow-lg shadow-purple-200' : 'text-gray-700 hover:bg-purple-50' }}">
                <div class="w-10 h-10 rounded-lg flex items-center justify-center
                    {{ request()->routeIs('ShowTaskCompleted') ? 'bg-white/20' : 'bg-green-100 text-green-600' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="font-medium">Completed</span>
            </a>

            {{-- <div class="px-3 mt-6 mb-2">
                <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Settings</span>
            </div> --}}

            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-purple-50 transition-all duration-200 group">
                <div class="w-10 h-10 rounded-lg bg-gray-100 text-gray-600 flex items-center justify-center">
                    <svg class="w-5 h-5 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <span class="font-medium">Settings</span>
            </a>
        </nav>

    </aside>

    <!-- Overlay for Mobile -->
    <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-30 lg:hidden backdrop-blur-sm"></div>

    <!-- Logout Modal -->
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-black/50 backdrop-blur-sm">
        <div class="relative p-4 w-full max-w-md">
            <div class="relative bg-white rounded-2xl shadow-2xl animate-slide-in">
                <button type="button"
                    class="absolute top-4 right-4 text-gray-400 hover:bg-gray-100 rounded-lg w-8 h-8 flex justify-center items-center transition-colors"
                    data-modal-hide="popup-modal">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>

                <div class="p-8 text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 17l-4-4m0 0l-4 4m4-4v12m0-12V5m0 0a9 9 0 11-9 9" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Logout Confirmation</h3>
                    <p class="text-gray-600 mb-6">Are you sure you want to logout from your account?</p>

                    <div class="flex gap-3">
                        <button data-modal-hide="popup-modal" type="button"
                            class="flex-1 px-4 py-3 text-gray-700 bg-gray-100 rounded-xl font-medium hover:bg-gray-200 transition-colors">
                            Cancel
                        </button>
                        <a href="/logout"
                            class="flex-1 px-4 py-3 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-xl font-medium hover:shadow-lg transition-shadow text-center">
                            Yes, Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="lg:ml-72 pt-20 min-h-screen">
        <main class="p-4 md:p-6 lg:p-8">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script>
        // Sidebar Toggle
        const sidebar = document.getElementById("sidebar");
        const toggle = document.getElementById("sidebarToggle");
        const overlay = document.getElementById("overlay");
        const menuIcon = document.getElementById("menuIcon");

        toggle.addEventListener("click", () => {
            const isHidden = sidebar.classList.contains("-translate-x-full");

            sidebar.classList.toggle("-translate-x-full");
            overlay.classList.toggle("hidden");

            // Change icon
            if (isHidden) {
                menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>';
            } else {
                menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>';
            }
        });

        overlay.addEventListener("click", () => {
            sidebar.classList.add("-translate-x-full");
            overlay.classList.add("hidden");
            menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>';
        });

        // Close sidebar on route change (optional)
        document.querySelectorAll('#sidebar a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    sidebar.classList.add("-translate-x-full");
                    overlay.classList.add("hidden");
                    menuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>';
                }
            });
        });

        // Modal functionality is handled by Flowbite (included in your project)
    </script>
</body>

</html>
