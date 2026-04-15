<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div style="float: right; margin-bottom: 20px;">
                        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3 border" style="padding: 10px; background-color:blue;">
                        + Add Employee
                    </a>
                    </div>
                    <table id="employeeTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Birthday</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $emp)
                            <tr>
                                <td>{{ $emp->first_name }}</td>
                                <td>{{ $emp->last_name }}</td>
                                <td>{{ $emp->gender }}</td>
                                <td>{{ $emp->birthday }}</td>
                                <td>{{ $emp->monthly_salary }}</td>
                                <td>
                                    <a href="{{ route('employees.edit', $emp->id) }}" class="btn btn-warning btn-sm border" style="padding: 5px 10px; background-color:orange;">Edit</a>

                                    <form action="{{ route('employees.destroy', $emp->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm border" style="padding: 3px 10px; background-color:red;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>