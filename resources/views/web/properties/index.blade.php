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
        <h1>Propiedades en Venta</h1>

        <form id="filterForm" class="row g-2 justify-content-center">
            <div class="col-6 col-md-2">
                <input type="text" id="title" name="listing_title" placeholder="Título" class="form-control bg-white">
            </div>
            <div class="col-6 col-md-1">
                <input type="text" id="code" name="product_code" placeholder="Código" class="form-control bg-white">
            </div>
            <div class="col-6 col-md-2">
                <input type="text" id="state" name="state" placeholder="Estado" class="form-control bg-white">
            </div>
            <div class="col-6 col-md-2">
                <input type="text" id="city" name="city" placeholder="Ciudad" class="form-control bg-white">
            </div>
            <div class="col-6 col-md-2">
                <input type="text" id="sector" name="sector" placeholder="Sector" class="form-control bg-white">
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

    function loadMoreProperties() {

            const filterForm = document.getElementById('filterForm');

            const formData = new FormData(filterForm);
            const queryString = new URLSearchParams(formData).toString();

            const loadingIndicator = document.getElementById('loading');
            loadingIndicator.style.display = 'block';

            fetch(`https://grupohousing.com/api/list-activated-properties?page=${page}&${queryString}`, {
                headers: {
                    'api-key': 'Cc2022*@Notify'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.data.length > 0) {
                    loading = true;
                    const propertiesList = document.getElementById('properties-list');
                    data.data.forEach(propertie => {
                        // Construcción manual del HTML
                        const images = propertie.images ? propertie.images.split('|') : [];
                        const firstImage = images.length > 0 ? images[0] : null;

                        const propertyHTML = `
                            <section class="row my-4 border rounded shadow-sm">
                                <article class="col-sm-4 m-0 p-0">
                                    <a href="http://127.0.0.1:8000/propiedad/${propertie.slug}" class="d-flex text-dark" style="text-decoration: none">
                                        ${firstImage ? `<img width="100%" height="100%" src="http://127.0.0.1:8001/uploads/listing/600/${firstImage}" alt="First Image">` : `<p>No image available.</p>`}
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