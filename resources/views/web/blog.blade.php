@extends('layouts.web')

@section('head')
    <meta name="description"
        content="Manténgase actualizado con las últimas noticias y tendencias sobre créditos en Ecuador en el blog de Casa Crédito. Encuentre consejos expertos, análisis detallados y las últimas actualizaciones sobre préstamos y financiamiento.">
    <meta name="keywords"
        content="últimas noticias créditos, blog créditos Ecuador, ahorro programado, banco abierto hoy, contrato de préstamo, solicitud de crédito, tabla de amortización simulador, carta de solicitud de crédito pdf, tabulador de préstamo, préstamo digital banco general">
    <meta name="author" content="Casa Crédito">
    <meta property="og:title" content="Últimas Noticias de Créditos en Ecuador | Casa Crédito">
    <meta property="og:description"
        content="Explore nuestro blog para obtener insights y asesoramiento sobre opciones de crédito y financiamiento en Ecuador. Desde simuladores de préstamos hasta estrategias de ahorro, cubrimos todos los temas importantes para usted.">
    <meta property="og:image" content="{{ asset('img/bannerblog.jpg') }}">
    <meta property="og:url" content="https://www.casacredito.com/blog">
    <meta property="og:type" content="website">

    <title>Últimas Noticias de Créditos en Ecuador | Casa Crédito</title>

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

            .contenedor-articles {
                display: inline !important;
            }
        }
    </style>
@endsection

@section('content')
    <section class="height-banner-mobile bg-image-banner-mobile"
        style="height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/bannerblog.jpg') }}')">
        <section class="height-banner-mobile padding-left-banner-mobile d-flex align-items-center justify-content-start"
            style="height: 750px; padding-left: 13%">
            <div data-aos="fade-right">
                <h1 style="font-family: 'Bitter', 'serif'; color: #676667"><span style="font-size: 3rem; font-style: italic"
                        class="f-size-min-2">Últimas</span> <br> <span style="font-size: 7rem; font-weight: 600"
                        class="f-size-min-3">noticias</span> <br> <span style="font-size: 3rem; font-style: italic"
                        class="f-size-min-2">de créditos</span> </h1>
            </div>
        </section>
    </section>

    <section class="container pt-5 mt-5 mb-5">
        <section class="row">
            @foreach ($articles as $article)
                <article class="col-sm-6 mb-5">
                    <div class="d-flex align-items-center contenedor-articles">
                        <div class="bg-white p-4"
                            style="margin-right: -100px; z-index: 2; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                            <h2 style="font-family: 'Bitter', 'serif'; color: #676667; font-weight: 600; font-size: 23px">
                                {{ $article->title }}</h2>
                            <a style="font-family: 'Bitter', 'serif'; color: #c61617; font-style: italic; font-weight: 500; text-decoration: none"
                                href="{{ route('web.article', $article->slug) }}">MÁS INFO</a>
                        </div>
                        <img width="400px" height="400px" class="img-fluid"
                            src="{{ asset('uploads/webp/' . $article->banner_image) }}" alt="Imagen de {{ $article->title }}">
                    </div>
                </article>
            @endforeach
        </section>
    </section>
@endsection
