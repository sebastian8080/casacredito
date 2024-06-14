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

    {{-- Recaptcha --}}
    {{-- <script src="https://www.google.com/recaptcha/api.js?render=6Le1UsshAAAAAL93VxqsJYCa67mrcNIP1q3C99v5"></script> --}}

    @if (request()->getHost() === 'casacredito.com')
        <!-- Google tag (gtag.js) -->
        {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-6VW469F5K3"></script> --}}
        <script>
            setTimeout(() => {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
        
                gtag('config', 'G-6VW469F5K3');
            }, 3100);
        </script>
    @endif


    <script>
        document.addEventListener('submit', function(e){
            e.preventDefault();
            grecaptcha.ready(function() {
            grecaptcha.execute('6Le1UsshAAAAAL93VxqsJYCa67mrcNIP1q3C99v5', {action: 'submit'}).then(function(token) {
              
                let form = e.target;

                let input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'g-recaptcha-response';
                input.value = token;

                form.appendChild(input);

                form.submit();

          });
        });
        });
    </script>

    <!-- Hotjar Tracking Code for Casa credito  -->
    <script>
        setTimeout(() => {
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:4993461,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        }, 3000);
    </script>

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

        .hover-link:hover{
            color: #c61617 !important;
            font-weight: 600 !important;
        }
        .hover-links-navbar:hover{
            color: #c61617 !important;
            font-weight: 700 !important;
        }
        .font-family-montserrat{
            font-family: 'Montserrat', 'serif';
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
                    <a class="nav-link active fw-bold font-family-montserrat hover-links-navbar" aria-current="page" href="{{ route('web.home') }}">INICIO</a>
                  </li>
                  @if($ismobile)
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold font-family-montserrat hover-links-navbar" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      SERVICIOS
                    </a>
                    <ul class="dropdown-menu border-0 border-bottom" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item font-family-montserrat" href="{{ route('web.creditos') }}">CRÉDITOS</a></li>
                    </ul>
                  </li>
                  @else
                  <li class="nav-item position-relative">
                    <span id="tab_services" class="nav-link fw-bold font-family-montserrat hover-links-navbar" style="cursor: pointer">SERVICIOS</span>
                    <div id="drop_services" class="bg-white d-none position-absolute p-4 rounded shadow" style="width: 35rem; margin-left: -110px;">
                        <h2 class="h6 text-muted fw-bold" style="color: #676667; font-family: 'Montserrat', 'serif'">CRÉDITOS</h2>
                        <hr class="mb-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif';"><a class="hover-link" style="text-decoration: none; color: #676667" href="{{ route('web.creditos.hipoetacarios') }}">Crédito Hipotecario</a></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif';"><a class="hover-link" style="text-decoration: none; color: #676667" href="{{ route('web.credito.consumo') }}">Crédito de Consumo</a></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif';"><a class="hover-link" style="text-decoration: none; color: #676667" href="{{ route('web.credito.consumo.hipotecario') }}">Crédito de Consumo Hipotecario</a></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif';"><a class="hover-link" style="text-decoration: none; color: #676667" href="{{ route('web.credito.construccion') }}">Crédito de Construcción</a></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif';"><a class="hover-link" style="text-decoration: none; color: #676667" href="{{ route('web.microcreditos') }}">Microcréditos</a></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif';"><a class="hover-link" style="text-decoration: none; color: #676667" href="{{ route('web.credito.vip') }}">Crédito VIP</a></p>
                            </div>
                        </div>
                        <h2 class="h6 text-muted fw-bold mt-3" style="color: #676667; font-family: 'Montserrat', 'serif'">OTROS</h2>
                        <hr class="mb-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif'; font-weight: 600"><a class="hover-link" style="text-decoration: none; color: #676667" href="{{ route('web.avaluo') }}">Avalúos</a></p>
                            </div>
                            {{-- <div class="col-sm-6">
                                <p class="my-0 mt-3" style="font-family: 'Montserrat', 'serif';"><a style="text-decoration: none; color: #676667" href="{{ route('web.avaluo') }}">Notaría</a></p>
                            </div> --}}
                        </div>
                    </div>
                  </li>
                  @endif
                  <li class="nav-item">
                    <a class="nav-link fw-bold font-family-montserrat hover-links-navbar" href="{{ route('web.amortizacion') }}">CALCULAR CRÉDITO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold font-family-montserrat hover-links-navbar" href="https://notarialatina.com">NOTARÍA USA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold font-family-montserrat hover-links-navbar" href="https://grupohousing.com">PROPIEDADES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold font-family-montserrat hover-links-navbar" href="{{ route('web.about') }}">NOSOTROS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold font-family-montserrat hover-links-navbar" href="{{ route('web.blog') }}">BLOG</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-danger rounded-pill text-white btn btn-sm font-family-montserrat fw-bold" href="{{ route('web.contacto') }}">CONTACTOS</a>
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
                                    <span><a style="text-decoration: none; color: #676667" target="_blank" href="https://maps.app.goo.gl/7Ko6cJ3yZN5HQw866">Juan Iñiguez 3-87 y Gonzalo Cordero</a></span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/call-icon.png') }}" alt="">
                                <div>
                                    <span><a style="text-decoration: none; color: #676667" href="tel:072889355">07-288-9355</a> / <a style="text-decoration: none; color: #676667" href="tel:+593958959084">095-895-9084</a></span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/email-icon.png') }}" alt="">
                                <div>
                                    <span><a style="text-decoration: none; color: #676667" href="mailto:info@casacredito.com">info@casacredito.com</a></span>
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
                                    <span><a target="_blank" style="text-decoration: none; color: #676667" href="https://maps.app.goo.gl/hNr73tPxVeqUCTFv9">67-03 Roosevelt Avenue <br> Woodside, NY 11377</a></span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/call-icon.png') }}" alt="">
                                <div>
                                    <span><a style="text-decoration: none; color: #676667" href="tel:+17186903740">718-690-3740</a></span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/email-icon.png') }}" alt="">
                                <div>
                                    <span><a style="text-decoration: none; color: #676667" href="mailto:info@casacredito.com">info@casacredito.com</a></span>
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
                                    <span><a style="text-decoration: none; color: #676667" target="_blank" href="https://maps.app.goo.gl/U2FpSoLjuZJQGSbh9">1146 East Jersey St Elizabeth, NJ 07201</a></span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/call-icon.png') }}" alt="">
                                <div>
                                    <span><a style="text-decoration: none; color: #676667" href="tel:+19083810090">908-381-0090</a></span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/email-icon.png') }}" alt="">
                                <div>
                                    <span><a style="text-decoration: none; color: #676667" href="mailto:info@casacredito.com">info@casacredito.com</a></span>
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
                            <a target="_blank" href="https://www.facebook.com/CasaCreditoInmobiliaria">
                                <img width="50px" height="50px" src="{{ asset('img/facebook-icon.png') }}" alt="">
                            </a>
                            <a target="_blank" href="https://www.instagram.com/casacreditoec/">
                                <img width="50px" height="50px" src="{{ asset('img/instagram-icon.png') }}" alt="">
                            </a>
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

        setTimeout(function() {
            let script = document.createElement('script');
            script.src = 'https://www.google.com/recaptcha/api.js?render=6Le1UsshAAAAAL93VxqsJYCa67mrcNIP1q3C99v5'; // Reemplaza con la URL de tu script
            document.head.appendChild(script);

            let script = document.createElement('script');
            script.src = 'https://www.googletagmanager.com/gtag/js?id=G-6VW469F5K3'; // Reemplaza con la URL de tu script
            document.head.appendChild(script);            
        }, 3000); // 3000 milisegundos = 3 segundos

    </script>
</body>
</html>