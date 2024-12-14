<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="px-12 pt-8">
        <div class="flex items-start justify-between">
            <h1 class="my-4 text-xl">Register Vehicle</h1>
            <a class="px-4 py-3 font-sans text-white bg-blue-500 rounded-md bold" href="vehicle/create">Add Vehicle</a>
        </div>
        <table class="min-w-full border border-collapse border-gray-300 table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left border border-gray-300">Number</th>
                    <th class="px-4 py-2 text-left border border-gray-300">Type</th>
                    <th class="px-4 py-2 text-left border border-gray-300">Model</th>
                    <th class="px-4 py-2 text-left border border-gray-300">Capacity</th>
                    <th class="px-4 py-2 text-left border border-gray-300">Year</th>
                    <th class="px-4 py-2 text-left border border-gray-300">Owner</th>
                    <th class="px-4 py-2 text-left border border-blue-300">Edit</th>
                    <th class="px-4 py-2 text-left border border-red-300">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles as $vehicle)
                <tr class="bg-white hover:bg-gray-50">
                    <td class="px-4 py-2 border border-gray-300">{{$vehicle->number}}</td>
                    <td class="px-4 py-2 border border-gray-300">{{$vehicle->type}}</td>
                    <td class="px-4 py-2 border border-gray-300">{{$vehicle->model}}</td>
                    <td class="px-4 py-2 border border-gray-300">{{$vehicle->capacity}}</td>
                    <td class="px-4 py-2 border border-gray-300">{{$vehicle->year}}</td>
                    <td class="px-4 py-2 border border-gray-300">{{$vehicle->owner}}</td>
                    <td>
                        <a href="{{route('vehicle.edit', ['vehicle' => $vehicle])}}" class="px-2 text-white bg-blue-500 rounded-sm p y-2 front-bold">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('vehicle.destroy', ['vehicle' => $vehicle])}}">
                            @csrf
                            @method('delete')
                            <input type="submit"class="px-2 text-white bg-red-500 rounded-sm p y-2 front-bold" value="Delete" />
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>