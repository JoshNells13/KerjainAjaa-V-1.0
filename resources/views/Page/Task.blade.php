@extends('layout.dashboard')

@section('title', 'Task')

@section('content')
    <h1 class="text-white text-3xl font-bold mb-4">
        Manage Your Task</h1>
    <p class="text-white dark:text-gray-300 mb-6">Manage tasks, view progress, and stay productive together
        <strong>KerjainAjaa</strong>!
    </p>








    <!-- Modal toggle -->
    <button data-modal-target="default-modal" data-modal-toggle="default-modal"
        class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        Add Task
    </button>


    <!-- Modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <form action="{{ route('AddTask') }}" method="POST"
                class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                @csrf
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add New Task
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-3 grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="title" name="title" placeholder="Your Title Task" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
                    </div>

                    <div>
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="text" id="description" name="description" placeholder="Description Task" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
                    </div>

                    <div>
                        <label for="status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select id="status" name="status" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="" disabled selected>Choose a Status</option>
                            <option value="in_progress">In Progress</option>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                    <div>
                        <label for="due_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Due
                            Date</label>
                        <input type="datetime-local" id="due_date" name="due_date" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
                    </div>

                    <div>
                        <label for="completed_at"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Completed At</label>
                        <input type="datetime-local" id="completed_at" name="completed_at"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
                    </div>

                    <div>
                        <label for="category_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category_id" name="category" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="" disabled selected>Choose a Category</option>
                            @foreach ($Category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add
                    </button>
                    <button type="button" data-modal-hide="default-modal"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>



    <div id="editModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg w-full max-w-2xl p-6">
            <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Edit Task</h3>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')

                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <label for="edit_title" class="block mb-1 text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="edit_title" name="title" class="w-full p-2 rounded border" required>
                    </div>
                    <div>
                        <label for="edit_description" class="block mb-1 text-gray-900 dark:text-white">Description</label>
                        <input type="text" id="edit_description" name="description" class="w-full p-2 rounded border"
                            required>
                    </div>
                    <div>
                        <label for="edit_status" class="block mb-1 text-gray-900 dark:text-white">Status</label>
                        <select id="edit_status" name="status" class="w-full p-2 rounded border">
                            <option value="in_progress">In Progress</option>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    <div>
                        <label for="edit_due" class="block mb-1 text-gray-900 dark:text-white">Due Date</label>
                        <input type="datetime-local" id="edit_due" name="due_date" class="w-full p-2 rounded border"
                            required>
                    </div>
                    <div>
                        <label for="edit_completed" class="block mb-1 text-gray-900 dark:text-white">Completed At</label>
                        <input type="datetime-local" id="edit_completed" name="completed_at"
                            class="w-full p-2 rounded border">
                    </div>
                    <div>
                        <label for="edit_category" class="block mb-1 text-gray-900 dark:text-white">Category</label>
                        <select id="edit_category" name="category" class="w-full p-2 rounded border">
                            @foreach ($Category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-4 flex justify-end space-x-2">
                    <button type="button" id="closeEditModal" class="px-4 py-2 bg-gray-300 rounded">Close</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
                </div>
            </form>
        </div>
    </div>




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
                        Due Date
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
                                {{ $Tasks->due_date }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $Tasks->Category->name }}
                            </th>

                            <td class="flex flex-row gap-2 px-6 py-4">
                                <button href="#"
                                    class="editBtn font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    data-id="{{ $Tasks->id }}" data-title="{{ $Tasks->title }}"
                                    data-description="{{ $Tasks->description }}" data-status="{{ $Tasks->status }}"
                                    data-due="{{ $Tasks->due_date }}" data-completed="{{ $Tasks->completed_at }}"
                                    data-category="{{ $Tasks->category_id }}">Edit</button>

                                <form action="{{ route('DeleteTask', $Tasks->id) }}" method="POST">
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

        // Fungsi bantu untuk ubah format date
        function formatDateForInput(datetime) {
            if (!datetime) return "";
            const date = new Date(datetime);
            // pastikan hasilnya sesuai format datetime-local
            return date.toISOString().slice(0, 16);
        }


        document.querySelectorAll('.editBtn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('edit_title').value = btn.dataset.title;
                document.getElementById('edit_description').value = btn.dataset.description;
                document.getElementById('edit_status').value = btn.dataset.status;
                document.getElementById('edit_due').value = formatDateForInput(btn.dataset.due);
                document.getElementById('edit_completed').value = formatDateForInput(btn.dataset.completed);
                document.getElementById('edit_category').value = btn.dataset.category;

                editForm.action = `/tasks/${btn.dataset.id}`;

                editModal.classList.remove('hidden');
            });
        });

        closeBtn.addEventListener('click', () => {
            editModal.classList.add('hidden');
        });
    </script>




@endsection
