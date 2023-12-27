<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function proprietariosIndex()
    {
        // Lógica para exibir os proprietários na área de administração
        return view('admin.proprietarios.index');
    }

    public function dashboard()
    {
        // Lógica para exibir o painel de administração
        return view('admin.dashboard.index');
    }
}
