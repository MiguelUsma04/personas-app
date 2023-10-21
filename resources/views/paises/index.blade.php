@extends('layout.app')

@section('content')
    <div class="container mx-auto w-full">

      <h1 class="text-3xl font-semibold p-4">Listado de Paises</h1>
      {{-- <div class="p-5">
        <a href="{{route('comunas.create')}}" class="p-2 bg-green-400 hover:bg-green-500 text-white rounded shadow-lg text-xl">Añadir</a>
      </div> --}}
      <div>

    <table class="w-full">
        <thead class="bg-blue-800 text-white">
          <tr>
            <th class="p-3 text-xl uppercase">Codigo</th>
            <th class="p-3 text-xl uppercase">Pais</th>
            <th class="p-3 text-xl uppercase">Codigo Capital</th>
            {{-- <th scope="col">Acciones</th> --}}
          </tr>
        </thead>
        <tbody>
            @foreach ($paiss as $pais )
                
          <tr class="text-center">
            <th class="border p-5">{{ $pais->pais_codi}}</th>
            <td class="border">{{$pais->pais_nomb}}</td>
            <td class="border">{{$pais->pais_capi}}</td>
            {{-- <td class="border"><span>Acciones</span></td> --}}
            <td>

              {{-- <a href="{{route('municipios.edit' , ['municipio'=>$municipio->muni_codi])}}"
                class="btn btn-info">Editar</a>

              <form action="{{route('municipios.destroy' , ['municipio' => $municipio->muni_codi])}}"
                method="POST" style="display: inline-block">
                @method('delete')
                @csrf
                <input class="btn btn-danger" type="submit" value="Delete">
              </form> --}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@endsection