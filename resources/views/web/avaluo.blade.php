@extends('layouts.web')

@section('head')
    <title>Avalúo de Propiedades | Casa Crédito</title>
    <style>

        @media screen and (max-width: 580px){
            .height-banner-mobile{
                height: 550px !important;
            }
            .bg-image-banner-mobile{
                background-position: center !important;
            }
            .f-size-min-2{
                font-size: 1.4rem !important;
            }
            .f-size-min-3{
                font-size: 3.5rem !important;
            }
            .padding-left-banner-mobile{
                padding-left: 10% !important;
            }
            .margin-right-mobile{
                margin-right: 0px !important;
            }
            .top-0-mobile{
                margin-top: -50px !important;
            }
            .top-50-mobile{
                margin-top: -100px !important;
            }
            .w-sm-100{
                width: 100% !important;
            }
            .card-cuota-mensual{
                width: 100% !important;
                margin-left: 0px !important;
                margin-top: 25px !important;
            }
            .d-none-mobile{
                display: none !important;
            }
        }
        /* codigo banner #686768 opacidad 21%*/
        @font-face {
            font-family: 'Montserrat';
            src: url("{{ asset('fonts/Montserrat-Black.ttf') }}");
        }

        .gradient{
            background: rgb(255,255,255);
            background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(138, 25, 29, 0.207) 100%);
        }
    </style>
@endsection

@section('content')

<section class="height-banner-mobile bg-image-banner-mobile" style="height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/banner1-creditos.jpg') }}')">
    <section class="height-banner-mobile padding-left-banner-mobile d-flex align-items-center justify-content-start" style="height: 750px; padding-left: 13%">
        <div>
            <h1 style="font-family: 'Bitter', 'serif'; color: #676667"><span style="font-size: 3rem; font-style: italic" class="f-size-min-2">Conoce el</span> <br> <span style="font-size: 7rem; font-weight: 600" class="f-size-min-3">Valor de</span> <br> <span style="font-size: 3rem; font-style: italic" class="f-size-min-2">tu Propiedad</span> </h1>
            <button class="btn btn-danger rounded-pill mt-5" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
        </div>
    </section>
</section>

<section class="container py-5">
    <section class="row">
        <article class="col-sm-3" style="z-index: 4">
            <div class="d-flex justify-content-center align-items-center h-100 margin-right-mobile" style="margin-right: -175px;">
                <div class="px-5 py-4 bg-white w-sm-100" style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <img src="{{ asset('img/iconohipotecario.png') }}" alt="">
                    <h2 style="font-family: 'Bitter', 'serif'; color: #676667; font-weight: 600">Avalúo de  <br> Propiedades</h2>
                </div>
            </div>
        </article>
        <article class="col-sm-9 d-none-mobile">
            <div class="position-relative">
                <img src="{{ asset('img/banner2-creditos.jpg') }}" alt="">
                <div class="position-absolute text-center top-50 start-50 translate-middle">
                    <p class="h3 text-white" style="font-family: 'Bitter', 'serif'; font-style: italic">¡Descubre el valor real de tu propiedad!</p>
                    <button class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
                </div>
            </div>
        </article>
    </section>
</section>

<section class="container">
    <section class="row py-3">
        <p>Es una evaluación profesional del valor de un bien, ya sea una propiedad inmobiliaria, un vehículo, un negocio u otro tipo de activo. El propósito principal del avalúo es determinar el valor justo y objetivo del bien en un momento específico, basándose en diversos factores y criterios establecidos por expertos en valoración.</p>
        <p>En el contexto de bienes raíces, como en el caso de una propiedad inmobiliaria, el avalúo toma en cuenta elementos como la ubicación, tamaño, calidad de construcción, estado de conservación y las condiciones del mercado inmobiliario. Los profesionales encargados de realizar avalúos, conocidos como péritos valuadores, utilizan métodos y técnicas específicas para calcular el valor de la propiedad de manera imparcial y precisa.</p>
    </section>
    <section class="row py-3">
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img src="{{ asset('img/iconogarantia.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Objetividad</h3>
                    <p class="text-muted" style="font-size: medium">Un avalúo debe ser imparcial y objetivo, basándose en datos concretos y en la aplicación de metodologías estandarizadas. El perito valuador debe evitar influencias externas que puedan sesgar el resultado y comprometer la integridad del proceso.</p>
                </div>
            </div>
        </article>
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img src="{{ asset('img/iconoplaoz.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Precisión Técnica</h3>
                    <p>Un buen avalúo se caracteriza por la precisión técnica en la aplicación de métodos de valoración. Los peritos valuadores utilizan técnicas y herramientas específicas para calcular el valor de un bien de manera rigurosa, teniendo en cuenta factores relevantes  y variables del mercado.</p>
                </div>
            </div>
        </article>
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img src="{{ asset('img/iconopago.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Actualización y Vigencia</h3>
                    <p>El valor de un bien puede cambiar con el tiempo debido a factores como la evolución del mercado inmobiliario o cambios en la infraestructura circundante. Por lo tanto, un avalúo debe ser actualizado regularmente para reflejar las condiciones cambiantes y proporcionar información relevante en el momento en que se necesita.</p>
                </div>
            </div>
        </article>
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img src="{{ asset('img/iconorequisitos.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Legabilidad y Cumplimiento Normativo</h3>
                    <p>Un avalúo debe cumplir con las normativas y regulaciones establecidas por las autoridades competentes. Debe ser realizado por un perito valuador debidamente calificado y registrado, y el informe resultante debe cumplir con los requisitos legales y normativos aplicables en la jurisdicción correspondiente.</p>
                </div>
            </div>
        </article>
    </section>
    <section class="row justify-content-center">
        <p>Estas características aseguran que un avaluo sea confiable, útil y válido para los fines específicos para los cuales se realiza, ya sea para transacciones inmobiliarias, préstamos hipotecarios, seguros u otros propósitos.</p>
    </section>
</section>

<section class="container py-5 mt-5">
    <section class="row">
        <article class="col-sm-8">
            <img class="img-fluid" src="{{ asset('img/banner3-creditos.jpg') }}" alt="">
        </article>
        <article class="col-sm-4 d-flex align-items-center" data-aos="fade-left">
            <div class="border p-5 bg-white card-cuota-mensual" style="height: auto; width: 540px; margin-left: -150px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                <h2 class="mb-4" style="font-family: 'Bitter', 'serif';"><span style="color: gray">Realizar Consulta</span></h2>
                <form action="{{ route('sendlead') }}" method="POST">
                    @csrf
                    <div>
                        <div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <input class="form-control border-0 rounded-0" type="text" placeholder="Nombre" name="name" required>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <input class="form-control border-0 rounded-0" type="text" placeholder="Apellido" name="lastname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <input class="form-control border-0 rounded-0" type="number" placeholder="Telefono/Celular" name="phone" required>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <input class="form-control border-0 rounded-0" type="email" placeholder="Correo electrónico" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <select id="selState" class="form-select text-muted border-0 rounded-0" name="state" required>
                                            <option value="">Provincia</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->name }}" data-id="{{ $state->id}}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <select id="selCity" class="form-select text-muted border-0 rounded-0" name="city" required>
                                            <option value="">Ciudad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <select class="form-select text-muted border-0 rounded-0" name="type" required>
                                            <option value="">Tipo de Credito</option>
                                            <option value="Microcreditos">Microcreditos</option>
                                            <option value="Hipotecarios">Hipotecarios</option>
                                            <option value="De Construccion">De Construccion</option>
                                            <option value="Vivienda de Interes Popular">Vivienda de Interes Popular</option>
                                            <option value="De Consumo">De Consumo</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <input type="number" class="form-control border-0 rounded-0" placeholder="Monto a Solicitar" name="mount" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea  id="" rows="4" class="form-control border-0 rounded-0" placeholder="Mensaje" name="message" required></textarea>
                                    </div>
                                </div>
                            </div>                  
                        </div>
                        <div class="mt-4">
                            <button class="btn rounded-pill text-white px-4" style="background-color: #c61617" type="submit">ENVIAR</button>
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