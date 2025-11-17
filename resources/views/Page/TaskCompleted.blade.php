@extends('layout.dashboard')

@section('title', 'Task')

@section('content')
    <h1 class="text-black text-3xl font-bold mb-4">
        Your Completed Task</h1>
    <p class="text-black dark:text-gray-300 mb-6">Manage tasks, view progress, and stay productive together
        <strong>KerjainAjaa</strong>!
    </p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Completed At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                @if ($Task->isEmpty())
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <td colspan="7" scope="row"
                            class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Task Is empty
                        </td>
                    </tr>
                @else
                    @foreach ($Task as $Tasks)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $Tasks->title }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $Tasks->description }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $Tasks->status_label }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $Tasks->completed_at }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $Tasks->Category->name }}
                            </th>

                            <td class="px-6 py-4">
                                <button href="#"
                                    class="editBtn font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    data-id="{{ $Tasks->id }}" data-title="{{ $Tasks->title }}"
                                    data-description="{{ $Tasks->description }}" data-status="{{ $Tasks->status }}"
                                    data-due="{{ $Tasks->due_date }}" data-completed="{{ $Tasks->completed_at }}"
                                    data-category="{{ $Tasks->category_id }}">Edit</button>
                            </td>
                        </tr>
                    @endforeach

                @endif



            </tbody>
        </table>
    </div>

@endsection
