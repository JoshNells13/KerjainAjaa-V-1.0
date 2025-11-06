@extends('layout.auth')

@section('title', 'Login')

@section('content')
<h1 class="flex justify-center text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white ">
    LOGIN
</h1>

<form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
  @csrf
  <div>
    <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="off"
           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" />
  </div>

  <div>
    <label for="password" class="block mb-2 text-sm font-medium text-white dark:text-white">Password</label>
    <input type="password" name="password" id="password" autocomplete="off"
           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" />
  </div>

  <div class="flex items-center justify-between">


  </div>

  <button type="submit"
          class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
    Login
  </button>

  <p class="text-sm  text-white dark:text-gray-400">
    Don't Have an Account? <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Sign Up  </a>
    <a href="{{ url('/') }}" class="text-blue-600 font-medium">Back?</a>
  </p>
</form>
@endsection
