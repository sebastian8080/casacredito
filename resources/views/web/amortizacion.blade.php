@extends('layouts.web')

@section('head')
    <meta name="description"
        content="Utiliza nuestra calculadora de amortización para planificar tus pagos mensuales de créditos. Con nuestra herramienta, puedes calcular fácilmente tu tabla de amortización con simulador, ideal para gestionar ahorro programado y solicitudes de crédito.">
    <meta name="keywords"
        content="tabla de amortización simulador, ahorro programado, banco abierto hoy, contrato de préstamo, solicitud de crédito, carta de solicitud de crédito pdf, tabulador de préstamo, préstamo digital banco general, calculadora de crédito, pagos de crédito mensuales">
    <meta name="author" content="Casa Crédito">
    <meta property="og:title" content="Calculadora de Amortización - Créditos Hipotecarios fáciles y seguros | Casa Crédito">
    <meta property="og:description"
        content="Descubre cómo calcular tus pagos mensuales de crédito con nuestra calculadora de amortización. Accede a funciones como el tabulador de préstamo y el simulador de amortización, incluso si necesitas un banco abierto hoy.">
    <meta property="og:image" content="{{ asset('img/banneramortizacion.jpg') }}">
    <meta property="og:url" content="https://www.casacredito.com/tabla-de-amortizacion">
    <meta property="og:type" content="website">
    <title>Calculadora de Amortización - Créditos Hipotecarios | Casa Crédito</title>
    <style>
        body {
            background-color: #ffffff;
        }

        @media screen and (max-width: 580px) {
            .height-banner-mobile {
                height: 550px !important;
            }

            .bg-image-banner-mobile {
                background-position: center !important;
            }

            .f-size-min-2 {
                font-size: 1.4rem !important;
            }

            .f-size-min-3 {
                font-size: 3.5rem !important;
            }

            .padding-left-banner-mobile {
                padding-left: 10% !important;
            }

            .margin-right-mobile {
                margin-right: 0px !important;
            }

            .top-0-mobile {
                margin-top: -50px !important;
            }

            .top-50-mobile {
                margin-top: -100px !important;
            }

            .w-sm-100 {
                width: 100% !important;
            }

            .card-cuota-mensual {
                width: 100% !important;
                margin-left: 0px !important;
                margin-top: 25px !important;
            }

            .d-none-mobile {
                display: none !important;
            }

            #selTypeCredit {
                font-size: 15px !important;
                width: 100% !important;
            }
        }

        /* codigo banner #686768 opacidad 21%*/
        @font-face {
            font-family: 'Montserrat';
            src: url("{{ asset('fonts/Montserrat-Black.ttf') }}");
        }

        .gradient {
            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(138, 25, 29, 0.207) 100%);
        }

        select {
            background-color: #F3F3F3 !important;
        }
    </style>
@endsection

@section('content')
    <section class="height-banner-mobile bg-image-banner-mobile"
        style="height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/banneramortizacion.jpg') }}')">
        <section class="height-banner-mobile padding-left-banner-mobile d-flex align-items-center justify-content-start"
            style="height: 750px; padding-left: 13%">
            <div>
                <h1 style="font-family: 'Bitter', 'serif'; color: #676667"><span style="font-size: 3rem; font-style: italic"
                        class="f-size-min-2">Conoce cuánto</span> <br> <span style="font-size: 7rem; font-weight: 600"
                        class="f-size-min-3">pagarías</span> <br> <span style="font-size: 3rem; font-style: italic"
                        class="f-size-min-2">mensualmente</span> </h1>
                <button class="btn btn-danger rounded-pill mt-5" data-bs-toggle="modal"
                    data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
            </div>
        </section>
    </section>

    <x-calculadora></x-calculadora>

    <section class="container py-5">
        <section class="row">
            <article class="col-sm-8">
                <img class="img-fluid" src="{{ asset('img/consultaramortizacion.jpg') }}" alt="">
            </article>
            <article class="col-sm-4 d-flex align-items-center" data-aos="fade-left">
                <div class="border p-5 bg-white card-cuota-mensual"
                    style="height: auto; width: 540px; margin-top: 6%; margin-left: -150px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <h2 class="mb-4" style="font-family: 'Bitter', 'serif'; font-weight: 600"><span
                            style="color: red; font-size: 25px">¿QUÉ SE DEBE TOMAR EN</span> <br> <span
                            style="color: gray">CUENTA PARA UN CRÉDITO?</span></h2>
                    <section>
                        <article class="d-flex gap-2 mb-3">
                            <div>
                                <p class="d-flex align-items-center justify-content-center"
                                    style="width: 25px; height: 25px; background-color: #c61617; color: #ffffff; border-radius: 25px">
                                    1</p>
                            </div>
                            <div>
                                <p>Revise su historial crediticio antes de solicitar un crédito</p>
                            </div>
                        </article>
                        <article class="d-flex gap-2">
                            <div>
                                <p class="d-flex align-items-center justify-content-center"
                                    style="width: 25px; height: 25px; background-color: #c61617; color: #ffffff; border-radius: 25px">
                                    2</p>
                            </div>
                            <div>
                                <p>Examien su capacidad financiera actual y futura para realizar los pagos del crédito.</p>
                            </div>
                        </article>
                        <article class="d-flex gap-2">
                            <div>
                                <p class="d-flex align-items-center justify-content-center"
                                    style="width: 25px; height: 25px; background-color: #c61617; color: #ffffff; border-radius: 25px">
                                    3</p>
                            </div>
                            <div>
                                <p>Antes de firmar cualquier contrato, lea detenidamente y comprenda los términos y
                                    condiciones del crédito.</p>
                            </div>
                        </article>
                    </section>
                    <a href="{{ route('web.creditos') }}" style="font-size: 15px"
                        class="btn btn-danger btn-sm rounded-pill mt-4">MÁS INFORMACIÓN</a>
                </div>
            </article>
        </section>
    </section>


    <!-- modals -->
    @include('components.form')
@endsection

@section('scripts')
    <script>
        const selState = document.getElementById('selState');
        const selCities = document.getElementById('selCity');

        selState.addEventListener("change", async function() {
            selCities.options.length = 0;
            let id = selState.options[selState.selectedIndex].dataset.id;
            const response = await fetch("{{ url('getcities') }}/" + id);
            const cities = await response.json();

            var opt = document.createElement('option');
            opt.appendChild(document.createTextNode('Ciudad'));
            opt.value = '';
            selCities.appendChild(opt);
            cities.forEach(city => {
                var opt = document.createElement('option');
                opt.appendChild(document.createTextNode(city.name));
                opt.value = city.name;
                selCities.appendChild(opt);
            });
        });
    </script>
@endsection
