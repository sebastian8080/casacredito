<div class="modal fade" id="modalEmpezarCredito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('sendlead') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #c61617">
                    <h3 class="modal-title" id="exampleModalLabel">Solicita tu crédito hoy</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <p>Completa este formulario y te contactaremos en minutos</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="name" class="text-muted mb-1" style="font-size: small">Tu nombre</label>
                                    <input class="form-control rounded-0 border-0" type="text" placeholder="Juan" name="name" id="name" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="lastname" class="text-muted mb-1" style="font-size: small">Tu apellido</label>
                                    <input class="form-control rounded-0 border-0" type="text" placeholder="Perez" name="lastname" id="lastname" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="phone" class="text-muted mb-1">Tu teléfono</label>
                                    <input class="form-control rounded-0 border-0" type="number" placeholder="Ej: +1 347-279-9864" name="phone" id="phone" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="email" class="text-muted mb-1">Tu correo</label>
                                    <input class="form-control rounded-0 border-0" type="email" placeholder="juanperez178@gmail.com" name="email" id="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-1">
                                <span class="text-muted">¿En donde necesitas el crédito?</span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <select id="selStateForm" class="form-select text-muted rounded-0 border-0" name="state" required>
                                        <option value="">Provincia</option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->name }}" data-id="{{ $state->id}}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <select id="selCityForm" class="form-select text-muted rounded-0 border-0" name="city" required>
                                        <option value="">Ciudad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        @if(Route::currentRouteName() != "web.avaluo")
                        <div class="form-group">
                            <div class="mb-1">
                                <span class="text-muted">Información del crédito</span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <select class="form-select text-muted rounded-0 border-0" name="type" required>
                                        <option value="">Tipo de Credito</option>
                                        <option value="Microcreditos">Microcreditos</option>
                                        <option value="Hipotecarios">Hipotecarios</option>
                                        <option value="De Construccion">De Construccion</option>
                                        <option value="Vivienda de Interes Público">Vivienda de Interes Público</option>
                                        <option value="De Consumo">De Consumo</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <input type="number" class="form-control rounded-0 border-0" placeholder="Monto a Solicitar" name="mount" required>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <select class="form-select text-muted rounded-0 border-0" name="type_propertie" required>
                                        <option value="">Tipo de Propiedad</option>
                                        <option value="Casas">Casas</option>
                                        <option value="Departamentos">Departamentos</option>
                                        <option value="Casas Comerciales">Casas Comerciales</option>
                                        <option value="Terrenos">Terrenos</option>
                                        <option value="Quintas">Quintas</option>
                                        <option value="Haciendas">Haciendas</option>
                                        <option value="Locales Comerciales">Locales Comerciales</option>
                                        <option value="Oficinas">Oficinas</option>
                                        <option value="Suites">Suites</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="message" class="mb-1 text-muted">Comentario</label>
                                    <textarea  id="" rows="4" class="form-control rounded-0 border-0" placeholder="Necesito un crédito [tipo de crédito] para..." name="message" id="message" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <span style="font-size: small; font-weight: 600">*Toda la información proporcionada la usaremos unicamente para brindarte la mejor asesoría adaptada a tus necesidades</span>
                        </div>
                </div>
                <div class="modal-footer d-flex justify-content-center bg-white">
                    <button type="submit" class="btn text-white rounded-pill" style="background-color: #c61617">Solicitar información</button>
                </div>
            </div>
        </form>
    </div>
</div>