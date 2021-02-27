@extends('site.master.layout')

@section('content')

<section class="container">
    <div class="row mt-5">
        <ul id="menu-sobre" class="col-12 font-weight-bold">
            <li class="">
                <a href="{{route('site.sobre.contato')}}">SOBRE</a>
            </li>
            <li>
                <div>
                <a href="{{route('site.sobre.entrega')}}">ENTREGA</a>
                </div>
            </li>
            <li>
                <div>
                    <a href="{{route('site.sobre.horario')}}">HORÁRIO</a>
                </div>
            </li>
        </ul>
    </div>

    @yield('sobreMaster')
</section>

@endsection
