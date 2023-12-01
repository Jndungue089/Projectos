<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CandidatoController;
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
# Página inicial
Route::get('/', [CandidatoController::class, 'index']);

# Rota para cadastrar candidato
Route::post('/cadastrar_candidato', function (Request $informacoes) {
    Candidato::create([
        'nome' => $informacoes->nome_candidato,
        'telefone' => $informacoes->telefone_candidato,
        'email' => $informacoes->email_candidato
    ]);
    return redirect('/')->with('success', 'Candidato criado com sucesso!');
});

# Rota para editar candidato
Route::get('/editar-candidato/{id_do_candidato?}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    return view('editar_candidato', ['candidato' => $candidato]);
});

# Rota para atualizar candidato
Route::put('/atualizar-candidato/{id_do_candidato}', function (Request $informacoes, $id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->nome = $informacoes->nome_candidato;
    $candidato->telefone = $informacoes->telefone_candidato;
    $candidato->email = $informacoes->email_candidato;
    $candidato->save();
    return redirect('/')->with('success', 'Candidato atualizado com sucesso!');
});

# Rota para excluir candidato
Route::get('/excluir-candidato/{id_do_candidato?}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->delete();
    return redirect('/')->with('success', 'Candidato excluído com sucesso!');
});

