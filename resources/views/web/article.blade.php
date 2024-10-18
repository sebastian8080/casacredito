@extends('layouts.web')

@section('head')

    <title>{{ $article->title }}</title>
    <meta name="description" content="{{ $article->metadescription}}">

    <meta name="robots" content="INDEX,FOLLOW,SNIPPET">
    <link rel="canonical" href="{{ Request::url() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:title" content="{{ $article->title }}" />
    <meta property="og:description" content="{{ $article->metadescription }}" />
    <meta property="og:image" content="{{ asset('uploads/webp/'.$article->banner_image) }}" />

    <style>
        body{
            background-color: #ffffff !important;
        }

        /* @media screen and (max-width: 580px){
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
            .contenedor-articles{
                display: inline !important;
            }
        } */
        /* Estilos para la capa de overlay */
        .bg-image-banner-mobile {
            position: relative;
        }

        .bg-image-banner-mobile .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Capa oscura */
            z-index: 1;
        }

        .height-banner-mobile .d-flex {
            position: relative;
            z-index: 2; /* El texto debe estar por encima de la capa */
        }

        /* Ajustes para móviles */
        @media screen and (max-width: 580px){
            .height-banner-mobile {
                height: 550px !important;
            }
            .bg-image-banner-mobile {
                background-position: center !important;
            }
            .f-size-min-2 {
                font-size: 1.4rem !important;
            }
            .padding-left-banner-mobile {
                padding: 0 10px !important;
            }
        }
    </style>

@endsection

@section('content')
    <section class="height-banner-mobile bg-image-banner-mobile" style="position: relative; height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('uploads/webp/'.$article->banner_image) }}')">
        <!-- Agregamos un div para el overlay -->
        <div class="overlay"></div>
        <section class="height-banner-mobile padding-left-banner-mobile d-flex align-items-center justify-content-center" style="height: 750px;">
            <div data-aos="fade-right">
                <h1 style="font-family: 'Bitter', 'serif'; color: #ffffff; font-weight: 600">
                    <span style="font-size: 3rem; font-style: italic" class="f-size-min-2">{{ $article->h1 ? $article->h1 : $article->title }}</span>
                </h1>
                @if($article->metadescription != null)
                    <p class="text-center text-white">{{ $article->metadescription }}</p>
                @endif
            </div>
        </section>
    </section>

    <section class="container pt-5 pb-5">
        <section class="mt-4 row">
            <div class="col-sm-8">
                {!! $article->body_html !!}
            </div>
        </section>
    </section>
    
@endsection