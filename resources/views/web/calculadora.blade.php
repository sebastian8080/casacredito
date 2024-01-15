@extends('layouts.web')

@section('head')
    <title>Calcule su credito en linea | Casa Credito</title>
    <style>
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
    <section style="background-color: #68676841;">
        <section class="row" style="z-index: 3000">
            <article class="col-sm-4 h-full w-full d-flex align-items-center justify-content-center">
                <div>
                    <p style="line-height: 40px"> <span style="font-size: 40px">Conozca cuanto</span> <br> <span style="font-size: 50px">pagaría</span> <br> <span style="font-size: 40px">mensualmente</span></p>
                    <button class="btn text-white" style="background-color: #c61617">CALCULAR</button>
                </div>
            </article>
            <article class="col-sm-8">
                <div class="position-relative">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <p style="font-family: Montserrat; z-index: -1" class="display-1 text-white">CREDITOS</p>
                    </div>
                    <div style="z-index: 2">
                        <img width="90%" style="margin-bottom: -100px;" class="img-fluid" src="{{ asset('img/calcule-su-credito-en-linea.png') }}" alt="">
                    </div>
                </div>
            </article>
        </section>
    </section>
    <section style="background-color: #68676822; height: 100px"></section>

    <section class="container">
        <section>
            <h2 class="text-center">Calcule su cuota mensual</h2>
            <p class="text-center">Elija el tipo de credito que se ajusta a sus necesidades</p>

            <section class="row justify-content-center">
                <article class="col-sm-4">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('img/bg-tipo-credito.png') }}" alt="">
                        <div class="position-absolute top-50 start-50 translate-middle w-100">
                            <h3 class="text-center fw-bold">MICROCRÉDITOS</h3>
                            <p class="text-center">Inicie su historial crediticio</p>
                            <p class="text-center">Tasa de interes referencial 9,45%</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn text-white" style="background-color: #c61617">Ver mas</button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-sm-4">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('img/bg-tipo-credito.png') }}" alt="">
                        <div class="position-absolute top-50 start-50 translate-middle w-100">
                            <h3 class="text-center fw-bold">HIPOTECARIOS</h3>
                            <p class="text-center">Compra de una propiedad</p>
                            <p class="text-center">Tasa de interés referencial 9,45%</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn text-white" style="background-color: #c61617">Ver mas</button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-sm-4">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('img/bg-tipo-credito.png') }}" alt="">
                        <div class="position-absolute top-50 start-50 translate-middle w-100">
                            <h3 class="text-center fw-bold">DE CONSTRUCCIÓN</h3>
                            <p class="text-center">Construcción de una propiedad</p>
                            <p class="text-center">Tasa de interes referencial 9,45%</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn text-white" style="background-color: #c61617">Ver mas</button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-sm-4">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('img/bg-tipo-credito.png') }}" alt="">
                        <div class="position-absolute top-50 start-50 translate-middle w-100">
                            <h3 class="text-center fw-bold">VIVIENDA DE <br> INTERÉS PÚBLICO</h3>
                            <p class="text-center">Adquiera una casa nueva</p>
                            <p class="text-center">Tasa de interes referencial 9,45%</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn text-white" style="background-color: #c61617">Ver mas</button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-sm-4">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('img/bg-tipo-credito.png') }}" alt="">
                        <div class="position-absolute top-50 start-50 translate-middle w-100">
                            <h3 class="text-center fw-bold">CONSUMO</h3>
                            <p class="text-center">Financie sus gastos diversos</p>
                            <p class="text-center">Tasa de interes referencial 9,45%</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn text-white" style="background-color: #c61617">Ver mas</button>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </section>
    </section>

    <section class="container py-5">
        <section class="row">
            <article class="col-sm-4">
                <div>
                    <p>¿Cuanto cuesta la vivienda que desea comprar?</p>
                    <input type="number" class="form-control border" id="valor_propiedad" placeholder="Min. $15.000">
                </div>
            </article>
            <div class="col-sm-4">
                <div>
                    <p>¿Cuanto necesita para el crédito?</p>
                    <input type="number" class="form-control border" id="cantidad" placeholder="Min. $3.000">
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <p>Plazo de pago</p>
                    <div class="d-flex justify-content-center">
                        <span class="text-center fw-bold" id="textRange"></span>
                    </div>
                    <div class="d-flex justify-content-center">
                        <span class="mt-3">1</span>
                        <input type="range" oninput="changeValueRangePrice()" class="form-range" min="1" max="20" value="10" id="rangeAnios" step="1">
                        <span class="mt-3">20</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="row justify-content-center mt-5">
            <button class="btn w-auto text-white fw-bold" style="background-color: #c61617" onclick="calcular()">CALCULAR</button>
        </div>
    </section>

    <section class="container">
        <h2 class="text-center">Su pago mensual referencial sería:</h2>
        <section class="row w-full py-5">
            <div class="d-flex gap-4 w-100">
                <div class="text-center w-100">
                    <span style="font-size: large">$40,00</span> <br>
                    <span style="font-size: x-small">Capit + interes</span>
                </div>
                <div class="w-100 text-center">
                    <span>+</span>
                </div>
                <div class="w-100 text-center">
                    <span style="font-size: large">$0,00</span> <br>
                    <span style="font-size: x-small">Tasa de interes</span>
                </div>
                <div class="w-100 text-center">
                    <span>+</span>
                </div>
                <div class="w-100 text-center">
                    <span style="font-size: large">0</span> <br>
                    <span style="font-size: x-small">Años</span>
                </div>
                <div class="w-100 text-center">
                    <span>=</span>
                </div>
                <div class="w-100 text-center">
                    <span style="font-size: large">$0,00</span> <br>
                    <span style="font-size: x-small">Cuota mensual</span>
                </div>
            </div>
        </section>
        <section>
            <p class="px-5 text-center">El cálculo de la cuota está basado en el sistema de amortización frances e incluye gastos legales. Los resultados de esta simulación son referenciales, por tanto no constituyen una pre-aprobación del crédito ni otorgamiento del mismo</p>
        </section>
        <section class="row justify-content-center py-3">
            <p class="h4 text-center fw-bold">Convierta sus sueños en realidad hoy mismo</p>
            <button class="btn text-white w-auto" style="background-color: #c61617">EMPEZAR AHORA</button>
        </section>
    </section>

    <section class="container py-5">
        <h2 class="text-center">¿Por qué elegir Casa Crédito?</h2>
        <section class="row py-5">
            <article class="col-sm-3">
                <div class="text-center">
                    <img width="70px" src="{{ asset('img/experiencia-icon.png') }}" alt="">
                    <h3>Experiencia</h3>
                    <p class="px-5">Confiablidad y seguridad en el sector financiero</p>
                </div>
            </article>
            <article class="col-sm-3">
                <div class="text-center">
                    <img  width="70px" class="img-fluid" src="{{ asset('img/proceso-icon.png') }}" alt="">
                    <h3>Proceso Agil</h3>
                    <p class="px-5">Confiablidad y seguridad en el sector financiero</p>
                </div>
            </article>
            <article class="col-sm-3">
                <div class="text-center">
                    <img  width="70px" class="img-fluid" src="{{ asset('img/apoyo-icon.png') }}" alt="">
                    <h3>Apoyo Integral</h3>
                    <p class="px-5">Confiablidad y seguridad en el sector financiero</p>
                </div>
            </article>
            <article class="col-sm-3">
                <div class="text-center">
                    <img  width="70px" class="img-fluid" src="{{ asset('img/compromiso-icon.png') }}" alt="">
                    <h3>Compromiso</h3>
                    <p class="px-5">Confiablidad y seguridad en el sector financiero</p>
                </div>
            </article>
        </section>
    </section>

    <section style="background-color: #68676822">
        <section class="row">
            <article class="col-sm-5">
                <img class="img-fluid" src="{{ asset('img/pareja.png') }}" alt="">
            </article>
            <article class="col-sm-7 h-full d-flex justify-content-center align-items-center">
                <div class="h-full">
                    <p>LOGO</p>
                    <p class="h4 py-3 fw-bold">¿Cuáles son los pasos para realizar un crédito?</p>
                    <div class="d-flex gap-2 mb-2">
                        <span style="background-color: #c61617; color: #ffffff; width: 25px; height: 25px;" class="rounded-circle d-flex justify-content-center align-items-center">1</span>
                        <span>Revise su historial crediticio antes de solicitar un crédito</span>
                    </div>
                    <div class="d-flex gap-2 mb-2">
                        <span style="background-color: #c61617; color: #ffffff; width: 25px; height: 25px;" class="rounded-circle d-flex justify-content-center align-items-center">2</span>
                        <span>Examine su capacidad financiera actual y futura para realizar los pagos del crédito</span>
                    </div>
                    <div class="d-flex gap-2 mb-2">
                        <span style="background-color: #c61617; color: #ffffff; width: 25px; height: 25px;" class="rounded-circle d-flex justify-content-center align-items-center">3</span>
                        <span>Antes de firmar cualquier contrato, lea detenidamente y comprenda los términos y condiciones del crédito</span>
                    </div>
                    <div class="mt-4">
                        <button class="btn text-white fw-bold" style="background-color: #c61617">MAS INFORMACIÓN</button>
                    </div>
                </div>
            </article>
        </section>
    </section>
@endsection

@section('scripts')
    <script>
        const changeValueRangePrice = () => {
            let rangeInpAnios = document.getElementById('rangeAnios');
            let texto;
            rangeInpAnios.value > 1 ? texto = "años" : texto = "año";
            document.getElementById('textRange').textContent = rangeInpAnios.value + " " + texto;
        }

        const calcular = () => {
            let cantidad = document.getElementById('cantidad');
            let anios = document.getElementById('rangeAnios');
            
            if(cantidad.value == null || cantidad.value == 0 || cantidad.value == ""){
                alert('Complete el campo con un valor');
                return;
            }

            let total_interes = cantidad.value * 0.15;
            console.log(total_interes);
            let total_mas_interes = Number(total_interes) + Number(cantidad.value);
            console.log(total_mas_interes);
            let monto_mensual = total_mas_interes / (anios.value * 12);
            console.log(anios.value);

            console.log(monto_mensual.toFixed(2));
        }

        window.addEventListener('load', () => {
            document.getElementById('textRange').textContent = document.getElementById('rangeAnios').value + " años";
        })
    </script>
@endsection