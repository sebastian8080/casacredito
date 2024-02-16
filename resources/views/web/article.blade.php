@extends('layouts.web')

@section('head')

    <title>{{ $article->title }}</title>

    <style>
        body{
            background-color: #ffffff !important;
        }

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
            .contenedor-articles{
                display: inline !important;
            }
        }
    </style>

@endsection

@section('content')
    <section class="height-banner-mobile bg-image-banner-mobile" style="height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('uploads/webp/'.$article->banner_image) }}')">
        <section class="height-banner-mobile padding-left-banner-mobile d-flex align-items-center justify-content-center" style="height: 750px;">
            <div data-aos="fade-right">
                <h1 style="font-family: 'Bitter', 'serif'; color: #ffffff; font-weight: 600"><span style="font-size: 3rem; font-style: italic" class="f-size-min-2">{{ $article->title }}</span> </h1>
            </div>
        </section>
    </section>

    <section class="container pt-5 pb-5">
        <section class="bg-light px-4 pt-3 border shadow-sm rounded">
            <p style="font-size: 18px">{{ $article->metadescription }}</p>
        </section>
        <section class="mt-5 row">
            <div class="col-sm-8">
                {!! $article->body_html !!}
            </div>
        </section>
    </section>
    
@endsection