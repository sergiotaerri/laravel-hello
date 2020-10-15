<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;
use App\Http\Requests\EnderecoValidated;

/**
 * @OA\Info(
 *    title="API de Endereço",
 *    version="1.0.0",
 * )
 */
class  EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     * 
     * @OA\Get(
     *  path="/enderecos",
     *  description="Retorna os endereços armazenados no banco de dados",
     *  @OA\Parameter(
     *      name="id",
     *      in="query",
     *      type"string",
     *      description="Id do endereço",
     *  ),
     *  @OA\Response(
     *      response=201,
     *      description="Recourse created"
     *  )
     * )
    */
    public function index()
    {

        return response()->json(Endereco::all(), 200);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\JsonResponse
    * @OA\Post(
    *   path="/enderecos",
    *   description="Adiciona um endereço",
    *   @OA\Response(
    *       response=201,
    *       description="Recourse created"
    *   )
    * )
    */
    public function store(Endereco $request)
    {
        $endereco_validado = $request->validated()

        $endereco = Endereco::create($endereco_validado);
        return response()->json($endereco, 201);
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    * @OA\Get(
    *   path="/enderecos/{id}",
    *   description="Retorna os endereços armazenados no banco de dados",
    *   @OA\Parameter(
    *       name="id",
    *       in="query",
    *       type"string",
    *       description="Id do endereço",
    *   ),
    *   @OA\Response(
    *       response=200,
    *       description="Recurso entregue"
    *   )
    * )
    */
    public function show($id)
    {
        $endereco = Endereco::findOrFail($id);

        return response()->json($endereco, 200);
    }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\JsonResponse
    * @OA\Put(
    *   path="/enderecos/{id}",
    *   description="Retorna os endereços armazenados no banco de dados",
    *   @OA\Parameter(
    *       name="id",
    *       in="query",
    *       type"string",
    *       description="Id do endereço",
    *   ),
    *   @OA\Response(
    *       response=200,
    *       description="Recurso atualizado no banco"
    *   )
    *  )
    */
    public function update(Endereco $request, $id)
    {
        $endereco = Endereco::findOrFail($id);

        $endereco->update($request->all());

        return response()->json($endereco, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */

     /**
    *   @OA\Put(
    *   path="/enderecos/{id}",
    *   description="Retorna os endereços armazenados no banco de dados",
    *   @OA\Parameter(
    *       name="id",
    *       in="query",
    *       type"string",
    *       description="Id do endereço",
    *   ),
    *   @OA\Response(
    *       response=204,
    *           description="Recurso deletado do banco"
    *   )
    * )
 */
    public function destroy($id)
    {
        Endereco::findOrFail($id)->delete();

        return response()->json(null, 200);
    }
}
