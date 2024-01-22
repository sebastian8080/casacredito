@extends('layouts.web')

@section('head')
    <title>Casa Crédito - La mejor opción para realizar su crédito en Ecuador</title>

    <style>
        @media screen and (max-width: 1200px){
            /* .min-width{width: 250px !important} */
        }
    </style>
@endsection

@section('content')
    <section style="height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/creditos-en-ecuador.webp') }}')">
        <section class="d-flex align-items-center justify-content-center" style="height: 750px">
            <div class="text-center">   
                <h1 class="text-white display-6">Créditos para Ecuatorianos <br> migrantes en EE.UU.</h1>
                <button class="btn text-white" style="background-color: #c61617" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">INICIAR CRÉDITO</button>
            </div>
        </section>
    </section>

    <section class="container py-5">
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
    </section>

    <section class="bg-light">
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
    </section>

    <section class="container py-5">
        <article class="text-center py-5">
            <p class="display-6 fw-bold">Calcule su credito</p>
            <p class="mt-4" style="padding-left: 25%; padding-right: 25%">Pruebe nuestra calculador de amortizacion, nuestra herramienta le proporcionara un desglose referencial y detallado de sus pagos mensuales, intereses y amortizacion</p>
            <p class="fw-bold">Haga clic en el boton 'Ir a Calculadora' para comenzar</p>
            <a href="{{ Request::url()}}/creditos#calculadora" class="btn mt-4 text-white" style="background-color: #c61617">IR A CALCULADORA</a>
        </article>
    </section>

    {{-- modals --}}
    @include('components.form')

@endsection

@section('scripts')
    
@endsection