<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sum Parts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("You're logged in in Sum Parts!") }} -->
                    <h3><strong>Machine Problem 1 – Sum Parts</strong></h3>

                    <li>
                        <ul>I implemented a REST API and tested it using Postman to demonstrate my understanding of API integration.</ul>
                    </li>
                    <li>
                        <ul>Ensure that the mini project is running. Do not close the application before testing.</ul>
                    </li>
                    <br>

                    <p><strong>Steps to test using Postman:</strong></p>

                    <li>
                        <ul>Open the Postman application.</ul>
                    </li>
                    <li>
                        <ul>Select the POST method.</ul>
                    </li>
                    <li>
                        <ul>Enter the following URL: 
                            <code>"http://127.0.0.1:8000/api/parts-sums"</code></ul>
                    </li>
                    <li>
                        <ul>Navigate to the <strong>Body</strong> tab and select <strong>raw</strong> format.</ul>
                    </li>
                    <li>
                        <ul>Input the following JSON data: 
                            <code>{ "ls": [1, 2, 3, 4, 5] }</code></ul>
                    </li>
                    <li>
                        <ul>Click <strong>Send</strong> to view the result/output.</ul>
                    </li>
                </div>
            </div>
        </div>
</x-app-layout>