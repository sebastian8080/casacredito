<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('head')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body, html{
            width: 100%;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg position-fixed w-100 bg-transparent" style="z-index: 3">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('web.home') }}">
                    <img width="130px" height="55px" src="{{ asset('img/logo-casa-credito.png') }}" alt="">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse w-100" id="navbarNav">
                <ul class="navbar-nav d-flex gap-4 justify-content-end w-100">
                  <li class="nav-item">
                    <a class="nav-link active text-white fw-bold" aria-current="page" href="{{ route('web.home') }}">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{ route('web.creditos') }}">Créditos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="#">Notaría</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="#">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="#">Contactos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-danger text-white" href="{{ Request::url() }}/creditos#calculadora">Calcular mi crédito</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <section>
        @yield('content')
    </section>

    <footer>
        <section class="bg-light py-5">
            <section class="container">
                <section class="row">
                    <article class="col-sm-4">
                        <p class="text-danger fw-bold" style="font-size: large"">Cuenca | Ecuador</p>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/home-icon.png') }}" alt="">
                                <div>
                                    <span>Lunes a Viernes 9:00 am a 6:00 pm y Sábados 9:00 am a 1:00 pm</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/location-icon.png') }}" alt="">
                                <div>
                                    <span>Remigio Tamariz 3-54 y Av. Fray Vicente Solano</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/call-icon.png') }}" alt="">
                                <div>
                                    <span>07-288-9355 / 098-384-9073</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/email-icon.png') }}" alt="">
                                <div>
                                    <span>info@casacredito.com</span>
                                </div>
                            </article>
                        </section>
                    </article>
                    <article class="col-sm-4">
                        <p class="text-danger fw-bold" style="font-size: large"">New York | Estados Unidos</p>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/home-icon.png') }}" alt="">
                                <div>
                                    <span>Lunes a Viernes 9:00 am a 6:00 pm y Sábados 9:00 am a 4:00 pm</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/location-icon.png') }}" alt="">
                                <div>
                                    <span>67-03 Roosevelt Avenue <br> Woodside, NY 11377</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/call-icon.png') }}" alt="">
                                <div>
                                    <span>718-690-3740</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/email-icon.png') }}" alt="">
                                <div>
                                    <span>info@casacredito.com</span>
                                </div>
                            </article>
                        </section>
                    </article>
                    <article class="col-sm-4">
                        <p class="text-danger fw-bold" style="font-size: large">New Jersey | Estados Unidos</p>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/home-icon.png') }}" alt="">
                                <div>
                                    <span>Lunes a Viernes 9:00 am a 6:00 pm y Sábados 9:00 am a 4:00 pm</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/location-icon.png') }}" alt="">
                                <div>
                                    <span>1146 East Jersey St Elizabeth, NJ 07201</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/call-icon.png') }}" alt="">
                                <div>
                                    <span>908-381-0090</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/email-icon.png') }}" alt="">
                                <div>
                                    <span>info@casacredito.com</span>
                                </div>
                            </article>
                        </section>
                    </article>
                </section>
            </section>
        </section>

        <section style="background-color: #c61617">
            <section class="container">
                <section class="row">
                    <div class="col-12 py-4">
                        <p class="text-center text-white">Síganos en nuestras redes sociales:</p>
                        <div class="d-flex justify-content-center">
                            <img width="50px" height="50px" src="{{ asset('img/facebook-icon.png') }}" alt="">
                            <img width="50px" height="50px" src="{{ asset('img/instagram-icon.png') }}" alt="">
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </footer>

    @yield('scripts')
</body>
</html>