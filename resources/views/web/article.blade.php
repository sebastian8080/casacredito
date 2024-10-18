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

    <meta name="author" content="Casa Crédito">

    <style>
        body{
            background-color: #ffffff !important;
        }

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
        <section class="mt-2 row">
            <div class="col-sm-8">
                <main>
                    {!! $article->body_html !!}
                </main>
            </div>
            <div class="col-sm-4">
                <div class="bg-light rounded shadow-sm" style="position: sticky; top: 15px">
                    <div class="px-4 pt-4 text-center">
                        <p class="h4 fw-bold">¿Necesita más información sobre los créditos en Ecuador?</p>
                        <p>Nosotros lo ayudamos</p>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <div style="background-color: #c61617; height: 1px; width: 100px"></div>
                    </div>
                    <div class="px-4 pb-4">
                        <form action="{{ route('sendlead.post') }}" method="POST">

                            @csrf

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="name" class="fw-bold">Nombre</label>
                                        <input type="text" name="name" id="name" class="form-control bg-white" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lastname" class="fw-bold">Apellido</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control bg-white" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="phone" class="fw-bold">Teléfono</label>
                                        <input type="text" minlength="7" maxlength="12" pattern="\d*" title="Solo se permite números" name="phone" id="phone" class="form-control bg-white" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email" class="fw-bold">Correo electrónico</label>
                                        <input type="email" name="email" id="email" class="form-control bg-white" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="selStateForm" class="fw-bold">Provincia</label>
                                        <select name="state" id="selStateForm" class="form-select bg-white" required>
                                            <option value="">Seleccione provincia</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->name }}" data-id="{{ $state->id}}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="selCityForm" class="fw-bold">Ciudad</label>
                                        <select id="selCityForm" class="form-select bg-white" name="city" required>
                                            <option value="">Seleccione ciudad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="service" class="fw-bold">Servicio a consultar</label>
                                        <select class="form-select bg-white" name="service" required>
                                            <option value="">Seleccione uno</option>
                                            <option value="Microcreditos">Microcredito</option>
                                            <option value="Créditos Hipotecarios">Crédito Hipotecario</option>
                                            <option value="Crédito de Construccion">Crédito de Construccion</option>
                                            <option value="Crédito de Vivienda de Interes Público">Crédito para Vivienda de Interes Público</option>
                                            <option value="Crédito de Consumo">Crédito de Consumo</option>
                                            <option value="Reparación de Buro">Reparación de Buro</option>
                                            <option value="Otro Servicio">Otro Servicio</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="amount" class="fw-bold">$ Monto a solicitar</label>
                                        <input type="text" minlength="4" maxlength="6" pattern="\d*" title="Solo se permite números" id="amount" name="mount" class="bg-white form-control" placeholder="Ej: 30000" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label for="message">Mensaje</label>
                                <textarea name="message" id="message" rows="4" class="form-control bg-white" placeholder="Ej: Necesito más información sobre..." required></textarea>
                            </div>

                            <input type="hidden" name="article_title" value="{{ $article->title }}">

                            <div class="d-flex justify-content-center w-100 mt-5">
                                <button type="submit" class="btn btn-danger btn-block w-100">Solicitar información</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
@endsection

@section('scripts')
    <script>
        const selState = document.getElementById('selStateForm');
        const selCities = document.getElementById('selCityForm');

        selState.addEventListener("change", async function() {
            selCities.options.length = 0;
            let id = selState.options[selState.selectedIndex].dataset.id;
            const response = await fetch("{{ url('getcities') }}/" + id);
            const cities = await response.json();

            var opt = document.createElement('option');
            opt.appendChild(document.createTextNode('Seleccione ciudad'));
            opt.value = '';
            selCities.appendChild(opt);
            cities.forEach(city => {
                var opt = document.createElement('option');
                opt.appendChild(document.createTextNode(city.name));
                opt.value = city.name;
                selCities.appendChild(opt);
            });
        });
    </script>
@endsection