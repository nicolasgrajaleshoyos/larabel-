<x-layout>
  <x-slot:heading>
    <h1 class="text-3xl font-bold text-white py-6 px-4">💼 Bolsa de Empleo</h1>
  </x-slot:heading>

  <main class="max-w-7xl mx-auto px-4 py-8">
    
    <!-- Mensaje de éxito -->
    @if(session('success'))
      <div class="bg-green-900 bg-opacity-30 border border-green-500 text-green-300 px-6 py-4 rounded-lg mb-6 flex items-center shadow-lg" role="alert">
        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>{{ session('success') }}</span>
      </div>
    @endif

    <!-- Header con título y botón -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
      <div>
        <h2 class="text-2xl font-bold text-white mb-2">Oportunidades Disponibles</h2>
        <p class="text-gray-400">Encuentra tu próximo desafío profesional</p>
      </div>
      <a href="/empleo/crear" class="inline-flex items-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition duration-200 ease-in-out transform hover:scale-105">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Crear Nuevo Empleo
      </a>
    </div>

    <!-- Grid de empleos -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($empleos as $empleo)
        <div class="bg-gray-800 rounded-xl shadow-xl border border-gray-700 overflow-hidden hover:shadow-2xl hover:border-blue-500 transition-all duration-300 transform hover:-translate-y-1">
          
          <!-- Header de la tarjeta -->
          <div class="bg-gradient-to-r from-gray-700 to-gray-800 px-6 py-4 border-b border-gray-700">
            <h3 class="text-xl font-bold text-white mb-2 line-clamp-2">{{ $empleo->title }}</h3>
            <div class="flex items-center text-gray-300">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
              <span class="text-sm font-medium">{{ $empleo->company }}</span>
            </div>
          </div>

          <!-- Contenido de la tarjeta -->
          <div class="px-6 py-4">
            
            <!-- Ubicación -->
            <div class="flex items-center text-gray-400 mb-4">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <span class="text-sm">{{ $empleo->location }}</span>
            </div>

            <!-- Salario -->
            <div class="bg-gray-700 bg-opacity-40 border border-gray-600 rounded-lg px-4 py-3 mb-4">
              <div class="flex items-center">
                <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="text-gray-200 font-semibold text-sm">{{ $empleo->salary }}</span>
              </div>
            </div>

            <!-- Botón ver detalle -->
            <a href="/empleo/{{ $empleo->id }}" class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
              Ver Detalles
            </a>

          </div>
        </div>
      @endforeach
    </div>

    <!-- Mensaje si no hay empleos -->
    @if($empleos->isEmpty())
      <div class="text-center py-12">
        <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
        <h3 class="text-xl font-semibold text-gray-400 mb-2">No hay empleos disponibles</h3>
        <p class="text-gray-500">Sé el primero en publicar una oportunidad</p>
      </div>
    @endif

  </main>
</x-layout>
