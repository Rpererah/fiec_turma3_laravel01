<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$series=\DB::select("SELECT nome FROM series");
        $series=Serie::all();

       //$series=["twd","tvd","pikachu"];
        //['series']=>'$series'
        //compact('series')
        return view('series.index',compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.inserir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $nome=$request->input('nome');
        $serie=new Serie();
        $serie->nome=$nome;
        $serie->save();
        return to_route('principal');

        //if(\DB::insert("INSERT INTO series (nome) VALUES (?)",[$nome])){
        //}else{
           // echo 'ihhh deu erro';
        
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
