@extends('layouts.web')

@section('head')
    <title>{{ $property['listing_title'] }} | Casa Crédito</title>
    <meta name="description" content="{{ $property['meta_description'] }}">
    <link rel="canonical" href="{{ Request::url() }}">
    <link rel="stylesheet" href="{{ asset('css/property-styles.css') }}">
    @if(count($images) > 0)
    <link rel="preload" as="image" href="{{ $images[0] }}">
    @endif
@endsection

@section('content')
<div class="prop-page">

    {{-- Galería full-width --}}
    <div class="prop-gallery">
    <div class="prop-gallery-inner">
        <div id="propertyCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                @foreach($images as $index => $image)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img
                            src="{{ $image }}"
                            class="prop-main-img d-block w-100"
                            alt="{{ $property['listing_title'] }} - imagen {{ $index + 1 }}"
                            @if($index === 0) fetchpriority="high" @else loading="lazy" @endif
                        >
                    </div>
                @endforeach
            </div>

            @if(count($images) > 1)
            <button class="prop-carousel-btn prop-carousel-btn--prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                <i class="fa-solid fa-chevron-left"></i>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="prop-carousel-btn prop-carousel-btn--next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                <i class="fa-solid fa-chevron-right"></i>
                <span class="visually-hidden">Siguiente</span>
            </button>
            <div class="prop-img-counter">
                <i class="fa-regular fa-image"></i>
                <span id="imgCurrent">1</span> / {{ count($images) }}
            </div>
            @endif
        </div>

        @if(count($images) > 1)
        <div class="prop-thumbs" id="propThumbs" role="tablist">
            @foreach($images as $index => $image)
                <button
                    type="button"
                    class="prop-thumb {{ $index === 0 ? 'active' : '' }}"
                    data-bs-target="#propertyCarousel"
                    data-bs-slide-to="{{ $index }}"
                    aria-label="Ver imagen {{ $index + 1 }}"
                >
                    <img src="{{ $image }}" loading="lazy" alt="Imagen {{ $index + 1 }}">
                </button>
            @endforeach
        </div>
        @endif
    </div>{{-- /.prop-gallery-inner --}}
    </div>{{-- /.prop-gallery --}}

    {{-- Contenido principal --}}
    <section class="container prop-content">
        <div class="row g-4">

            {{-- Columna izquierda --}}
            <div class="col-lg-8">

                {{-- Título y badges --}}
                <div class="prop-header">
                    <h1 class="prop-title">{{ $property['listing_title'] }}</h1>
                    <div class="prop-meta">
                        <span class="prop-badge prop-badge--type">{{ $property_type['type_title'] }}</span>
                        <span class="prop-badge prop-badge--trans">{{ $property_transaction['status_title'] }}</span>
                        <span class="prop-badge prop-badge--code">
                            <i class="fa-solid fa-tag"></i> COD: {{ $property['product_code'] }}
                        </span>
                    </div>
                </div>

                {{-- Precio y ubicación --}}
                <div class="prop-price-location">
                    <div class="prop-price-block">
                        <span class="prop-price-label">Precio</span>
                        <span class="prop-price">${{ number_format($property['property_price']) }}</span>
                    </div>
                    <div class="prop-location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>{{ $property['address'] }}, {{ $property['city'] }}, {{ $property['state'] }}</span>
                    </div>
                </div>

                {{-- Características destacadas --}}
                @php
                    $stats = [
                        ['key' => 'bedroom',           'icon' => 'dormitorios.webp',    'label' => 'Habitaciones'],
                        ['key' => 'bathroom',          'icon' => 'banio.webp',           'label' => 'Baños'],
                        ['key' => 'garage',            'icon' => 'estacionamiento.webp', 'label' => 'Estacionamientos'],
                        ['key' => 'construction_area', 'icon' => 'area.webp',            'label' => 'm²'],
                    ];
                    $hasStats = collect($stats)->filter(fn($s) => $property[$s['key']] > 0)->isNotEmpty();
                @endphp
                @if($hasStats)
                <div class="prop-stats">
                    @foreach($stats as $stat)
                        @if($property[$stat['key']] > 0)
                        <div class="prop-stat-card">
                            <img src="{{ asset('img/' . $stat['icon']) }}" width="44" height="44" alt="{{ $stat['label'] }}">
                            <span class="prop-stat-value">{{ $property[$stat['key']] }}</span>
                            <span class="prop-stat-label">{{ $stat['label'] }}</span>
                        </div>
                        @endif
                    @endforeach
                </div>
                @endif

                {{-- Descripción --}}
                <div class="prop-section">
                    <h2 class="prop-section-title">Descripción</h2>
                    <p class="prop-description">{{ $property['listing_description'] }}</p>
                </div>

                {{-- Detalles --}}
                @if(is_array(json_decode($property['heading_details'])))
                <div class="prop-section">
                    <h2 class="prop-section-title">Detalles</h2>
                    <div class="prop-features-grid">
                        @foreach(json_decode($property['heading_details']) as $dets)
                            @php $printControl = 0; @endphp
                            @for($i = 1; $i < count($dets); $i++)
                                @if($printControl === 0)
                                    @php $printControl = 1; @endphp
                                    @foreach($details as $detail)
                                        @if($detail['id'] == $dets[$i])
                                        <div class="prop-feature-item">
                                            <i class="fa-solid fa-check"></i>
                                            <span>{{ $detail['charac_titile'] }}
                                                @if($detail['id'] == 86)
                                                    <strong>{{ $dets[$i + 1] }}</strong>
                                                @endif
                                            </span>
                                        </div>
                                        @endif
                                    @endforeach
                                @else
                                    @php $printControl = 0; @endphp
                                @endif
                            @endfor
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Servicios --}}
                @if(count(array_filter(explode(',', $property['listinglistservices']))) > 0)
                <div class="prop-section">
                    <h2 class="prop-section-title">Servicios</h2>
                    <div class="prop-features-grid">
                        @foreach(array_filter(explode(',', $property['listinglistservices'])) as $serv)
                            @foreach($services as $service)
                                @if($service['id'] == $serv)
                                <div class="prop-feature-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>{{ $service['charac_titile'] }}
                                        @if($serv == 8 && $property['num_pisos'] > 0)
                                            <strong>{{ $property['num_pisos'] }}</strong>
                                        @endif
                                        @if($serv == 7 && $property['niv_constr'] > 0)
                                            <strong>{{ $property['niv_constr'] }}</strong>
                                        @endif
                                        @if($serv == 15 && $property['pisos_constr'] > 0)
                                            <strong>{{ $property['pisos_constr'] }}</strong>
                                        @endif
                                    </span>
                                </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Características generales --}}
                @if(count(array_filter(explode(',', $property['listinggeneralcharacteristics']))) > 0)
                <div class="prop-section">
                    <h2 class="prop-section-title">Características Generales</h2>
                    <div class="prop-features-grid">
                        @foreach(array_filter(explode(',', $property['listinggeneralcharacteristics'])) as $char)
                            @foreach($general_characteristics as $gc)
                                @if($gc['id'] == $char)
                                <div class="prop-feature-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>{{ $gc['title'] }}
                                        @if($char == 8 && $property['num_pisos'] > 0)
                                            <strong>{{ $property['num_pisos'] }}</strong>
                                        @endif
                                        @if($char == 7 && $property['niv_constr'] > 0)
                                            <strong>{{ $property['niv_constr'] }}</strong>
                                        @endif
                                        @if($char == 15 && $property['pisos_constr'] > 0)
                                            <strong>{{ $property['pisos_constr'] }}</strong>
                                        @endif
                                    </span>
                                </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Ambientes --}}
                @if(count(array_filter(explode(',', $property['listingenvironments']))) > 0)
                <div class="prop-section">
                    <h2 class="prop-section-title">Ambientes</h2>
                    <div class="prop-features-grid">
                        @foreach(array_filter(explode(',', $property['listingenvironments'])) as $env)
                            @foreach($environments as $environment)
                                @if($environment['id'] == $env)
                                <div class="prop-feature-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>{{ $environment['title'] }}
                                        @if($env == 8 && $property['num_pisos'] > 0)
                                            <strong>{{ $property['num_pisos'] }}</strong>
                                        @endif
                                        @if($env == 7 && $property['niv_constr'] > 0)
                                            <strong>{{ $property['niv_constr'] }}</strong>
                                        @endif
                                        @if($env == 15 && $property['pisos_constr'] > 0)
                                            <strong>{{ $property['pisos_constr'] }}</strong>
                                        @endif
                                    </span>
                                </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- CTA WhatsApp (solo mobile, debajo del contenido) --}}
                <a href="https://api.whatsapp.com/send?phone=593983849073&text=Hola%20*Casa%20Credito*,%20deseo%20consultar%20por%20esta%20propiedad:%20*{{ $property['product_code'] }}*"
                   class="prop-wa-cta d-lg-none">
                    <i class="fa-brands fa-whatsapp"></i> Consultar por WhatsApp
                </a>

            </div>

            {{-- Columna derecha: formulario --}}
            <div class="col-lg-4">
                <div class="prop-contact-card">
                    <div class="prop-contact-header">
                        <span class="prop-contact-price">${{ number_format($property['property_price']) }}</span>
                    </div>

                    <div class="prop-contact-body">
                        <h2 class="prop-contact-title">¿Te interesa esta propiedad?</h2>
                        <p class="prop-contact-subtitle">Déjanos tus datos y te contactamos</p>

                        <form action="{{ route('send.property.inquiry') }}" method="POST" id="formDetailProp">
                            @csrf
                            <div class="prop-form-group">
                                <input type="text" name="fname" placeholder="Nombre" class="prop-input" required>
                            </div>
                            <div class="prop-form-group">
                                <input type="text" name="flastname" placeholder="Apellido" class="prop-input" required>
                            </div>
                            <div class="prop-form-group">
                                <input type="number" name="tlf" placeholder="Teléfono" class="prop-input" required>
                            </div>
                            <div class="prop-form-group">
                                <input type="email" name="email" placeholder="Correo electrónico" class="prop-input" required>
                            </div>
                            <div class="prop-form-group">
                                <textarea name="message" rows="3" placeholder="Mensaje" class="prop-input" required>Hola, me interesa este inmueble y quiero que me contacten. Gracias</textarea>
                            </div>
                            <input type="hidden" name="interest" value="{{ $property['product_code'] }}">
                            @error('captcha')
                                <div class="text-danger small mb-2">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="prop-submit-btn">Enviar consulta</button>
                        </form>

                        <div class="prop-divider"><span>o contáctanos directamente</span></div>

                        <div class="prop-contact-links">
                            <a href="tel:+593983849073" class="prop-contact-link">
                                <div class="prop-contact-icon"><i class="fa-solid fa-phone"></i></div>
                                <span>098-384-9073</span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=593983849073&text=Hola%20*Casa%20Credito*,%20deseo%20consultar%20por%20esta%20propiedad:%20*{{ $property['product_code'] }}*"
                               class="prop-contact-link prop-contact-link--wa">
                                <div class="prop-contact-icon"><i class="fa-brands fa-whatsapp"></i></div>
                                <span>WhatsApp</span>
                            </a>
                            <a href="mailto:info@casacredito.com" class="prop-contact-link">
                                <div class="prop-contact-icon"><i class="fa-solid fa-envelope"></i></div>
                                <span>info@casacredito.com</span>
                            </a>
                            <a href="https://maps.app.goo.gl/g4G5hBDe9doEPJvx7" class="prop-contact-link" target="_blank" rel="noopener noreferrer">
                                <div class="prop-contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <span>Remigio Tamariz y Av. Solano</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection

@section('scripts')
<script>
    (function () {
        const carousel = document.getElementById('propertyCarousel');
        if (!carousel) return;

        const counter = document.getElementById('imgCurrent');
        const thumbs  = document.querySelectorAll('.prop-thumb');

        carousel.addEventListener('slid.bs.carousel', function (e) {
            if (counter) counter.textContent = e.to + 1;
            thumbs.forEach((t, i) => t.classList.toggle('active', i === e.to));
            if (thumbs[e.to]) {
                thumbs[e.to].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
            }
        });
    })();
</script>
@endsection
