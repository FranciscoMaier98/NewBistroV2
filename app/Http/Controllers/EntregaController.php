<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntregaController extends Controller
{
    public function index() {
        $dados = array();
        return view('site.sobre.entrega', $dados);
    }
}
