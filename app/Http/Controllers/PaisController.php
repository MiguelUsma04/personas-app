<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paiss = Pais::all();
        return view("paises.index", ["paiss" => $paiss]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paiss = DB::table('tb_pais')
        ->orderBy('pais_nomb')
        ->get();
        return view('comunas.new', ['paiss'=> $paiss]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pais = new Pais();
        $pais->pais_nomb = $request->name;
        $pais->pais_capi = $request->code;
        $pais->save();

        // $comunas = DB::table('tb_comuna')
        // ->join('tb_municipio','tb_comuna.muni_codi','=','tb_municipio.muni_codi')
        // ->select('tb_comuna.*','tb_municipio.muni_nomb')
        // ->get();
        return view("paises.index", ["paiss" => $pais]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
