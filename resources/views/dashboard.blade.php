<script src="{ asset('js/dashboard.js') }"></script>
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
                {{ __("You're logged in!") }}
                    <h3 class="text-lg font-semibold mb-4">Kontrol Motor</h3>
                    <div claas="flex space-x-4">
                        <button class="px-4 py-2 bg-green-500 text-white rounded">Maju</button>
                        <button class="px-4 py-2 bg-red-500 text-white rounded">Stop</button>
                        <button class="px-4 py-2 bg-blue-500 text-white rounded">Mundur</button>
                    </div>
                    <h3 class="text-lg font-semibold mt-6 mb-4">Pembacaan Sensor IMU</h3>
                    <div id="imuData" class="bg-gray-700 p-4 text-white">
                        Memuat data..
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
