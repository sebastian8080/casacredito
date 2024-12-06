@extends('layouts.web')

@section('head')
<title>Propiedades en Venta | Casa Crédito</title>
<style>
    .btn-call{
        background-color: #ffffff;
        color: #000000;
    }
    .btn-whatsapp{
        background-color: #ffffff;
        color: #000000;
    }
    .btn-call:hover{
        background-color: #C61617 !important;
        color: #ffffff !important;
    }

    .btn-whatsapp:hover{
        background-color: green !important;
        color: #ffffff !important;
    }
    .info-cards{
        padding: 2.5rem 3rem;
    }
    @media screen and (max-width: 992px){
        .info-cards{
            padding: 3.5rem 0 2rem 0;
        }
        .property_description{
            display: none;
        }
        .margin-bottom-icons{
            margin: 0px 0px 15px 0px;
        }
    }
</style>
@endsection

@section('content')
    <section class="container">
        <h1 id="dynamic-h1">Propiedades en Venta</h1>

        <form id="filterForm" class="row g-2 justify-content-center">
            <div class="col-6 col-md-2">
                <select name="property_type" id="property_type" class="form-select">
                    <option value="">Seleccione</option>
                    <option value="casas">Casas</option>
                    <option value="departamentos">Departamentos</option>
                    <option value="casas comerciales">Casas Comerciales</option>
                    <option value="locales comerciales">Locales Comerciales</option>
                </select>
            </div>
            <div class="col-6 col-md-1">
                <input type="text" id="code" name="product_code" placeholder="Código" class="form-control bg-white">
            </div>
            <div class="col-6 col-md-2">
                <select name="operation" id="operation" class="form-select">
                    <option value="">Seleccione</option>
                    <option value="venta">Venta</option>
                    <option value="renta">Renta</option>
                </select>
            </div>

            <div class="col-6 col-md-2">
                <input type="text" id="location_code" name="location_code" class="form-control" placeholder="Ubicación">
            </div>

            <div class="col-6 col-md-1">
                <input type="number" id="min_price" step="0.01" name="min_price" placeholder="Precio Mínimo" class="form-control bg-white">
            </div>
            <div class="col-6 col-md-1">
                <input type="number" id="max_price" step="0.01" name="max_price" placeholder="Precio Máximo" class="form-control bg-white">
            </div>
        </form>
        <div class="d-flex justify-content-center mt-3 gap-2">
            <button class="btn btn-danger" onclick="cleanCardsProperties();loadMoreProperties()">Buscar</button>
            <button class="btn border bg-white shadow-sm" onclick="cleanFilters()">Limpiar Filtros</button>
        </div>

        <div id="properties-list"></div>

        <div id="loading" style="text-align: center; display: none;">
            <p>Cargando propiedades...</p>
        </div>
    </section>
@endsection

@section('scripts')
<script>

    let page = 1;
    let loading = false;

    window.onscroll = function() {
        if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 500 && !loading) {
            loading = true;
            page++;
            loadMoreProperties();
        }
    };

    document.addEventListener('DOMContentLoaded', function () {
        getParams();
        loadMoreProperties();
    });

    function cleanCardsProperties(){
        document.getElementById('properties-list').innerHTML = '';
        page = 1;
    }

    function cleanFilters(){
        
        document.getElementById('title').value = '';
        document.getElementById('code').value = '';
        document.getElementById('sector').value = '';
        document.getElementById('city').value = '';
        document.getElementById('state').value = '';
        document.getElementById('min_price').value = '';
        document.getElementById('max_price').value = '';

        page = 1;

        cleanCardsProperties()
        loadMoreProperties();

    }

    function getParams(){

        // Obtener la URL de la página
        const urlPath = window.location.pathname;

        // Eliminar la parte "/propiedades/" y procesar lo que queda
        const search = urlPath.replace('/propiedades', '');

        // Reemplazar "-en-" por "-" para que coincida con el formato que estás usando
        let cleanedSearch = search.replace(/en-/g, '');

        // Dividir la búsqueda por el guion "-" para separar los términos
        let searchTerms = cleanedSearch ? cleanedSearch.split('-') : [];

        // Definir variables para almacenar los resultados
        let propertyType = null;
        let operationType = null;
        let location = null;

        // Listas de mapeo para detectar los términos
        const propertyTypes = ['casas', 'departamentos', 'terrenos', 'quintas', 'haciendas', 'casas comerciales', 'locales comerciales'];
        const operationTypes = ['venta', 'renta', 'alquiler'];

        // Lista de propiedades de dos palabras
        const twoWordProperties = ['casas comerciales', 'locales comerciales'];

        // Verificar si la búsqueda contiene un tipo de propiedad de dos palabras
        for (let twoWordProperty of twoWordProperties) {
            if (cleanedSearch.includes(twoWordProperty.replace(' ', '-'))) {
                propertyType = twoWordProperty;
                cleanedSearch = cleanedSearch.replace(twoWordProperty.replace(' ', '-'), '');
                break;
            }
        }

        // Volver a dividir la búsqueda después de haber quitado el tipo de propiedad de dos palabras
        searchTerms = cleanedSearch ? cleanedSearch.split('-') : [];

        // Procesar cada término de búsqueda
        for (let term of searchTerms) {
            let lowerTerm = term.replace('/', '').toLowerCase();
            if (!propertyType && propertyTypes.includes(lowerTerm)) {
                propertyType = lowerTerm;
            } else if (operationTypes.includes(lowerTerm)) {
                operationType = lowerTerm;
            } else if (term.trim() !== '') {
                location = location ? location + ' ' + term : term;
            }
        }

        // Asignar los valores a los inputs del formulario
        if (propertyType) {
            document.getElementById('property_type').value = propertyType;
        }
        if (operationType) {
            document.getElementById('operation').value = operationType;
        }
        if (location) {
            document.getElementById('location_code').value = location.replace('/', '');
        }

    }

    function buildUrl(propertyType, operation, locationCode) {

        const baseUrl = "/propiedades";
        const parts = [];

        if (propertyType && propertyType.trim() !== '') {
            parts.push(propertyType.replace(/\s+/g, '-').toLowerCase());
        }
        if (operation && operation.trim() !== '') {
            parts.push(`en-${operation.replace(/\s+/g, '-').toLowerCase()}`);
        }
        if (locationCode && locationCode.trim() !== '') {
            parts.push(locationCode.replace(/\s+/g, '-').toLowerCase());
        }

        // Construir la URL con partes dinámicas
        let finalUrl = baseUrl + (parts.length > 0 ? `/${parts.join("-")}` : "");

        // Prevenir duplicados
        finalUrl = finalUrl.replace(/\/propiedades\/propiedades/g, "/propiedades");

        // Limpiar barras redundantes
        finalUrl = finalUrl.replace(/\/+/g, "/");

        return finalUrl;

    }

    function generateMetaData(url) {
        const h1Element = document.querySelector("#dynamic-h1"); // Asegúrate de tener un <h1 id="dynamic-h1"></h1> en tu HTML

        // Limpiar la URL para extraer los términos relevantes
        let cleanedURL = url.replace('/propiedades', '').replace(/-/g, ' ').replace(/^\//, '').trim();

        // Si no hay parámetros en la URL, usa el texto por defecto
        if (cleanedURL === "") {
            const defaultText = "Propiedades de venta o renta en Casa Crédito";
            h1Element.textContent = defaultText;
            document.title = defaultText;
            return;
        }

        // Dividir los términos de búsqueda
        const termsURL = cleanedURL.split(' ');

        // Listas para verificar los términos
        const propertyTypes = ['casas', 'departamentos', 'terrenos', 'quintas', 'haciendas', 'casas comerciales', 'locales comerciales'];
        const operationTypes = ['venta', 'renta', 'alquiler'];
        const locations = ['cuenca']; // Puedes agregar más ciudades aquí

        // Variables para identificar los términos en la URL
        let propertyType = termsURL.find(term => propertyTypes.includes(term));
        let operationType = termsURL.find(term => operationTypes.includes(term));
        let location = termsURL.find(term => locations.includes(term));

        // Generar el texto dinámico
        let dynamicText = "";

        if (propertyType && operationType && location) {
            // Caso: Tipo de propiedad, operación y ubicación
            dynamicText = `${capitalize(propertyType)} en ${capitalize(operationType)} en ${capitalize(location)}`;
        } else if (propertyType && operationType) {
            // Caso: Tipo de propiedad y operación
            dynamicText = `${capitalize(propertyType)} en ${capitalize(operationType)} - Casa Crédito`;
        } else if (operationType && location) {
            // Caso: Operación y ubicación
            dynamicText = `Propiedades en ${capitalize(operationType)} en ${capitalize(location)} - Casa Crédito`;
        } else if (propertyType && location) {
            // Caso: Tipo de propiedad y ubicación
            dynamicText = `${capitalize(propertyType)} ubicadas en ${capitalize(location)} - Casa Crédito`;
        } else if (propertyType) {
            // Caso: Solo tipo de propiedad
            dynamicText = `${capitalize(propertyType)} disponibles en Casa Crédito`;
        } else if (operationType) {
            // Caso: Solo operación
            dynamicText = `Propiedades en ${capitalize(operationType)} en Casa Crédito`;
        } else if (location) {
            // Caso: Solo ubicación
            dynamicText = `Propiedades ubicadas en ${capitalize(location)} - Casa Crédito`;
        }

        // Asignar el texto generado al H1 y al título
        h1Element.textContent = dynamicText;
        document.title = dynamicText;
    }

    // Función para capitalizar la primera letra de cada palabra
    function capitalize(text) {
        return text.replace(/\b\w/g, char => char.toUpperCase());
    }

    function loadMoreProperties() {

            // Obtener los valores
            const propertyType = document.getElementById('property_type')?.value.trim().toLowerCase() || '';
            const selectedOperation = document.getElementById('operation');
            const location = document.getElementById('location_code')?.value.trim().toLowerCase() || '';

            let operationType = selectedOperation ? selectedOperation.value.trim().toLowerCase() : '';

            const newUrl = buildUrl(propertyType, operationType, location);
    
            // Actualizar la URL sin recargar la página
            window.history.pushState(null, "", newUrl); 

            const filterForm = document.getElementById('filterForm');

            const formData = new FormData(filterForm);
            const queryString = new URLSearchParams(formData).toString();

            const loadingIndicator = document.getElementById('loading');
            loadingIndicator.style.display = 'block';


            fetch(`/api/list-activated-properties?page=${page}&${queryString}`, {
                headers: {
                    'api-key': 'Cc2022*@Notify'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.data.length > 0) {
                    loading = true;
                    const propertiesList = document.getElementById('properties-list');

                    //aqui debo cambiar el h1 y el title

                    generateMetaData(newUrl);

                    data.data.forEach(propertie => {
                        // Construcción manual del HTML
                        const images = propertie.images ? propertie.images.split('|') : [];
                        const firstImage = images.length > 0 ? images[0] : null;

                        const propertyHTML = `
                            <section class="row my-4 border rounded shadow-sm">
                                <article class="col-sm-4 m-0 p-0">
                                    <a href="https://casacredito.com/propiedad/${propertie.slug}" class="d-flex text-dark" style="text-decoration: none">
                                        ${firstImage ? `<img width="100%" height="100%" src="https://grupohousing.com/uploads/listing/600/${firstImage}" alt="${propertie.listing_title}">` : `<p>No image available.</p>`}
                                    </a>
                                </article>
                                <article class="col-sm-8 position-relative d-flex align-items-center">
                                    <div class="info-cards">
                                        <h2>${propertie.address || ''}, ${propertie.city || ''}, ${propertie.state || ''}</h2>
                                        <a href="http://127.0.0.1:8000/propiedad/${propertie.slug}" class="d-flex text-dark" style="text-decoration: none">
                                            <h3>${propertie.listing_title || ''}</h3>
                                        </a>
                                        <p class="property_description">${propertie.meta_description || ''}</p>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-7 d-flex justify-content-between align-items-center h-100 margin-bottom-icons">
                                                ${propertie.bedroom > 0 ? 
                                                `<div class="text-center w-100 border-end">
                                                    <img width="60px" src="{{ asset('img/dormitorios.webp') }}" alt="Icono de Dormitorios"><br>
                                                    <span class="fw-bold">${propertie.bedroom} Hab.</span>
                                                </div>` : ''}
                                                ${propertie.bathroom > 0 ? 
                                                `<div class="text-center w-100 border-end">
                                                    <img width="60px" src="{{ asset('img/banio.webp') }}" alt="Icono de Baño"><br>
                                                    <span class="fw-bold">${propertie.bathroom} ${propertie.bathroom > 1 ? 'Baños' : 'Baño'}</span>
                                                </div>` : ''}
                                                ${propertie.garage > 0 ? 
                                                `<div class="text-center w-100 border-end">
                                                    <img width="60px" src="{{ asset('img/estacionamiento.webp') }}" alt="Icono de Parqueadero"><br>
                                                    <span class="fw-bold">${propertie.garage} Garaje</span>
                                                </div>` : ''}
                                                ${propertie.construction_area > 0 ? 
                                                `<div class="text-center w-100">
                                                    <img width="60px" src="{{ asset('img/area.webp') }}" alt="Icono de Area"><br>
                                                    <span class="fw-bold">${propertie.construction_area} m<sup>2</sup></span>
                                                </div>` : ''}
                                            </div>
                                            <div class="col-sm-5 d-flex justify-content-between align-items-center gap-2">
                                                <div class="w-100">
                                                    <a class="btn w-100 btn-block rounded-pill btn-call border" href="tel:593983849073">Llamar</a>
                                                </div>
                                                <div class="w-100">
                                                    <a class="btn w-100 btn-block rounded-pill btn-whatsapp border" href="https://wa.me/593983849073?text=Hola%2C%20Grupo%20Housing%20estoy%20interesado%20en%20comprar%20esta%20propiedad%3A%20${propertie.product_code || ''}">WhatsApp</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="position-absolute top-0 end-0 text-white px-3 py-2" style="background-color: #C61617; border-radius: 0px 5px 0px 0px; font-size: large">
                                        COD: ${propertie.product_code || ''}
                                    </span>
                                </article>
                            </section>
                        `;
                        propertiesList.innerHTML += propertyHTML;
                    });
                    loading = false;
                    loadingIndicator.style.display = 'none';
                } else {
                    loadingIndicator.innerHTML = '<p>No hay más propiedades para mostrar.</p>';
                }
            })
            .catch(error => {
                console.error('Error loading more properties:', error);
                loadingIndicator.style.display = 'none';
            });
        }
</script>
@endsection