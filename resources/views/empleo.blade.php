<x-layout>
  <x-slot:heading>
    <h1 class="text-2xl font-bold text-blue-50-800 py-4 px-4">Bolsa de empleo</h1>
  </x-slot:heading>

  <main class="max-w-6xl mx-auto px-4 py-6">

    <h2 class="text-xl font-semibold mb-4">Lista de empleos</h2>

    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach ($empleos as $empleo)
        <li class="border rounded-lg p-4 bg-blue-400 shadow-sm hover:shadow transition">

<a href="/empleo/{{ $empleo['id'] }}" class="text-red-500 underline">Ver detalle</a>


          <h3 class="text-lg font-semibold text-gray-800">{{ $empleo['title'] }}</h3>
          <p class="text-sm text-gray-500 mb-1">{{ $empleo['company'] }}</p>
          <p class="text-sm text-gray-600 mb-2">{{ $empleo['location'] }}</p>

          <p class="text-sm text-gray-700 mb-3">
            {{ $empleo['description'] }}
          </p>

          <div class="text-sm font-medium text-green-700 mb-3">
            💰 {{ $empleo['salary'] }}
          </div>

        </li>
      @endforeach
    </ul>

  </main>
</x-layout>
