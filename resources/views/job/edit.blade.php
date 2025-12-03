<x-layout>
  <x-slot:heading>
    <h1 class="text-2xl font-bold text-white py-4 px-4">Editar Empleo</h1>
  </x-slot:heading>

  <main class="max-w-3xl mx-auto px-4 py-6">
    
    <div class="bg-gray-800 rounded-lg shadow-2xl p-6 border border-gray-700">
      <form action="/empleos/{{ $job->id }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Título del empleo -->
        <div class="mb-4">
          <label for="title" class="block text-sm font-medium text-gray-200 mb-2">
            Título del empleo <span class="text-red-400">*</span>
          </label>
          <input 
            type="text" 
            id="title" 
            name="title" 
            required
            value="{{ old('title', $job->title) }}"
            class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
            placeholder="Ej: Desarrollador Full Stack"
          >
          @error('title')
            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Empleador -->
        <div class="mb-4">
          <label for="employer_id" class="block text-sm font-medium text-gray-200 mb-2">
            Empleador <span class="text-red-400">*</span>
          </label>
          <select 
            id="employer_id" 
            name="employer_id" 
            required
            class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
          >
            <option value="" class="bg-gray-700">Seleccione un empleador</option>
            @foreach($employers as $employer)
              <option 
                value="{{ $employer->id }}" 
                {{ old('employer_id', $job->company_id) == $employer->id ? 'selected' : '' }} 
                class="bg-gray-700"
              >
                {{ $employer->name }}
              </option>
            @endforeach
          </select>
          @error('employer_id')
            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Ubicación -->
        <div class="mb-4">
          <label for="location" class="block text-sm font-medium text-gray-200 mb-2">
            Ubicación <span class="text-red-400">*</span>
          </label>
          <input 
            type="text" 
            id="location" 
            name="location" 
            required
            value="{{ old('location', $job->location) }}"
            class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
            placeholder="Ej: Bogotá, Colombia"
          >
          @error('location')
            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Descripción -->
        <div class="mb-4">
          <label for="description" class="block text-sm font-medium text-gray-200 mb-2">
            Descripción <span class="text-red-400">*</span>
          </label>
          <textarea 
            id="description" 
            name="description" 
            required
            rows="4"
            class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
            placeholder="Describe el puesto de trabajo, responsabilidades, requisitos, etc."
          >{{ old('description', $job->description) }}</textarea>
          @error('description')
            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Salario -->
        <div class="mb-6">
          <label for="salary" class="block text-sm font-medium text-gray-200 mb-2">
            Salario <span class="text-red-400">*</span>
          </label>
          <input 
            type="text" 
            id="salary" 
            name="salary" 
            required
            value="{{ old('salary', $job->salary) }}"
            class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
            placeholder="Ej: 3000 USD mensuales"
          >
          @error('salary')
            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Botones -->
        <div class="flex gap-4">
          <button 
            type="submit" 
            class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition duration-200 ease-in-out transform hover:scale-105"
          >
            Actualizar Empleo
          </button>
          <a 
            href="/empleos" 
            class="flex-1 bg-gray-600 hover:bg-gray-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition duration-200 ease-in-out text-center"
          >
            Cancelar
          </a>
        </div>
      </form>
    </div>

  </main>
</x-layout>
