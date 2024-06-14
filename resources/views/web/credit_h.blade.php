@extends('layouts.web')

@section('head')
    <meta name="description"
        content="Obtén tu crédito hipotecario con facilidades únicas en Casa Crédito. Solicitud rápida, términos flexibles de pago, y asesoramiento personalizado para financiar tu casa ideal en Ecuador.">
    <meta name="keywords"
        content="crédito hipotecario, financiamiento de vivienda, compra de casa, préstamos hipotecarios, tasas de interés bajas, solicitud de crédito, ahorro programado, contrato de préstamo, banco abierto hoy, Ecuador">
    <meta name="author" content="Casa Crédito">
    <meta property="og:title" content="Créditos Hipotecarios fáciles y seguros | Casa Crédito">
    <meta property="og:description"
        content="Descubre cómo los créditos hipotecarios de Casa Crédito pueden ayudarte a adquirir tu hogar soñado en Ecuador. Proceso fácil, rápido y transparente.">
    <meta property="og:image" content="{{ asset('img/banner1-creditos.jpg') }}">
    <meta property="og:url" content="https://www.casacredito.com/creditos-hipotecarios">
    <meta property="og:type" content="website">
    <title>Créditos Hipotecarios fáciles y seguros | Casa Crédito</title>
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
                <button class="btn btn-danger rounded-pill mt-5" data-bs-toggle="modal"
                    data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
            </div>
        </section>
    </section>

    <section class="container py-5">
        <section class="row">
            <article class="col-sm-3" style="z-index: 4">
                <div class="d-flex justify-content-center align-items-center h-100 margin-right-mobile"
                    style="margin-right: -175px;">
                    <div class="px-5 py-4 bg-white w-sm-100" style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img src="{{ asset('img/iconohipotecario.png') }}" alt="">
                        <h2 style="font-family: 'Bitter', 'serif'; color: #676667; font-weight: 600">Créditos <br>
                            Hipotecarios</h2>
                    </div>
                </div>
            </article>
            <article class="col-sm-9 d-none-mobile">
                <div class="position-relative">
                    <img src="{{ asset('img/banner2-creditos.jpg') }}" alt="">
                    <div class="position-absolute text-center top-50 start-50 translate-middle">
                        <p class="h3 text-white" style="font-family: 'Bitter', 'serif'; font-style: italic">¡Tu Llavel Hacia
                            El Hogar Que Mereces!</p>
                        <button class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                            data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
                    </div>
                </div>
            </article>
        </section>
    </section>

    <section class="container">
        <section class="row py-3">
            <p>Un crédito hipotecario es un préstamo a largo plazo otorgado por una entidad financiera con el propósito
                específico de adquirir una propiedad inmobiliaria, como una casa o un departamento. Este tipo de crédito
                está respaldado por una hipoteca, que es una garantía sobre el inmueble adquirido.</p>
            <p>Las características principales de un crédito hipotecario incluyen:</p>
        </section>
        <section class="row py-3">
            <article class="col-sm-6 mb-4">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img src="{{ asset('img/iconogarantia.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Garantía
                            Hipotecaria</h3>
                        <p class="text-muted" style="font-size: medium">La propiedad que se compra con el préstamo actúa
                            como garantía. En caso de incumplimiento en los pagos, la entidad financiera tiene el derecho de
                            ejecutar la hipoteca y vender la propiedad para recuperar el monto prestado.</p>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-4">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img src="{{ asset('img/iconoplaoz.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Largo Plazo</h3>
                        <p>Los créditos hipotecarios suelen tener plazos extensos, generalmente hasta 15. Esto permite a los
                            prestatarios distribuir el costo de la vivienda a lo largo del tiempo, haciendo los pagos más
                            manejables.</p>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-4">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img src="{{ asset('img/iconopago.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Pagos Mensuales
                        </h3>
                        <p>Los prestatarios realizan pagos mensuales que incluyen una porción del capital prestado y los
                            intereses acumulados. Estos pagos se mantienen constantes en el caso de tasas fijas, pero pueden
                            variar en el caso de tasas variables.</p>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-4">
                <div class="d-flex gap-4">
                    <div>
                        <div class="border p-2"
                            style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <img src="{{ asset('img/iconorequisitos.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Requisitos y
                            Evaluación de Solvencia</h3>
                        <p>Para obtener un crédito hipotecario, los solicitantes deben cumplir con ciertos requisitos, como
                            demostrar capacidad de pago, estabilidad laboral y tener un buen historial crediticio.</p>
                    </div>
                </div>
            </article>
        </section>
        <section class="row justify-content-center">
            <p>Un crédito hipotecario brinda la oportunidad a las personas de convertirse en propietarios de viviendas sin
                tener que desembolsar el costo total de la propiedad de inmediato. Sin embargo, es importante comprender
                completamente los términos y condiciones del préstamo antes de comprometerse, ya que implica una obligación
                financiera a largo plazo.</p>
            <a class="btn rounded-pill w-auto mt-4" style="background-color: #c61617; color: #ffffff"
                href="{{ route('web.amortizacion') }}">CALCULAR MI CRÉDITO</a>
        </section>
    </section>

    <section class="container py-5 mt-5">
        <section class="row">
            <article class="col-sm-8">
                <img class="img-fluid" src="{{ asset('img/banner3-creditos.jpg') }}" alt="">
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
                                                <option value="Vivienda de Interes Público">Vivienda de Interes Público</option>
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
    <script>
        const selState = document.getElementById('selState');
        const selCities = document.getElementById('selCity');

        const selStateForm = document.getElementById('selStateForm');
        const selCitiesForm = document.getElementById('selCityForm');

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

        selStateForm.addEventListener("change", async function() {
            selCitiesForm.options.length = 0;
            let id = selStateForm.options[selStateForm.selectedIndex].dataset.id;
            const response = await fetch("{{ url('getcities') }}/" + id);
            const cities = await response.json();

            var opt = document.createElement('option');
            opt.appendChild(document.createTextNode('Ciudad'));
            opt.value = '';
            selCitiesForm.appendChild(opt);
            cities.forEach(city => {
                var opt = document.createElement('option');
                opt.appendChild(document.createTextNode(city.name));
                opt.value = city.name;
                selCitiesForm.appendChild(opt);
            });
        });
    </script>
@endsection
