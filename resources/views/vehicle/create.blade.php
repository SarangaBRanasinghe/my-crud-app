<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
    <title>create</title>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
        <h1 class="mb-6 text-2xl font-bold text-gray-800">Add a Vehicle</h1>

        <form method="post" action="{{route('vehicle.store')}}">
            @csrf
            @method('post')
            <div class="mb-2">
                <label for="number" class="block mb-2 font-medium text-gray-700">Vehicle Number</label>
                <input 
                    type="text" 
                    name="number" 
                    id="number" 
                    placeholder="Number" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-2">
                <label for="type" class="block mb-2 font-medium text-gray-700">Type</label>
                <input 
                    type="text" 
                    name="type" 
                    id="type" 
                    placeholder="Type" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-4">
                <label for="model" class="block mb-2 font-medium text-gray-700">Model</label>
                <input 
                    type="text" 
                    name="model" 
                    id="model" 
                    placeholder="Model" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-4">
                <label for="capacity" class="block mb-2 font-medium text-gray-700">Capacity</label>
                <input 
                    type="text" 
                    name="capacity" 
                    id="capacity" 
                    placeholder="Capacity" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div class="mb-4">
                <label for="year" class="block mb-2 font-medium text-gray-700">Register Year</label>
                <input 
                    type="text" 
                    name="year" 
                    id="year" 
                    placeholder="Register Year" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div class="mb-4">
                <label for="owner" class="block mb-2 font-medium text-gray-700">Owner</label>
                <input 
                    type="text" 
                    name="owner" 
                    id="owner" 
                    placeholder="Owner" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <input 
                    type="submit" 
                    value="Save" 
                    class="w-full px-4 py-2 font-medium text-white bg-blue-500 rounded-lg cursor-pointer hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400" />
            </div>
        </form>
    </div>
</body>
</html>