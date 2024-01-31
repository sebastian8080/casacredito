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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,400;0,700;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        body, html{
            width: 100%;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Set the border color */
         
        .navbar-toggler .navbar-toggler-icon {
            border-color: rgb(255, 255, 255);
        }
        /* Setting the stroke to green using rgb values (0, 128, 0) */
         
        .navbar-toggler .navbar-toggler-icon {
            background-image: url(
            "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(255, 255, 255)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
    </style>
</head>
@php
    $ismobile = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
@endphp
<body>
    <header>
        <nav class="navbar navbar-expand-lg w-100 container" style="z-index: 3">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('web.home') }}">
                    <img width="130px" height="55px" src="{{ asset('img/logo-casa-credito.png') }}" alt="">
                </a>
              <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: #ffffff"></span>
              </button>
              <div class="collapse navbar-collapse w-100" id="navbarNav">
                <ul class="navbar-nav d-flex gap-4 justify-content-end w-100">
                  <li class="nav-item">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{ route('web.home') }}">Inicio</a>
                  </li>
                  @if($ismobile)
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Servicios
                    </a>
                    <ul class="dropdown-menu border-0 border-bottom" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{ route('web.creditos') }}">Créditos</a></li>
                    </ul>
                  </li>
                  @else
                  <li class="nav-item position-relative">
                    <span id="tab_services" class="nav-link fw-bold" style="cursor: pointer">Servicios</span>
                    <div id="drop_services" class="bg-white d-none position-absolute p-4 rounded shadow" style="width: 25rem; margin-left: -110px">
                        <h2 class="h6 text-muted fw-bold" style="color: #676667; font-family: 'Montserrat', 'serif'">NUESTROS SERVICIOS</h2>
                        <div class="d-flex justify-content-between">
                            <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif';"><a style="text-decoration: none; color: #676667" href="{{ route('web.creditos') }}">Créditos</a></p>
                            <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif';"><a style="text-decoration: none; color: #676667" href="{{ route('web.avaluo') }}">Avalúo de Propiedades</a></p>
                        </div>
                    </div>
                  </li>
                  @endif
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">Notaría</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('web.about') }}">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">Contactos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-danger rounded-pill text-white btn btn-sm" href="{{ Request::url() }}/creditos#calculadora">Calcular mi crédito</a>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        let tab_services = document.getElementById('tab_services');
        let drop_services = document.getElementById('drop_services');

        tab_services ? tab_services.addEventListener('mouseover', showtab) : null;
        tab_services ? tab_services.addEventListener('mouseout', showtab) : null;

        drop_services ? drop_services.addEventListener('mouseover', showtab) : null;
        drop_services ? drop_services.addEventListener('mouseout', showtab) : null;

        function showtab(){
            drop_services.classList.contains('d-none') ? drop_services.classList.remove('d-none') : drop_services.classList.add('d-none');
        }

    </script>
</body>
</html>