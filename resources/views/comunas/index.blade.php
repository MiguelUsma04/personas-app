@extends('layout.app')

@section('title')
    Comuna
@endsection

@section('content')
    <div class="container mx-auto w-full">
        <h1 class="text-3xl font-semibold p-4">Listado de Comunas</h1>
        <div class="p-5">
          <a href="{{route('comunas.create')}}" class="p-2 bg-green-500 hover:bg-green-700 text-white rounded shadow-lg text-xl">Añadir</a>
        </div>
        <div>

        <table class="w-full">
            <thead class="bg-blue-800 text-white">
              <tr>
                <th class="p-3 text-xl uppercase">Codigo</th>
                <th class="p-3 text-xl uppercase">Comuna</th>
                <th class="p-3 text-xl uppercase">Municipio</th>
                <th class="p-3 text-xl uppercase">Acciones</th>
              </tr>
            </thead>
            <tbody class="">
                @foreach ($comunas as $comuna )
                    
              <tr class="text-center">
                <th class="border">{{ $comuna->comu_codi}}</th>
                <td class="border">{{$comuna->comu_nomb}}</td>
                <td class="border">{{$comuna->muni_nomb}}</td>
                <td class="border">
                  <div class="flex justify-center p-3 gap-4 items center w-100px">
                  <a href="{{route('comunas.edit' , ['comuna'=>$comuna->comu_codi])}}"
                    class="p-3 text-xl mt-2 bg-yellow-400 hover:bg-yellow-500 text-white rounded-md">Editar</a>
                  
                  <form action="{{route('comunas.destroy' , ['comuna' => $comuna->comu_codi])}}"
                    method="POST" style="display: inline-block">
                    @method('delete')
                    @csrf
                    <input class="p-3 text-xl mt-2 bg-red-400 hover:bg-red-500 text-white rounded-lg" type="submit" value="Eliminar">
                  </form>
                </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
@endsection