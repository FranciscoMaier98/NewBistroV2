<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Imagem;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DetalhesController extends Controller
{
    public function index(Produto $produto) {

        //$imagem = Imagem::where('id', $produto->id_imagem);
        
        $categoria = DB::table('categoria')->where('id', $produto->id)->value('categoria');//Categoria::where('id', '1');
        
        $dados = array(
            'produto'=>$produto,
            'categoria'=>$categoria
        );

        return view("site.detalhes",$dados);
    }
}
