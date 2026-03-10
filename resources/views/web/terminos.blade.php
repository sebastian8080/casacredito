@extends('layouts.web')

@section('head')
    <title>Términos y Condiciones | Casa Crédito</title>
    <meta name="description" content="Lee los términos y condiciones de uso de los servicios de Casa Crédito. Conoce tus derechos y responsabilidades.">
    <style>
        .terminos-hero {
            background: linear-gradient(135deg, #c61617 0%, #8a0f10 100%);
            padding: 120px 0 60px;
            position: relative;
            overflow: hidden;
        }

        .terminos-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255,255,255,0.04);
            border-radius: 50%;
        }

        .terminos-hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.04);
            border-radius: 50%;
        }

        .terminos-hero h1 {
            font-family: 'Montserrat', serif;
            font-weight: 900;
            font-size: 2.8rem;
            color: #ffffff;
            letter-spacing: -0.5px;
        }

        .terminos-hero p {
            font-family: 'Montserrat', serif;
            color: rgba(255,255,255,0.85);
            font-size: 1rem;
        }

        .badge-fecha {
            background: rgba(255,255,255,0.15);
            color: #fff;
            font-family: 'Montserrat', serif;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 16px;
            border: 1px solid rgba(255,255,255,0.25);
        }

        .terminos-body {
            background: #f8f8f8;
            padding: 60px 0 80px;
        }

        .terminos-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0,0,0,0.07);
            padding: 50px 60px;
        }

        .section-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: #c61617;
            color: #fff;
            border-radius: 50%;
            font-family: 'Montserrat', serif;
            font-weight: 700;
            font-size: 0.85rem;
            flex-shrink: 0;
            margin-right: 14px;
        }

        .section-title {
            font-family: 'Montserrat', serif;
            font-weight: 700;
            font-size: 1.15rem;
            color: #1a1a1a;
            margin: 0;
        }

        .section-header {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
            padding-bottom: 12px;
            border-bottom: 2px solid #f0f0f0;
        }

        .section-content {
            font-family: 'Montserrat', serif;
            font-size: 0.92rem;
            color: #555;
            line-height: 1.85;
            padding-left: 50px;
        }

        .terminos-section {
            margin-bottom: 40px;
        }

        .terminos-section:last-child {
            margin-bottom: 0;
        }

        .highlight-box {
            background: linear-gradient(135deg, #fff5f5 0%, #fff0f0 100%);
            border-left: 4px solid #c61617;
            border-radius: 0 8px 8px 0;
            padding: 18px 22px;
            margin: 16px 0 0 50px;
            font-family: 'Montserrat', serif;
            font-size: 0.9rem;
            color: #333;
            line-height: 1.7;
        }

        .highlight-box strong {
            color: #c61617;
        }

        .contact-strip {
            background: linear-gradient(135deg, #c61617 0%, #8a0f10 100%);
            border-radius: 12px;
            padding: 30px 40px;
            margin-top: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .contact-strip h5 {
            font-family: 'Montserrat', serif;
            font-weight: 700;
            color: #fff;
            margin: 0 0 4px;
            font-size: 1.1rem;
        }

        .contact-strip p {
            font-family: 'Montserrat', serif;
            color: rgba(255,255,255,0.8);
            margin: 0;
            font-size: 0.88rem;
        }

        .contact-strip a {
            background: #fff;
            color: #c61617;
            font-family: 'Montserrat', serif;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 12px 28px;
            border-radius: 50px;
            text-decoration: none;
            white-space: nowrap;
            transition: all 0.2s ease;
        }

        .contact-strip a:hover {
            background: #f0f0f0;
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .divider-dots {
            text-align: center;
            margin: 40px 0;
            color: #ddd;
            font-size: 1.5rem;
            letter-spacing: 10px;
        }

        @media (max-width: 768px) {
            .terminos-hero h1 {
                font-size: 2rem;
            }
            .terminos-card {
                padding: 30px 24px;
            }
            .section-content,
            .highlight-box {
                padding-left: 20px;
                margin: 0;
            }
            .contact-strip {
                padding: 24px;
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
@endsection

@section('content')

    {{-- Hero Section --}}
    <section class="terminos-hero">
        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <span class="badge-fecha">Última actualización: Enero 2026</span>
            <h1>Términos y Condiciones</h1>
            <p class="mt-2" style="max-width: 560px;">
                Al utilizar los servicios y el sitio web de Casa Crédito, aceptas los presentes términos.
                Te invitamos a leerlos detenidamente antes de continuar.
            </p>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="terminos-body">
        <div class="container">
            <div class="terminos-card" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">

                {{-- Intro --}}
                <p style="font-family:'Montserrat',serif; font-size:0.95rem; color:#555; line-height:1.9; margin-bottom: 40px;">
                    Los presentes Términos y Condiciones regulan el acceso y uso del sitio web y los servicios ofrecidos por
                    <strong style="color:#1a1a1a;">Casa Crédito</strong> — con operaciones en Cuenca (Ecuador),
                    Nueva York y Nueva Jersey (Estados Unidos) — a través de
                    <strong style="color:#1a1a1a;">casacredito.com</strong>.
                    El uso del sitio implica la aceptación plena y sin reservas de estos términos en la versión publicada en el momento del acceso.
                </p>

                <div class="divider-dots">• • •</div>

                {{-- 1. Objeto --}}
                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">1</span>
                        <h2 class="section-title">Objeto y Alcance</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito es una empresa dedicada a la intermediación inmobiliaria, asesoría y gestión de
                            financiamiento hipotecario, avalúos y servicios notariales. El presente sitio web tiene como
                            finalidad brindar información sobre nuestros servicios y facilitar el contacto entre los
                            usuarios interesados y nuestro equipo de asesores. El contenido publicado en este sitio
                            tiene carácter meramente informativo y no constituye una oferta contractual vinculante.
                        </p>
                    </div>
                </div>

                {{-- 2. Uso del sitio --}}
                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">2</span>
                        <h2 class="section-title">Uso Permitido del Sitio Web</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            El usuario se compromete a utilizar el sitio web y sus contenidos de conformidad con la ley,
                            las buenas costumbres y los presentes Términos y Condiciones. Queda expresamente prohibido:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>Utilizar el sitio con fines ilícitos o que puedan causar daño a terceros.</li>
                            <li>Reproducir, copiar, distribuir o modificar el contenido sin autorización expresa de Casa Crédito.</li>
                            <li>Introducir virus, código malicioso o cualquier elemento que pueda dañar los sistemas de Casa Crédito.</li>
                            <li>Suplantar la identidad de otra persona o entidad al utilizar los formularios de contacto.</li>
                            <li>Enviar comunicaciones masivas no solicitadas (spam) a través de los canales del sitio.</li>
                        </ul>
                    </div>
                    <div class="highlight-box">
                        <strong>Nota:</strong> Casa Crédito se reserva el derecho de bloquear el acceso a cualquier usuario
                        que incumpla estas condiciones, sin necesidad de previo aviso.
                    </div>
                </div>

                {{-- 3. Servicios --}}
                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">3</span>
                        <h2 class="section-title">Descripción de los Servicios</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito ofrece a sus clientes los siguientes servicios, sujetos a disponibilidad
                            y condiciones específicas que serán informadas por nuestros asesores:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li><strong>Intermediación inmobiliaria:</strong> Compra, venta y arriendo de propiedades en Ecuador y Estados Unidos.</li>
                            <li><strong>Asesoría hipotecaria:</strong> Gestión y acompañamiento en la obtención de créditos hipotecarios.</li>
                            <li><strong>Avalúos:</strong> Valoración técnica de bienes inmuebles por profesionales certificados.</li>
                            <li><strong>Servicios notariales:</strong> Apoyo y asesoría en trámites notariales relacionados con bienes raíces.</li>
                        </ul>
                        <p style="margin-top: 12px;">
                            La información publicada en el sitio sobre propiedades, precios y condiciones de financiamiento
                            es referencial. Las condiciones definitivas serán acordadas directamente con el cliente a través
                            de contratos específicos.
                        </p>
                    </div>
                </div>

                {{-- 4. Propiedad intelectual --}}
                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">4</span>
                        <h2 class="section-title">Propiedad Intelectual</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Todos los contenidos del sitio web de Casa Crédito — incluyendo, sin limitarse a, textos,
                            imágenes, logotipos, íconos, gráficos, diseños y código fuente — son propiedad exclusiva
                            de Casa Crédito o de sus respectivos titulares, y están protegidos por las leyes de
                            propiedad intelectual vigentes en Ecuador y Estados Unidos.
                        </p>
                        <p style="margin-top: 10px;">
                            Queda prohibida su reproducción total o parcial, distribución, transformación o comunicación
                            pública sin la autorización previa y por escrito de Casa Crédito.
                        </p>
                    </div>
                </div>

                {{-- 5. Responsabilidad --}}
                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">5</span>
                        <h2 class="section-title">Limitación de Responsabilidad</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito no garantiza la disponibilidad continua e ininterrumpida del sitio web y no
                            será responsable por daños o perjuicios derivados de:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>Interrupciones, errores técnicos o indisponibilidad temporal del sitio.</li>
                            <li>Decisiones tomadas por el usuario basadas exclusivamente en la información publicada en el sitio.</li>
                            <li>El acceso de terceros no autorizados a los datos del usuario por causas ajenas a Casa Crédito.</li>
                            <li>Cambios en las condiciones del mercado inmobiliario o financiero que afecten la información publicada.</li>
                        </ul>
                    </div>
                    <div class="highlight-box">
                        <strong>Recomendación:</strong> Para tomar decisiones de compra, venta o financiamiento,
                        te recomendamos contactar directamente a uno de nuestros asesores, quienes podrán brindarte
                        información actualizada y personalizada.
                    </div>
                </div>

                {{-- 6. Enlaces externos --}}
                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">6</span>
                        <h2 class="section-title">Enlaces a Sitios de Terceros</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            El sitio web de Casa Crédito puede incluir enlaces a sitios web de terceros para facilitar
                            la navegación del usuario. Casa Crédito no controla el contenido de esos sitios, no asume
                            ninguna responsabilidad por ellos y su inclusión no implica ningún tipo de recomendación,
                            patrocinio o relación comercial con dichos terceros.
                        </p>
                    </div>
                </div>

                {{-- 7. Jurisdicción --}}
                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">7</span>
                        <h2 class="section-title">Legislación Aplicable y Jurisdicción</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Los presentes Términos y Condiciones se rigen por la legislación vigente en la
                            República del Ecuador para los usuarios en dicho territorio, y por la legislación
                            del Estado de Nueva York o Nueva Jersey, según corresponda, para los usuarios en
                            Estados Unidos. Cualquier controversia derivada del uso del sitio web será sometida
                            a los jueces y tribunales competentes según la jurisdicción aplicable.
                        </p>
                    </div>
                </div>

                {{-- 8. Modificaciones --}}
                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">8</span>
                        <h2 class="section-title">Modificaciones a los Términos</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito se reserva el derecho de actualizar, modificar o reemplazar estos Términos y
                            Condiciones en cualquier momento. Los cambios entrarán en vigencia desde su publicación en
                            este sitio web. El uso continuado del sitio tras la publicación de cambios implica la
                            aceptación de los nuevos términos. Le recomendamos revisar esta página periódicamente.
                        </p>
                    </div>
                </div>

                {{-- Contact CTA --}}
                <div class="contact-strip" data-aos="fade-up" data-aos-duration="600">
                    <div>
                        <h5>¿Tienes dudas sobre nuestros términos?</h5>
                        <p>Nuestro equipo está disponible para aclarar cualquier consulta que tengas.</p>
                    </div>
                    <a href="{{ route('web.contacto') }}">Contáctanos</a>
                </div>

            </div>
        </div>
    </section>

@endsection