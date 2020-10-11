<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Use App\Endereco;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/', function (){
    echo 'hi';
});
 
Route::apiResources('enderecos', EnderecoController::class);

// Route::get('enderecos', 'EnderecoController@index');
// Route::get('enderecos/{endereco}', 'EnderecoController@show');
// Route::post('enderecos', 'EnderecoController@store');
// Route::put('enderecos/{endereco}', 'EnderecoController@update');
// Route::delete('enderecos/{endereco}', 'EnderecoController@delete');