@extends('layouts.web')

@section('head')
    <meta name="description"
        content="Aprovecha el ahorro programado y accede a créditos de construcción con condiciones favorables. Completa tu solicitud de crédito hoy, revisa nuestra tabla de amortización y consulta nuestro simulador para planificar mejor tu financiamiento.">
    <meta name="keywords"
        content="ahorro programado, banco abierto hoy, contrato de préstamo, solicitud de crédito, tabla de amortización simulador, carta de solicitud de crédito pdf, tabulador de préstamo, préstamo digital banco general, créditos de construcción, financiamiento de proyectos">
    <meta name="author" content="Casa Crédito">
    <meta property="og:title" content="Créditos de Construcción Fáciles y Seguros | Casa Crédito">
    <meta property="og:description"
        content="Obtén financiamiento para tu proyecto de construcción con nuestras facilidades como el ahorro programado y el acceso a un préstamo digital. Descarga la carta de solicitud de crédito y consulta nuestro tabulador de préstamos y simulador de amortización online.">
    <meta property="og:image" content="{{ asset('img/banner1-creditos.jpg') }}">
    <meta property="og:url" content="https://www.casacredito.com/creditos-de-construccion">
    <meta property="og:type" content="website">
    <title>Créditos de Construcción Fáciles y Seguros | Casa Crédito</title>
    <style>
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
    </style>
@endsection

@section('content')
    <section class="height-banner-mobile bg-image-banner-mobile"
        style="height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/banner1-creditos.jpg') }}')">
        <section class="height-banner-mobile padding-left-banner-mobile d-flex align-items-center justify-content-start"
            style="height: 750px; padding-left: 13%">
            <div data-aos="fade-right">
                <h1 style="font-family: 'Bitter', 'serif'; color: #676667"><span style="font-size: 3rem; font-style: italic"
                        class="f-size-min-2">Descubre</span> <br> <span style="font-size: 7rem; font-weight: 600"
                        class="f-size-min-3">nuestros</span> <br> <span style="font-size: 3rem; font-style: italic"
                        class="f-size-min-2">diferentes créditos</span> </h1>
                <button style="font-family: 'Mont'" class="btn btn-danger rounded-pill mt-5" data-bs-toggle="modal"
                    data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
            </div>
        </section>
    </section>

    <section class="container py-5">
        <section class="row">
            <article class="col-sm-3" style="z-index: 4">
                <div class="d-flex justify-content-center align-items-center h-100 margin-right-mobile"
                    style="margin-right: -175px;">
                    <div class="px-5 py-4 bg-white w-sm-100"
                        style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36); width: 350px">
                        <img width="65px" src="{{ asset('img/iconoconstruccion.png') }}" alt="">
                        <h2 class="mt-2" style="font-family: 'Bitter', 'serif'; color: #676667; font-weight: 600">Créditos
                            <br> de construcción
                        </h2>
                    </div>
                </div>
            </article>
            <article class="col-sm-9 d-none-mobile">
                <div class="position-relative">
                    <img src="{{ asset('img/bannerconstruccion.jpg') }}" alt="">
                    <div class="position-absolute text-center top-50 start-50 translate-middle w-100">
                        <p class="h3 text-white w-100" style="font-family: 'Bitter', 'serif'; font-style: italic">¡Construye
                            tu hogar, construye tus sueños!</p>
                        <button class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                            data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
                    </div>
                </div>
            </article>
        </section>
    </section>

    <section class="container">
        <section class="row py-3">
            <p style="font-family: 'Montserrat', 'serif'; text-align: justify">Los créditos de construcción son una opción
                para aquellas personas que desean construir su vivienda según sus necesidades y preferencias, brindando
                financiamiento a lo largo de las distinas etapas del proceso constructivo.</p>
        </section>
        <section class="row py-3">
            <article class="col-sm-6 mb-4">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img width="60px" src="{{ asset('img/iconoaprobacion.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Proceso de
                            aprobación</h3>
                        <p class="text-muted" style="font-size: medium">Las entidades financieras suelen requerir
                            información detallada sobre ingresos, gastos y deudas existentes.</p>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-4">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img width="60px" src="{{ asset('img/iconogarantias.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Garantías</h3>
                        <p>En muchos casos, el crédito de construcción se otorga sin la necesidad de proporcionar garantías
                            reales.</p>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-4">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img width="60px" src="{{ asset('img/iconomontoyplazo.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Monto y plazo</h3>
                        <p>El monto del crédito y el plazo para su pago suelen variar según la política de la entidad
                            financiera y la capacidad de pago del solicitante.</p>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-4">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img width="60px" src="{{ asset('img/iconoflexibilidad.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Flexibilidad</h3>
                        <p>Algunos créditos ofrecen opciones de pagos adicionales o la posibilidad de adelantar cuotas,
                            brindando cierta flexibilidad al deudor.</p>
                    </div>
                </div>
            </article>
        </section>
    </section>

    <x-calculadora></x-calculadora>

    <section class="container py-5 mt-5">
        <section class="row">
            <article class="col-sm-8">
                <img class="img-fluid" src="{{ asset('img/consultarconstruccion.jpg') }}" alt="">
            </article>
            <article class="col-sm-4 d-flex align-items-center" data-aos="fade-left">
                <div class="border p-5 bg-white card-cuota-mensual"
                    style="height: auto; width: 540px; margin-left: -150px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <h2 class="mb-4" style="font-family: 'Bitter', 'serif';"><span style="color: gray">Realizar
                            Consulta</span></h2>
                    <form action="{{ route('sendlead') }}" method="POST">
                        @csrf
                        <div>
                            <div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <input class="form-control border-0 rounded-0" type="text"
                                                placeholder="Nombre" name="name" required>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <input class="form-control border-0 rounded-0" type="text"
                                                placeholder="Apellido" name="lastname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <input class="form-control border-0 rounded-0" type="number"
                                                placeholder="Telefono/Celular" name="phone" required>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <input class="form-control border-0 rounded-0" type="email"
                                                placeholder="Correo electrónico" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <select id="selState" class="form-select text-muted border-0 rounded-0"
                                                name="state" required>
                                                <option value="">Provincia</option>
                                                @foreach ($states as $state)
                                                    <option value="{{ $state->name }}" data-id="{{ $state->id }}">
                                                        {{ $state->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <select id="selCity" class="form-select text-muted border-0 rounded-0"
                                                name="city" required>
                                                <option value="">Ciudad</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <select class="form-select text-muted border-0 rounded-0" name="type"
                                                required>
                                                <option value="">Tipo de Credito</option>
                                                <option value="Microcreditos">Microcreditos</option>
                                                <option value="Hipotecarios">Hipotecarios</option>
                                                <option value="De Construccion">De Construccion</option>
                                                <option value="Vivienda de Interes Popular">Vivienda de Interes Popular
                                                </option>
                                                <option value="De Consumo">De Consumo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <input type="number" class="form-control border-0 rounded-0"
                                                placeholder="Monto a Solicitar" name="mount" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <textarea id="" rows="4" class="form-control border-0 rounded-0" placeholder="Mensaje"
                                                name="message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button class="btn rounded-pill text-white px-4" style="background-color: #c61617"
                                    type="submit">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </article>
        </section>
    </section>


    <!-- modals -->
    @include('components.form')
@endsection

@section('scripts')
@endsection
