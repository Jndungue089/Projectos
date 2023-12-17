<?php
// CandidatoController.php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class CandidatoController extends Controller
{
    public function index()
    {
        $candidatos = Candidato::all();
        return view('candidatos.index', ['candidatos' => $candidatos]);
    }

    public function create()
    {
        return view('candidatos.create');
    }

    public function store(Request $request)
    {
        Candidato::create($request->all());
        return redirect()->route('candidatos-index');
    }

    public function edit($id)
    {
        $candidato = Candidato::find($id);
    
        if ($candidato) {
            $candidatos = [$candidato]; // Wrap $candidato in an array to ensure it's a collection
            return view('candidatos.edit', ['candidatos' => $candidatos, 'isEditing' => true]);
        } else {
            return redirect()->route('candidatos-index');
        }
    }    

    public function update(Request $request, $id)
    {
        $candidato = Candidato::find($id);

        if ($candidato) {
            $candidato->update($request->all());
        }

        return redirect()->route('candidatos-index');
    }

    public function destroy($id)
    {
        try {
            $candidato = Candidato::findOrFail($id);
    
            // Verifica se a requisição inclui um parâmetro 'force' indicando remoção permanente
            if (request()->has('force') && request()->input('force') == 1) {
                // Remoção permanente
                $candidato->forceDelete();
            } else {
                // "Soft delete"
                $candidato->delete();
            }
    
            return redirect()->route('candidatos-index');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('candidatos-index')->with('error', 'Candidato não encontrado.');
        }
    }
}
