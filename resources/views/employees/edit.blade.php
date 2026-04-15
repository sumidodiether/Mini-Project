<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <input type="text" name="first_name" value="{{ $employee->first_name }}" class="form-control mb-2">
                        <input type="text" name="last_name" value="{{ $employee->last_name }}" class="form-control mb-2">

                        <select name="gender" class="form-control mb-2">
                            <option value="Male" {{ $employee->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $employee->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>

                        <input type="date" name="birthday" value="{{ $employee->birthday }}" class="form-control mb-2">
                        <input type="number" name="monthly_salary" value="{{ $employee->monthly_salary }}" class="form-control mb-2">

                        <button class="btn btn-primary mb-3 border" style="padding: 8px 10px; color:white;background-color:blue;">Update</button>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>