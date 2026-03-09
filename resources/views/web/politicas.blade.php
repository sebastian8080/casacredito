@extends('layouts.web')

@section('head')
    <title>Políticas de Privacidad | Casa Crédito</title>
    <meta name="description" content="Conoce cómo Casa Crédito protege y maneja tu información personal. Tu privacidad es nuestra prioridad.">
    <style>
        .politicas-hero {
            background: linear-gradient(135deg, #c61617 0%, #8a0f10 100%);
            padding: 120px 0 60px;
            position: relative;
            overflow: hidden;
        }

        .politicas-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255,255,255,0.04);
            border-radius: 50%;
        }

        .politicas-hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.04);
            border-radius: 50%;
        }

        .politicas-hero h1 {
            font-family: 'Montserrat', serif;
            font-weight: 900;
            font-size: 2.8rem;
            color: #ffffff;
            letter-spacing: -0.5px;
        }

        .politicas-hero p {
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

        .politicas-body {
            background: #f8f8f8;
            padding: 60px 0 80px;
        }

        .politicas-card {
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

        .politicas-section {
            margin-bottom: 40px;
        }

        .politicas-section:last-child {
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
            .politicas-hero h1 {
                font-size: 2rem;
            }
            .politicas-card {
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
    <section class="politicas-hero">
        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <span class="badge-fecha">Última actualización: Enero 2026</span>
            <h1>Políticas de Privacidad</h1>
            <p class="mt-2" style="max-width: 560px;">
                En Casa Crédito, la protección de tu información personal es un compromiso fundamental. 
                Te explicamos de forma clara cómo tratamos los datos que nos confías.
            </p>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="politicas-body">
        <div class="container">
            <div class="politicas-card" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">

                {{-- Intro --}}
                <p style="font-family:'Montserrat',serif; font-size:0.95rem; color:#555; line-height:1.9; margin-bottom: 40px;">
                    La presente Política de Privacidad regula el tratamiento de los datos personales que 
                    <strong style="color:#1a1a1a;">Casa Crédito</strong> — con operaciones en Cuenca (Ecuador), 
                    Nueva York y Nueva Jersey (Estados Unidos) — recopila a través de los formularios de contacto 
                    y demás canales digitales disponibles en <strong style="color:#1a1a1a;">casacredito.com</strong>. 
                    Al enviar sus datos a través de nuestro sitio web, usted acepta los términos descritos a continuación.
                </p>

                <div class="divider-dots">• • •</div>

                {{-- 1. Responsable --}}
                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">1</span>
                        <h2 class="section-title">Responsable del Tratamiento de Datos</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            El responsable del tratamiento de sus datos personales es <strong>Casa Crédito</strong>, 
                            empresa dedicada a la intermediación inmobiliaria, gestión y asesoría de financiamiento hipotecario, 
                            avalúos y servicios notariales. Puede contactarnos a través de:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li><strong>Correo electrónico:</strong> info@casacredito.com</li>
                            <li><strong>Ecuador:</strong> Remigio Tamariz Crespo y Av. Fray Vicente Solano, Cuenca — 098-384-9073</li>
                            <li><strong>Nueva York:</strong> 67-03 Roosevelt Avenue, Woodside, NY 11377 — 718-690-3740</li>
                            <li><strong>Nueva Jersey:</strong> 1146 East Jersey St, Elizabeth, NJ 07201 — 908-381-0090</li>
                        </ul>
                    </div>
                </div>

                {{-- 2. Datos recopilados --}}
                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">2</span>
                        <h2 class="section-title">Datos Personales que Recopilamos</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            A través de los formularios de contacto disponibles en nuestro sitio web, podemos recopilar 
                            únicamente la información que usted proporciona de manera voluntaria, la cual puede incluir:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>Nombre completo</li>
                            <li>Número de teléfono o celular</li>
                            <li>Dirección de correo electrónico</li>
                            <li>Mensaje o consulta relacionada con nuestros servicios</li>
                        </ul>
                    </div>
                    <div class="highlight-box">
                        <strong>Importante:</strong> No recopilamos datos sensibles como información financiera detallada, 
                        documentos de identidad ni datos de salud a través de nuestros formularios web.
                    </div>
                </div>

                {{-- 3. Finalidad --}}
                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">3</span>
                        <h2 class="section-title">Finalidad del Tratamiento</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Los datos personales que usted nos proporciona a través de los formularios de contacto 
                            de nuestro sitio web serán utilizados <strong>exclusivamente</strong> para los siguientes fines:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>Responder a su consulta o solicitud de información sobre nuestros servicios.</li>
                            <li>Ponernos en contacto con usted para brindarle asesoría sobre los servicios solicitados 
                                (créditos hipotecarios, avalúos, propiedades, entre otros).</li>
                            <li>Dar seguimiento a su proceso de atención de manera personalizada y oportuna.</li>
                        </ul>
                    </div>
                    <div class="highlight-box">
                        <strong>Nuestro compromiso:</strong> Su información es tratada <strong>única y exclusivamente 
                        por el equipo de Casa Crédito</strong>. Sus datos no serán utilizados con fines publicitarios 
                        de terceros, ni compartidos con ninguna otra empresa, persona o entidad externa para propósitos 
                        ajenos al servicio que usted solicitó.
                    </div>
                </div>

                {{-- 4. Confidencialidad --}}
                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">4</span>
                        <h2 class="section-title">Confidencialidad y No Cesión a Terceros</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito se compromete a mantener la más estricta confidencialidad sobre los datos 
                            personales recibidos. En consecuencia:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>No venderemos, alquilaremos ni cederemos su información personal a terceros bajo ninguna circunstancia.</li>
                            <li>El acceso a su información está restringido al personal autorizado de Casa Crédito que necesita dicha información para brindarle el servicio solicitado.</li>
                            <li>Todo nuestro personal está sujeto a obligaciones de confidencialidad respecto a los datos de nuestros clientes.</li>
                        </ul>
                    </div>
                </div>

                {{-- 5. Almacenamiento --}}
                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">5</span>
                        <h2 class="section-title">Almacenamiento y Seguridad de los Datos</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Implementamos medidas técnicas y organizativas razonables para proteger sus datos personales 
                            contra el acceso no autorizado, la pérdida, alteración o divulgación indebida. Sus datos 
                            serán conservados durante el tiempo estrictamente necesario para gestionar su solicitud y, 
                            posteriormente, durante el período que establezca la normativa aplicable en Ecuador y/o 
                            Estados Unidos según corresponda.
                        </p>
                    </div>
                </div>

                {{-- 6. Derechos --}}
                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">6</span>
                        <h2 class="section-title">Sus Derechos como Titular de los Datos</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Usted tiene derecho a ejercer en cualquier momento los siguientes derechos sobre sus datos personales:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li><strong>Acceso:</strong> Conocer qué datos suyos tenemos almacenados.</li>
                            <li><strong>Rectificación:</strong> Solicitar la corrección de datos inexactos o incompletos.</li>
                            <li><strong>Eliminación:</strong> Solicitar la supresión de sus datos cuando ya no sean necesarios.</li>
                        </ul>
                        <p style="margin-top: 12px;">
                            Para ejercer cualquiera de estos derechos, puede escribirnos a 
                            <a href="mailto:info@casacredito.com" style="color: #c61617; font-weight: 600;">info@casacredito.com</a> 
                            indicando su nombre completo y la solicitud que desea realizar. 
                            Atenderemos su petición en un plazo no mayor a <strong>15 días hábiles</strong>.
                        </p>
                    </div>
                </div>

                {{-- 7. Cookies --}}
                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">7</span>
                        <h2 class="section-title">Uso de Cookies y Herramientas de Análisis</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Nuestro sitio web puede utilizar herramientas de análisis como Google Analytics y Google 
                            Tag Manager con el fin de comprender el comportamiento de los visitantes y mejorar la 
                            experiencia de navegación. Esta información es de carácter estadístico y agregado, y no 
                            permite identificar a usuarios de forma individual. Puede configurar su navegador para 
                            rechazar el uso de cookies en cualquier momento.
                        </p>
                    </div>
                </div>

                {{-- 8. Cambios --}}
                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">8</span>
                        <h2 class="section-title">Modificaciones a esta Política</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito se reserva el derecho de actualizar o modificar esta Política de Privacidad 
                            cuando lo considere necesario, con el fin de adaptarse a cambios normativos o mejoras en 
                            nuestros procesos. Cualquier modificación será publicada en esta misma página con la fecha 
                            de actualización correspondiente. Le recomendamos revisar esta política periódicamente.
                        </p>
                    </div>
                </div>

                {{-- Contact CTA --}}
                <div class="contact-strip" data-aos="fade-up" data-aos-duration="600">
                    <div>
                        <h5>¿Tienes preguntas sobre el manejo de tus datos?</h5>
                        <p>Nuestro equipo está listo para resolver cualquier inquietud que tengas.</p>
                    </div>
                    <a href="{{ route('web.contacto') }}">Contáctanos</a>
                </div>

            </div>
        </div>
    </section>

@endsection