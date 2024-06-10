<div>
    <section class="container py-5" id="calculadora">
        <h2 class="text-center" style="font-family: 'Bitter', 'serif'; font-style: italic; font-weight: 600"><span style="color: #676667">Calcule su</span> <span style="color: #c61617">cuota mensual</span></h2>
        <section class="row justify-content-center">
            <section class="text-center py-5">
                <article>
                    <h2>Elija el tipo de crédito que se ajusta a sus necesidades</h2>
                    <div class="d-flex justify-content-center mt-5">
                        <select id="selTypeCredit" class="form-select w-50 rounded-pill px-5 py-2" style="font-size: 22px; color: gray;">
                            <option value="">Selecciona un tipo de crédito</option>
                            <option value="1">Microcreditos</option>
                            <option value="2">Hipotecarios</option>
                            <option value="3">De Construccion</option>
                            <option value="4">Vivienda de Interes Público</option>
                            <option value="5">De Consumo</option>
                        </select>
                    </div>
                </article>
            </section>
            <article class="col-sm-4 d-none mb-3" id="sectionPropertyValue">
                <div>
                    <p>¿Cuanto cuesta la vivienda que desea comprar?</p>
                    <input type="number" class="form-control border-0" style="background-color: #F3F3F3 !important" id="valor_propiedad" placeholder="Min. $15.000">
                </div>
            </article>
            <div class="col-sm-4 mb-3">
                <div>
                    <p>¿Cuanto necesita para el crédito?</p>
                    <input type="number" class="form-control border-0" style="background-color: #F3F3F3 !important" id="cantidad" placeholder="Min. $3.000">
                </div>
            </div>
            <div class="col-sm-4 mb-3">
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
            <button class="btn w-auto text-white fw-bold rounded-pill" style="background-color: #c61617" onclick="calcular()">CALCULAR</button>
        </div>
    </section>
    
    <section style="background-color: #F3F3F3">
        <section class="container py-5">
            <h2 style="font-family: 'Bitter', 'serif'; font-weight: 600; color: #676667" class="text-center">Su pago mensual referencial sería:</h2>
            <section class="row w-full py-5">
                <div class="d-flex gap-4 w-100">
                    <div class="text-center w-100">
                        <span id="spanCapital" style="font-size: large">$0,00</span> <br>
                        <span style="font-size: x-small">Capital</span>
                    </div>
                    <div class="w-100 text-center">
                        <span>+</span>
                    </div>
                    <div class="w-100 text-center">
                        <span id="spanInteres" style="font-size: large">$0,00</span> <br>
                        <span style="font-size: x-small">Tasa de interes</span>
                    </div>
                    <div class="w-100 text-center">
                        <span>/</span>
                    </div>
                    <div class="w-100 text-center">
                        <span id="spanAnios" style="font-size: large">0</span> <br>
                        <span style="font-size: x-small">Años</span>
                    </div>
                    <div class="w-100 text-center">
                        <span>=</span>
                    </div>
                    <div class="w-100 text-center">
                        <span id="spanCuota" style="font-size: large">$0,00</span> <br>
                        <span style="font-size: x-small">Cuota mensual</span>
                    </div>
                </div>
            </section>
            <section>
                <p class="px-5 text-center">El cálculo de la cuota está basado en el sistema de amortización frances e incluye gastos legales. Los resultados de esta simulación son referenciales, por tanto no constituyen una pre-aprobación del crédito ni otorgamiento del mismo</p>
            </section>
            <section class="row justify-content-center py-3">
                <p style="font-family: 'Bitter', 'serif'; font-style: italic; color: #676667" class="h4 text-center fw-bold pb-4">Convierta sus sueños en realidad hoy mismo</p>
                <button class="btn text-white w-auto rounded-pill px-4 py-2" style="background-color: #c61617; font-size: 1.3rem" data-bs-toggle="modal" data-bs-target="#modalEmpezarCredito">EMPEZAR AHORA</button>
            </section>
        </section>
    </section>
</div>

<script>
    let selTipoCredito = document.getElementById('selTypeCredit');

    //variables para mostrar los valores calculados
    let spanCapital = document.getElementById('spanCapital');
    let spanInteres = document.getElementById('spanInteres');
    let spanAnios = document.getElementById('spanAnios');
    let spanCuota = document.getElementById('spanCuota');

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