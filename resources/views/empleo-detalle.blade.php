<x-layout>
     <x-slot:heading>detalle del empleado</x-slot:heading>
    <div class="max-w-7xl prose lg:prose-xl mt-8 text-white">
        <h2 class="text-3xl font-bold mb-4">{{ $empleo['title'] }}</h2>
        <p class="text-green-400 font-semibold mb-4">Salario: ${{ $empleo['salary'] }}</p>
        <p class="mb-4"><strong>Ubicación:</strong> {{ $empleo['location'] }}</p>
        <p class="mb-4"><strong>Descripción del trabajo:</strong></p>
        <p class="mb-6">{{ $empleo['description'] }}</p>
     
</x-layout>