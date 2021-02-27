@extends('site.master.layout')

@section('content')


<?php
    $total_compra = 0;

?>
 
<section >
    @foreach($produto as $pro)
    <div id="Produto_Carrinho" class="container">
        <div class="col-8">
            <div class="card card-body br-0">
                <div>
                    <li class="media m-0 d-flex justify-between">
                        <div class="form-group-radio_group link-produc w-100  mt-3">
                            <span class="fs-m number" id="titulo-produto">{{$pro->nome_produto}}</span>
                            
                            <div>
                                <div>
                                    <p>

                                    </p>
                                </div>
                            </div>

                            <div class="d-flex align-center justify-between mt-3">
                                <div>
                                    <p class="price fs-m color-main" id="preco-produto-catalogo">
                                        <span>Preço unitário: R$ {{$pro->preco}}</span><br>
                                        <span>Quantidade: {{$quantidade[$pro->id]}}</span><br>
                                        <span>
                                        <?php
                                            $total_produto = $pro->preco*$quantidade[$pro->id];
                                            $total_compra = $total_produto+$total_compra;
                                        ?>
                                        Total: {{$total_produto}}
                                        </span>
                                        
                                    </p>
                                </div>
                            </div>
                            
                            <div>
                                <div>
                                    <span></span>
                                </div>
                            </div>

                            <div>
                                <form method="POST" action="{{url('excluir')}}" >
                                    @csrf
                                    <input type="hidden" name="id_produto" value="{{$pro->id}}">
                                    <input type="submit" value="Excluir">
                                </form>
                            </div>

                        </div>
                        <a class="img-catalog ml-15 mt-3" id="imagem-catalogo" href="{{url('detalhes/'.$pro->id)}}">
                            <img src="{{asset('imagens/'.$imagem[$pro->id_imagem]->imagem)}}" class="img-fluid br-5" alt="">
                        </a> 
                    </li>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container">
        <div class="col-8" id="Finalizar_pedido">
            <div class="card card-body br-0">
                <div class="row">
                    <div class="col-6 text-center">
                        <span>Preço total: {{$total_compra}}</span>
                    </div>
                    <div class="col-6 text-center">
                        <a href="{{route('finalizar')}}">Finalizar pedido</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div>
        
    </div>
</section>


@endsection