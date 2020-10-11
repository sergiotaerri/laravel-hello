<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return Endereco::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $endereco = Endereco::create($request->all());
        return response()->json($endereco, 201);
   }

    /**
     * Display the specified resource.
     *
     */
    public function show(Endereco $endereco)
    {
        return $endereco;
    }


    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Endereco $endereco)
    {
        $endereco->update($request->all());

        return response()->json($endereco, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Endereco $endereco)
    {
        $endereco->delete();

        return response()->json(null, 200);
    }
}
