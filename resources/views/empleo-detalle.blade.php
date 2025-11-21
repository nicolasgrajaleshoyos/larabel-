<x-layout>
  <x-slot:heading>
    <h1 class="text-2xl font-bold text-white py-4 px-4">Detalle del Empleo</h1>
  </x-slot:heading>

  <main class="max-w-4xl mx-auto px-4 py-6">
    
    <!-- Botón de volver -->
    <div class="mb-6">
      <a href="/empleo" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Volver a la lista
      </a>
    </div>

    <!-- Tarjeta de detalle -->
    <div class="bg-gray-800 rounded-lg shadow-2xl p-8 border border-gray-700">
      
      <!-- Título -->
      <h2 class="text-3xl font-bold text-white mb-4">{{ $empleo->title }}</h2>
      
      <!-- Empresa -->
      <div class="flex items-center mb-4">
        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
        </svg>
        <p class="text-xl text-gray-300">{{ $empleo->company }}</p>
      </div>

      <!-- Ubicación -->
      <div class="flex items-center mb-6">
        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        <p class="text-lg text-gray-300">{{ $empleo->location }}</p>
      </div>

      <!-- Salario -->
      <div class="bg-green-900 bg-opacity-30 border border-green-700 rounded-lg p-4 mb-6">
        <div class="flex items-center">
          <svg class="w-6 h-6 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <div>
            <p class="text-sm text-gray-400">Salario</p>
            <p class="text-2xl font-bold text-green-400">{{ $empleo->salary }}</p>
          </div>
        </div>
      </div>

      <!-- Descripción -->
      <div class="border-t border-gray-700 pt-6">
        <h3 class="text-xl font-semibold text-white mb-3">Descripción del puesto</h3>
        <p class="text-gray-300 leading-relaxed">{{ $empleo->description }}</p>
      </div>

    </div>

  </main>
</x-layout>