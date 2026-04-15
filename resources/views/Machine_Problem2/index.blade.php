<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bottle Collector') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("You're logged in Bottle Collector!") }} -->
                    <h2><strong>Bottle Collector Calculator</strong></h2>

                    <form method="POST" action="/bottle/calculate">
                        @csrf

                        <label>Daily Expense:</label><br>
                        <input type="number" step="0.01" name="dailyExpense" placeholder="0" required><br>

                        <label>Days Input (one per line):</label><br>
                        <textarea name="days" rows="1" cols="40" placeholder="8 ABMRB 24.50" required></textarea><br>

                        <button type="submit" style="padding: 10px; background-color:blue; color:white;">Calculate</button>
                    </form>
                    <br>

                    <h3><strong>Output: </strong></h3>
                    @if(isset($message))
                    <h3>{{ $message }}</h3>
                    @endif
                </div>
            </div>
        </div>
</x-app-layout>