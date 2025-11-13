<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title ?? 'Mi aplicación' }}</title>


</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col">

    <div class="bg-gray-900 w-full">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
                <!-- Logo -->
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5 inline-flex items-center">
                        <span class="sr-only">Mi aplicación</span>
                        <img src="https://tse4.mm.bing.net/th/id/OIP.i3gGpLrSXLhn13CWa9B_6QHaHa?rs=1&pid=ImgDetMain&o=7&rm=3"
                             alt="Logo" class="h-20 w-auto" />
                    </a>
                </div>

               
                <div class="flex lg:hidden">
                    <button
                        type="button"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                             aria-hidden="true" class="h-6 w-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>

             
                <div class="hidden lg:flex lg:gap-x-12">
                    <nav class="flex items-center gap-4">
                        <x-navlink href="/">Home</x-navlink>
                        <x-navlink href="/prueba">Prueba</x-navlink>
                        <x-navlink href="/coctatenos">Contactenos</x-navlink>
                    </nav>
                </div>

                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-sm font-semibold text-white">Log in <span aria-hidden="true">→</span></a>
                </div>
            </nav>

           
            <div id="mobile-menu" class="lg:hidden hidden">
                
                <div class="fixed inset-0 z-40 bg-black/50" onclick="document.getElementById('mobile-menu').classList.add('hidden')"></div>

                <div class="fixed inset-y-0 right-0 z-50 w-full max-w-sm overflow-y-auto bg-gray-900 p-6 sm:ring-1 sm:ring-gray-100/10">
                    <div class="flex items-center justify-between">
                        <a href="/" class="-m-1.5 p-1.5 inline-flex items-center">
                            <span class="sr-only">Mi aplicación</span>
                            <img src="https://tse4.mm.bing.net/th/id/OIP.i3gGpLrSXLhn13CWa9B_6QHaHa?rs=1&pid=ImgDetMain&o=7&rm=3    "
                                 alt="Logo" class="h-8 w-auto" />
                        </a>

                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-200"
                                onclick="document.getElementById('mobile-menu').classList.add('hidden')">
                            <span class="sr-only">Close menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="h-6 w-6">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>

      
        <main class="relative isolate px-6 pt-32 lg:px-8 flex-1">
            <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                     class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-30 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72rem]"></div>
            </div>

            <div class="max-w-3xl mx-auto text-center">
                
                <h1 class="text-4xl text-amber-100 pt-4">{{ $heading }}</h1>

                <div class="mt-6">
                    
                    {{ $slot }}
                    
                </div>

                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow hover:bg-indigo-400">Get started</a>
                    <a href="#" class="text-sm font-semibold text-white">Learn more →</a>
                </div>
            </div>

            <div aria-hidden="true" class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                     class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72rem]"></div>
            </div>
        </main>
    </div>

    <footer class="py-6 text-center text-sm text-gray-300">
        &copy; {{ date('Y') }} Mi aplicación
    </footer>

</body>
</html>
