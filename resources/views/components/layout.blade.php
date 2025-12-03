<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Mi aplicación' }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col">

    {{-- Navegación --}}
    <header class="absolute inset-x-0 top-0 z-50">
        <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">

            {{-- LOGO --}}
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5 inline-flex items-center">
                    <span class="sr-only">Mi aplicación</span>
                    <img src="https://tse4.mm.bing.net/th/id/OIP.i3gGpLrSXLhn13CWa9B_6QHaHa?rs=1&pid=ImgDetMain&o=7&rm=3"
                         alt="Logo" class="h-20 w-auto" />
                </a>
            </div>

            {{-- BOTÓN MENÚ MÓVIL --}}
            <div class="flex lg:hidden">
                <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
            </div>            
            
            {{-- LINKS DESKTOP --}}
            <div class="hidden lg:flex lg:gap-x-12 items-center">
                <x-navlink href="/" type="enlace">Home</x-navlink>
                <x-navlink href="/prueba" type="enlace">Prueba</x-navlink>
                <x-navlink href="/coctatenos" type="boton">Contactenos</x-navlink>
                <x-navlink href="/empleos" type="enlace">Empleo</x-navlink>
               
            </div>
                {{-- LOGIN --}}
<div class="hidden lg:flex lg:flex-1 lg:justify-end">
    <a href="/admin/login"
       class="flex items-center gap-2 text-sm font-semibold text-white hover:text-gray-300 transition-colors duration-200">
        
        {{-- Ícono de usuario --}}
        <svg xmlns="http://www.w3.org/2000/svg" 
             fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
             stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" 
                d="M15.75 6.75a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M4.5 20.25a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
        </svg>

        <span>Login</span>
    </a>
</div>

        </nav>
          <el-disclosure id="mobile-menu" hidden class="block sm:hidden border-t border-white/10 bg-gray-900">
        <div class="px-3 pt-3 pb-4 space-y-1">
          <x-navlink href="/" type='responsivo'>Home</x-navlink>
            <x-navlink href="/acercade" type='responsivo'>Acerca de</x-navlink>
            <x-navlink href="/contactenos" type='responsivo'>Contáctenos</x-navlink>
            <x-navlink href="https://test.test/empleos" type='responsivo'>Empleo</x-navlink>
        </div>
    </el-disclosure>
    </header>

    {{-- MENÚ RESPONSIVE --}}
  


        </div>
    </div>

    {{-- CONTENIDO --}}
    <main class="relative isolate px-6 pt-32 lg:px-8 flex-1">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl text-amber-100 pt-4">{{ $heading }}</h1>
            <div class="mt-6">{{ $slot }}</div>
        </div>
</main>

    {{-- FOOTER --}}
    <footer class="py-6 text-center text-sm text-gray-300">
        &copy; {{ date('Y') }} Mi aplicación
    </footer>

        
</body>

<
</html>
