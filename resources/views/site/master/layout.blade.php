<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>New Bistro Delivery</title>
      <link rel="stylesheet" href="{{ asset('sit/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('sit/style.css') }}">
      <link rel="stylesheet" href="{{asset('sit/magnific-popup/magnific-popup.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
      {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    </head>
    @if(session()->has("carro"))
        <?php $valores = session()->get("carro"); ?>
    @endif


    <body>

        <header class="mb-15 mb-xs-10">
            <section class="container d-flex justify-content-between">
                <a href="{{route('site.home')}}">
                    <img class="brand-img brand-img-l d-none d-lg-block mt-15" src="{{asset('/imagens/img35.png')}}" alt="">
                </a>
                <div>
                    <h3 class="bonsai" style="font-family: Bonzai; line-height: 135px">NEW BISTRO SUSHI DELIVERY
                        <img width="35" height="35" src="../../imagens/Delivery.png" alt="delivery"></h3>

                </div>
                <div>
                    <ul>
                        <li></li>
                        <li> @if(date('H') >= 23 || date('H') < 17 ) <font style="font-weight:700; font-size: 20px" color='red'>FECHADO</font>
                            @else <font style="font-weight:600; font-size: 20px" color='green'>ABERTO</font>
                            @endif
                        </li>
                        <li><a href="{{route('site.home')}}"><i aria-hidden="true" class="fa fa-home"></i> Home</a></li>
                        <li><a href="{{route('site.sobre.contato')}}"><i aria-hidden="true" class="mr-6 fa fa-info-circle"></i> Info</a></li>
                        <li><a href="{{route('site.sobre.entrega')}}"><i aria-hidden="true" class="mr-6 fa fa-motorcycle"></i> Entrega</a></li>
                        <li>

                            @if(auth()->user())
                            <!-- Responsive Navigation Menu -->
                            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                                <!-- Responsive Settings Options -->
                                <div class="border-t border-gray-200">
                                    <div class="space-y-1">
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="mr-1 fa fa-sign-out-alt "></i>{{ __('Sair') }}
                                            </x-responsive-nav-link>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            @else
                            <!-- Responsive Navigation Menu -->
                            <a href="{{route('login')}}"><i aria-hidden="true" class="mr-6 fa fa-sign-in-alt"></i> Entrar</a>

                            @endif
                        </li>
                    </ul>
                    <div class="mr-2" style="width: 94%; height: 30px">
                        @if(!empty(Auth::user()->name))
                            <span class="mr-2" style="font-size: 20px;">Bem Vindo,</span><span style="font-size: 20px; font-weight: bold;
                                color:rgb(165, 42, 42)">{{ Auth::user()->name }}</span><i style="color: rgb(165, 42, 42)" class=" ml-2 fa fa-user-circle fa-2x fa-lg"></i>
                        @else

                        @endif
                    </div>
                </div>
                {{-- <p>Bem Vindo {{ Auth::user()->name }}</p> --}}

            </section>

            <!-- Settings Dropdown -->


        </header>

        @yield('content')

        <footer class="nav-bottom text-center color-white bg-main w-100">
            <div class="container text-left fs-1-2 footer-desktop d-none d-lg-block mt-60" id="contato-infos">
                <div class="row">
                    <div class="col-4 mt-30 mb-30">
                        <p class="text-uppercase mb-15 fs-1-2">ENTRE EM CONTATO</p>
                        <p class="mb-15"><i class="fa fa-phone flip-h mr-10"></i> (051) 9 9790-9414</p>
                        <p class="mb-15"><i class="far fa-envelope mr-10"></i> atendimento@newbistrodelivery.com.br</p>
                        <p class="mb-15"><i class="fas fa-location-arrow mr-10"></i> endreço tal, numero x - cidade - bairro</p>
                    </div>
                    <div class="col-4 mt-30 mb-30">
                        <p class="text-uppercase mb-15 fs-1-2">INFORMAÇÕES</p>
                        <p><i class="fas fa-clock mr-10"></i> Horários de funcionamento</p>
                        <p><i class="fas fa-map-marker-alt mr-10"></i> Regiões de entrega</p>
                        <p><i class="far fa-file-alt mr-10"></i> Política de privacidade</p>
                    </div>
                    <div class="col-4 mt-30 mb-30"></div>
                </div>
            </div>
            <div class="text-right p-15 o-50 copyright d-none d-lg-block" id="desenvolvido-por">
                Desenvolvido por <span><a href="">Híperion</a></span>
            </div>
        </footer >

        <script src="{{ asset('sit/jquery.js') }}"></script>
        <script src="{{ asset('sit/bootstrap.js') }}"></script>
        <script src="{{ asset('sit/script.js') }}"></script>
        <script src="{{ asset('sit/shapes.js') }}"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!--AIzaSyA416S2z3mz5v3mkjyO0bZLp3OA1CIBIVA-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgMIKBaDrzLwaDKAmiYldTv6knH-lovwg&callback=initMap"></script>
    </body>

</html>
