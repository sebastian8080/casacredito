@extends('layouts.web')

@section('head')
    <title>Calcule su credito en linea | Casa Credito</title>
    <style>
        @media screen and (max-width: 580px){
            .height-banner-mobile{
                height: 550px !important;
            }
            .bg-image-banner-mobile{
                background-position: left !important;
            }
            .padding-left-banner-mobile{
                padding-left: 10% !important;
            }
            .f-size-min-2{
                font-size: 1.4rem !important;
            }
            .f-size-min-3{
                font-size: 3.5rem !important;
            }
            .card-cuota-mensual{
                width: 100% !important;
                margin-left: 0px !important;
                margin-top: 25px !important;
            }
        }
        /* codigo banner #686768 opacidad 21%*/
        @font-face {
            font-family: 'Montserrat';
            src: url("{{ asset('fonts/Montserrat-Black.ttf') }}");
        }

        .gradient{
            background: rgb(255,255,255);
            background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(138, 25, 29, 0.207) 100%);
        }
    </style>
@endsection

@section('content')
    <section class="height-banner-mobile bg-image-banner-mobile" style="height: 750px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/banner-somos.jpg') }}')">
        <section class="height-banner-mobile padding-left-banner-mobile d-flex align-items-center justify-content-start" style="height: 750px; padding-left: 13%">
            <div data-aos="fade-right">
                <h1 style="font-family: 'Bitter', 'serif'; color: #676667"><span style="font-size: 3rem; font-style: italic" class="f-size-min-2">Descubre quienes</span> <br> <span style="font-size: 7rem; font-weight: 600" class="f-size-min-3">somos</span> </h1>
                <button class="btn btn-danger rounded-pill mt-5" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">CONSULTAR</button>
            </div>
        </section>
    </section>

    <section class="container mt-5">
        <section class="row">
            <article class="col-sm-4">
                {{-- <a href="{{ route('web.creditos.hipoetacarios') }}"> --}}
                    <div data-aos="fade-right" class="position-relative min-height-cards card-creditos" style="height: 300px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                        <div class="position-absolute min-height-cards left-cards" style="top: 0px; left: 45px; height: 300px; display: flex; align-items: center">
                            <div class="icons-creditos">
                                <div>
                                    <img width="60px" src="{{ asset('img/iconoquienes.png') }}" alt="">
                                </div>
                                <div>
                                    <h3 class="mt-3 mb-4">Quiénes somos</h3>
                                    <p style="padding-right: 20%">Somos un equipo dedicado a ofrecer soluciones a medida para cada uno de nuestros clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </a> --}}
            </article>
            <article class="col-sm-4">
                <div data-aos="fade-up" class="position-relative min-height-cards" style="height: 300px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <div class="position-absolute min-height-cards left-cards" style="top: 0px; left: 45px; height: 300px; display: flex; align-items: center">
                        <div class="icons-creditos">
                            <div>
                                <img width="60px" src="{{ asset('img/iconovalores.png') }}" alt="">
                            </div>
                            <div>
                                <h3 class="mt-3 mb-4">Nuestros valores</h3>
                                <p style="padding-right: 20%">Construyendo relaciones basadas en la confianza y el compromiso con nuestros clientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-sm-4">
                <div data-aos="fade-left" class="position-relative min-height-cards" style="height: 300px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <div class="position-absolute min-height-cards left-cards" style="top: 0px; left: 45px; height: 300px; display: flex; align-items: center">
                        <div class="icons-creditos">
                            <div>
                                <img width="60px" src="{{ asset('img/iconoexperienciaquienes.png') }}" alt="">
                            </div>
                            <div>
                                <h3 class="mt-3 mb-4">Nuestra experiencia</h3>
                                <p style="padding-right: 20%">Casa Crédito ofrece una experiencia probada que respalda cada transacción.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </section>

    <section class="container py-5 mt-5">
        <h2 style="font-family: 'Bitter', 'serif'; font-weight: 600"><span style="color: #676667">Nuestros</span><span style="color: #c61617"> Asesores</span></h2>
        <p>Asesores especialistas en créditos, quienes brindan acompañamiento personalizado para encontrar la mejor solución financiera para ti. Analizamos tus necesidades y objetivos, guiándote paso a paso en el proceso para obtener el crédito que se ajuste a tus metas. ¡Haz realidad tus proyectos con el respaldo de expertos en finanzas!</p>
    </section>

    <section class="container py-5 mt-5">
        <section class="row">
            <article class="col-sm-8">
                <img class="img-fluid" src="{{ asset('img/banner3-creditos.jpg') }}" alt="">
            </article>
            <article class="col-sm-4 d-flex align-items-center" data-aos="fade-left">
                <div class="border p-5 bg-white card-cuota-mensual" style="height: auto; width: 540px; margin-left: -150px; box-shadow: 10px 11px 8px -5px rgba(0,0,0,0.36);">
                    <h2 class="mb-4" style="font-family: 'Bitter', 'serif';"><span style="color: gray">Realizar Consulta</span></h2>
                    <form action="{{ route('sendlead') }}" method="POST">
                        @csrf
                        <div>
                            <div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <input class="form-control border-0 rounded-0" type="text" placeholder="Nombre" name="name" required>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <input class="form-control border-0 rounded-0" type="text" placeholder="Apellido" name="lastname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <input class="form-control border-0 rounded-0" type="number" placeholder="Telefono/Celular" name="phone" required>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <input class="form-control border-0 rounded-0" type="email" placeholder="Correo electrónico" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <select id="selState" class="form-select text-muted border-0 rounded-0" name="state" required>
                                                <option value="">Provincia</option>
                                                @foreach ($states as $state)
                                                    <option value="{{ $state->name }}" data-id="{{ $state->id}}">{{ $state->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <select id="selCity" class="form-select text-muted border-0 rounded-0" name="city" required>
                                                <option value="">Ciudad</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <select class="form-select text-muted border-0 rounded-0" name="type" required>
                                                <option value="">Tipo de Credito</option>
                                                <option value="Microcreditos">Microcreditos</option>
                                                <option value="Hipotecarios">Hipotecarios</option>
                                                <option value="De Construccion">De Construccion</option>
                                                <option value="Vivienda de Interes Popular">Vivienda de Interes Popular</option>
                                                <option value="De Consumo">De Consumo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <input type="number" class="form-control border-0 rounded-0" placeholder="Monto a Solicitar" name="mount" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <textarea  id="" rows="4" class="form-control border-0 rounded-0" placeholder="Mensaje" name="message" required></textarea>
                                        </div>
                                    </div>
                                </div>                  
                            </div>
                            <div class="mt-4">
                                <button class="btn rounded-pill text-white px-4" style="background-color: #c61617" type="submit">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </article>
        </section>
    </section>

    <!-- modals -->
    @include('components.form')
        
@endsection

@section('scripts')
    <script>

        let selTipoCredito = document.getElementById('selTypeCredit');

        //variables para mostrar los valores calculados
        let spanCapital = document.getElementById('spanCapital');
        let spanInteres = document.getElementById('spanInteres');
        let spanAnios = document.getElementById('spanAnios');
        let spanCuota = document.getElementById('spanCuota');

        //variables de formulario
        let selState = document.getElementById('selState');
        let selCities = document.getElementById('selCity');

        selState.addEventListener('change', async () => {
            selCities.options.length = 0;
            let id = selState.options[selState.selectedIndex].dataset.id;
            const response = await fetch("{{url('getcities')}}/"+id );
            const cities = await response.json();
            
            let opt = document.createElement('option');
                opt.appendChild( document.createTextNode('Ciudad') );
                opt.value = '';
                selCities.appendChild(opt);
            cities.forEach(city => {
                var opt = document.createElement('option');
                opt.appendChild( document.createTextNode(city.name) );
                opt.value = city.name;
                selCities.appendChild(opt);
            });
        });

        const changeValueRangePrice = () => {
            let rangeInpAnios = document.getElementById('rangeAnios');
            let texto;
            rangeInpAnios.value > 1 ? texto = "años" : texto = "año";
            document.getElementById('textRange').textContent = rangeInpAnios.value + " " + texto;
        }

        const calcular = () => {

            if(selTipoCredito.value == null || selTipoCredito.value == ""){
                alert('Seleccione el tipo de credito');
                return;
            } 

            let cantidad = document.getElementById('cantidad');
            let anios = document.getElementById('rangeAnios');
            
            if(cantidad.value == null || cantidad.value == 0 || cantidad.value == ""){
                alert('Complete el campo con un valor');
                return;
            }

            let total_interes = cantidad.value * 0.15;
            let total_mas_interes = Number(total_interes) + Number(cantidad.value);
            let monto_mensual = total_mas_interes / (anios.value * 12);

            console.log(monto_mensual.toFixed(2));

            spanCapital.textContent = "$"+cantidad.value;
            spanInteres.textContent = "$"+total_interes;
            spanAnios.textContent = anios.value;
            spanCuota.textContent = "$"+monto_mensual.toFixed(2);
            
        }

        selTipoCredito.addEventListener('change', () => {
            switch (selTipoCredito.value) {
                case "2":
                case "4":
                    document.getElementById('sectionPropertyValue').classList.remove('d-none');    
                break;
            
                default:
                    document.getElementById('sectionPropertyValue').classList.add('d-none');
                break;
            }
        })

        window.addEventListener('load', () => {
            document.getElementById('textRange').textContent = document.getElementById('rangeAnios').value + " años";
        })
    </script>
@endsection