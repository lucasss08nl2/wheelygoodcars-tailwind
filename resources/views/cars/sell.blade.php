<!DOCTYPE html>
<html>
<head>
    <title>Auto Verkopen</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen p-10">

<div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow">

    <h1 class="text-3xl font-bold mb-6">
        Auto aanbieden
    </h1>

    <form action="/cars" method="POST" class="space-y-6">
        @csrf

        <!-- Kenteken -->
        <div>
            <label class="block mb-2 font-semibold">
                Kenteken
            </label>

            <input
                type="text"
                name="license_plate"
                placeholder="AB-123-CD"
                class="w-full border rounded-xl p-4"
                required
            >
        </div>

        <!-- Merk -->
        <div>
            <label class="block mb-2 font-semibold">
                Merk
            </label>

            <input
                type="text"
                name="brand"
                placeholder="Volkswagen"
                class="w-full border rounded-xl p-4"
                required
            >
        </div>

        <!-- Model -->
        <div>
            <label class="block mb-2 font-semibold">
                Model
            </label>

            <input
                type="text"
                name="model"
                placeholder="Golf"
                class="w-full border rounded-xl p-4"
                required
            >
        </div>

        <!-- Prijs -->
        <div>
            <label class="block mb-2 font-semibold">
                Prijs
            </label>

            <input
                type="number"
                name="price"
                placeholder="10000"
                class="w-full border rounded-xl p-4"
                required
            >
        </div>

        <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl transition"
        >
            Auto aanbieden
        </button>
    </form>
</div>

</body>
</html>