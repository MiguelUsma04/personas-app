<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title')</title>
  </head>
  <body>
    
       {{-- <br><br> --}}
       <nav class="bg-blue-500 p-6">
        <div class="container mx-auto">
          <div class="flex items-center justify-between">
            <div class="text-white font-bold text-xl">
              <a href="../">CRUD Laravel</a>
            </div>
            <ul class="flex space-x-4 h-full">
              {{-- <li><a href="" class="text-white text-xl hover:font-semibold transition 300ms hover:bg-blue-600 p-6">Inicio</a></li> --}}
              <li><a href="{{route('comunas.index')}}" class="text-white text-xl transition hover:font-semibold hover:bg-blue-900 p-6">Comunas</a></li>
              <li><a href="{{route('municipios.index')}}" class="text-white text-xl transition hover:font-semibold hover:bg-blue-090 p-6">Municipios</a></li>
              <li><a href="{{route('departamentos.index')}}" class="text-white text-xl transition hover:font-semibold hover:bg-blue-900 p-6">Departamentos</a></li>
              <li><a href="{{route('paises.index')}}" class="text-white text-xl transition hover:font-semibold hover:bg-blue-900 p-6">Paises</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <main>
        @yield('content')
      </main>
      
   
  </body>
</html>