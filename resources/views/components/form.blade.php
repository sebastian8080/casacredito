<div class="modal fade" id="modalEmpezarCredito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('sendlead') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #c61617">
                    <h3 class="modal-title" id="exampleModalLabel">Inicie su credito</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <p>Complete su información para tramitar su crédito</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <input class="form-control rounded-0 border-0" type="text" placeholder="Nombre" name="name" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <input class="form-control rounded-0 border-0" type="text" placeholder="Apellido" name="lastname" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <input class="form-control rounded-0 border-0" type="number" placeholder="Telefono/Celular" name="phone" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <input class="form-control rounded-0 border-0" type="email" placeholder="Correo electrónico" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
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
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <select class="form-select text-muted rounded-0 border-0" name="type" required>
                                        <option value="">Tipo de Credito</option>
                                        <option value="Microcreditos">Microcreditos</option>
                                        <option value="Hipotecarios">Hipotecarios</option>
                                        <option value="De Construccion">De Construccion</option>
                                        <option value="Vivienda de Interes Popular">Vivienda de Interes Popular</option>
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
                                    <textarea  id="" rows="4" class="form-control rounded-0 border-0" placeholder="Mensaje" name="message" required></textarea>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer d-flex justify-content-center bg-white">
                    <button type="submit" class="btn text-white rounded-pill" style="background-color: #c61617">Solicitar mi crédito</button>
                </div>
            </div>
        </form>
    </div>
</div>