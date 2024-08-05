@extends('layouts.web')

@section('head')
    <meta name="description"
        content="Contáctenos en Casa Crédito para más información sobre nuestros servicios financieros como préstamos y créditos, o para recibir asesoramiento personalizado sobre ahorro programado, tabuladores de préstamos, y más.">
    <meta name="keywords"
        content="contacto Casa Crédito, ahorro programado, banco abierto hoy, contrato de préstamo, solicitud de crédito, tabla de amortización simulador, carta de solicitud de crédito pdf, tabulador de préstamo, préstamo digital banco general">
    <meta name="author" content="Casa Crédito">
    <meta property="og:title" content="Contáctenos para obtener su crédito | Casa Crédito">
    <meta property="og:description"
        content="Visite o contacte Casa Crédito para consultas sobre créditos y préstamos o para obtener un servicio al cliente excepcional. Disponibles en horario de oficina y siempre listos para ayudarle a conseguir sus metas financieras.">
    <meta property="og:image" content="{{ asset('img/contact-us-banner.jpg') }}">
    <meta property="og:url" content="https://www.casacredito.com/contacto">
    <meta property="og:type" content="website">
    <title>Contáctenos para obtener su crédito | Casa Crédito</title>
    <style>
        @keyframes slidein {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(0%);
            }
        }

        .oficina {
            animation: slidein;
            animation-duration: 1s;
        }

        .d-carousel-mobile {
            display: none;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(100%);
        }

        @media screen and (max-width: 580px) {
            .height-banner-mobile {
                height: 550px !important;
            }

            .bg-image-banner-mobile {
                background-position: left !important;
            }

            .padding-left-banner-mobile {
                padding-left: 10% !important;
            }

            .f-size-min-2 {
                font-size: 1.4rem !important;
            }

            .f-size-min-3 {
                font-size: 3.5rem !important;
            }

            .card-cuota-mensual {
                width: 100% !important;
                margin-left: 0px !important;
                margin-top: 25px !important;
            }

            .d-cards-desktop {
                display: none !important;
            }

            .d-carousel-mobile {
                display: block !important;
            }

            #selOficina {
                width: 100% !important;
            }
        }

        .links-style {
            text-decoration: none;
            color: #676667;
        }

        select:focus>option:hover,
        select:focus>option:checked {
            background-color: #c61617 !important;
            color: #ffffff !important;
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
        style="height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/banneroficinas.jpg') }}')">
        <section class="height-banner-mobile padding-left-banner-mobile d-flex align-items-center justify-content-start"
            style="height: 750px; padding-left: 13%">
            <div data-aos="fade-right">
                <h1 style="font-family: 'Bitter', 'serif'; color: #676667"><span style="font-size: 3rem; font-style: italic"
                        class="f-size-min-2">Visita nuestras</span> <br> <span style="font-size: 7rem; font-weight: 600"
                        class="f-size-min-3">oficinas o</span> <br> <span style="font-size: 3rem; font-style: italic"
                        class="f-size-min-2">contáctanos</span> </h1>
                <a href="#contact_form" class="btn btn-danger rounded-pill mt-5">CONTACTAR</a>
            </div>
        </section>
    </section>

    <section class="container py-5">
        <h2 class="text-center" style="font-family: 'Bitter', 'serif'; font-weight: 700; font-style: italic"><span
                style="color: #676667">Seleccione la</span> <span style="color: #c61617">oficina más cercana</span></h2>
        <p style="font-family: 'Montserrat', 'serif'; font-size: 20px; color: #676667" class="text-center">Descubra como
            podemos ayudarlo a alcanzar sus metas económicas</p>
        <section class="d-flex justify-content-center">
            <select id="selOficina" class="form-select rounded-pill w-25 ps-4 border-0"
                style="font-size: 17px; font-weight: 600; background-color: #eeeeee; color: #c61617">
                <option value="Cuenca">Cuenca, Ecuador</option>
                <option value="New York">New York, EE.UU</option>
                <option value="New Jersey">New Jersey, EE.UU</option>
            </select>
        </section>
    </section>

    <section class="container">
        <section class="row mt-4">
            <section class="col-sm-5">
                <section class="oficina slidein" id="Cuenca">
                    <h2 class="mb-4">Cuenca, Ecuador</h2>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-phone-volume text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    Número de teléfono</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0"><a
                                        class="links-style" href="tel:+593989571348">098-957-1348</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-envelope text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    E-mail</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0"><a
                                        class="links-style" href="mailto:info@casacredito.com">info@casacredito.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-location-dot text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    Ubicación</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0"><a
                                        class="links-style" href="https://maps.app.goo.gl/HWGEgDpJgkmwuWFT8"
                                        target="_blank">Remigio Tamariz Crespo y <br> Av. Fray Vicente Solano</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-location-dot text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    Horario de atención</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0">Lunes a
                                    Viernes: 09h00 - 18h00 <br> Sábados: 9h00 - 13h00</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="oficina d-none" data-aos="fade-left" id="New York">
                    <h2 class="mb-4">New York, EE.UU</h2>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-phone-volume text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    Número de teléfono</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0"><a
                                        class="links-style" href="tel:+17186903740">718-690-3740</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-envelope text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    E-mail</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0"><a
                                        class="links-style" href="mailto:info@casacredito.com">info@casacredito.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-location-dot text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    Ubicación</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0"><a
                                        class="links-style" href="https://maps.app.goo.gl/hNr73tPxVeqUCTFv9"
                                        target="_blank">67-03 Roosevelt Avenue <br> Woodside, NY 11377</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-location-dot text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    Horario de atención</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0">Lunes a
                                    Viernes: 09h00 - 18h00 <br> Sábados: 9h00 - 16h00</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="oficina d-none" id="New Jersey">
                    <h2 class="mb-4">New Jersey, EE.UU</h2>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-phone-volume text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    Número de teléfono</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0"><a
                                        class="links-style" href="tel:+19083810090">908-381-0090</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-envelope text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    E-mail</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0"><a
                                        class="links-style" href="mailto:info@casacredito.com">info@casacredito.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-location-dot text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    Ubicación</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0"><a
                                        class="links-style" target="_blank"
                                        href="https://maps.app.goo.gl/U2FpSoLjuZJQGSbh9"> 1146 East Jersey St Elizabeth, NJ
                                        07201</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-3" style="background-color: #f3f3f3">
                        <div class="d-flex align-items-center gap-4">
                            <div style="background-color: #c61617"
                                class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-location-dot text-white" style="font-size: 18px"></i>
                            </div>
                            <div>
                                <p class="font-weight-bold my-0"
                                    style="font-family: 'Bitter', 'serif';font-weight: 600; font-size: 18px; color: #676667">
                                    Horario de atención</p>
                                <p style="font-family: 'Montserrat', 'serif'; font-size: 15px" class="my-0">Lunes a
                                    Viernes: 09h00 - 18h00 <br> Sábados: 9h00 - 16h00</p>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section class="col-sm-7" id="contact_form">
                <article class="d-flex align-items-center" data-aos="fade-left">
                    <div class="p-5 card-cuota-mensual w-100">
                        <h2 class="mb-4" style="font-family: 'Bitter', 'serif';"><span style="color: gray">Enviar
                                Mensaje</span></h2>
                        <form action="{{ route('sendlead') }}" method="POST">
                            @csrf
                            <div>
                                <div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <input class="form-control border-0 rounded-0"
                                                    style="background-color: #f3f3f3" type="text" placeholder="Nombre"
                                                    name="name" required>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <input class="form-control border-0 rounded-0"
                                                    style="background-color: #f3f3f3" type="text"
                                                    placeholder="Apellido" name="lastname" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <input class="form-control border-0 rounded-0"
                                                    style="background-color: #f3f3f3" type="number"
                                                    placeholder="Telefono/Celular" name="phone" required>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <input class="form-control border-0 rounded-0"
                                                    style="background-color: #f3f3f3" type="email"
                                                    placeholder="Correo electrónico" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <select id="selState" class="form-select text-muted border-0 rounded-0"
                                                    style="background-color: #f3f3f3" name="state" required>
                                                    <option value="">Provincia</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->name }}" data-id="{{ $state->id }}">
                                                            {{ $state->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <select id="selCity" class="form-select text-muted border-0 rounded-0"
                                                    style="background-color: #f3f3f3" name="city" required>
                                                    <option value="">Ciudad</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <select class="form-select text-muted border-0 rounded-0"
                                                    style="background-color: #f3f3f3" name="type" required>
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
                                                    style="background-color: #f3f3f3" placeholder="Monto a Solicitar"
                                                    name="mount" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <textarea id="" rows="4" class="form-control border-0 rounded-0" style="background-color: #f3f3f3"
                                                    placeholder="Mensaje" name="message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 d-flex justify-content-center">
                                    <button class="btn rounded-pill text-white px-4" style="background-color: #c61617"
                                        type="submit">ENVIAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>
            </section>
        </section>
    </section>

    <section class="container py-5">
        <h2 class="text-center mb-5" style="color: #676667; font-weight: 600; font-family: 'Bitter', 'serif'">Encuéntrenos
            en Google Maps</h2>
        <iframe id="iframe_map" src="" width="100%" height="450" style="border:0;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- modals -->
    {{-- @include('components.form') --}}
@endsection

@section('scripts')
    <script>
        let selState = document.getElementById('selState');
        let selCities = document.getElementById('selCity');

        selState.addEventListener("change", async function() {
            console.log('entra aqui');
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

        let locationsMaps = [
            'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.1008714352884!2d-79.01420272513482!3d-2.90807033954916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1933cc40a85d%3A0x3f5a0137411fe95e!2sCasa%20Cr%C3%A9dito%20Inmobiliaria!5e1!3m2!1ses-419!2sec!4v1722874702452!5m2!1ses-419!2sec',
            'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.712446677327!2d-73.90049888814154!3d40.74635247126916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f30c514202f%3A0x1d580f3e959efed7!2sCasa%20Cr%C3%A9dito%20Inmobiliaria%20-%20New%20York!5e0!3m2!1ses-419!2sec!4v1707927705909!5m2!1ses-419!2sec',
            'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.4152622886777!2d-74.21587838814536!3d40.66481837128145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24dde7100d355%3A0x9998b8cdec575153!2sNotar%C3%ADa%20Latina%20en%20New%20Jersey!5e0!3m2!1ses-419!2sec!4v1707927742421!5m2!1ses-419!2sec'
        ];

        let selOficina = document.getElementById('selOficina');
        selOficina.addEventListener('change', function() {
            let sections = document.querySelectorAll('.oficina');
            let iframe_map = document.getElementById('iframe_map');
            sections.forEach(element => {
                if (!element.classList.contains('d-none')) element.classList.add('d-none');
                if (selOficina.value == element.id) {
                    element.classList.remove('d-none');
                    if (selOficina.value == "Cuenca") iframe_map.src = locationsMaps[0];
                    if (selOficina.value == "New York") iframe_map.src = locationsMaps[1];
                    if (selOficina.value == "New Jersey") iframe_map.src = locationsMaps[2];
                }
            });
        });

        window.addEventListener("load", () => {
            document.getElementById('iframe_map').src =
                "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.68869374141!2d-79.012442554289!3d-2.9056980895408677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1911fa24b8a3%3A0x253fdcb31d8b1517!2sCasa%20Promotora!5e0!3m2!1ses-419!2sec!4v1707510232438!5m2!1ses-419!2sec";
        })
    </script>
@endsection
