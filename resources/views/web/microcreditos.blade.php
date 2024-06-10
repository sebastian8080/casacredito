@extends('layouts.web')

@section('head')
    <meta name="description"
        content="Casa Crédito ofrece microcréditos rápidos y seguros para emprendedores y pequeños negocios en Ecuador. Soluciones financieras ágiles para impulsar tu crecimiento con tasas competitivas y mínimos requisitos.">
    <meta name="keywords"
        content="microcréditos, créditos rápidos, financiamiento para emprendedores, pequeños negocios, crédito inmediato, tasas bajas, Ecuador, financiamiento accesible, crédito sin garantía">
    <meta name="author" content="Casa Crédito">
    <meta property="og:title" content="Microcréditos Fáciles y Seguros | Casa Crédito">
    <meta property="og:description"
        content="Accede a microcréditos diseñados para emprendedores y pequeños negocios. Proceso de aprobación rápido, condiciones favorables y soporte continuo para tu empresa.">
    <meta property="og:image" content="{{ asset('img/banner1-creditos.jpg') }}">
    <meta property="og:url" content="https://www.casacredito.com/microcreditos">
    <meta property="og:type" content="website">
    <title>Microcréditos Fáciles y Seguros | Casa Crédito</title>
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
                    <div data-aos="fade-right" class="px-5 py-4 bg-white w-sm-100"
                        style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36); width: 350px">
                        <img width="65px" src="{{ asset('img/iconomicrocreditos.png') }}"
                            alt="creditos de consumo hipotecario">
                        <h2 class="mt-2" style="font-family: 'Bitter', 'serif'; color: #676667; font-weight: 600">
                            Microcréditos</h2>
                    </div>
                </div>
            </article>
            <article class="col-sm-9 d-none-mobile">
                <div class="position-relative">
                    <img style="filter: brightness(90%)" src="{{ asset('img/bannermicrocreditos.jpg') }}" alt="">
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
        <section class="row py-5">
            <p style="font-family: 'Montserrat', 'serif'; text-align: justify">Son préstamos de pequeñas cantidades de
                dinero que se otorgan a personas que no han iniciado su historial crediticio, emprendedores y pequeños
                empresarios, con el objetivo de ayudarles a iniciar, expandir o mejorar sus negocios. Aquí hay algunas
                características clave de los microcréditos:</p>
        </section>
        <section class="row py-3">
            <article class="col-sm-6 mb-5" data-aos="fade-in">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img width="60px" src="{{ asset('img/iconoproceso.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Proceso
                            simplificado</h3>
                        <p class="text-muted" style="font-size: medium">En el proceso de solicitud y aprobación tiende a ser
                            más simple y ágil. Las evaluaciones de riesgo suelen basarse en la capacidad y voluntad de pago,
                            más que en el historial crediticio.</p>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-5" data-aos="fade-in">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img width="60px" src="{{ asset('img/iconocantidades.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Pequeñas cantidades
                        </h3>
                        <p>Suelen ser préstamos de cantidades relativamente pequeñas, diseñados para cubrir necesidades
                            específicas, como la compra de inventario, herramientas o maquinaria.</p>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-5" data-aos="fade-in">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img width="60px" src="{{ asset('img/iconoimpactosocial.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Impacto social</h3>
                        <p>Tienen un enfoque social al empoderar a individuos o comunidades, fomentando el espíritu
                            empresarial y contribuyendo al desarrollo económico.</p>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-5" data-aos="fade-in">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img width="60px" src="{{ asset('img/iconoemprendedores.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Destinado a
                            emprendedores</h3>
                        <p>Dirigidos a personas que buscan iniciar o mejorar pequeños negocios. Los receptores suelen ser
                            emprendedores de bajos recursos que no tienen acceso a servicios financieros tradicionales.</p>
                    </div>
                </div>
            </article>
        </section>
    </section>

    <x-calculadora></x-calculadora>

    <section class="container py-5 mt-5">
        <section class="row">
            <article class="col-sm-8">
                <img class="img-fluid" src="{{ asset('img/consultarmicrocreditos.jpg') }}" alt="">
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
                                                <option value="Vivienda de Interes Público">Vivienda de Interes Público
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
