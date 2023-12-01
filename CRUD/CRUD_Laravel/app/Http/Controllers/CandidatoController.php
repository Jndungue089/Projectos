<?php
// CandidatoController.php

namespace App\Http\Controllers;

use App\Models\Candidato;

class CandidatoController extends Controller
{
    public function index()
    {
        $candidatos = Candidato::all();
        return view('welcome', compact('candidatos'));
    }
    
}
