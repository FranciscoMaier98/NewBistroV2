<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Imagem;
use App\Models\Texto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdicionarController extends Controller
{
    public function index(Request $request) {

        $id = $request->id_produto;

        /*$product = Product::find($id);

        if(!$product) {
            abort(404);
        }*/
        

        $carro = Session::get("carro");

        if($request->qt_produto!=0) {

            if(!$carro) {
                $carro = [
                    $id => [
                    "quantidade"=>$request->qt_produto,
                    "observacao"=>"<p>".$request->observacoes."</p>"
                    ]
                ];
            
                Session::put("carro", $carro);

            } else {

                $quantidade_atual = intval(Session::get("carro.".$request->id_produto.".quantidade")); //$carro->$request->id_produto["quantidade"];
                $quantidade_atual = $request->qt_produto + $quantidade_atual;

                $observacoes_atuais = Session::get("carro.".$request->id_produto.".observacao");

                $observacoes_atuais = $request->observacoes."|".$observacoes_atuais;            

                $carro[$id] = [
                    "quantidade"=>$quantidade_atual,
                    "observacao"=>$observacoes_atuais
                ];

                Session::put("carro", $carro);

            }

            Session::flash("mensagem", "<p>Produto cadastrado</p>");
            

        } else {
           Session::flash("menssagem", "<p>Operação inválida: nenhuma quantidade selecionada</p>");
        }


        $dados = array();
        $produto = Produto::all();
        $categoria = Categoria::all();
        $imagem = Imagem::all();
        $texto = Texto::all();
        $dados = array(
            "produto"=>$produto,
            "categoria"=>$categoria,
            "imagem"=>$imagem,
            "texto"=>$texto,
            "menssagem"=>Session::get("menssagem")
        );
        
        //$request->session()->flush();
        
        return  view("site.home", $dados);
    }
}
