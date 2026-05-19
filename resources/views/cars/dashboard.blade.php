<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen p-10">

<div class="max-w-6xl mx-auto">

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">
            Mijn auto's
        </h1>

        <a
            href="/sell"
            class="bg-blue-600 text-white px-5 py-3 rounded-xl"
        >
            + Auto toevoegen
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow overflow-hidden">

        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left p-4">Kenteken</th>
                    <th class="text-left p-4">Merk</th>
                    <th class="text-left p-4">Model</th>
                    <th class="text-left p-4">Prijs</th>
                    <th class="text-left p-4">Actie</th>
                </tr>
            </thead>

            <tbody>

            @forelse($cars as $car)

                <tr class="border-t hover:bg-gray-50">

                    <td class="p-4">
                        {{ $car['license_plate'] }}
                    </td>

                    <td class="p-4">
                        {{ $car['brand'] }}
                    </td>

                    <td class="p-4">
                        {{ $car['model'] }}
                    </td>

                    <td class="p-4">
                        €{{ $car['price'] }}
                    </td>

                    <td class="p-4">

                        <form
                            action="/cars/{{ $car['id'] }}"
                            method="POST"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl"
                            >
                                Verwijderen
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="5" class="p-10 text-center text-gray-500">
                        Geen auto's gevonden
                    </td>
                </tr>

            @endforelse

            </tbody>
        </table>

    </div>
</div>

</body>
</html>