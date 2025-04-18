@extends('layouts.web')

@section('head')
    <title>Inmobiliaria en Cuenca: Encuentra tu hogar ideal</title>
    <meta name="description"            content="Descubre las mejores propiedades en Cuenca en nuestra inmobiliaria. Propiedades en venta o alquiler. ¡Haz realidad tu sueño hoy mismo!">
    <meta name="keywords"               content="inmobiliaria en cuenca, inmobiliarias en cuenca, inmobiliarias cerca de mi">
    <meta name="author"                 content="Casa Crédito">
    <meta name="robots"                 content="index, follow, snippet">
    <meta name="language"               content="ES">
    
    <meta property="og:title"           content="Inmobiliaria en Cuenca: Encuentra tu hogar ideal">
    <meta property="og:description"     content="Descubre las mejores propiedades en Cuenca en nuestra inmobiliaria. Propiedades en venta o alquiler. ¡Haz realidad tu sueño hoy mismo!">
    <meta property="og:image"           content="{{ asset('img/bannerhome1.jpg') }}">
    <meta property="og:url"             content="{{ Request::url() }}">
    <meta property="og:type"            content="website">

    <link rel="preload" as="image" href="{{ asset('img/bannermobile1.webp') }}">

    <link rel="stylesheet" href="{{ asset('css/properties/cards-properties.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.min.css?v=1') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@latest/dist/driver.css"/>

    <link rel="canonical" href="{{ Request::url() }}">

    <style>
        .driver-popover.driverjs-theme {
                background-color: #c61617;
                color: #000;
            }

            .driver-popover.driverjs-theme .driver-popover-title {
                font-size: 25px;
            }

            .driver-popover.driverjs-theme .driver-popover-description{
                font-size: 16px;
            }

            .driver-popover.driverjs-theme .driver-popover-title,
            .driver-popover.driverjs-theme .driver-popover-description,
            .driver-popover.driverjs-theme .driver-popover-progress-text {
                color: #fff;
            }

            .driver-popover.driverjs-theme button {
                background-color: red;
                color: #ffffff;
                border: 2px solid red;
                text-shadow: none;
                font-size: 14px;
                width: max-content !important;
                border-radius: 6px;
            }

            .driver-popover.driverjs-theme button:hover {
                background-color: #000;
                color: #ffffff;
            }

            .driver-popover.driverjs-theme .driver-popover-navigation-btns {
                /* justify-content: space-between;
                gap: 3px; */
            }

            .driver-popover.driverjs-theme .driver-popover-close-btn {
            color: #9b9b9b;
            }
    </style>
@endsection

@section('content')
    {{-- <section style="height: 750px;" class="min-height-banner parent-banner">
        <div style="height: 750px;" id="carouselExampleFade" class="carousel slide carousel-fade min-height-banner"
            data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                    class="active rounded-pill" aria-current="true" aria-label="Slide 1"></button>
                <button class="rounded-pill" type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button class="rounded-pill" type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div style="height: 750px;" class="carousel-inner min-height-banner">
                <div class="carousel-item position-relative active">
                    <img
                        style="height: 750px; object-fit: @if ($mobile) contain @else cover @endif; object-position: center"
                        src="@if ($mobile) {{ asset('img/bannermobile1.webp') }} @else {{ asset('img/bannerhome1.webp') }} @endif"
                        class="d-block w-100 min-height-banner" alt="Creditos en Ecuador">
                    <div class="position-absolute min-height-banner left-10px text-banner"
                        style="top: 0; left: 220px; height: 750px; display: flex; align-items: center;">
                        <div class="animacion-izquierda-derecha">
                            <h1 style="font-family: 'Bitter', 'serif'; color: #676667"><span
                                    style="font-size: 3rem; font-style: italic" class="f-size-min-2">Accede a créditos
                                    en</span> <br> <span style="font-size: 7rem; font-weight: 600"
                                    class="f-size-min-3">Ecuador</span> <br> <span
                                    style="font-size: 3rem; font-style: italic" class="f-size-min-2">desde Estados
                                    Unidos</span> </h1>
                            <button class="btn btn-danger rounded-pill margin-top-mobile" data-bs-toggle="modal"
                                data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative">
                    <img height="750px"
                        style="object-fit: @if ($mobile) contain @else cover @endif; object-position: center"
                        src="@if ($mobile) {{ asset('img/bannermobile2.webp') }} @else {{ asset('img/bannerhome2.webp') }} @endif"
                        class="d-block w-100 min-height-banner" loading="lazy" alt="Creditos Hipotecarios en Ecuador">
                    <div class="position-absolute min-height-banner left-10px text-banner"
                        style="top: 0; left: 220px; height: 750px; display: flex; align-items: center;">
                        <div class="animacion-izquierda-derecha">
                            <h2 style="font-family: 'Bitter', 'serif'; color: #676667"><span
                                    style="font-size: 3rem; font-style: italic" class="f-size-min-2">Adquiere el hogar
                                    que</span> <br> <span style="font-size: 7rem; font-weight: 600"
                                    class="f-size-min-3">Mereces</span> <br> <span
                                    style="font-size: 3rem; font-style: italic" class="f-size-min-2">con un crédito
                                    hipotecario</span> </h2>
                            <button class="btn btn-danger rounded-pill margin-top-mobile" data-bs-toggle="modal"
                                data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative">
                    <img height="750px"
                        style="object-fit: @if ($mobile) contain @else cover @endif; object-position: center"
                        src="@if ($mobile) {{ asset('img/bannermobile3.webp') }} @else {{ asset('img/bannerhome3.webp') }} @endif"
                        class="d-block w-100 min-height-banner" loading="lazy" alt="Creditos de Consumo en Ecuador">
                    <div class="position-absolute min-height-banner left-10px text-banner"
                        style="top: 0; left: 220px; height: 750px; display: flex; align-items: center;">
                        <div class="animacion-izquierda-derecha">
                            <h2 style="font-family: 'Bitter', 'serif'; color: #676667"><span
                                    style="font-size: 3rem; font-style: italic" class="f-size-min-2">Compra el carro
                                    de</span> <br> <span style="font-size: 7rem; font-weight: 600" class="f-size-min-3">Tus
                                    sueños</span> <br> <span style="font-size: 3rem; font-style: italic"
                                    class="f-size-min-2">con un crédito de
                                    consumo</span> </h2>
                            <button class="btn btn-danger rounded-pill margin-top-mobile" data-bs-toggle="modal"
                                data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section style="height: 90vh; position: relative;" class="min-height-banner parent-banner">
        <div style="height: 90vh; position: relative; display: flex; align-items: center; justify-content: center" class="min-height-banner">
            <video class="video-background" autoplay muted loop>
                <source src="{{ asset('videos/inmobiliaria-en-cuenca.mp4') }}" type="video/mp4">
            </video>
            <!-- Capa de oscurecimiento -->
            <div class="video-overlay"></div>
            <div class="min-height-banner text-banner">
                <div class="animacion-izquierda-derecha" style="margin-bottom: 20px;">
                    <h1 class="banner-title" id="titulo">
                        <span class="f-size-min-2">Inmobiliaria en</span>
                        <span class="f-size-min-3">Cuenca</span>
                    </h1>
                    <p class="banner-text" id="descripcion">Asesoría inmobiliaria profesional para encontrar la propiedad ideal</p>
                </div>
                <section class="container form-search">
                    <div class="py-4 border shadow-sm bg-white">
                        <p class="search-title m-0">Buscar por:</p>
                        <div class="d-flex align-items-center justify-content-center padding-inputs" style="gap: 10px">
                            <div id="first_filter">
                                <label class="text-muted" for="property_type">Tipo de propiedad</label>
                                <select name="property_type" id="property_type" class="form-select">
                                    <option value="">Seleccione</option>
                                    <option value="casas">Casas</option>
                                    <option value="departamentos">Departamentos</option>
                                    <option value="casas comerciales">Casas Comerciales</option>
                                    <option value="terrenos">Terrenos</option>
                                    <option value="quintas">Quintas</option>
                                    <option value="haciendas">Haciendas</option>
                                    <option value="locales comerciales">Locales Comerciales</option>
                                    <option value="oficinas">Oficinas</option>
                                    <option value="suites">Suites</option>
                                    <option value="edificios">Edificio</option>
                                    <option value="hoteles">Hoteles</option>
                                    <option value="bodegas">Bodegas</option>
                                    <option value="naves industriales">Naves Industriales</option>
                                </select>
                            </div>
                            <div id="second_filter">
                                <label for="operation" class="text-muted">Operación</label>
                                <select name="operation" id="operation" class="form-select">
                                    <option value="">Seleccione</option>
                                    <option value="venta">Venta</option>
                                    <option value="renta">Renta</option>
                                </select>
                            </div>
                            <div id="third_filter">
                                <label for="location" class="text-muted">Ubicación</label>
                                <input type="text" name="location" id="location" class="form-control" placeholder="Ingrese una ubicación">
                            </div>
                            <div id="btn-search">
                                <br>
                                <button class="btn btn-danger" onclick="searchProperties()">Buscar</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    

    <div class="container-fluid bg-trasparent py-5 mt-4">
        <div class="text-center mb-5">
            <h2 class="our-properties">Nuestras <span>Propiedades</span></h2>
            <p class="text-muted">Descubre nuestro catálogo de propiedades en venta o renta</p>
        </div>
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            @foreach ($properties as $property)
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="https://grupohousing.com/uploads/listing/600/{{explode('|', $property->images)[0]}}" class="" alt="{{ $property->listing_title }}">
                        <div class="card-body">
                            <div class="mb-3">
                                <span class="float-start badge rounded-pill bg-danger">{{ $property->listingType->type_title }}</span>
                                <span class="float-start badge rounded-pill bg-danger">{{ ucwords(str_replace('-', ' ', $property->listingtypestatus)) }}</span>
                            </div>
                            <div>
                                <br>
                                <h3>{{ strpos($property->address, ',') !== false ? $property->address : $property->sector . ", " . $property->city . ", " . $property->state }}</h3>
                                <h4 class="card-title">{{ ucfirst(strtolower($property->listing_title)) }}</h4>
                                <h5 class="m-0">&dollar;{{ number_format($property->property_price)}}</h5> 
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="text-center"> 
                                <a href="{{ route('web.property.by.slug', $property->slug)}}" class="btn btn-outline-danger">Ver propiedad</a> 
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center mt-5">
            <a class="btn btn-danger w-auto" href="/propiedades">Ver todas las propiedades</a>
        </div>
    </div>

    <div class="bg-white pt-3 pb-5">
        <section class="container mt-5">
            <h2 class="text-center" style="font-family: 'Bitter', serif; font-style: italic;"><span style="color: gray">¿Resides en Estados Unidos</span> <span style="color: red">y necesitas un préstamo en Ecuador?</span></h2>
            <h3 class="text-center pb-5" style="font-size: medium"><span>Encuentra el crédito ideal</span> <span> para tus necesidades</span></h3>
            <section class="row">
                <article class="col-sm-4">
                    {{-- <a href="{{ route('web.creditos.hipoetacarios') }}"> --}}
                    <div data-aos="fade-right" class="position-relative min-height-cards card-creditos"
                        style="height: 300px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <div class="position-absolute right-cards" style="bottom: 0px; right: 45px;">
                            <span
                                style="font-family: 'Montserrat', sans-serif; font-size: 170px; font-weight: 900; color: #676667; opacity: 12%;"
                                class="font-size-cards">1</span>
                        </div>
                        <div class="position-absolute min-height-cards left-cards"
                            style="top: 0px; left: 45px; height: 300px; display: flex; align-items: center">
                            <div class="icons-creditos">
                                <div>
                                    <img width="60px" src="{{ asset('img/iconohipotecario2.webp') }}" loading="lazy" alt="creditos hipotecarios en ecuador">
                                </div>
                                <div>
                                    <h4 class="mt-3 mb-4">Créditos <br> Hipotecarios</h4>
                                    <p style="padding-right: 20%">Créditos hipotecarios para ecuatorianos residentes.</p>
                                    <div style="padding-right: 25%" class="d-flex justify-content-between">
                                        <p><a href="{{ route('web.creditos.hipoetacarios') }}"
                                                style="font-size: small; text-decoration: none; color: #676667">MAS INFO</a>
                                        </p>
                                        <p><a href="{{ route('web.creditos.hipoetacarios') }}"
                                                style="text-decoration: none; color: #676667"><i
                                                    class="fa-solid fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- </a> --}}
                </article>
                <article class="col-sm-4">
                    <div data-aos="fade-up" class="position-relative min-height-cards card-creditos"
                        style="height: 300px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <div class="position-absolute right-cards" style="bottom: 0px; right: 45px;">
                            <span
                                style="font-family: 'Montserrat', sans-serif; font-size: 170px; font-weight: 900; color: #676667; opacity: 12%"
                                class="font-size-cards">2</span>
                        </div>
                        <div class="position-absolute min-height-cards left-cards"
                            style="top: 0px; left: 45px; height: 300px; display: flex; align-items: center">
                            <div class="icons-creditos">
                                <div>
                                    <img src="{{ asset('img/iconovip.webp') }}" loading="lazy" alt="creditos vip en ecuador">
                                </div>
                                <div>
                                    <h4 class="mt-3 mb-4">Créditos <br> VIP</h4>
                                    <p style="padding-right: 20%">Obtenga su primera casa o departamento.</p>
                                    <div style="padding-right: 25%" class="d-flex justify-content-between">
                                        <p><a href="{{ route('web.credito.vip') }}" style="font-size: small; text-decoration: none; color: #676667">MAS INFO</a></p>
                                        <p><a href="{{ route('web.credito.vip') }}"><i style="text-decoration: none; color: #676667" class="fa-solid fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-sm-4">
                    <div data-aos="fade-left" class="position-relative min-height-cards card-creditos"
                        style="height: 300px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <div class="position-absolute right-cards" style="bottom: 0px; right: 45px;">
                            <span
                                style="font-family: 'Montserrat', sans-serif; font-size: 170px; font-weight: 900; color: #676667; opacity: 12%"
                                class="font-size-cards">3</span>
                        </div>
                        <div class="position-absolute min-height-cards left-cards"
                            style="top: 0px; left: 45px; height: 300px; display: flex; align-items: center">
                            <div class="icons-creditos">
                                <div>
                                    <img src="{{ asset('img/iconoconsumo.webp') }}" loading="lazy" alt="creditos de consumo en ecuador">
                                </div>
                                <div>
                                    <h4 class="mt-3 mb-4">Créditos <br> de Consumo</h4>
                                    <p style="padding-right: 20%">Solvente sus gastos personales fácilmente.</p>
                                    <div style="padding-right: 25%" class="d-flex justify-content-between">
                                        <p><a href="{{ route('web.credito.consumo') }}" style="font-size: small; text-decoration: none; color: #676667">MAS INFO</a></p>
                                        <p><a href="{{ route('web.credito.consumo') }}"><i style="text-decoration: none; color: #676667" class="fa-solid fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </section>
    </div>

    <section class="container pt-5">
        <section class="row">
            <article class="col-sm-4" style="z-index: 3;" data-aos="fade-right">
                <div class="border p-5 bg-white margin-left-0 w-auto-mobile"
                    style="height: auto; width: 500px; margin-top: 6%; margin-left: 50px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <h2 class="mb-4" style="font-family: 'Bitter', 'serif';"><span
                            style="color: red; font-size: 25px">CRÉDITOS PARA</span> <br> <span
                            style="color: gray">ECUATORIANOS EN EE.UU</span></h2>
                    <p>Los créditos están diseñados para brindarle oportunidades de crecimiento, facilitando el camino hacia
                        la estabilidad financiera y la realización de sus sueños.</p>
                    <p>Le brindamos asesoramiento y acompañamiento profesional, estamos comprometidos a ser su socio
                        confiable en esta trascendental etapa de su vida.</p>
                    <details>
                        <summary class="py-2 text-muted"
                            style="border-bottom: 1px solid gray; font-family: 'Bitter', 'serif'; font-style: italic; font-weight: 600">
                            Revisión de buro de crédito</summary>
                        <p class="py-3">Evalue el historial financiero de una persona o empresa. Esto se hace para
                            determinar su capacidad de pago al solicitar un préstamo o servicio financiero. </p>
                    </details>
                    <details>
                        <summary class="py-2 text-muted"
                            style="border-bottom: 1px solid gray; font-family: 'Bitter', 'serif'; font-style: italic; font-weight: 600">
                            Reparación de buro de créditos</summary>
                        <p class="py-3">Proceso destinado a corregir y mejorar la información financiera de un individuo.
                            Cuando se identifican errores o situaciones negativas en el historial crediticio, este proceso
                            busca rectificar esas inexactitudes.</p>
                    </details>
                    <button class="btn btn-danger btn-sm rounded-pill mt-4" data-bs-toggle="modal"
                        data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
                </div>
            </article>
            <article class="col-sm-8 d-none-mobile">
                <img class="img-fluid" src="{{ asset('img/creditosecuatorianos.webp') }}" loading="lazy" alt="Creditos para Ecuatorianos en Estados Unidos">
            </article>
        </section>
    </section>

    <section class="container" style="padding-top: 7%; padding-bottom: 7%">
        <section class="row">
            <article class="col-sm-3" data-aos="fade-up">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <div class="border p-3 shadow d-flex justify-content-center"
                            style="width: 100px; height: 100px; border-radius: 25px">
                            <img src="{{ asset('img/iconoexperiencia.webp') }}" loading="lazy" alt="Experiencia en el proceso de Creditos en Ecuador">
                        </div>
                    </div>
                    <h3 class="mt-2" style="font-family: 'Bitter', 'serif'; font-weight: 600">Experiencia</h3>
                    <p>Confiabilidad y seguridad en el sector financiero</p>
                </div>
            </article>
            <article class="col-sm-3" data-aos="fade-up">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <div class="border p-3 shadow d-flex justify-content-center"
                            style="width: 100px; height: 100px; border-radius: 25px">
                            <img src="{{ asset('img/iconoprocesoagil.webp') }}" loading="lazy" alt="Proceso Agil en la gestion de Creditos en Ecuador">
                        </div>
                    </div>
                    <h3 class="mt-2" style="font-family: 'Bitter', 'serif'; font-weight: 600">Proceso Ágil</h3>
                    <p>Proceso Ágil que facilita obtener el crédito que necesitas</p>
                </div>
            </article>
            <article class="col-sm-3" data-aos="fade-up">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <div class="border p-3 shadow d-flex justify-content-center"
                            style="width: 100px; height: 100px; border-radius: 25px">
                            <img src="{{ asset('img/iconoapoyo.webp') }}" loading="lazy" alt="Apoyo Integral en el proceso para un Credito en Ecuador">
                        </div>
                    </div>
                    <h3 class="mt-2" style="font-family: 'Bitter', 'serif'; font-weight: 600">Apoyo Integral</h3>
                    <p>Te ofrecemos apoyo integral en cada paso del proceso</p>
                </div>
            </article>
            <article class="col-sm-3" data-aos="fade-up">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <div class="border p-3 shadow d-flex justify-content-center"
                            style="width: 100px; height: 100px; border-radius: 25px">
                            <img src="{{ asset('img/iconocompromiso.webp') }}" loading="lazy" alt="Compromiso en el proceso para un credito en Ecuador">
                        </div>
                    </div>
                    <h3 class="mt-2" style="font-family: 'Bitter', 'serif'; font-weight: 600">Compromiso</h3>
                    <p>Nuestro compromiso es guiarte en cada paso hacia tu crédito</p>
                </div>
            </article>
        </section>
    </section>

    <section class="container">
        <section class="row">
            <article class="col-sm-6 mb-4" data-aos="zoom-in">
                <div class="border" style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <div class="row">
                        <div class="col-sm-4 px-4 py-3">
                            <img class="img-fluid" src="{{ asset('img/quienesomos.webp') }}" loading="lazy" alt="Nuestro Equipo de Casa Credito">
                        </div>
                        <div class="col-sm-8 d-flex align-items-center padding-x-cards-footer">
                            <div>
                                <h3 style="font-family: 'Bitter', 'serif'; font-style: italic">¿Quienes somos?</h3>
                                <p class="text-muted">Somos un equipo dedicado a ofrecer soluciones a medida para cada uno
                                    de nuestros clientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-4" data-aos="zoom-in">
                <div class="border" style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <div class="row">
                        <div class="col-sm-4 px-4 py-3">
                            <img class="img-fluid" src="{{ asset('img/nuestrosvalores.webp') }}" loading="lazy" alt="Valores de Casa Credito">
                        </div>
                        <div class="col-sm-8 d-flex align-items-center padding-x-cards-footer">
                            <div>
                                <h3 style="font-family: 'Bitter', 'serif'; font-style: italic">Nuestros Valores</h3>
                                <p class="text-muted">Construyendo relaciones basadas en la confianza y el compromiso con
                                    nuestros clientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-4" data-aos="zoom-in">
                <div class="border" style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <div class="row">
                        <div class="col-sm-4 px-4 py-3">
                            <img class="img-fluid" src="{{ asset('img/nuestraexperiencia.png') }}" loading="lazy" alt="Experiencia de Casa Credito">
                        </div>
                        <div class="col-sm-8 d-flex align-items-center padding-x-cards-footer">
                            <div>
                                <h3 style="font-family: 'Bitter', 'serif'; font-style: italic">Nuestra Experiencia</h3>
                                <p class="text-muted">Casa Crédito ofrece una experiencia probada que respalda cada
                                    transacción.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-sm-6 mb-4" data-aos="zoom-in">
                <div class="border" style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <div class="row">
                        <div class="col-sm-4 px-4 py-3">
                            <img class="img-fluid" src="{{ asset('img/nuestrosasesores.png') }}" loading="lazy" alt="Nuestros Asesores de Casa Credito">
                        </div>
                        <div class="col-sm-8 d-flex align-items-center padding-x-cards-footer">
                            <div>
                                <h3 style="font-family: 'Bitter', 'serif'; font-style: italic">Nuestros Asesores</h3>
                                <p class="text-muted">Brindamos orientación personalizada para asegurar soluciones eficaces
                                    y exitosas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </section>

    <section class="container py-5">
        <section class="row">
            <article class="col-sm-8">
                <img class="img-fluid" src="{{ asset('img/calcularcredito.png') }}" loading="lazy" alt="Calcule Su Credito">
            </article>
            <article class="col-sm-4 d-flex align-items-center" data-aos="fade-left">
                <div class="border p-5 bg-white card-cuota-mensual"
                    style="height: auto; width: 540px; margin-top: 6%; margin-left: -150px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <h2 class="mb-4" style="font-family: 'Bitter', 'serif';"><span
                            style="color: red; font-size: 25px">CALCULE SU</span> <br> <span style="color: gray">CUOTA
                            MENSUAL</span></h2>
                    <p>Pruebe nuestra Calculadora de Amortización, esta herramienta le proporcionará un desglose referencial
                        de sus pagos mensuales e intereses.</p>
                    <details class="pt-2">
                        <summary class="py-2 text-muted"
                            style="border-bottom: 1px solid gray; font-family: 'Bitter', 'serif'; font-style: italic; font-weight: 600">
                            Sistema de Amortización Francés</summary>
                        <p class="py-3">En este sistema, la cuota mensual que paga el prestatario se divide en dos
                            partes: una parte se destina al pago de los intereses acumulados sobre el capital pendiente, y
                            la otra parte se utiliza para amortizar el capital prestado.</p>
                    </details>
                    <details class="pb-2">
                        <summary class="py-2 text-muted"
                            style="border-bottom: 1px solid gray; font-family: 'Bitter', 'serif'; font-style: italic; font-weight: 600">
                            Sistema de Amortización Alemán</summary>
                        <p class="py-3">En este método, la cuota mensual que paga el prestatario se compone
                            principalmente de una porción constante destinada a amortizar el capital prestado, mientras que
                            los intereses se calculan sobre el saldo pendiente.</p>
                    </details>
                    <a href="{{ route('web.amortizacion') }}" class="btn btn-danger btn-sm rounded-pill mt-4">IR
                        A CALCULADORA</a>
                </div>
            </article>
        </section>
    </section>

    {{-- <section style="height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/creditos-en-ecuador.webp') }}')">
        <section class="d-flex align-items-center justify-content-center" style="height: 750px">
            <div class="text-center">   
                <h1 class="text-white display-6">Créditos para Ecuatorianos <br> migrantes en EE.UU.</h1>
                <button class="btn text-white" style="background-color: #c61617" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">INICIAR CRÉDITO</button>
            </div>
        </section>
    </section> --}}

    {{-- <section class="container py-5">
        <section>
            <p class="text-center">Somos su socio de confianza</p>
            <h2 class="text-center">Servicios que ofrecemos</h2>
            <section class="row justify-content-center mt-5">
                <article class="col-sm-4 d-flex justify-content-center justify-content-sm-end">
                    <div class="position-relative min-width" style="width: 300px">
                        <img class="img-fluid" src="{{ asset('img/paso1.png') }}" alt="">
                        <div class="position-absolute h-100" style="top: 5px; left: 20px;">
                            <img width="100px" src="{{ asset('img/paso1-icon.png') }}" alt="">
                        </div>
                        <div class="position-absolute top-50 translate-middle-y" style="left: 30px">
                            <p style="font-size: large; font-weight: 600">Creditos <br> hipotecarios</p>
                            <p style="padding-right: 40% !important;">Creditos hipotecarios para ecuatorianos residentes</p>
                        </div>
                        <div class="position-absolute w-100 px-4" style="bottom: 20px;">
                            <a href="{{ Request::url() }}/creditos#calculadora" class="btn text-white btn-block rounded-0 w-100" style="background-color: #c61617;">CALCULAR MI CREDITO</a>
                        </div>
                    </div>
                </article>
                <article class="col-sm-4 d-flex justify-content-center">
                    <div class="position-relative min-width" style="width: 300px">
                        <img class="img-fluid" src="{{ asset('img/paso2.png') }}" alt="">
                        <div class="position-absolute h-100" style="top: 5px; left: 20px;">
                            <img width="100px" src="{{ asset('img/paso2-icon.png') }}" alt="">
                        </div>
                        <div class="position-absolute top-50 translate-middle-y" style="left: 30px">
                            <p style="font-size: large; font-weight: 600">Creditos de <br> consumo</p>
                            <p style="padding-right: 40% !important;">Creditos adaptados a sus necesidades y metas personales</p>
                        </div>
                        <div class="position-absolute w-100 px-4" style="bottom: 20px;">
                            <a href="{{ Request::url() }}/creditos#calculadora" class="btn text-white btn-block rounded-0 w-100" style="background-color: #c61617;">CALCULAR MI CREDITO</a>
                        </div>
                    </div>
                </article>
                <article class="col-sm-4 d-flex justify-content-center justify-content-sm-start">
                    <div class="position-relative min-width" style="width: 300px">
                        <img class="img-fluid" src="{{ asset('img/paso3.png') }}" alt="">
                        <div class="position-absolute h-100" style="top: 5px; left: 20px;">
                            <img width="100px" src="{{ asset('img/paso3-icon.png') }}" alt="">
                        </div>
                        <div class="position-absolute top-50 translate-middle-y" style="left: 30px">
                            <p style="font-size: large; font-weight: 600">Creditos de <br> construccion</p>
                            <p style="padding-right: 40% !important; ">El respaldo necesario para hacer realidad su proyecto</p>
                        </div>
                        <div class="position-absolute w-100 px-4" style="bottom: 20px;">
                            <a href="{{ Request::url() }}/creditos#calculadora" class="btn text-white btn-block rounded-0 w-100" style="background-color: #c61617;">CALCULAR MI CREDITO</a>
                        </div>
                    </div>
                </article>
            </section>
        </section>
    </section> --}}

    {{-- <section class="bg-light">
        <section class="row">
            <article class="col-sm-5">
                <img class="img-fluid" src="{{ asset('img/como-obtener-un-credito-en-ecuador.png') }}" alt="">
            </article>
            <article class="col-sm-7 d-flex align-items-center h-full">
                <div class="container" style="padding-right: 25%; padding-left: 5%">
                    <p style="color: #c61617">Creditos que, como usted, trascienden fronteras</p>
                    <h2 class="fw-bold">Creditos hipotecarios para ecuatorianos residentes en EE.UU.</h2>
                    <p>Nuestros créditos están diseñados para brindarle oportunidades de propiedad, facilitando el camino hacia la estabilidad financiera y la realización de sus sueños.</p>
                    <p>Le brindamos asesoramiento y acompañamiento, nuestra notaría crea las condiciones necesarias para un trámite ágil y eficaz, estamos comprometidos a ser su socio confiable en esta trascendental etapa de su vida.</p>
                    <button class="btn" style="border: 1px solid #c61617; color: #c61617;" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">INICIAR</button>
                </div>
            </article>
        </section>
    </section> --}}

    {{-- <section class="container py-5">
        <article class="text-center py-5">
            <p class="display-6 fw-bold">Calcule su credito</p>
            <p class="mt-4" style="padding-left: 25%; padding-right: 25%">Pruebe nuestra calculador de amortizacion, nuestra herramienta le proporcionara un desglose referencial y detallado de sus pagos mensuales, intereses y amortizacion</p>
            <p class="fw-bold">Haga clic en el boton 'Ir a Calculadora' para comenzar</p>
            <a href="{{ Request::url()}}/creditos#calculadora" class="btn mt-4 text-white" style="background-color: #c61617">IR A CALCULADORA</a>
        </article>
    </section> --}}

    {{-- modals --}}
    @include('components.form')
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/driver.js@latest/dist/driver.js.iife.js"></script>
    <script src="{{ asset('js/driver.min.js') }}"></script>
    <script>
        const selState = document.getElementById('selStateForm');
        const selCities = document.getElementById('selCityForm');

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

        
        function searchProperties() {
            // Obtener los valores y limpiar espacios
            const propertyType = document.getElementById('property_type')?.value.trim().toLowerCase() || '';
            const selectedOperation = document.getElementById('operation');
            const location = document.getElementById('location')?.value.trim().toLowerCase() || '';

            let operationType = selectedOperation ? selectedOperation.value.trim().toLowerCase() : '';

            // Reemplazar espacios por guiones en tipo de propiedad y ubicación
            let formattedPropertyType = propertyType.replace(/\s+/g, '-');
            let formattedLocation = location.replace(/\s+/g, '-');

            // Construir la URL base
            let url = '/propiedades';

            // Concatenar dependiendo de los valores seleccionados
            if (formattedPropertyType) {
                url += `/${formattedPropertyType}`;
            }

            if (operationType) {
                // Verificar si ya se agregó "-en-" antes de agregar la operación
                if (!url.includes(`-en-${operationType}`)) {
                    url += formattedPropertyType ? `-en-${operationType}` : `/${operationType}`;
                }
            }

            if (formattedLocation) {
                // Verificar si ya se agregó "-en-" antes de agregar la ubicación
                if (!url.includes(`-en-${formattedLocation}`)) {
                    url += (formattedPropertyType || operationType) ? `-en-${formattedLocation}` : `/${formattedLocation}`;
                }
            }

            // Limpiar cualquier repetición extra de "-en-"
            url = url.replace(/-en-+/g, '-en-'); // Evita múltiples repeticiones
            
            window.location.href = encodeURI(url);
        }




    </script>
@endsection
