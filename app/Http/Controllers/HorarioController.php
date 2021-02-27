<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index() {
        $dados = array();
        return view('site.sobre.horario', $dados);
    }
}
