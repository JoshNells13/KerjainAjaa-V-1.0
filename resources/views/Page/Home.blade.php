@extends('layout.dashboard')

@section('title','Home')

@section('content')
<h1 class="text-white text-3xl font-bold mb-4">
    Welcome to the Dashboard {{ Auth::user()->name ?? 'guest' }} !!</h1>
<p class="text-white dark:text-gray-300 mb-6">Manage tasks, view progress, and stay productive together
    <strong>KerjainAjaa</strong>!
</p>

<!-- Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h2 class="text-lg font-semibold mb-2">Total Task</h2>
        <p class="text-4xl font-bold text-blue-500">{{ $TotalTask }}</p>
    </div>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h2 class="text-lg font-semibold mb-2">Completed Task</h2>
        <p class="text-4xl font-bold text-green-500">{{ $CompletedTask }}</p>
    </div>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h2 class="text-lg font-semibold mb-2">Unfinished Tasks</h2>
        <p class="text-4xl font-bold text-red-500">{{ $UnfinishedTask }}</p>
    </div>
    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h2 class="text-lg font-semibold mb-2">My Category Total</h2>
        <p class="text-4xl font-bold text-blue-400">{{ $TotalCategory }}</p>
    </div>
</div>
@endsection

