@extends('layouts.web')

@section('head')
    <title>Terms and Conditions | Casa Crédito</title>
    <meta name="description" content="Read the terms and conditions of use for Casa Crédito services. Know your rights and responsibilities.">
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
        .terminos-body { background: #f8f8f8; padding: 60px 0 80px; }
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
        .terminos-section { margin-bottom: 40px; }
        .terminos-section:last-child { margin-bottom: 0; }
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
            .terminos-hero h1 { font-size: 2rem; }
            .terminos-card { padding: 30px 24px; }
            .section-content, .highlight-box { padding-left: 20px; margin: 0; }
            .contact-strip { padding: 24px; flex-direction: column; text-align: center; }
        }
    </style>
@endsection

@section('content')

    <section class="terminos-hero">
        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <span class="badge-fecha">Last updated: January 2026</span>
            <h1>Terms and Conditions</h1>
            <p class="mt-2" style="max-width: 560px;">
                By using Casa Crédito's services and website, you accept these terms.
                We invite you to read them carefully before continuing.
            </p>
        </div>
    </section>

    <section class="terminos-body">
        <div class="container">
            <div class="terminos-card" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">

                <p style="font-family:'Montserrat',serif; font-size:0.95rem; color:#555; line-height:1.9; margin-bottom: 40px;">
                    These Terms and Conditions govern access to and use of the website and services offered by
                    <strong style="color:#1a1a1a;">Casa Crédito</strong> — with operations in Cuenca (Ecuador),
                    New York and New Jersey (United States) — through
                    <strong style="color:#1a1a1a;">casacredito.com</strong>.
                    Use of the site implies full and unreserved acceptance of these terms as published at the time of access.
                </p>

                <div class="divider-dots">• • •</div>

                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">1</span>
                        <h2 class="section-title">Purpose and Scope</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito is a company dedicated to real estate brokerage, mortgage financing advisory
                            and management, property appraisals, and notarial services. This website aims to provide
                            information about our services and facilitate contact between interested users and our
                            team of advisors. The content published on this site is for informational purposes only
                            and does not constitute a binding contractual offer.
                        </p>
                    </div>
                </div>

                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">2</span>
                        <h2 class="section-title">Permitted Use of the Website</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            The user agrees to use the website and its content in accordance with the law,
                            good practices, and these Terms and Conditions. The following are expressly prohibited:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>Using the site for unlawful purposes or in ways that may cause harm to third parties.</li>
                            <li>Reproducing, copying, distributing, or modifying content without express authorization from Casa Crédito.</li>
                            <li>Introducing viruses, malicious code, or any element that may damage Casa Crédito's systems.</li>
                            <li>Impersonating another person or entity when using the contact forms.</li>
                            <li>Sending unsolicited mass communications (spam) through the site's channels.</li>
                        </ul>
                    </div>
                    <div class="highlight-box">
                        <strong>Note:</strong> Casa Crédito reserves the right to block access to any user
                        who violates these conditions, without prior notice.
                    </div>
                </div>

                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">3</span>
                        <h2 class="section-title">Description of Services</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito offers its clients the following services, subject to availability
                            and specific conditions that will be communicated by our advisors:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li><strong>Real estate brokerage:</strong> Buying, selling, and renting properties in Ecuador and the United States.</li>
                            <li><strong>Mortgage advisory:</strong> Management and support in obtaining mortgage loans.</li>
                            <li><strong>Appraisals:</strong> Technical valuation of real estate by certified professionals.</li>
                            <li><strong>Notarial services:</strong> Support and advisory for notarial procedures related to real estate.</li>
                        </ul>
                        <p style="margin-top: 12px;">
                            Information published on the site regarding properties, prices, and financing conditions
                            is for reference only. Final terms will be agreed directly with the client through
                            specific contracts.
                        </p>
                    </div>
                </div>

                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">4</span>
                        <h2 class="section-title">Intellectual Property</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            All content on the Casa Crédito website — including, but not limited to, texts, images,
                            logos, icons, graphics, designs, and source code — is the exclusive property of
                            Casa Crédito or its respective rights holders, and is protected by intellectual
                            property laws in force in Ecuador and the United States.
                        </p>
                        <p style="margin-top: 10px;">
                            Total or partial reproduction, distribution, transformation, or public communication
                            is prohibited without the prior written authorization of Casa Crédito.
                        </p>
                    </div>
                </div>

                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">5</span>
                        <h2 class="section-title">Limitation of Liability</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito does not guarantee continuous and uninterrupted availability of the website
                            and shall not be liable for damages arising from:
                        </p>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>Interruptions, technical errors, or temporary unavailability of the site.</li>
                            <li>Decisions made by the user based solely on information published on the site.</li>
                            <li>Unauthorized third-party access to user data due to causes beyond Casa Crédito's control.</li>
                            <li>Changes in real estate or financial market conditions affecting published information.</li>
                        </ul>
                    </div>
                    <div class="highlight-box">
                        <strong>Recommendation:</strong> For purchase, sale, or financing decisions,
                        we recommend contacting one of our advisors directly, who can provide
                        updated and personalized information.
                    </div>
                </div>

                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">6</span>
                        <h2 class="section-title">Links to Third-Party Sites</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            The Casa Crédito website may include links to third-party websites for the user's
                            convenience. Casa Crédito does not control the content of those sites, assumes no
                            responsibility for them, and their inclusion does not imply any recommendation,
                            sponsorship, or commercial relationship with said third parties.
                        </p>
                    </div>
                </div>

                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">7</span>
                        <h2 class="section-title">Applicable Law and Jurisdiction</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            These Terms and Conditions are governed by the law in force in the Republic of Ecuador
                            for users in that territory, and by the law of the State of New York or New Jersey,
                            as applicable, for users in the United States. Any dispute arising from the use of
                            the website shall be submitted to the competent courts according to the applicable jurisdiction.
                        </p>
                    </div>
                </div>

                <div class="terminos-section" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="section-header">
                        <span class="section-number">8</span>
                        <h2 class="section-title">Changes to These Terms</h2>
                    </div>
                    <div class="section-content">
                        <p>
                            Casa Crédito reserves the right to update, modify, or replace these Terms and Conditions
                            at any time. Changes will take effect from the moment they are published on this website.
                            Continued use of the site after changes are published implies acceptance of the new terms.
                            We recommend reviewing this page periodically.
                        </p>
                    </div>
                </div>

                <div class="contact-strip" data-aos="fade-up" data-aos-duration="600">
                    <div>
                        <h5>Do you have questions about our terms?</h5>
                        <p>Our team is available to clarify any questions you may have.</p>
                    </div>
                    <a href="{{ route('web.contacto') }}">Contact Us</a>
                </div>

            </div>
        </div>
    </section>

@endsection