<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('employees.store') }}">
                        @csrf

                        <input type="text" name="first_name" placeholder="First Name">
                        <input type="text" name="last_name" placeholder="Last Name">

                        <select name="gender" class="form-control mb-2">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        <input type="date" name="birthday">
                        <input type="number" name="monthly_salary">

                        <button type="submit" class="btn btn-primary mb-3 border" style="padding: 8px 10px; color:white; background-color:blue;">Save</button>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>