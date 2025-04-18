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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" defer>

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
                //gtag('config', 'AW-11250334200'); //Google Ads
            }, 3100);
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NNM3HS4G');
        </script>
            <!-- End Google Tag Manager -->
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

    <style>
        body, html{
            width: 100%;
            overflow-x: clip ;
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
        .hover-links-navbar{
            font-size: 16px;
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNM3HS4G" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="shadow-sm w-full">
        <nav class="navbar navbar-expand-lg bg-white w-100" style="z-index: 10; position: fixed; top: 0px">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('web.home') }}">
                    <img width="130px" height="55px" src="{{ asset('img/logo-casa-credito.png') }}" alt="">
                </a>
              <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: #ffffff"></span>
              </button>
              <div class="collapse navbar-collapse w-100" id="navbarNav">
                <ul class="navbar-nav d-flex gap-4 justify-content-end w-100">
                  {{-- <li class="nav-item">
                    <a class="nav-link @if(Request::is('/')) active @endif fw-bold font-family-montserrat hover-links-navbar" aria-current="page" href="{{ route('web.home') }}">INICIO</a>
                  </li> --}}
                  <li class="nav-item">
                    <a class="nav-link fw-bold font-family-montserrat hover-links-navbar" href="{{ route('web.properties') }}">PROPIEDADES</a>
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
                    <span id="tab_services" class="nav-link fw-bold font-family-montserrat hover-links-navbar" style="cursor: pointer">CRÉDITOS</span>
                    <div id="drop_services" class="bg-white d-none position-absolute p-4 rounded shadow" style="width: 35rem; margin-left: -110px;">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="my-0" style="font-family: 'Montserrat', 'serif';"><a class="hover-link" style="text-decoration: none; color: #676667" href="{{ route('web.creditos.hipoetacarios') }}">Crédito Hipotecario</a></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="my-0" style="font-family: 'Montserrat', 'serif';"><a class="hover-link" style="text-decoration: none; color: #676667" href="{{ route('web.credito.consumo') }}">Crédito de Consumo</a></p>
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
                    </div>
                  </li>
                  @endif
                  <li class="nav-item">
                    <a class="nav-link fw-bold font-family-montserrat hover-links-navbar" href="{{ route('web.avaluo') }}">AVALÚOS</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link fw-bold font-family-montserrat hover-links-navbar" href="{{ route('web.notaria') }}">NOTARÍA USA</a>
                  </li> --}}
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
                                    <span style="color: #676667">Lunes a Viernes 9:00 am a 6:00 pm y Sábados 9:00 am a 1:00 pm</span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/location-icon.png') }}" alt="">
                                <div>
                                    <span><a style="text-decoration: none; color: #676667" target="_blank" href="https://maps.app.goo.gl/yu5AWKv2u3tfVSq38">Remigio Tamariz Crespo y Av. Fray Vicente Solano</a></span>
                                </div>
                            </article>
                        </section>
                        <section class="mb-2">
                            <article class="d-flex align-items-center">
                                <img width="30px" height="30px" src="{{ asset('img/call-icon.png') }}" alt="">
                                <div>
                                    <span><a style="text-decoration: none; color: #676667" href="tel:+593967867998">096-786-7998</a></span>
                                    {{-- tel:+593958959084 --}}
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
                                    <span style="color: #676667">Lunes a Viernes 9:00 am a 6:00 pm y Sábados 9:00 am a 4:00 pm</span>
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
                                    <span style="color: #676667">Lunes a Viernes 9:00 am a 6:00 pm y Sábados 9:00 am a 4:00 pm</span>
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
                <section class="row d-flex alig-items-center justify-content-center text-center pb-4">
                    <span class="text-white">Casa Crédito 2024 | <a style="text-decoration: none" class="text-white fw-bold" href="{{ route('web.politicas') }}">Políticas de Privacidad</a></span>
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

            let script2 = document.createElement('script');
            script2.src = 'https://www.googletagmanager.com/gtag/js?id=G-6VW469F5K3'; // Reemplaza con la URL de tu script
            document.head.appendChild(script2);            
        }, 3000); // 3000 milisegundos = 3 segundos

        // Crea un elemento <link> para cada archivo CSS y añádelos al DOM de forma asíncrona
        function loadCSS(url) {
            var link = document.createElement("link");
            link.href = url;
            link.rel = "stylesheet";
            document.head.appendChild(link);
        }

        // Carga las fuentes de Google de forma asíncrona
        function loadGoogleFonts() {
            var link1 = document.createElement("link");
            link1.href = "https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap";
            link1.rel = "stylesheet";
            
            var link2 = document.createElement("link");
            link2.href = "https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,400;0,700;1,500;1,700&display=swap";
            link2.rel = "stylesheet";
            
            document.head.appendChild(link1);
            document.head.appendChild(link2);
        }

        // Llama a la función para cargar las fuentes de Google de forma asíncrona
        loadGoogleFonts();

        // Carga los archivos CSS de forma asíncrona
        loadCSS("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css");
        loadCSS("https://unpkg.com/aos@next/dist/aos.css");

    </script>
</body>
</html>