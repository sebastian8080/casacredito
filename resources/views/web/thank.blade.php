@extends('layouts.web')

@section('head')

    <title>Gracias por contactarse con Casa Crédito</title>

@endsection

@section('content')
    <section class="container d-flex align-items-center justify-content-center" style="width: 100vw; height: 100vh">
        <section class="row justify-content-center text-center">
            <h1 style="font-family: 'Bitter', 'serif'; font-weight: 700"><span style="color: #676667">Gracias por contactarse</span> <span style="color: #c61617">con Casa Crédito</span></h1>
            <p style="font-size: 18px; font-family: 'Montserrat', 'serif'; color: #676667">Un asesor se contactará con usted lo antes posible</p>
            <a class="btn w-auto rounded-pill" style="background-color: #c61617; color: #ffffff" href="{{ route('web.home') }}">Ir a página de Inicio</a>
        </section>
    </section>
@endsection