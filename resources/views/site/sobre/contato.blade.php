@extends('site.sobre.sobreMaster.layoutSobre')

@section('sobreMaster')
<section>
    <div class="row" id="row-lista-contato">
        <div class="col-12">
            <div class="bg-white d-block mb-20" id="lista-contato">    
                <div class="fw-900 font-weight-bold text-uppercase bb-1-gray p-15 d-block fs-s" id='titulo-contato'>
                    ENDEREÇO
                </div>
                
                <div id="horario-funcionamento">
                    <span class="fw-400 text-uppercase p-15 d-block fs-s bb-1-gray">Terça-feira - das 17:30 às 23:00</span>
                </div>
            </div>     
        </div>

        <div class="col-12">
            <div class="bg-white d-block mb-20" id="lista-contato">
                <div class="fw-900 font-weight-bold text-uppercase bb-1-gray p-15 d-block fs-s" id='titulo-contato'>
                    TELEFONES
                </div>
                
                <div id="horario-funcionamento">
                    <span class="fw-400 text-uppercase p-15 d-block fs-s bb-1-gray">(051) 99999-9999</span>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="bg-white d-block mb-20" id="lista-contato">
                <div class="fw-900 font-weight-bold text-uppercase bb-1-gray p-15 d-block fs-s" id='titulo-contato'>
                    EMAIL
                </div>
                
                <div id="horario-funcionamento">
                    <span class="fw-400 text-uppercase p-15 d-block fs-s bb-1-gray">email@email.com</span>
                </div>
            </div>
        </div>

        
        <div class="col-12" id="div-lista-contato">
            <div class="bg-white d-block mb-20" id="lista-contato">
                <div class="fw-900 font-weight-bold text-uppercase bb-1-gray p-15 d-block fs-s" id='titulo-contato'>
                    DESENVOLVIDO POR
                </div>
                
                <div id="horario-funcionamento">
                    <span class="fw-400 text-uppercase p-15 d-block fs-s bb-1-gray">HIPÉRION</span>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection