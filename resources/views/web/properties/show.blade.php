@extends('layouts.web')

@section('head')
    <title>{{ $property['listing_title'] }}</title>
    <meta name="description" content="{{ $property['meta_description']}}">
    <meta name="canonical" content="{{ Request::url() }}">

    <link rel="stylesheet" href="{{ asset('css/property-styles.css') }}">
@endsection

@section('content')
    <section class="container">

        <!-- Carousel -->
        <div id="propertyCarousel" class="carousel slide">
            <div class="carousel-inner">
                @foreach($images as $index => $image)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img style="object-fit: contain !important" src="https://grupohousing.com/uploads/listing/{{$image}}" @if($index > 0) loading="lazy" @endif class="d-block w-100 carousel-image" alt="Property Image">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="row">
            <div class="col-sm-8">

                <div class="mt-4 mb-4">
                    <h1>{{ $property['listing_title'] }}</h1>
                </div>

                <div class="mt-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h2>Precio</h2>
                        <h3 class="property-price">${{ number_format($property['property_price']) }}</h3>
                    </div>
                    <div>
                        <p class="bg-danger text-white px-3 py-2 rounded property-code">COD: {{ $property['product_code'] }}</p>
                    </div>
                </div>

                <div class="mt-4">
                    <h2>Ubicación</h2>
                    <div class="d-flex gap-2">
                        <h3 class="location-property">{{ $property['address'] }}, {{ $property['city'] }}, {{ $property['state']}}</h3>
                        <p class="property-type px-3 rounded shadow-sm d-flex align-items-center">{{ $property_type['type_title'] }}</p>
                        <p class="property-type px-3 rounded shadow-sm d-flex align-items-center">{{ $property_transaction['status_title'] }}</p>
                    </div>
                </div>

                <div class="mt-4">
                    <div>
                        <h2>Descripción</h2>
                        <h3 class="property-description">{{ $property['listing_description'] }}</h3>
                    </div>
                </div>

                <div class="mt-4">
                    <h2>Características</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        @if($property['bedroom']>0)
                        <div class="text-center">
                            <img width="70px" src="{{ asset('img/dormitorios.webp') }}" alt="Icono de dormitorios">
                            <h3 class="characteristics-property">{{ $property['bedroom'] }} Hab.</h3>
                        </div>
                        @endif
                        @if($property['bathroom']>0)
                        <div class="text-center">
                            <img width="70px" src="{{ asset('img/banio.webp') }}" alt="Icono de Baños">
                            <h3 class="characteristics-property">{{ $property['bathroom'] }} {{ $property['bathroom'] > 1 ? 'Baños' : 'Baño'}}</h3>
                        </div>
                        @endif
                        @if($property['garage']>0)
                        <div class="text-center">
                            <img width="70px" src="{{ asset('img/estacionamiento.webp') }}" alt="Icono de Estacionamiento">
                            <h3 class="characteristics-property">{{ $property['garage'] }} {{ $property['garage'] > 1 ? 'Estacionamientos' : 'Estacionamiento'}}</>
                        </div>
                        @endif
                        @if($property['construction_area']>0)
                        <div class="text-center">
                            <img width="70px" src="{{ asset('img/area.webp') }}" alt="Icono de Area">
                            <h3 class="characteristics-property">{{ $property['construction_area'] }} m<sup>2</sup></>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="mt-4">
                    @if (is_array(json_decode($property['heading_details'])))
                    <div style="border: none; background-color: transparent;" class="card my-4">
                        <div class="card-body" style="margin: -16px">
                            <h2 class="card-title pb-2"
                                style="border-bottom: 1px solid #B0BEC5;">
                                <i class="fas fa-home"></i>
                                Detalles
                            </h2>
                            @foreach (json_decode($property['heading_details']) as $dets)
                                <div class="row" style="padding-left: 7px">
                                    <?php unset($dets[0]);
                                    $printControl = 0; ?>
                                    @for ($i = 1; $i < count($dets); $i++)
                                        @if ($printControl == 0)
                                            <?php $printControl = 1; ?>
                                            <div class="col-lg-3 col-md-4 col-6 p-1">
                                                <span>
                                                    @foreach ($details as $detail)
                                                        @if ($detail['id'] == $dets[$i])
                                                            {{ $detail['charac_titile'] }} @if ($detail['id'] == $dets[$i] && $detail['id'] == 86)
                                                                <span style="background-color: #242B40"
                                                                    class="text-white px-2">
                                                                    {{ $dets[$i + 1] }}</span>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </span>
                                            </div>
                                        @else
                                            <?php $printControl = 0; ?>
                                        @endif
                                    @endfor
                                    {{-- @endforeach     --}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <div class="mt-4">
                    @if (count(array_filter(explode(',', $property['listinglistservices']))) > 0)
                        <div style="border: none; background-color: transparent;" class="card my-4">
                            <div class="card-body" style="margin: -16px">
                                <h2 class="card-title h6 pb-2" style="font-size: 23px; font-weight: 500; border-bottom: 1px solid #B0BEC5;">
                                    <i class="fas fa-home" style="font-size: 28px; color: #242B40;"></i>
                                    Servicios
                                </h2>
                                <div class="row" style="padding-left: 7px">
                                    @foreach (array_filter(explode(',', $property['listinglistservices'])) as $serv)
                                        <div class="col-lg-3 col-md-4 col-6 p-1">
                                            <span class="text-muted small">
                                                @foreach ($services as $service)
                                                    @if ($service['id'] == $serv)
                                                        {{ $service['charac_titile'] }}
                                                    @endif 
                                                    @if ($service['id'] == $serv && $serv == 8 && $property['num_pisos'] > 0)
                                                        <b class="text-white px-1" style="background-color: #242B40">{{ $property->num_pisos }}</b>
                                                    @endif 
                                                    @if ($service['id'] == $serv && $serv == 7 && $property['niv_constr'] > 0)
                                                        <b class="text-white px-1" style="background-color: #242B40">{{ $property['niv_constr'] }}</b>
                                                    @endif 
                                                    @if ($service['id'] == $serv && $serv == 15 && $property['pisos_constr'] > 0)
                                                        <b class="text-white px-1" style="background-color: #242B40">{{ $property['pisos_constr'] }}</b>
                                                    @endif
                                                @endforeach
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="mt-4">
                    @if (count(array_filter(explode(',', $property['listinggeneralcharacteristics']))) > 0)
                        <div style="border: none; background-color: transparent;" class="card my-4">
                            <div class="card-body" style="margin: -16px">
                                <h2 class="card-title h6 pb-2" style="font-size: 23px; font-weight: 500; border-bottom: 1px solid #B0BEC5;">
                                    <i class="fas fa-home" style="font-size: 28px; color: #242B40;"></i>
                                    Características Generales
                                </h2>
                                <div class="row" style="padding-left: 7px">
                                    @foreach (array_filter(explode(',', $property['listinggeneralcharacteristics'])) as $char)
                                        <div class="col-lg-3 col-md-4 col-6 p-1">
                                            <span class="text-muted small">
                                                @foreach ($general_characteristics as $general_characteristic)
                                                    @if ($general_characteristic['id'] == $char)
                                                        {{ $general_characteristic['title'] }}
                                                    @endif 
                                                    @if ($general_characteristic['id'] == $char && $char == 8 && $property['num_pisos'] > 0)
                                                        <b class="text-white px-1" style="background-color: #242B40">{{ $property['num_pisos'] }}</b>
                                                    @endif 
                                                    @if ($general_characteristic['id'] == $char && $char == 7 && $property['niv_constr'] > 0)
                                                        <b class="text-white px-1" style="background-color: #242B40">{{ $property['niv_constr'] }}</b>
                                                    @endif 
                                                    @if ($general_characteristic['id'] == $char && $char == 15 && $property['pisos_constr'] > 0)
                                                        <b class="text-white px-1" style="background-color: #242B40">{{ $property['pisos_constr'] }}</b>
                                                    @endif
                                                @endforeach
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="mt-4">
                    @if (count(array_filter(explode(',', $property['listingenvironments']))) > 0)
                        <div style="border: none; background-color: transparent;" class="card my-4">
                            <div class="card-body" style="margin: -16px">
                                <h2 class="card-title h6 pb-2" style="font-size: 23px; font-weight: 500; border-bottom: 1px solid #B0BEC5;">
                                    <i class="fas fa-home" style="font-size: 28px; color: #242B40;"></i>
                                    Ambientes
                                </h2>
                                <div class="row" style="padding-left: 7px">
                                    @foreach (array_filter(explode(',', $property['listingenvironments'])) as $env)
                                        <div class="col-lg-3 col-md-4 col-6 p-1">
                                            <span class="text-muted small">
                                                @foreach ($environments as $enviroment)
                                                    @if ($enviroment['id'] == $env)
                                                        {{ $enviroment['title'] }}
                                                    @endif 
                                                    @if ($enviroment['id'] == $env && $env == 8 && $property['num_pisos'] > 0)
                                                        <b class="text-white px-1" style="background-color: #242B40">{{ $property['num_pisos'] }}</b>
                                                    @endif 
                                                    @if ($enviroment['id'] == $env && $env == 7 && $property['niv_constr'] > 0)
                                                        <b class="text-white px-1" style="background-color: #242B40">{{ $property['niv_constr'] }}</b>
                                                    @endif 
                                                    @if ($enviroment['id'] == $env && $env == 15 && $property['pisos_constr'] > 0)
                                                        <b class="text-white px-1" style="background-color: #242B40">{{ $property['pisos_constr'] }}</b>
                                                    @endif
                                                @endforeach
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
            <div class="col-sm-4">
                <article class="border-form shadow">
                    <div class="header_form">
                        <p class="m-0">${{ number_format($property['property_price']) }}</p>
                    </div>
                    <div class="text-form text-center mt-4">
                        <h2>¿Te interesa esta propiedad?</h2>
                        <h3>Proporciónanos tus datos y te contactaremos</h3>
                    </div>
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('send.property.inquiry') }}" method="POST" id="formDetailProp">

                            @csrf

                            <div class="form-group">
                                <input type="text" id="fname" name="fname" placeholder="Nombre" class="w-100"
                                    style="border: none; border-bottom: 1px solid #242B40" required>
                                <input type="text" id="flastname" name="flastname" placeholder="Apellido"
                                    class="w-100 mt-4" style="border: none; border-bottom: 1px solid #242B40" required>
                                <input type="hidden" id="interestDetail" name="interest">
                            </div>

                            <div class="form-group mt-4 w-100">
                                <input type="number" id="tlf" name="tlf" placeholder="Teléfono"
                                    class="w-100" style="border: none; border-bottom: 1px solid #242B40" required>
                            </div>

                            <div class="form-group mt-4 w-100">
                                <input type="email" id="email" name="email" placeholder="Correo electrónico"
                                    class="w-100" style="border: none; border-bottom: 1px solid #242B40" required>
                            </div>

                            <div class="form-group mt-4 w-100">
                                <textarea name="message" id="message" rows="3" placeholder="Mensaje" class="w-100"
                                    style="border: none; border-bottom: 1px solid #242B40" required>Hola, me interesa este inmueble y quiero que me contacten. Gracias</textarea>
                            </div>

                            <input type="hidden" name="interest" value="{{ $property['product_code'] }}">

                            <div class="form-group mt-4 w-100 d-flex justify-content-center">
                                <button id="btnEnviar" type="submit" class="btn text-white rounded-pill"
                                    style="background-color: #C61617;">ENVIAR</button>
                            </div>

                            <p class="text-center mt-4" style="font-size: x-large; font-weight: 600">Nuestros datos de
                                contacto</p>

                            <div class="d-flex gap-3 ms-4">
                                <div class="rounded-circle d-flex justify-content-center align-items-center"
                                    style="border: 1px solid #242b40a2; width: 30px; height: 30px">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <a style="text-decoration: none"
                                    href="tel:+593964034035"
                                    class="mt-1 ml-2 text-dark">096-403-4035</a>
                            </div>

                            <div class="d-flex gap-3 ms-4 mt-2">
                                <div class="rounded-circle d-flex justify-content-center align-items-center"
                                    style="border: 1px solid #242b40a2; width: 30px; height: 30px">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                                <a style="text-decoration: none"
                                    href="https://api.whatsapp.com/send?phone=593983845102&text=Hola%20*Casa%20Credito*,%20deseo%20consultar%20por%20esta%20propiedad:%20*{{ $property['product_code'] }}*"
                                    class="mt-1 ml-2 text-dark">098-384-5102</a>
                            </div>
                            <div class="d-flex gap-3 ms-4 mt-2">
                                <div class="rounded-circle d-flex justify-content-center align-items-center"
                                    style="border: 1px solid #242b40a2; width: 30px; height: 30px">
                                    <img width="15px" src="{{ asset('img/email-icon.png') }}" alt="">
                                </div>
                                <a style="text-decoration: none" href="mailto:info@casacredito.com"
                                    class="mt-2 text-dark ml-2">info@casacredito.com</a>
                            </div>

                            <div class="d-flex gap-3 ms-4 mt-2">
                                <div class="rounded-circle d-flex justify-content-center align-items-center"
                                    style="border: 1px solid #242b40a2; width: 30px; height: 30px">
                                    <img width="15px" src="{{ asset('img/location-icon.png') }}" alt="">
                                </div>
                                <a style="text-decoration: none" class="mt-1 text-dark ml-2"
                                    href="https://maps.app.goo.gl/g4G5hBDe9doEPJvx7">Remigio Tamariz Crespo y Av.
                                    Solano</a>
                            </div>

                            <div class="form-group mb-2">
                                <input type="hidden" name="g-recaptcha-response" id="recaptchaToken">

                                @error('captcha')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </form>
                    </div>
                </article>
            </div>
        </div>

    </section>
@endsection

@section('scripts')

@endsection