@extends('layouts.web')

@section('head')
    <title>Crédito VIP fácil y seguro | Casa Crédito</title>
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
            <h1 style="font-family: 'Bitter', 'serif'; color: #676667"><span style="font-size: 3rem; font-style: italic" class="f-size-min-2">Descubre</span> <br> <span style="font-size: 7rem; font-weight: 600" class="f-size-min-3">nuestros</span> <br> <span style="font-size: 3rem; font-style: italic" class="f-size-min-2">diferentes créditos</span> </h1>
            <button class="btn btn-danger rounded-pill mt-5" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
        </div>
    </section>
</section>

<section class="container py-5">
    <section class="row">
        <article class="col-sm-3" style="z-index: 4">
            <div class="d-flex justify-content-center align-items-center h-100 margin-right-mobile" style="margin-right: -175px;">
                <div class="px-5 py-4 bg-white w-sm-100" style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36); width: 300px">
                    <img src="{{ asset('img/iconovip.png') }}" alt="">
                    <h2 style="font-family: 'Bitter', 'serif'; color: #676667; font-weight: 600">Créditos <br> VIP</h2>
                </div>
            </div>
        </article>
        <article class="col-sm-9 d-none-mobile">
            <div class="position-relative">
                <img src="{{ asset('img/thumbvip.jpg') }}" alt="">
                <div class="position-absolute text-center top-50 start-50 translate-middle">
                    <p class="h3 text-white" style="font-family: 'Bitter', 'serif'; font-style: italic">¡Compra tu casa, crea tu historia!</p>
                    <button class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
                </div>
            </div>
        </article>
    </section>
</section>

<section class="container">
    <section class="row py-3">
        <p style="font-family: 'Montserrat', 'serif'; text-align: justify">Aunque este término a menudo se usa para exclusividad, en este contexto significa Vivienda de Ínteres Público. Se refiere a viviendas que, por ser la primera propiedad del comprador, pueden acceder a un crédito preferncial con una tasa efectiva mínima del 4.58% anual. Para esto, la vivienda debe tener un avalúo de $85.000 hasta $105.000- El préstamo puede utilizarse para financiar hasta el 95% del valor de la vivienda a un plazo máximo de 25 años. Está permitido hacer abonos y precancelaciones. Bajo estas condiciones, tu cuota mensual de pago para un crédito VIP dependerá del valor del inmueble que elijas. Lo que se busca es que el valor mensual sea similar al de un arriendo y así inviertas en tu propia vivienda.</p>
    </section>
    <section class="row py-3">
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img width="60px" src="{{ asset('img/iconofinanciamiento.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Financiamiento</h3>
                    <p class="text-muted" style="font-size: medium">Una tasa muy baja de interés anual, el plazo de financiamiento debe ser entre 20 y 25 años y solo se requiere el 5% del valor de la entrada.</p>
                </div>
            </div>
        </article>
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img width="60px" src="{{ asset('img/iconoingresosmensuales.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Ingresos mensuales</h3>
                    <p>El valor del núcleo familiar no puede superar los $2.853. Bajo relación de dependencia se hace el cálculo con base en los ingresos brutos; mientras que, quienes son independientes se calcula con los ingresos netos mensuales.</p>
                </div>
            </div>
        </article>
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img width="60px" src="{{ asset('img/iconoseguros.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Seguros</h3>
                    <p>El crédito VIP incluye seguro contra incendios y de desgravamen.</p>
                </div>
            </div>
        </article>
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img width="60px" src="{{ asset('img/iconopagomensual.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Pago mensual</h3>
                    <p>El valor a pagar de cada mes es similar al de un arriendo.</p>
                </div>
            </div>
        </article>
    </section>
</section>

<x-calculadora></x-calculadora>

<section class="container py-5 mt-5">
    <section class="row">
        <article class="col-sm-8">
            <img class="img-fluid" src="{{ asset('img/consultarvip.jpg') }}" alt="">
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