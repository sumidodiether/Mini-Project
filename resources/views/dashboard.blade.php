<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("You're logged in!") }} -->
                    <div class="flex justify-between">
                        <div class="text-center">
                            <h5>Total Male</h5>
                            <h3 class="text-xl font-bold">{{ $maleCount}}</h3>
                        </div>

                        <div class="text-center">
                            <h5>Total Female</h5>
                            <h3 class="text-xl font-bold">{{ $femaleCount }}</h3>
                        </div>

                        <div class="text-center">
                            <h5>Average Age of All Employee</h5>
                            <h3 class="text-xl font-bold">{{ round($averageAge) }}</h3>
                        </div>

                        <div class="text-center">
                            <h5>Total Salary of All Employee</h5>
                            <h3 class="text-xl font-bold">₱{{ $totalSalary }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>