<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-center text-gray-900 dark:text-gray-100">
                <img 
                    src="https://png.pngtree.com/png-clipart/20230715/original/pngtree-proud-new-car-owner-land-vehicle-success-car-vector-png-image_9304726.png" 
                    alt="car owner" 
                    class="w-full max-w-md mx-auto mb-4 rounded-lg"
                >
                <div class="mb-4">
                    <p>Register your vehicle by clicking the button below:</p>
                </div>
                <a href="{{ route('vehicle.index') }}" 
                   class="px-4 py-2 mx-auto text-white transition bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                    Click Here
                </a>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
