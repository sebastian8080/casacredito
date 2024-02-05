@extends('layouts.web')

@section('head')
    <title>Créditos de Consumo Fáciles y Seguros | Casa Crédito</title>
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
            <button style="font-family: 'Mont'" class="btn btn-danger rounded-pill mt-5" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
        </div>
    </section>
</section>

<section class="container py-5">
    <section class="row">
        <article class="col-sm-3" style="z-index: 4">
            <div class="d-flex justify-content-center align-items-center h-100 margin-right-mobile" style="margin-right: -175px;">
                <div class="px-5 py-4 bg-white w-sm-100" style="box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36); width: 300px">
                    <img src="{{ asset('img/iconovip.png') }}" alt="">
                    <h2 style="font-family: 'Bitter', 'serif'; color: #676667; font-weight: 600">Créditos <br> de consumo</h2>
                </div>
            </div>
        </article>
        <article class="col-sm-9 d-none-mobile">
            <div class="position-relative">
                <img src="{{ asset('img/thumbconsumo.jpg') }}" alt="">
                <div class="position-absolute text-center top-50 start-50 translate-middle">
                    <p class="h3 text-white" style="font-family: 'Bitter', 'serif'; font-style: italic">¡Tu camino hacia el éxito financiero!</p>
                    <button class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
                </div>
            </div>
        </article>
    </section>
</section>

<section class="container">
    <section class="row py-3">
        <p style="font-family: 'Montserrat', 'serif'; text-align: justify">El crédito de consumo es un tipo de préstamo otorgado por entidades financieras a personas con el fin de cubrir necesidades personales, como la compra de bienes o servicios no vinculados a actividades comerciales o productivas. Es crucial entender las condiciones y términos del crédito de consumo antes de solicitarlo, así como asegurarse de tener la capacidad financiera para cumplir con los pagos establecidos.</p>
    </section>
    <section class="row py-3">
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img width="60px" src="{{ asset('img/iconodestinolibre.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Destino Libre</h3>
                    <p class="text-muted" style="font-size: medium">Puedes utilizarlo para diversos propósitos, como la compra de electrodomésticos, la realización de viajes, la consolidación de deudas, entre otros.</p>
                </div>
            </div>
        </article>
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img width="60px" src="{{ asset('img/iconotasadeinteres.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Tasa de interés</h3>
                    <p>La tasa de interés en los créditos de consumo suele ser fija, pero puede variar según la entidad financiera y las condiciones del mercado.</p>
                </div>
            </div>
        </article>
        <article class="col-sm-6 mb-4">
            <div class="d-flex gap-4">
                <div>
                    <div class="border p-2" style="border-radius: 20px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <img width="60px" src="{{ asset('img/iconoflexibilidad.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <h3 class="text-danger" style="font-family: 'Bitter', 'serif'; font-weight: 600">Flexibilidad</h3>
                    <p>Algunos créditos de consumo ofrecen opciones de pagos adicionales o la posibilidad de adelantar las cuotas, brindando cierta flexibilidad al deudor.</p>
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
                    <p>Se amortiza mediante pagos mensuales fijos que incluyen capital e intereses. Es esencial cumplir con los pagos de manera puntual para mantener un buen historial crediticio.</p>
                </div>
            </div>
        </article>
    </section>
</section>

<x-calculadora></x-calculadora>

<section class="container py-5 mt-5">
    <section class="row">
        <article class="col-sm-8">
            <img class="img-fluid" src="{{ asset('img/consultarconsumo.jpg') }}" alt="">
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