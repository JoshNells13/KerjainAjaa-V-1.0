<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KerjainAjaa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" dark:bg-gray-900">
    <!-- Header -->
    <header class="sticky top-0 z-50">
        <nav class="bg-gradient-to-b from-gray-900 to-gray-800 border-gray-700">
            <div class="max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ url('/') }}"
                    class="text-2xl font-extrabold italic bg-gradient-to-r from-sky-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                    KerjainAjaa
                </a>

                <!-- Hamburger Button (Mobile) -->
                <button id="menu-toggle" class="text-white focus:outline-none md:hidden hover:text-blue-400 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>

                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#home" class="text-white hover:text-blue-400 transition">Home</a>
                    <a href="#features" class="text-white hover:text-blue-400 transition">Features</a>
                    <a href="#why" class="text-white hover:text-blue-400 transition">Why Us</a>
                    <a href="#contact" class="text-white hover:text-blue-400 transition">Contact</a>
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 rounded-lg bg-gradient-to-r font-medium from-pink-500 to-purple-500 text-white hover:opacity-90 transition">Login</a>
                    <a href="{{ route('register') }}"
                        class="px-4 py-2 rounded-lg bg-gradient-to-r font-medium from-purple-500 to-blue-500 text-white hover:opacity-90 transition">Sign
                        Up</a>
                </div>
            </div>

            <!-- Menu Mobile -->
            <div id="mobile-menu"
                class="hidden flex-col space-y-3 px-6 pb-4 bg-gradient-to-b from-gray-900 to-gray-800 md:hidden">
                <a href="#home" class="text-white hover:text-blue-400 transition">Home</a>
                <a href="#features" class="text-white hover:text-blue-400 transition">Features</a>
                <a href="#why" class="text-white hover:text-blue-400 transition">Why Us</a>
                <a href="#contact" class="text-white hover:text-blue-400 transition">Contact</a>
                <a href="{{ route('login') }}"
                    class="block text-center px-4 py-2 rounded-lg bg-gradient-to-r font-medium from-pink-500 to-purple-500 text-white hover:opacity-90 transition">Login</a>
                <a href="{{ route('register') }}"
                    class="block text-center px-4 py-2 rounded-lg bg-gradient-to-r font-medium from-purple-500 to-blue-500 text-white hover:opacity-90 transition">Sign
                    Up</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class=" p-36  dark:bg-gray-900" id="home">
        <div class="py-16 px-6 mx-auto max-w-screen-xl text-center">
            <h1
                class="mb-6 text-5xl font-extrabold tracking-tight leading-tight text-gray-900 md:text-6xl dark:text-white">
                KerjainAjaa — Stay Productive, Stay Focused
            </h1>
            <p class="mb-8 text-lg text-gray-900 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                Manage your tasks, organize priorities, and achieve your goals effortlessly.
                Every great achievement starts with one simple action — just get it done!
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="{{ route('login') }}"
                    class="inline-flex justify-center items-center py-3 px-6 text-lg font-semibold text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get Started
                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#features"
                    class="py-3 px-6 sm:ms-4 text-lg font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="bg-gray-50 dark:bg-gray-800 py-16">
        <div class="max-w-screen-xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-8">Awesome Features</h2>
            <p class="text-gray-500 dark:text-gray-400 mb-12">KerjainAjaa helps you work smarter, not harder.</p>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="p-6 bg-white dark:bg-gray-900 rounded-2xl shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-500">📅 Task Management</h3>
                    <p class="text-gray-600 dark:text-gray-400">Create, track, and complete your daily tasks with ease —
                        stay on top of everything important.</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-900 rounded-2xl shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-semibold mb-3 text-purple-500">🎯 Goal Tracking</h3>
                    <p class="text-gray-600 dark:text-gray-400">Set goals, visualize your progress, and crush deadlines
                        like a pro. Motivation meets management!</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-900 rounded-2xl shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-semibold mb-3 text-pink-500">⏰ Smart Reminders</h3>
                    <p class="text-gray-600 dark:text-gray-400">Never miss a thing — our smart notifications keep you
                        focused and punctual.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why" class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-8">Why Choose KerjainAjaa?</h2>
            <p class="text-gray-500 dark:text-gray-400 mb-12">Because your time is precious — let’s make it count.</p>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="flex flex-col items-center text-left space-y-6">
                    <div>
                        <h3 class="text-2xl font-semibold text-blue-600">🚀 Fast and Lightweight</h3>
                        <p class="text-gray-600 dark:text-gray-400">Optimized for performance — no lag, no clutter.
                            Everything runs smoothly, even on low-end devices.</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold text-purple-600">💡 Simple Yet Powerful</h3>
                        <p class="text-gray-600 dark:text-gray-400">Designed with productivity in mind — intuitive UI,
                            straightforward workflow, and powerful tools.</p>
                    </div>
                </div>
                <div class="flex flex-col items-center text-left space-y-6">
                    <div>
                        <h3 class="text-2xl font-semibold text-pink-600">🔒 Secure and Private</h3>
                        <p class="text-gray-600 dark:text-gray-400">Your data stays yours — we prioritize user privacy
                            and end-to-end protection.</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold text-green-600">🌐 Access Anywhere</h3>
                        <p class="text-gray-600 dark:text-gray-400">KerjainAjaa works on all devices — desktop, tablet,
                            and mobile — so your workflow never stops.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <div class="max-w-screen-xl  m-5 mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-8">FAQ — Everything You Need to Know About
            KerjainAjaa</h1>
        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span>What is KerjainAjaa?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">KerjainAjaa is a simple yet powerful web-based
                        task
                        management platform that helps you stay organized, productive, and focused on what truly
                        matters. Whether you’re managing school projects or personal goals, KerjainAjaa keeps your
                        workflow smooth and efficient.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                    <span>Is KerjainAjaa free to use?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Yes! KerjainAjaa is 100% free for all core
                        features — including task creation, category management, and completion tracking. Future premium
                        features may be added, but the essentials will always stay free.
                    </p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span>Do I need to create an account to use it?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Yes, creating an account helps keep your tasks
                        private and synced. It only takes a few seconds to sign up, and once logged in, your progress is
                        safely stored for easy access anytime.</p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                    aria-controls="accordion-collapse-body-4">
                    <span>Can I organize my tasks by category?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">YYes! KerjainAjaa lets you group tasks by category
                        — for example, school, work, or personal goals. This makes it easier to manage multiple areas of
                        your life at once.</p>

                </div>
            </div>
        </div>
    </div>



    <!-- CTA Section -->
    <section class=" py-16 text-center text-white">
        <h2 class="text-4xl text-gray-900 font-bold mb-4">Ready to Boost Your Productivity?</h2>
        <p class="mb-8 text-lg text-gray-900 ">Start managing your time like a pro — join thousands of users who’ve
            leveled up with
            KerjainAjaa!</p>
        <a href="{{ route('register') }}"
            class="inline-block px-8 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-gray-100 transition">
            Get Started for Free
        </a>
    </section>








    <!-- Footer -->
    <footer id="contact" class="bg-gradient-to-b from-gray-900 to-gray-800 dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-6 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="{{ url('/') }}"
                    class="text-2xl font-extrabold italic bg-gradient-to-r from-sky-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                    KerjainAjaa
                </a>
                <ul
                    class="flex flex-wrap items-center mt-4 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li><a href="#features" class="hover:underline me-4 md:me-6">Features</a></li>
                    <li><a href="#why" class="hover:underline me-4 md:me-6">Why Us</a></li>
                    <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 dark:border-gray-700" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025
                <a href="{{ url('/') }}" class="hover:underline">KerjainAjaa™</a>. All Rights Reserved.</span>
        </div>
    </footer>


    <script>
        const toggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("mobile-menu");

        toggle.addEventListener("click", () => {
            menu.classList.toggle("hidden");
            menu.classList.toggle("flex");
        });
    </script>
</body>

</html>
