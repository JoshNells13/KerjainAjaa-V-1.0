<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KerjainAjaa - Task Management Reimagined</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-slide-up { animation: slideUp 0.8s ease-out forwards; }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-white overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full top-0 z-50 glass-effect border-b border-purple-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center space-x-2 group">
                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                        <span class="text-white font-bold text-xl">K</span>
                    </div>
                    <span class="text-2xl font-bold gradient-text">KerjainAjaa</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Features</a>
                    <a href="#why" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">Why Us</a>
                    <a href="#faq" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-200">FAQ</a>
                    <a href="{{ route('login') }}" class="text-purple-600 hover:text-purple-700 font-medium transition-colors duration-200">Login</a>
                    <a href="{{ route('register') }}" class="px-6 py-2.5 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-full font-medium hover:shadow-lg hover:scale-105 transform transition-all duration-200">
                        Get Started
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-purple-50 transition-colors">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-6 space-y-3">
                <a href="#features" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 rounded-lg transition-colors">Features</a>
                <a href="#why" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 rounded-lg transition-colors">Why Us</a>
                <a href="#faq" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 rounded-lg transition-colors">FAQ</a>
                <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 rounded-lg transition-colors">Login</a>
                <a href="{{ route('register') }}" class="block px-4 py-2 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-lg text-center font-medium">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float"></div>
        <div class="absolute top-40 right-10 w-96 h-96 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float" style="animation-delay: 2s;"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-8 animate-slide-up">
                    <div class="inline-block">
                        <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold">
                             Productivity Made Simple
                        </span>
                    </div>

                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-gray-900 leading-tight">
                        Organize Your
                        <span class="gradient-text block">Tasks Effortlessly</span>
                    </h1>

                    <p class="text-xl text-gray-600 leading-relaxed">
                        Transform chaos into clarity. KerjainAjaa helps you manage tasks, track goals, and stay focused on what truly matters—without the overwhelm.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('register') }}" class="px-8 py-4 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transform transition-all duration-200 text-center">
                            Start For Free
                            <span class="ml-2">→</span>
                        </a>
                        <a href="#features" class="px-8 py-4 bg-white border-2 border-purple-200 text-purple-700 rounded-full font-semibold text-lg hover:border-purple-400 hover:bg-purple-50 transition-all duration-200 text-center">
                            See How It Works
                        </a>
                    </div>

                    <div class="flex items-center gap-8 pt-4">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 border-2 border-white"></div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-400 to-pink-600 border-2 border-white"></div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 border-2 border-white"></div>
                        </div>
                        <div>
                            <p class="text-gray-900 font-semibold">Join 1000+ users</p>
                            <p class="text-gray-600 text-sm">who boosted their productivity</p>
                        </div>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="relative animate-slide-up" style="animation-delay: 0.2s;">
                    <div class="relative">
                        <!-- Main Card -->
                        <div class="bg-white rounded-3xl shadow-2xl p-8 border border-purple-100">
                            <div class="space-y-6">
                                <!-- Task Item 1 -->
                                <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-purple-50 to-transparent rounded-xl hover:shadow-md transition-shadow cursor-pointer">
                                    <div class="w-6 h-6 rounded-full bg-purple-600 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-gray-900">Complete project proposal</p>
                                        <p class="text-sm text-gray-500">Due today</p>
                                    </div>
                                </div>

                                <!-- Task Item 2 -->
                                <div class="flex items-center gap-4 p-4 bg-white rounded-xl border-2 border-purple-100 hover:shadow-md transition-shadow cursor-pointer">
                                    <div class="w-6 h-6 rounded-full border-2 border-gray-300 flex-shrink-0"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-gray-900">Team meeting at 2 PM</p>
                                        <p class="text-sm text-gray-500">In 3 hours</p>
                                    </div>
                                </div>

                                <!-- Task Item 3 -->
                                <div class="flex items-center gap-4 p-4 bg-white rounded-xl border-2 border-purple-100 hover:shadow-md transition-shadow cursor-pointer">
                                    <div class="w-6 h-6 rounded-full border-2 border-gray-300 flex-shrink-0"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-gray-900">Review code changes</p>
                                        <p class="text-sm text-gray-500">Tomorrow</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Stats -->
                        <div class="absolute -top-6 -right-6 bg-white rounded-2xl shadow-xl p-4 border border-purple-100">
                            <div class="text-center">
                                <p class="text-3xl font-bold gradient-text">12</p>
                                <p class="text-sm text-gray-600">Tasks Done</p>
                            </div>
                        </div>

                        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-4 border border-purple-100">
                            <div class="text-center">
                                <p class="text-3xl font-bold gradient-text">5</p>
                                <p class="text-sm text-gray-600">Categories</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-purple-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-purple-600 font-semibold text-sm uppercase tracking-wider">Features</span>
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mt-3 mb-4">Everything You Need to Stay Productive</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Powerful features designed to help you work smarter, not harder</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group bg-white p-8 rounded-2xl border border-purple-100 hover:shadow-xl hover:border-purple-300 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Smart Task Management</h3>
                    <p class="text-gray-600 leading-relaxed">Create, organize, and prioritize tasks with intuitive drag-and-drop. Never lose track of what's important.</p>
                </div>

                <!-- Feature 2 -->
                <div class="group bg-white p-8 rounded-2xl border border-purple-100 hover:shadow-xl hover:border-purple-300 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-pink-100 to-pink-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Custom Categories</h3>
                    <p class="text-gray-600 leading-relaxed">Organize your life with custom categories for work, personal, school, and more. Keep everything in its place.</p>
                </div>

                <!-- Feature 3 -->
                <div class="group bg-white p-8 rounded-2xl border border-purple-100 hover:shadow-xl hover:border-purple-300 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Smart Reminders</h3>
                    <p class="text-gray-600 leading-relaxed">Get timely notifications so you never miss a deadline. Stay on top of everything that matters.</p>
                </div>

                <!-- Feature 4 -->
                <div class="group bg-white p-8 rounded-2xl border border-purple-100 hover:shadow-xl hover:border-purple-300 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Progress Tracking</h3>
                    <p class="text-gray-600 leading-relaxed">Visualize your achievements with beautiful charts. See how far you've come and stay motivated.</p>
                </div>

                <!-- Feature 5 -->
                <div class="group bg-white p-8 rounded-2xl border border-purple-100 hover:shadow-xl hover:border-purple-300 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Deadline Management</h3>
                    <p class="text-gray-600 leading-relaxed">Set due dates and priorities. Let KerjainAjaa help you manage your time like a pro.</p>
                </div>

                <!-- Feature 6 -->
                <div class="group bg-white p-8 rounded-2xl border border-purple-100 hover:shadow-xl hover:border-purple-300 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Cross-Platform Sync</h3>
                    <p class="text-gray-600 leading-relaxed">Access your tasks anywhere, anytime. Seamlessly sync across all your devices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-purple-600 font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mt-3 mb-4">Built Different, Built Better</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">We're not just another task manager. Here's what makes us special.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Image/Visual -->
                <div class="relative">
                    <div class="bg-gradient-to-br from-purple-100 to-pink-100 rounded-3xl p-12 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-40 h-40 bg-purple-300 rounded-full -mr-20 -mt-20 opacity-50"></div>
                        <div class="absolute bottom-0 left-0 w-32 h-32 bg-pink-300 rounded-full -ml-16 -mb-16 opacity-50"></div>

                        <div class="relative space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg transform hover:scale-105 transition-transform">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900">Lightning Fast</p>
                                        <p class="text-sm text-gray-600">Optimized performance</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg transform hover:scale-105 transition-transform">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-pink-500 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900">Secure & Private</p>
                                        <p class="text-sm text-gray-600">Your data is protected</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-2xl p-6 shadow-lg transform hover:scale-105 transition-transform">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900">Easy to Use</p>
                                        <p class="text-sm text-gray-600">Intuitive interface</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Benefits List -->
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Always Improving</h3>
                            <p class="text-gray-600">Regular updates with new features based on user feedback. We're building this together.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-purple-50">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-purple-600 font-semibold text-sm uppercase tracking-wider">FAQ</span>
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mt-3 mb-4">Got Questions? We've Got Answers</h2>
                <p class="text-xl text-gray-600">Everything you need to know about KerjainAjaa</p>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-2xl border border-purple-100 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-purple-50 transition-colors">
                        <span class="text-lg font-semibold text-gray-900">What is KerjainAjaa?</span>
                        <svg class="faq-icon w-6 h-6 text-purple-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-8 pb-6">
                            <p class="text-gray-600 leading-relaxed">KerjainAjaa is a modern task management platform designed to help you stay organized and productive. Whether you're managing work projects, school assignments, or personal goals, we provide the tools you need to succeed.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-2xl border border-purple-100 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-purple-50 transition-colors">
                        <span class="text-lg font-semibold text-gray-900">Is KerjainAjaa really free?</span>
                        <svg class="faq-icon w-6 h-6 text-purple-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-8 pb-6">
                            <p class="text-gray-600 leading-relaxed">Yes! All core features are completely free forever. You can create unlimited tasks, organize them into categories, set reminders, and track your progress—all at no cost.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-2xl border border-purple-100 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-purple-50 transition-colors">
                        <span class="text-lg font-semibold text-gray-900">Do I need to create an account?</span>
                        <svg class="faq-icon w-6 h-6 text-purple-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-8 pb-6">
                            <p class="text-gray-600 leading-relaxed">Yes, creating an account helps keep your data secure and synced across all your devices. Sign up takes less than a minute, and you'll have access to all features instantly.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-2xl border border-purple-100 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-purple-50 transition-colors">
                        <span class="text-lg font-semibold text-gray-900">Can I organize tasks by category?</span>
                        <svg class="faq-icon w-6 h-6 text-purple-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-8 pb-6">
                            <p class="text-gray-600 leading-relaxed">Absolutely! Create custom categories like Work, School, Personal, or anything else. This makes it easy to keep different areas of your life organized and separate.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white rounded-2xl border border-purple-100 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-purple-50 transition-colors">
                        <span class="text-lg font-semibold text-gray-900">Is my data secure?</span>
                        <svg class="faq-icon w-6 h-6 text-purple-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-8 pb-6">
                            <p class="text-gray-600 leading-relaxed">Your privacy and security are our top priorities. We use industry-standard encryption to protect your data, and we never share your information with third parties.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-purple-600 to-purple-800 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yLjIxLTEuNzktNC00LTRzLTQgMS43OS00IDQgMS43OSA0IDQgNCA0LTEuNzkgNC00em0wLTEwYzAtMi4yMS0xLjc5LTQtNC00cy00IDEuNzktNCA0IDEuNzkgNCA0IDQgNC0xLjc5IDQtNHptMC0xMGMwLTIuMjEtMS43OS00LTQtNHMtNCAxLjc5LTQgNCAxLjc5IDQgNCA0IDQtMS43OSA0LTR6Ii8+PC9nPjwvZz48L3N2Zz4=')] opacity-20"></div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6">Ready to Transform Your Productivity?</h2>
            <p class="text-xl text-purple-100 mb-10">Join thousands of users who are already crushing their goals with KerjainAjaa</p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="px-10 py-4 bg-white text-purple-700 rounded-full font-semibold text-lg hover:bg-gray-100 hover:shadow-2xl transform hover:scale-105 transition-all duration-200 inline-flex items-center justify-center">
                    Get Started Free
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="#features" class="px-10 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold text-lg hover:bg-white hover:text-purple-700 transition-all duration-200 inline-flex items-center justify-center">
                    Learn More
                </a>
            </div>

            <p class="text-purple-200 mt-8">No credit card required • Free forever • Get started in 30 seconds</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- Brand -->
                <div class="col-span-2">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-xl">K</span>
                        </div>
                        <span class="text-2xl font-bold text-white">KerjainAjaa</span>
                    </a>
                    <p class="text-gray-400 mb-4 max-w-md">Making productivity simple and effective. Transform the way you work, one task at a time.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-purple-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-purple-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-purple-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h3 class="text-white font-semibold mb-4">Product</h3>
                    <ul class="space-y-2">
                        <li><a href="#features" class="hover:text-purple-400 transition-colors">Features</a></li>
                        <li><a href="#why" class="hover:text-purple-400 transition-colors">Why Us</a></li>
                        <li><a href="#faq" class="hover:text-purple-400 transition-colors">FAQ</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-semibold mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-purple-400 transition-colors">About</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8">
                <p class="text-center text-gray-500">© 2025 KerjainAjaa. All rights reserved. Made with 💜 for productivity lovers.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('.faq-icon');

                // Close all other FAQs
                document.querySelectorAll('.faq-content').forEach(item => {
                    if (item !== content) {
                        item.style.maxHeight = '0px';
                    }
                });

                document.querySelectorAll('.faq-icon').forEach(item => {
                    if (item !== icon) {
                        item.classList.remove('rotate-180');
                    }
                });

                // Toggle current FAQ
                if (content.style.maxHeight === '0px' || content.style.maxHeight === '') {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.classList.add('rotate-180');
                } else {
                    content.style.maxHeight = '0px';
                    icon.classList.remove('rotate-180');
                }
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Navbar scroll effect
        let lastScroll = 0;
        const navbar = document.querySelector('nav');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }

            lastScroll = currentScroll;
        });
    </script>
</body>
</html><
