@extends('layout.dashboard')

@section('title', 'Task')

@section('content')
    <h1 class="text-white text-3xl font-bold mb-4">
        My Category</h1>
    <p class="text-white dark:text-gray-300 mb-6">Manage tasks, view progress, and stay productive together
        <strong>KerjainAjaa</strong>!
    </p>


    <!--MODAL EDIT -->
    <div id="editModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg w-full max-w-2xl p-6">
            <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Edit Category</h3>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')

                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <label for="edit_name" class="block mb-1 text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="edit_name" name="name" class="w-full p-2 rounded border" required>
                    </div>
                    <div class="mt-4 flex justify-end space-x-2">
                        <button type="button" id="closeEditModal" class="px-4 py-2 bg-gray-300 rounded">Close</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>





    <form action="{{ route('AddCategory') }}" method="POST" class="mb-5 flex flex-row  sm:flex-row items-end gap-3">
        @csrf

        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">Add Your Category</label>
            <input type="text" id="title" name="name" placeholder="Your Title Category" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add
        </button>

    </form>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Task
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                @if ($Category->isEmpty())
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <td colspan="7" scope="row"
                            class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Category Is empty
                        </td>
                    </tr>
                @else
                    @foreach ($Category as $item)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->name }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->task_count }} Task{{ $item->task_count > 1 ? 's' : '' }}
                            </th>
                            <td class="flex flex-row gap-2 px-6 py-4">
                                <button href="#"
                                    class="editBtn font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    data-id="{{ $item->id }}" data-name="{{ $item->name }}">Edit</button>

                                <form action="{{ route('DeleteTask', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="text-red-500 font-medium">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                @endif



            </tbody>
        </table>
    </div>

    <script>
        const editModal = document.getElementById('editModal');
        const editForm = document.getElementById('editForm');
        const closeBtn = document.getElementById('closeEditModal');



        document.querySelectorAll('.editBtn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('edit_name').value = btn.dataset.name;
                editForm.action = `/category/${btn.dataset.id}`;
                editModal.classList.remove('hidden');
            });
        });

        closeBtn.addEventListener('click', () => {
            editModal.classList.add('hidden');
        });
    </script>

@endsection
