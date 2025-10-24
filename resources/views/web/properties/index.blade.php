@extends('layouts.web')

@section('head')
<title>Propiedades en Venta | Casa Crédito</title>
<meta name="description" content="">
<meta name="robots" content="index,follow">
<link rel="cannonical" href="">
<style>
    body, html{
        font-family: 'Montserrat' !important;
    }
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
    .property_description{
        font-size: 15px;
        font-weight: 400;
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
<!-- Event snippet for WhatsApp Inmobiliaria Casa Crédito conversion page --> 
{{-- <script> gtag('event', 'conversion', { 'send_to': 'AW-11250334200/zpfACK3l9_IZEPjzyfQp', 'value': 1.0, 'currency': 'USD' }); </script> --}}
@endsection

@section('content')
    <section class="container" style="padding: 100px 0 0 0">
        <h1 id="dynamic-h1" class="mt-4"></h1>
        <p id="dynamic-text"></p>

        <div class="bg-white py-4 mt-4">
            <form id="filterForm" class="row g-2 justify-content-center">
                <div class="col-6 col-md-2">
                    <select name="property_type" id="property_type" class="form-select bg-light">
                        <option value="">Seleccione</option>
                        <option value="casas">Casas</option>
                        <option value="departamentos">Departamentos</option>
                        <option value="casas comerciales">Casas Comerciales</option>
                        <option value="terrenos">Terrenos</option>
                        <option value="quintas">Quintas</option>
                        <option value="haciendas">Haciendas</option>
                        <option value="locales comerciales">Locales Comerciales</option>
                        <option value="oficinas">Oficinas</option>
                        <option value="suites">Suites</option>
                        <option value="edificios">Edificio</option>
                        <option value="hoteles">Hoteles</option>
                        <option value="bodegas">Bodegas</option>
                        <option value="naves industriales">Naves Industriales</option>
                    </select>
                </div>
                <div class="col-6 col-md-1">
                    <input type="text" id="code" name="product_code" placeholder="Código" class="form-control bg-light">
                </div>
                <div class="col-6 col-md-2">
                    <select name="operation" id="operation" class="form-select bg-light">
                        <option value="">Seleccione</option>
                        <option value="venta">Venta</option>
                        <option value="renta">Renta</option>
                    </select>
                </div>
    
                <div class="col-6 col-md-2">
                    <input type="text" id="location_code" name="location_code" class="form-control bg-light" placeholder="Ubicación">
                </div>
    
                <div class="col-6 col-md-1">
                    <input type="number" id="min_price" step="0.01" name="min_price" placeholder="Precio Mínimo" class="form-control bg-light">
                </div>
                <div class="col-6 col-md-1">
                    <input type="number" id="max_price" step="0.01" name="max_price" placeholder="Precio Máximo" class="form-control bg-light">
                </div>
            </form>
            <div class="d-flex justify-content-center pt-3 gap-2 w-100">
                <button class="btn btn-danger" onclick="cleanCardsProperties();loadMoreProperties()">Buscar</button>
                <button class="btn border bg-white shadow-sm" onclick="cleanFilters()">Limpiar Filtros</button>
            </div>
        </div>

        <div id="properties-list"></div>

        <div id="loading" style="text-align: center; display: none;">
            <p>Cargando propiedades...</p>
        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination d-flex justify-content-center">
                <li class="page-item disabled" id="prev-page-btn">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item" id="next-page-btn">
                    <a class="page-link" href="#">Siguiente</a>
                </li>
            </ul>
        </nav>

    </section>
@endsection

@section('scripts')
<script>

    let page = 1;
    let loading = false;

    const prevBtn = document.getElementById('prev-page-btn');
    const nextBtn = document.getElementById('next-page-btn');

    prevBtn.addEventListener('click', function(event) {
    event.preventDefault();
    if (!prevBtn.classList.contains('disabled')) {
        page--;
        loadMoreProperties();
    }
    });

    nextBtn.addEventListener('click', function(event) {
    event.preventDefault();
    if (!nextBtn.classList.contains('disabled')) {
        page++;
        loadMoreProperties();
    }
    });

    document.addEventListener('DOMContentLoaded', function () {
        getParams();
        loadMoreProperties();
    });

    function cleanCardsProperties(){
        document.getElementById('properties-list').innerHTML = '';
        page = 1;
    }

    function cleanFilters(){
        
        document.getElementById('property_type').value = '';
        document.getElementById('code').value = '';
        document.getElementById('operation').value = '';
        document.getElementById('location_code').value = '';
        document.getElementById('min_price').value = '';
        document.getElementById('max_price').value = '';

        page = 1;

        cleanCardsProperties()
        loadMoreProperties();

    }

    function getParams() {
        //debugger;
        const urlPath = window.location.pathname;
        let search = decodeURIComponent(urlPath.replace('/propiedades/', ''));

        let propertyType = null;
        let operationType = null;
        let location = null;

        const propertyTypes = ['casas', 'departamentos', 'terrenos', 'quintas', 'haciendas', 'oficinas', 'suites', 'edificios', 'hoteles', 'bodegas'];
        const operationTypes = ['venta', 'renta', 'alquiler'];
        const twoWordProperties = ['casas comerciales', 'locales comerciales', 'naves industriales'];

        // Buscar propiedades de dos palabras
        for (let twoWordProperty of twoWordProperties) {
            let formattedProperty = twoWordProperty.replace(/\s+/g, '-');
            if (search.includes(formattedProperty)) {
                propertyType = twoWordProperty;
                search = search.replace(formattedProperty, '');
                break;
            }
        }

        let searchTerms = search ? search.split('-') : [];
        let enEncontrado = false; // Variable para controlar si encontramos "en"

        for (let term of searchTerms) {
            let lowerTerm = term.replace('/', '').toLowerCase();

            if (!propertyType && propertyTypes.includes(lowerTerm)) {
                propertyType = lowerTerm;
            } else if (operationTypes.includes(lowerTerm)) {
                operationType = lowerTerm;
            } else if (lowerTerm === 'en') {
                enEncontrado = true; // Marcamos que encontramos "en"
            } else if (enEncontrado) {
                // Si encontramos "en", los siguientes términos son la ubicación
                location = location ? location + ' ' + term : term;
            }
        }

        // Asignar valores a los inputs
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
        //debugger;
        const baseUrl = "/propiedades";
        let parts = [];

        // Mantener el orden correcto en la URL
        if (propertyType && propertyType.trim() !== '') {
            parts.push(propertyType.replace(/\s+/g, '-').toLowerCase());
        }

        if (operation && operation.trim() !== '') {
            parts.push(`en-${operation.replace(/\s+/g, '-').toLowerCase()}`);
        }

        if (locationCode && locationCode.trim() !== '') {
            parts.push(`en-${locationCode.replace(/\s+/g, '-').toLowerCase()}`);
        }

        // Unir los elementos en el orden correcto
        let finalUrl = baseUrl;
        if (parts.length > 0) {
            finalUrl += "/" + parts.join("-");
        }

        // Limpiar cualquier duplicado adicional de "/propiedades/propiedades"
        finalUrl = finalUrl.replace(/\/propiedades\/propiedades/g, "/propiedades");

        // Prevenir múltiples slashes "///"
        finalUrl = finalUrl.replace(/\/+/g, "/");

        updateCanonicalURL(finalUrl);

        return finalUrl;
    }

    function updateCanonicalURL(url) {
        let canonicalLink = document.querySelector('link[rel="canonical"]');

        if (!canonicalLink) {
            canonicalLink = document.createElement('link');
            canonicalLink.setAttribute('rel', 'canonical');
            document.head.appendChild(canonicalLink);
        }

        // Asegúrate de usar la URL completa, incluyendo el dominio
        const fullURL = window.location.origin + url;
        canonicalLink.setAttribute('href', fullURL);
    }

    // function generateMetaData(url) {
    //     const h1Element = document.querySelector("#dynamic-h1"); // Asegúrate de tener un <h1 id="dynamic-h1"></h1> en tu HTML

    //     // Limpiar la URL para extraer los términos relevantes
    //     let cleanedURL = url.replace('/propiedades', '').replace(/-/g, ' ').replace(/^\//, '').trim();

    //     // Si no hay parámetros en la URL, usa el texto por defecto
    //     if (cleanedURL === "") {
    //         const defaultText = "Propiedades de venta o renta en Casa Crédito";
    //         h1Element.textContent = defaultText;
    //         document.title = defaultText;
    //         return;
    //     }

    //     // Dividir los términos de búsqueda
    //     const termsURL = cleanedURL.split(' ');

    //     // Listas para verificar los términos
    //     const propertyTypes = ['casas', 'departamentos', 'terrenos', 'quintas', 'haciendas', 'oficinas', 'suites', 'edificios', 'hoteles', 'bodegas', 'casas comerciales', 'locales comerciales', 'naves industriales'];
    //     const operationTypes = ['venta', 'renta', 'alquiler'];

    //     // Variables para identificar los términos en la URL
    //     let propertyType = termsURL.find(term => propertyTypes.includes(term));
    //     let operationType = termsURL.find(term => operationTypes.includes(term));
    //     //let location = termsURL.find(term => locations.includes(term));

    //     // Identificar el término que no está en propertyTypes, operationTypes ni sea "en"
    //     let location = termsURL.find(term => 
    //         !propertyTypes.includes(term) && 
    //         !operationTypes.includes(term) && 
    //         term.toLowerCase() !== 'en' // Excluye el término "en"
    //     );

    //     // Resultado
    //     console.log({ propertyType, operationType, location });

    //     // Generar el texto dinámico
    //     let dynamicText = "";
        
    //     let operationTypeDymanic = "";
    //     let propertyTypeDymanic = "";

    //     let dynamicHeadingText = "";

    //     console.log('Antes de contenido dinamico');

    //     if (propertyType && operationType && location) {
    //         // Caso: Tipo de propiedad, operación y ubicación
    //         dynamicText = `${capitalize(propertyType)} en ${capitalize(operationType)} en ${capitalize(location)}`;

    //         propertyTypeDymanic = pluralToSingular(propertyType);

    //         operationType == "venta" ? operationTypeDymanic = "comprar" : operationTypeDymanic = "rentar";

    //         dynamicHeadingText = `¿Por qué ${operationTypeDymanic} una ${propertyTypeDymanic} en ${capitalize(location)}`;
            
    //         console.log('Entra aqui');

    //         console.log(dynamicHeadingText);

    //     } else if (propertyType && operationType) {
    //         // Caso: Tipo de propiedad y operación
    //         dynamicText = `${capitalize(propertyType)} en ${capitalize(operationType)} - Casa Crédito`;
    //     } else if (operationType && location) {
    //         // Caso: Operación y ubicación
    //         dynamicText = `Propiedades en ${capitalize(operationType)} en ${capitalize(location)} - Casa Crédito`;
    //     } else if (propertyType && location) {
    //         // Caso: Tipo de propiedad y ubicación
    //         dynamicText = `${capitalize(propertyType)} ubicadas en ${capitalize(location)} - Casa Crédito`;
    //     } else if (propertyType) {
    //         // Caso: Solo tipo de propiedad
    //         dynamicText = `${capitalize(propertyType)} disponibles en Casa Crédito`;
    //     } else if (operationType) {
    //         // Caso: Solo operación
    //         dynamicText = `Propiedades en ${capitalize(operationType)} en Casa Crédito`;
    //     } else if (location) {
    //         // Caso: Solo ubicación
    //         dynamicText = `Propiedades ubicadas en ${capitalize(location)} - Casa Crédito`;
    //     }

    //     // Asignar el texto generado al H1 y al título
    //     h1Element.textContent = dynamicText;
    //     document.title = dynamicText;
    // }

    function generateMetaData(url, total) {
        const h1Element = document.querySelector("#dynamic-h1");
        if (!h1Element) return;

        let cleanedURL = url.replace('/propiedades', '').replace(/-/g, ' ').replace(/^\//, '').trim();
        const defaultText = `Contamos con ${total} propiedades en venta y renta`;

        if (cleanedURL === "") {
            h1Element.textContent = defaultText;
            document.title = `Explora nuestras ${total} propiedades en venta y renta`;
            updateMetaDescription(`Descubre nuestra amplia selección de ${total} propiedades en venta y renta. Encuentra la casa, departamento o terreno perfecto para ti con Casa Crédito.`);
            return;
        }

        // Listas de términos clave
        const propertyTypes = [
            'casas comerciales', 'locales comerciales', 'naves industriales', // Términos compuestos primero
            'casas', 'departamentos', 'terrenos', 'quintas', 'haciendas', 'oficinas',
            'suites', 'edificios', 'hoteles', 'bodegas'
        ];

        const operationTypes = ['venta', 'renta', 'alquiler'];

        // Encontrar el tipo de propiedad (priorizando términos compuestos)
        let propertyType = propertyTypes.find(type => cleanedURL.includes(type));

        // Encontrar el tipo de operación
        let operationType = operationTypes.find(type => cleanedURL.includes(type));

        // Identificar la ubicación
        let location = "";
        if (propertyType) {
            location = cleanedURL.replace(propertyType, '').trim();
        }
        if (operationType) {
            location = location.replace(operationType, '').trim();
        }

        // Eliminar "en" como palabra separada
        location = location.split(' ').filter(word => word.toLowerCase() !== 'en').join(' ').trim();

        // Generar los textos dinámicos
        let dynamicText = "";
        let titleText = "";
        let metaDescriptionText = "";

        if (propertyType && operationType && location) {
            dynamicText = `${total} ${capitalize(propertyType)} en ${capitalize(operationType)} en ${capitalize(location)}`;
            titleText = `${total} ${capitalize(propertyType)} en ${capitalize(operationType)} en ${capitalize(location)} | Encuentra tu Hogar`;
            metaDescriptionText = `Encuentra las mejores ${total} ${propertyType} en ${operationType} en ${location}. Descubre propiedades exclusivas y encuentra tu hogar ideal con Casa Crédito.`;
        } else if (propertyType && operationType) {
            dynamicText = `${total} ${capitalize(propertyType)} en ${capitalize(operationType)}`;
            titleText = `${total} ${capitalize(propertyType)} en ${capitalize(operationType)} | Tu Próxima Inversión`;
            metaDescriptionText = `Explora nuestra selección de ${total} ${propertyType} en ${operationType}. Encuentra la propiedad perfecta para ti con Casa Crédito y haz tu mejor inversión.`;
        } else if (operationType && location) {
            dynamicText = `${total} propiedades en ${capitalize(operationType)} en ${capitalize(location)}`;
            titleText = `${total} propiedades en ${capitalize(operationType)} en ${capitalize(location)} | Oportunidades Únicas`;
            metaDescriptionText = `Descubre nuestras ${total} propiedades en ${capitalize(operationType)} en ${capitalize(location)}. Encuentra la opción ideal para ti y tu familia con Casa Crédito.`;
        } else if (propertyType && location) {
            dynamicText = `${total} ${capitalize(propertyType)} en ${capitalize(location)}`;
            titleText = `${total} ${capitalize(propertyType)} en ${capitalize(location)} | Tu Nuevo Comienzo`;
            metaDescriptionText = `Encuentra ${total} ${propertyType} en ubicaciones privilegiadas en ${location}. Descubre propiedades exclusivas y comienza una nueva etapa con Casa Crédito.`;
        } else if (propertyType) {
            dynamicText = `${total} ${capitalize(propertyType)} disponibles`;
            titleText = `${total} ${capitalize(propertyType)} | Encuentra tu Espacio Ideal`;
            metaDescriptionText = `Explora nuestra amplia gama de ${total} ${propertyType} disponibles. Encuentra la propiedad perfecta para ti y tu familia con Casa Crédito.`;
        } else if (operationType) {
            dynamicText = `${total} propiedades en ${capitalize(operationType)}`;
            titleText = `${total} propiedades en ${capitalize(operationType)} | Tu Mejor Opción`;
            metaDescriptionText = `Descubre nuestras ${total} propiedades en ${capitalize(operationType)} y encuentra la mejor opción para ti. Explora nuestras ofertas exclusivas con Casa Crédito.`;
        } else if (location) {
            dynamicText = `${total} propiedades en ${capitalize(location)}`;
            titleText = `${total} propiedades en ${capitalize(location)} | Encuentra tu Lugar`;
            metaDescriptionText = `Descubre estas ${total} propiedades exclusivas en ${capitalize(location)}. Encuentra el lugar perfecto para ti y tu familia con Casa Crédito.`;
        }

        // Aplicar los valores al DOM
        h1Element.textContent = dynamicText;
        document.title = titleText.substring(0, 60);
        updateMetaDescription(metaDescriptionText.substring(0, 155));
    }

    // Función auxiliar para actualizar la meta descripción si existe
    function updateMetaDescription(content) {
        const metaDescription = document.querySelector('meta[name="description"]');
        const dynamicTextElement = document.querySelector("#dynamic-text");

        if (metaDescription) {
            metaDescription.setAttribute("content", content);
        }

        if (dynamicTextElement) {
            dynamicTextElement.textContent = content;
        }
    }

    // Función auxiliar para capitalizar palabras
    function capitalize(str) {
        return str.replace(/\b\w/g, char => char.toUpperCase());
    }

    function capitalizeFirstLetter(string) {
        if (!string) {
            return ""; // Devuelve una cadena vacía si el string es nulo o indefinido
        }
        return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
    }

    function pluralToSingular(word) {
        if (word.endsWith('es') && word.length > 2) {
            return word.slice(0, -2); // Ejemplo: "casas" -> "casa"
        } else if (word.endsWith('s') && word.length > 1) {
            return word.slice(0, -1); // Ejemplo: "jardines" -> "jardín"
        }
        return word; // Si no cumple con las reglas, retorna la palabra original
    }

    // Función para capitalizar la primera letra de cada palabra
    // function capitalize(text) {
    //     return text.replace(/\b\w/g, char => char.toUpperCase());
    // }

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

            prevBtn.classList.remove('disabled');
            nextBtn.classList.remove('disabled');

            fetch(`/api/list-activated-properties?page=${page}&${queryString}`, {
                headers: {
                    'api-key': 'Cc2022*@Notify'
                }
            })
            .then(response => response.json())
            .then(data => {

                if (page === 1) {
                    prevBtn.classList.add('disabled');
                }

                if (page === Math.ceil(data.total / data.per_page)) {
                    nextBtn.classList.add('disabled');
                }

                if (data.data.length > 0) {
                    loading = true;
                    const propertiesList = document.getElementById('properties-list');

                    propertiesList.innerHTML = ""; //Limpiando html de las propiedades

                    //Cambiando h1 y title
                    generateMetaData(newUrl, data.total);

                    data.data.forEach(propertie => {
                        // Construcción manual del HTML
                        const images = propertie.images ? propertie.images.split('|') : [];
                        const firstImage = images.length > 0 ? images[0] : null;
                        let title = capitalizeFirstLetter(propertie.listing_title);
                        let description = capitalizeFirstLetter(propertie.meta_description);

                        const propertyHTML = `
                            <section class="row my-4 border rounded shadow-sm">
                                <article class="col-sm-4 m-0 p-0">
                                    <a href="https://casacredito.com/propiedad/${propertie.slug}" class="d-flex text-dark" style="text-decoration: none">
                                        ${firstImage ? `<img width="100%" height="100%" src="https://grupohousing.com/uploads/listing/600/${firstImage}" alt="${propertie.listing_title}">` : `<p>No image available.</p>`}
                                    </a>
                                </article>
                                <article class="col-sm-8 position-relative d-flex align-items-center">
                                    <div class="info-cards">
                                        <h2>${
                                        (() => {
                                            const address = (propertie.address || '').trim();
                                            const city = (propertie.city || '').trim();
                                            const state = (propertie.state || '').trim();

                                            const cap = str => str.replace(/\b\w/g, c => c.toUpperCase()).toLowerCase().replace(/(^|\s)\S/g, c => c.toUpperCase());

                                            if (address.includes(',')) {
                                            return address
                                                .split(',')
                                                .map(p => cap(p.trim()))
                                                .join(', ');
                                            }

                                            const parts = [address, city, state].filter(Boolean).map(cap);
                                            return parts.join(', ');
                                        })()
                                        }</h2>
                                        <a href="/propiedad/${propertie.slug}" class="d-flex text-dark" style="text-decoration: none">
                                            <h3>${title || ''}</h3>
                                        </a>
                                        <h4 class="property_description">${description || ''}</h4>
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
                                                    <a class="btn w-100 btn-block rounded-pill btn-call border" href="tel:+593995265213">Llamar</a>
                                                </div>
                                                <div class="w-100">
                                                    <a class="btn w-100 btn-block rounded-pill btn-whatsapp border" href="https://wa.me/593995265213?text=Hola%2C%20Casa%20Credito%20estoy%20interesado%20en%20comprar%20esta%20propiedad%3A%20${propertie.product_code || ''}">WhatsApp</a>
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