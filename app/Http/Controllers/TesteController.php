<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index() {
        $dados = array();

        echo Session::get("menssagem");

        view('teste', $dados);
    }
}
