@extends('layouts.web')

@section('head')
    <title>Privacy Policy | Casa Crédito</title>
    <meta name="description" content="Learn how Casa Crédito protects and handles your personal information. Your privacy is our priority.">
    {{-- Mismos estilos que politicas.blade.php --}}
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
        .politicas-body { background: #f8f8f8; padding: 60px 0 80px; }
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
        .politicas-section { margin-bottom: 40px; }
        .politicas-section:last-child { margin-bottom: 0; }
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
        .highlight-box strong { color: #c61617; }
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
            .politicas-hero h1 { font-size: 2rem; }
            .politicas-card { padding: 30px 24px; }
            .section-content, .highlight-box { padding-left: 20px; margin: 0; }
            .contact-strip { padding: 24px; flex-direction: column; text-align: center; }
        }
    </style>
@endsection

@section('content')

    <section class="politicas-hero">
        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <span class="badge-fecha">Last updated: January 2026</span>
            <h1>Privacy Policy</h1>
            <p class="mt-2" style="max-width: 560px;">
                At Casa Crédito, protecting your personal information is a fundamental commitment.
                We explain clearly how we handle the data you entrust to us.
            </p>
        </div>
    </section>

    <section class="politicas-body">
        <div class="container">
            <div class="politicas-card" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">

                <p style="font-family:'Montserrat',serif; font-size:0.95rem; color:#555; line-height:1.9; margin-bottom: 40px;">
                    This Privacy Policy governs the processing of personal data that
                    <strong style="color:#1a1a1a;">Casa Crédito</strong> — with operations in Cuenca (Ecuador),
                    New York and New Jersey (United States) — collects through the contact forms and other
                    digital channels available at <strong style="color:#1a1a1a;">casacredito.com</strong>.
                    By submitting your data through our website, you accept the terms described below.
                </p>

                <div class="divider-dots">• • •</div>

                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">1</span>
                        <h2 class="section-title">Data Controller</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            The controller responsible for processing your personal data is <strong>Casa Crédito</strong>,
                            a company dedicated to real estate brokerage, mortgage financing management and advisory,
                            property appraisals, and notarial services. You may contact us through:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li><strong>Email:</strong> info@casacredito.com</li>
                            <li><strong>Ecuador:</strong> Remigio Tamariz Crespo y Av. Fray Vicente Solano, Cuenca — 098-384-9073</li>
                            <li><strong>New York:</strong> 67-03 Roosevelt Avenue, Woodside, NY 11377 — 718-690-3740</li>
                            <li><strong>New Jersey:</strong> 1146 East Jersey St, Elizabeth, NJ 07201 — 908-381-0090</li>
                        </ul>
                    </div>
                </div>

                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">2</span>
                        <h2 class="section-title">Personal Data We Collect</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Through the contact forms available on our website, we may collect only the information
                            you voluntarily provide, which may include:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>Full name</li>
                            <li>Phone or mobile number</li>
                            <li>Email address</li>
                            <li>Message or inquiry related to our services</li>
                        </ul>
                    </div>
                    <div class="highlight-box">
                        <strong>Important:</strong> We do not collect sensitive data such as detailed financial information,
                        identity documents, or health data through our web forms.
                    </div>
                </div>

                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">3</span>
                        <h2 class="section-title">Purpose of Data Processing</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            The personal data you provide through our website contact forms will be used
                            <strong>exclusively</strong> for the following purposes:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>Responding to your inquiry or request for information about our services.</li>
                            <li>Contacting you to provide advice on the requested services (mortgage loans, appraisals, properties, etc.).</li>
                            <li>Following up on your case in a personalized and timely manner.</li>
                        </ul>
                    </div>
                    <div class="highlight-box">
                        <strong>Our commitment:</strong> Your information is handled <strong>solely and exclusively
                        by the Casa Crédito team</strong>. Your data will not be used for third-party advertising
                        purposes, nor shared with any other company, person, or external entity for purposes
                        unrelated to the service you requested.
                    </div>
                </div>

                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">4</span>
                        <h2 class="section-title">Confidentiality and No Third-Party Sharing</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito is committed to maintaining the strictest confidentiality regarding received
                            personal data. Accordingly:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>We will not sell, rent, or transfer your personal information to third parties under any circumstances.</li>
                            <li>Access to your information is restricted to authorized Casa Crédito staff who need it to provide the requested service.</li>
                            <li>All our staff are subject to confidentiality obligations regarding customer data.</li>
                        </ul>
                    </div>
                </div>

                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">5</span>
                        <h2 class="section-title">Data Storage and Security</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            We implement reasonable technical and organizational measures to protect your personal data
                            against unauthorized access, loss, alteration, or improper disclosure. Your data will be
                            retained for the time strictly necessary to manage your request and, thereafter, for the
                            period established by applicable regulations in Ecuador and/or the United States as appropriate.
                        </p>
                    </div>
                </div>

                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">6</span>
                        <h2 class="section-title">Your Rights as a Data Subject</h2>
                    </div>
                    <div class="section-content">
                        <p>You have the right to exercise the following rights over your personal data at any time:</p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li><strong>Access:</strong> Know what data of yours we have stored.</li>
                            <li><strong>Rectification:</strong> Request correction of inaccurate or incomplete data.</li>
                            <li><strong>Deletion:</strong> Request the deletion of your data when it is no longer necessary.</li>
                        </ul>
                        <p style="margin-top: 12px;">
                            To exercise any of these rights, you may write to us at
                            <a href="mailto:info@casacredito.com" style="color: #c61617; font-weight: 600;">info@casacredito.com</a>
                            stating your full name and the request you wish to make.
                            We will respond to your request within no more than <strong>15 business days</strong>.
                        </p>
                    </div>
                </div>

                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">7</span>
                        <h2 class="section-title">Use of Cookies and Analytics Tools</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Our website may use analytics tools such as Google Analytics and Google Tag Manager
                            to understand visitor behavior and improve the browsing experience. This information
                            is statistical and aggregated in nature and does not allow individual users to be
                            identified. You can configure your browser to reject cookies at any time.
                        </p>
                    </div>
                </div>

                <div class="politicas-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">8</span>
                        <h2 class="section-title">Changes to This Policy</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito reserves the right to update or modify this Privacy Policy whenever
                            it deems necessary in order to adapt to regulatory changes or improvements to our
                            processes. Any changes will be published on this same page with the corresponding
                            update date. We recommend reviewing this policy periodically.
                        </p>
                    </div>
                </div>

                <div class="contact-strip" data-aos="fade-up" data-aos-duration="600">
                    <div>
                        <h5>Do you have questions about how we handle your data?</h5>
                        <p>Our team is ready to answer any questions you may have.</p>
                    </div>
                    <a href="{{ route('web.contacto') }}">Contact Us</a>
                </div>

            </div>
        </div>
    </section>

@endsection