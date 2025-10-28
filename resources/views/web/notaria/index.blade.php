@extends('layouts.web')
@section('head')
<title>Conoce nuestra Notaria en Estados Unidos</title>
<link rel="stylesheet" href="{{asset('css/style-not.css?v=4')}}">
<meta name="description" content="Notario Público en Queens New York. Gestión en Línea en todo EE.UU. Poderes, Apostillas, Traducciones, Autorizaciones de Viaje, Affidavit."/>
<meta name="keywords" content="">

<meta property="og:url"                content="{{ Request::url() }}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="Notario Público en Queens New York." />
<meta property="og:description"        content="Gestión en Línea en todo EE.UU. Poderes, Apostillas, Traducciones, Autorizaciones de Viaje, Affidavit." />
<meta property="og:image"              content="{{asset('img/meta-notaria-latina-queens-new-york.jpg')}}" />

@endsection



@section('content')

<section class="height-banner-mobile bg-image-banner-mobile" style="height: 750px; background-position: center top; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/banner-fondo-notaria-estados-unidos.webp') }}')">
    <section class="height-banner-mobile padding-left-banner-mobile d-flex align-items-center justify-content-start" style="height: 750px; padding-left: 13%">
        <div data-aos="fade-right">
            <h1 style="font-family: 'Bitter', 'serif'; color: #ffffff">
                <span style="font-size: 7rem; font-weight: 600" class="f-size-min-3"> Notaria</span> <br> 
                <span style="font-size: 3rem; font-style: italic" class="f-size-min-2">en Estados Unidos</span> 
            </h1>
            <p class="text-white font-family-montserrat text-description" style="font-size: 1.5rem; font-weight: 200">Servicios notariales en <strong style="font-weight: 600">EE.UU.</strong> para <strong style="font-weight: 600">Latinoamérica</strong></p>
            <button class="btn btn-danger rounded-pill mt-2 d-none" data-bs-toggle="modal"data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
        </div>
    </section>
</section>

<section class="border-bottom py-5">
    <div class="container" >
        <div class="row">
            <div class="col-12 col-sm-6 p-4 my-2">
                <span class="fw-bold font-family-montserrat">¿Por qué elegirnos?</span> <br><br>
                <h4 class="heading-title pb-4 font-family-montserrat">En nuestra Notaria brindamos el mejor servicio y asesoramiento a latinos en Estados Unidos.</h4>
                <img id="imgdoc" class="mx-2" src="{{asset('img/docverify-approved-enotary-small.png')}}" width="70" alt="Logo de Docverify" title="Logo de Docverify">
                <img id="imgnna" class="mx-2" src="{{asset('img/national-notary-association-blue.png')}}" alt="Logo de National Notary Association" title="Logo de National Notary Association">
            </div>
            <div class="col-12 col-sm-6 p-4 my-4  d-flex align-items-center">
                <span style="font-size:18px; text-indent: 40px;" class="font-family-montserrat">
                    Somos una notaría autorizada para autenticar documentos en Estados Unidos, por medio de una Apostilla. Nuestro servicio es realizado bajo normas y reglas estrictamente legales, para que su trabajo sea entregado con la mayor prontitud y satisfacción.
                    <br><br>
                    Brindamos servicios notariales para toda Latinoamérica desde los Estados Unidos.
                </span>
            </div>
        </div>
    </div>
</section>


<section class="bg-white">
    <div class="container pt-5 pb-5">
        <div class="row pb-2">
            <div class="col-12 text-center mb-5">
                <h2 class="font-family-montserrat">Nuestros Servicios</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mb-3">
                <div class="serviceBox">
                    <h3 class="title font-family-montserrat">Apostillas</h3>
                    <div class="service-icon">
                        <img class="service-img pt-3" src="{{asset('img/apostillas.png')}}" width="50" alt="">
                    </div>
                    <p class="description font-family-montserrat">
                        Autentificamos sus documentos solicitados por entidades de otro país diferente al originario mediante la apostilla de los mismos.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 mb-3">
                <div class="serviceBox">
                    <h3 class="title font-family-montserrat">Poderes</h3>
                    <div class="service-icon">
                        <img class="service-img pt-4" src="{{asset('img/poderes.png')}}" width="40" alt="">
                    </div>
                    <p class="description font-family-montserrat">
                        Gestione sus trámites legales sin estar presente por medio de un apoderado de confianza, una solución para gestionar bienes y trámites importantes.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 mb-3">
                <div class="serviceBox">
                    <h3 class="title font-family-montserrat">Traducciones</h3>
                    <div class="service-icon">
                        <img class="service-img pt-4" src="{{asset('img/traducciones.png')}}" width="40" alt="">
                    </div>
                    <p class="description font-family-montserrat">
                        Transcripción de documentos de un idioma a otro diferente, certificados por un notario para ser presentados frente a las entidades que lo soliciten.
                    </p>
                </div>
            </div>
        </div>
    </div>
<section>

<section class="row m-0 justify-content-md-center py-2 bg-light d-none">
    <div class="col-12 text-center py-4">
      <h2>Más Servicios</h2>
      <p>También ofrecemos los siguientes servicios notariales:</p>
    </div>
    <div class="col col-12 col-md-4 col-lg-3 col-xl-3 pb-4">
        <a href="" class="btn btn-gray-red btn-block">Apostillas</a>
        <a href="" class="btn btn-gray-red btn-block">Affidávit</a>
        <a href="" class="btn btn-gray-red btn-block">Certificaciones</a>
        <a href="" class="btn btn-gray-red btn-block">Poderes Especiales</a>
    </div>
    <div class="col col-12 col-md-4 col-lg-3 col-xl-3 pb-4">
        <a href="" class="btn btn-gray-red btn-block">Poderes</a>
        <a href="" class="btn btn-gray-red btn-block">Acuerdos</a>
        <a href="" class="btn btn-gray-red btn-block">Cartas de Invitación</a>
        <a href="" class="btn btn-gray-red btn-block">Revocatoria</a>
    </div>
    <div class="col col-12 col-md-4 col-lg-3 col-xl-3 pb-4">
        <a href="" class="btn btn-gray-red btn-block">Traducciones</a>
        <a href="" class="btn btn-gray-red btn-block">Autorizaciones de Viaje</a>
        <a href="" class="btn btn-gray-red btn-block">Contratos</a>
        <a href="" class="btn btn-gray-red btn-block">Testamento</a>
    </div>
    <div class="col-xl-3">
        
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div>
            <h2 class="font-family-montserrat">Nuestras oficinas en Estados Unidos</h2>
            <p class="font-family-montserrat">Conoce donde nos encontramos ubicados en EE.UU.</p>
        </div>
        <div class="row mt-4">
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div>
                        <img class="img-offices" width="100%" height="400px" style="object-fit: cover" src="{{ asset('img/notaria-latina-en-new-york.webp') }}" alt="Imagen de oficina de Notaria en New York" title="Imagen de oficina de Notaria en New York">
                    </div>
                    <div class="p-4">
                        <h3 class="font-family-montserrat">Notaria en New York</h3>
                        <p class="font-family-montserrat d-flex align-items-center">
                            <img width="30" src="{{ asset('img/location-icon.png') }}" alt="">
                            67-03 Roosevelt Avenue, Woodside, NY 11377
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div>
                        <img class="img-offices" width="100%" height="400px" style="object-fit: cover" src="{{ asset('img/notaria-latina-en-new-jersey.webp') }}" alt="Imagen de oficina de Notaria en New Jersey" title="Imagen de oficina de Notaria en New Jersey" title="Icono de ubicacion de oficina en New York">
                    </div>
                    <div class="p-4">
                        <h3 class="font-family-montserrat">Notaria en New Jersey</h3>
                        <p class="font-family-montserrat d-flex align-items-center">
                            <img width="30" src="{{ asset('img/location-icon.png') }}" alt="Icono de ubicacion de oficina en New Jersey" title="Icono de ubicacion de oficina en New Jersey">
                            1146 East Jersey St Elizabeth, NJ 07201</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div>
                        <img class="img-offices" width="100%" height="400px" style="object-fit: cover" src="{{ asset('img/notaria-latina-en-florida.webp') }}" alt="Imagen de oficina de Notaria en Florida" title="Imagen de oficina de Notaria en Florida">
                    </div>
                    <div class="p-4">
                        <h3 class="font-family-montserrat">Notaria en Florida</h3>
                        <p class="font-family-montserrat d-flex align-items-center">
                            <img width="30" src="{{ asset('img/location-icon.png') }}" alt="Icono de ubicacion de oficina en Florida" title="Icono de ubicacion de oficina en Florida">
                            1146 East Jersey St Elizabeth, NJ 07201</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="mb-4">
            <h2 class="font-family-montserrat">Preguntas Frecuentes (FAQ)</h2>
            <p class="font-family-montserrat lead">Resolvemos las dudas más comunes.</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="faq-container">
                    
                    <details class="mb-3 p-3 border rounded">
                        <summary class="font-family-montserrat font-weight-bold d-flex align-items-center justify-content-between cursor-pointer py-1">
                            <span class="mr-2" style="font-size: 1rem">¿Puedo comprar o vender un inmueble en Ecuador si estoy en Estados Unidos?</span>
                            <i class="fas fa-chevron-down"></i>
                        </summary>
                        <p class="font-family-montserrat mt-3 mb-0 text-secondary">
                            <strong>Sí, es posible.</strong> Si no puede viajar, usted debe otorgar un <strong>Poder Especial</strong> a un familiar o persona de confianza en Ecuador. 
                            Nuestra notaría se encarga de la preparación de este poder con todas las formalidades exactas que las notarías u otras entidades requieren.
                        </p>
                    </details>

                    <details class="mb-3 p-3 border rounded">
                        <summary class="font-family-montserrat font-weight-bold d-flex align-items-center justify-content-between cursor-pointer py-1">
                            <span class="mr-2" style="font-size: 1rem">¿Es obligatorio apostillar el poder para que tenga validez en Ecuador?</span>
                            <i class="fas fa-chevron-down"></i>
                        </summary>
                        <p class="font-family-montserrat mt-3 mb-0 text-secondary">
                            <strong>Absolutamente sí.</strong> Ecuador es firmante del Convenio de La Haya. Cualquier documento notarial (como el Poder Especial) emitido en EE. UU. debe contar con la <strong>Apostilla de La Haya</strong> para ser reconocido legalmente por las instituciones bancarias y notariales en Ecuador. Nuestra notaría también gestiona este trámite.
                        </p>
                    </details>

                    <details class="mb-3 p-3 border rounded">
                        <summary class="font-family-montserrat font-weight-bold d-flex align-items-center justify-content-between cursor-pointer py-1">
                            <span class="mr-2" style="font-size: 1rem">¿La Notaría se encarga de todo el proceso de apostillado?</span>
                            <i class="fas fa-chevron-down"></i>
                        </summary>
                        <p class="font-family-montserrat mt-3 mb-0 text-secondary">
                            Sí. Nuestra notaría no solo notariza su documento, sino que también ofrece el servicio de gestión de la Apostilla de La Haya, asegurando que el documento esté listo y legalmente aceptado por las instituciones.
                        </p>
                    </details>

                    <details class="mb-3 p-3 border rounded">
                        <summary class="font-family-montserrat font-weight-bold d-flex align-items-center justify-content-between cursor-pointer py-1">
                            <span class="mr-2" style="font-size: 1rem">¿Cuánto tiempo se tarda en obtener el poder y la apostilla?</span>
                            <i class="fas fa-chevron-down"></i>
                        </summary>
                        <p class="font-family-montserrat mt-3 mb-0 text-secondary">
                            El tiempo puede variar según el estado en EE. UU. donde se gestione la Apostilla. Nuestra notaría le dará un estimado preciso, pero generalmente el proceso completo (notarización y apostilla) puede tardar entre unos pocos días hábiles hasta dos semanas, dependiendo del tipo de trámite seleccionado.
                        </p>
                    </details>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



@section('scripts')

@endsection