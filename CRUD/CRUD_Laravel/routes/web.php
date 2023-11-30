<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar_candidato', function(Request $informacoes){
    Candidato::create([
        'nome' =>$informacoes->nome_candidato,
        'telefone' =>$informacoes->telefone_candidato
    ]);
    echo "Candidato criado com sucesso! ";
    echo "<a href='\' style='text-decoration: none;'>Voltar à página inicial</a>";
});

Route::get('/mostrar-candidato/{id_do_candidato?}', function($id_do_candidato){
    Candidato::findOrFail($id_do_candidato);
});

