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
# Página inicial
Route::get('/', function () {
    return view('welcome');
});

# Rota para cadastrar candidato
Route::post('/cadastrar_candidato', function(Request $informacoes){
    Candidato::create([
        'nome' =>$informacoes->nome_candidato,
        'telefone' =>$informacoes->telefone_candidato,
        'email' =>$informacoes->email_candidato
    ]);
    echo "Candidato criado com sucesso! ";
    echo "<a href='\' style='text-decoration: none;'>Voltar à página inicial</a>";
});

# Rota para mostrar o candidato
Route::get('/mostrar-candidato/{id_do_candidato?}', function($id_do_candidato){
    $candidato = Candidato::find($id_do_candidato);
    if ($candidato) {
        
    }
    echo $candidato->nome;# Mostra o nome do candidato
    echo "<br>";
    echo $candidato->telefone;# Mostra o nome do telefone
    echo "<br>";
    echo $candidato->email;
});

# Rota para editar candidato
Route::get('/editar-candidato/{id_do_candidato?}', function($id_do_candidato){
    $candidato = Candidato::findOrFail($id_do_candidato);
    return view('editar_candidato', ['candidato'=> $candidato]);# Retorna a página para editar candidato
});

#nRota para atualizar candidato
Route::put('/atualizar-candidato/{id_do_candidato}', function(Request $informacoes, $id_do_candidato){
    $candidato =Candidato::findOrFail($id_do_candidato);
    $candidato->nome = $informacoes->nome_candidato;
    $candidato->telefone = $informacoes->telefone_candidato;
    $candidato->email = $informacoes->email_candidato;
    $candidato->save();# Função para atualizar candidato reescrevendo
    echo "Candidato atualizado com sucesso!";
});

#Rota para excluir candidato
Route::get('/excluir-candidato/{id_do_candidato?}', function($id_do_candidato){
    $candidato = Candidato::findOrFail($id_do_candidato); 
    $candidato->delete(); #Função para deletar candidato
    echo "Candidato excluído com sucesso!"; 
});

