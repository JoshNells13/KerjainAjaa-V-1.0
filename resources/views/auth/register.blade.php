@extends('layout.auth')

@section('title', 'Register')

@section('content')
    <h1
        class="flex justify-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white ">
        SIGN UP
    </h1>


    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="off"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>

        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="off"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>

        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-white dark:text-white">Password</label>
            <input type="password" name="password" id="password" required
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>

        <div>
            <label for="password_confirmation"
                class="block mb-2 text-sm font-medium text-white dark:text-white">Confirmation Password </label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>

        <button type="submit"
            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Sign Up
        </button>

        <p class="text-sm  text-white dark:text-gray-400">
            Have an Account? <a href="{{ route('login') }}"
                class="font-medium text-blue-600 hover:underline dark:text-blue-500">Login</a>
            <a href="{{ url('/') }}" class="text-blue-600 font-medium">Back?</a>
        </p>
    </form>
@endsection
