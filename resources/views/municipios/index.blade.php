
@extends('layout.app')

@section('content')
    <div class="container mx-auto w-full">

    <h1 class="text-3xl font-semibold p-4">Listado de Municipios</h1>
    <div class="p-5">
      <a href="{{route('municipios.create')}}" class="p-2 bg-green-500 hover:bg-green-700 text-white rounded shadow-lg text-xl">Añadir</a>
    </div>

    <table class="w-full">
        <thead class="bg-blue-800 text-white">
          <tr>
            <th class="p-3 text-xl uppercase">Codigo</th>
            <th class="p-3 text-xl uppercase">Municipio</th>
            <th class="p-3 text-xl uppercase">Departamento</th>
            <th class="p-3 text-xl uppercase">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($municipios as $municipio )
                
          <tr class="text-center">
            <th class="border">{{ $municipio->muni_codi}}</th>
            <td class="border">{{$municipio->muni_nomb}}</td>
            <td class="border">{{$municipio->depa_nomb}}</td>
            {{-- <td><span>Acciones</span></td> --}}
            <td class="border">
            <div class="flex justify-center p-3 gap-4 items center w-100px">

              <a href="{{route('municipios.edit' , ['municipio'=>$municipio->muni_codi])}}"
                class="p-3 text-xl mt-2 bg-yellow-400 hover:bg-yellow-500 text-white rounded-md">Editar</a>

              <form action="{{route('municipios.destroy' , ['municipio' => $municipio->muni_codi])}}"
                method="POST" style="display: inline-block">
                @method('delete')
                @csrf
                <input class="p-3 text-xl mt-2 bg-red-400 hover:bg-red-500 text-white rounded-lg" type="submit" value="Delete">
            </div>

              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@endsection