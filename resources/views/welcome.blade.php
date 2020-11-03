<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Agroptimo') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-screen-xl mx-auto">
              <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                  <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
          
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                  <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                    <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                      <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="#" aria-label="Home">
                          <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Logo"> 
                        </a>
                      </div>
                    </div>

                  </nav>
                </div>
          
                <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                  <div class="sm:text-center lg:text-left">
                    <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        Tu complemento perfecto
                      <br class="xl:hidden">
                      <span class="text-indigo-600">GROACTIVE®
                    </span>
                    </h2>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Bioestimulante natural, con propiedades Surfactantes - Humectantes y Fungitóxicas. Potencia aplicaciones nutricionales y fitosanitarias                     </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                      <div class="rounded-md shadow">
                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                          Cotiza
                        </a>
                      </div>
                      <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                          Ficha Tecnica
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="hidden lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:flex">
              <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{asset('/web/img/front2.jpg')}}" alt="">
            </div>
        </div>
        <div class="full-w  bg-indigo-200 px-2 lg:px-4 ">
              <div class="container mx-auto py-10">
                  <div class="grid grid-cols-1 sm:grid-cols-2">
                      <div class=" ">
                        <img class=" mx-auto " src="{{asset('/web/img/groactive.png')}}"  alt="">
                      </div>
                      <div class=" ">
                        <h2 class="text-4xl  text-gray-900 my-8 text-center lg:text-right uppercase font-bold">
                          Beneficios
                        </h2>
  
                        <div class=" px-8 py-8  bg-white shadow-lg rounded-lg">
                            <p class=""> 
                                Las plantas poseen mecanismos naturales de defensa, ya sea para afrontar condiciones ambientales
                                adversas como también para organismos antagónicos como hongos, bacterias e insectos. Estos
                                mecanismos se basan en una serie de compuestos entre los cuales encontramos las <span class="text-indigo-600 uppercase font-bold">SAPONINAS</span>.
                                <br>
                                <br>
                                <span class="text-indigo-600 uppercase font-bold">GROACTIVE®</span> es un bioestimulante formulado a base de extractos de plantas ricos en saponinas y
                                antioxidantes polifenólicos, aportando una fuente altamente estable de materia orgánica, ámino
                                ácidos, ácidos fúlvicos, macro y micronutrientes para sus cultivos. 
                            </p>
                            <br>

                            <br>

                            <div class="text-center w-full py-4">
                              <a href="#" class=" justify-center px-8 py-4 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Contacta un asesor
                              </a>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
        </div>


        <div class="px-2 py-8">
          <div class="container mx-auto py-10">
            <h2 class="text-4xl  text-gray-900 my-4 text-center lg:text-left uppercase font-bold p-4">
              Aplicaciones
            </h2>
            
          <div class="grid grid-cols-6 gap-4 items-start ">

            <div class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2">
              <div class="bg-white shadow-lg rounded-lg px-4 py-6 mx-4 my-4">
                <div class="mx-auto h-40 bg-gray-200 rounded-md" style="background-image: url('{!!asset('/web/img/kiwi.jpg')!!}')">
                </div>
                <div class=" block mx-auto rounded-sm uppercase text-center text-lg py-4">kiwi</div>
                <div class="flex justify-center ">
                  <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                    Protocolo de aplicacion                  </a>
                  {{-- <div class="rounded-sm h-8 block px-4 bg-indigo-200"> </div> --}}
                </div>
              </div>
            </div>

            <div class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2">
              <div class="bg-white shadow-lg rounded-lg px-4 py-6 mx-4 my-4">
                <div class="mx-auto h-40 bg-gray-200 rounded-md" style="background-image: url('{!!asset('/web/img/peonias.jpg')!!}')">
                </div>
                <div class=" block mx-auto rounded-sm uppercase text-center text-lg py-4">Peonias</div>
                <div class="flex justify-center ">
                  <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                    Protocolo de aplicacion                  </a>
                  {{-- <div class="rounded-sm h-8 block px-4 bg-indigo-200"> </div> --}}
                </div>
              </div>
            </div>

            <div class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2">
              <div class="bg-white shadow-lg rounded-lg px-4 py-6 mx-4 my-4">
                <div class="mx-auto h-40 bg-gray-200 rounded-md" style="background-image: url('{!!asset('/web/img/cerezo.jpg')!!}')">
                </div>
                <div class=" block mx-auto rounded-sm uppercase text-center text-lg py-4">Cerezos</div>
                <div class="flex justify-center ">
                  <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                    Protocolo de aplicacion                  </a>
                  {{-- <div class="rounded-sm h-8 block px-4 bg-indigo-200"> </div> --}}
                </div>
              </div>
            </div>


          </div>
          </div>


        </div>


        <div class="bg-indigo-500 full-w mx-auto ">
          <div class="py-10">
            <div class="text-center">Hecho por AGROPTIMO en Curicó, Chile</div>
          </div>
        </div>




        
          
        @livewireScripts
    </body>
</html>
