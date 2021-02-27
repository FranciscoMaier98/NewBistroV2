@extends('site.master.layout')

@section('content')

    <section>
        <div class="container">
            <div class="row" id="row-home">
                <div class="col-lg-8 ">
                    <nav id="menu-pesquisa" class="navbar navbar-expand-lg col-12">
                        <ul class="navbar-nav mr-auto text-uppercase">
                            <li class="nav-item">
                                <a href="{{route('site.home')}}">
                                    Cardápio
                                </a> 
                            </li>
                            <span>|</span>
                            <li class="nav-item dropdown">
                                <a href="">
                                    Categorias
                                </a>   
                            </li>
                            <span>|</span>
                            <li class="nav-item">
                                <a href="{{route('site.sobre.horario')}}">
                                    Aberto/fechado
                                </a>    
                            </li>
                            <span>|</span>
                            <li class="nav-item">
                                <a href="">
                                    Regiões de entrega
                                </a>    
                            </li>
                        </ul>
                    </nav>

                    <div>
                        <div class="bg-white mt-15">
                            <div class="m-0 relative p-20 bb-1-gray" id="titulo-detalhes">
                                <div class="media-boy">
                                    <div class="d-flex justify-between">
                                        <div>
                                            <p id="p-titulo-categoria">
                                                <span class="number">1x </span> 
                                                <span class="text-uppercase">{{$categoria}}</span>
                                            </p>
                                            <p id="p-titulo-detalhes">-- {{$produto->nome_produto}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div id="valores-detalhes">
                        <div class="bg-white p-15 mt-15 bb-1-gray" id="valores-detalhes-titulo">
                            <span class="text-uppercase" id="span-valores-detalhes-titulo">VALORES</span>
                        </div>

                        <div class="bg-white p-15 bb-1-gray d-flex justify-content-between" id="valores-detalhes-quantidade">
                            <div class="" id="d-valor-unitario">
                                <div>
                                    <span id="preco-unitario-titulo">valor unitário</span><br>
                                    <span id="preco-unitario">R$ {{$produto->preco}}</span>
                                </div>
                            </div>
                            <form id="definir-quantidade" method="POST" action="{{url('adicionar')}}">
                            @csrf
                            <input type="hidden" name="id_produto" value="{{$produto->id}}">
                            <div class="" id="d-definir-quantidade">
                            
                                <button class="qntminus color-main" id="menos" data-action="decrementar">-</button>
                                
                                <input type="hidden" name="qt_produto" value="1">
                                <input type="text" id='quantidade' value="1" disabled/>
                                <button class="qntminus color-main" id="mais" data-action="incrementar">+</button>
                                    
                            </div>
                            
                        </div>

                        <div class="text-right" id="d-valor-total">
                            <span id="preco-total-titulo">valor total</span><br>
                            R$ <input type="text" id="preco-total" value="{{$produto->preco}}" disabled/>
                        </div>
                        
                    </div>

                    <div class="bg-white p-15 bb-1-gray" id="d-observacoes">
                        <span class="text-uppercase fs-s fw-900">OBSERVAÇÕES</span>
                        <input maxlength="250" name="observacoes" type="text" class="form-control mt-10 br-0" placeholder="Digite aqui suas observações">
                    </div>
                    
                    <div class="fixed bottom-0 w-100 d-block bg-white" id="botao-submissao">
                        <div class="p-15 text-center d-block">
                            <button type="submit" class="btn btn-primary text-uppercase text-center mx-auto">Adicionar pedido</button>
                        </div>
                    </div>
                    </form>

                </div>
                
                <div class="co-lg-4">
                    
                    <div class="">
                        
                        <div class="col-12" id="menu-pedido">
                            <div>
                                <p id="titulo-pedido" class="font-weight-bold fw-900">SEU PEDIDO</p>
                            </div>
                            <hr>
                            @if(!(session()->exists("carro")))
                                <div>
                                    <p>CARRINHO VAZIO</p>
                                </div>
                            @else
                                <div>
                                    <a href="{{route('site.carrinho')}}" class="font-weight-bold fw-900">Ir para o carrinho</a>
                                </div>
                            @endif
                        </div>
                        
                        <div class="col-12" id="menu-pedido">
                            <div id="formas-pagamento">
                                <p>FORMAS DE PAGAMENTO</p>
                            </div>
                            <hr>
                            <div id="formas-pagamento">
                                <div>CRÉDITO</div>
                                <div>
                                    <ul>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="69" alt="American Express" title="American Express" src="https://vittocdn.com.br/assets/images/admin/cards/cre_americanexpress.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="70" alt="Hiper" title="Hiper" src="https://vittocdn.com.br/assets/images/admin/cards/cre_hiper.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="73" alt="Elo" title="Elo" src="https://vittocdn.com.br/assets/images/admin/cards/cre_elo.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="75" alt="Master Card" title="Master Card" src="https://vittocdn.com.br/assets/images/admin/cards/cre_master.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="76" alt="Visa" title="Visa" src="https://vittocdn.com.br/assets/images/admin/cards/cre_visa.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="204" alt="Hiper Credito" title="Hiper Credito" src="https://vittocdn.com.br/assets/images/admin/cards/hiper.jpg" class="forma-pagamento">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div id="formas-pagamento">
                                <div>DÉBITO</div>
                                <div>
                                    <ul>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="78" alt="Visa Electron" title="Visa Electron" src="https://vittocdn.com.br/assets/images/admin/cards/deb_visaelectron.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="75" alt="Master Card" title="Master Card" src="https://vittocdn.com.br/assets/images/admin/cards/cre_master.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="73" alt="Elo" title="Elo" src="https://vittocdn.com.br/assets/images/admin/cards/cre_elo.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="70" alt="Hiper" title="Hiper" src="https://vittocdn.com.br/assets/images/admin/cards/cre_hiper.jpg" class="forma-pagamento">  
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="155" alt="Banricompras Debito" title="Banricompras Debito" src="https://vittocdn.com.br/assets/images/admin/cards/deb_banricompras.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="213" alt="Sicredi Debito" title="Sicredi Debito" src="https://vittocdn.com.br/assets/images/admin/cards/deb_sicredi.jpg" class="forma-pagamento">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div id="formas-pagamento">
                                <div>DINHEIRO</div>
                                <div>
                                    <ul>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="80" alt="Dinheiro" title="Dinheiro" src="https://vittocdn.com.br/assets/images/admin/cards/dinheiro.jpg" class="forma-pagamento">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div id="formas-pagamento">
                                <div>PAGAMENTO ONLINE</div>
                                <div>
                                    <ul>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="70" alt="Hiper" title="Hiper" src="https://vittocdn.com.br/assets/images/admin/cards/cre_hiper.jpg" class="forma-pagamento">  
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="76" alt="Visa" title="Visa" src="https://vittocdn.com.br/assets/images/admin/cards/cre_visa.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="78" alt="Visa Electron" title="Visa Electron" src="https://vittocdn.com.br/assets/images/admin/cards/deb_visaelectron.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="231" alt="Banescard Credito" title="Banescard Credito" src="https://vittocdn.com.br/assets/images/admin/cards/banescard.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="232" alt="Cabal Credito" title="Cabal Credito" src="https://vittocdn.com.br/assets/images/admin/cards/cabal.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="233" alt="Cooper" title="Cooper" src="https://vittocdn.com.br/assets/images/admin/cards/cre_cooper.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="234" alt="Dinners" title="Dinners" src="https://vittocdn.com.br/assets/images/admin/cards/online-diners.png" class="forma-pagamento">
                                        </li>
                                        <br>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="235" alt="Discover" title="Discover" src="https://vittocdn.com.br/assets/images/admin/cards/online-discover.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="236" alt="Elo" title="Elo" src="https://vittocdn.com.br/assets/images/admin/cards/online-elo.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="237" alt="Hiper" title="Hiper" src="https://vittocdn.com.br/assets/images/admin/cards/hiper.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="238" alt="Hipercard" title="Hipercard" src="https://vittocdn.com.br/assets/images/admin/cards/cre_hiper.jpg" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="239" alt="Jcb" title="Jcb" src="https://vittocdn.com.br/assets/images/admin/cards/online-jcb.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="240" alt="Mais!" title="Mais!" src="https://vittocdn.com.br/assets/images/admin/cards/cre_mais.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="241" alt="Sorocred Credito" title="Sorocred Credito" src="https://vittocdn.com.br/assets/images/admin/cards/sorocred.png" class="forma-pagamento">
                                        </li>
                                        <li>
                                            <img loading="lazy" width="30" height="20" data-toggle="tooltip" data-id="242" alt="UnionPay" title="UnionPay" src="https://vittocdn.com.br/assets/images/admin/cards/cre_unionpay.png" class="forma-pagamento">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12" id="menu-pedido">
                            <div class="">
                                <div class="" id="">
                                    <p>REDES SOCIAIS</p>
                                </div>
                                <hr>
                                <div>
                                    <p><i class="fab fa-facebook"></i> FACEBOOK</p>
                                </div>
                                <hr>
                                <div>
                                    <p><i class="fab fa-instagram"></i> INSTAGRAM</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12"  id="menu-pedido"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection