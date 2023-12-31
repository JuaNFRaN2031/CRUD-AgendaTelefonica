@extends('plantilla.plantilla')

@section('titulo', 'Confirme la eliminación del registro')

@section('contenido')
    <div class="container py-5">
        <h2>¿Deseas eliminar el registro de {{ $Agenda->nombres }} {{ $Agenda->apellidos }}?</h2>
        <br>
        <form method="POST" action="{{ route('agenda.update', $Agenda->id) }}">
            @method('PUT')
            @csrf
            <div class="container register">

                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://cio.com.mx/wp-content/uploads/2021/02/proteccion-de-datos-personales-791x1024-1.png"
                            alt="" />

                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">

                                <h3 class="register-heading">Eliminar Registro</h3>

                                <div class="row register-form">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="nombres" name="nombres"
                                                    placeholder="Nombres" required="" value="{{ $Agenda->nombres }}"
                                                    disabled="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-edit text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="apellidos" name="apellidos"
                                                    placeholder="Apellidos" required="" value="{{ $Agenda->apellidos }}"
                                                    disabled="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-phone text-info"></i>
                                                    </div>
                                                </div>
                                                <input class="form-control" type="number" name="telefono"
                                                    placeholder="Telefono: 999 99 99 99" id="telefono"
                                                    value="{{ $Agenda->telefono }}" disabled="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-mobile-alt text-info"></i>
                                                    </div>
                                                </div>
                                                <input class="form-control" type="number" name="celular"
                                                    placeholder="Celular: 699 99 99 99" id="Celular"
                                                    value="{{ $Agenda->celular }}" disabled="true">
                                            </div>
                                        </div>

                                        @if ($Agenda->sexo == 'Masculino')
                                            @php($hombre = 'checked')
                                            @php($mujer = '')
                                        @else
                                            @php($hombre = '')
                                            @php($mujer = 'checked')
                                        @endif

                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="sexo" value="Masculino"
                                                        {{ $hombre }} disabled="true">
                                                    <span> Masculino </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="sexo" value="Femenino"
                                                        {{ $mujer }} disabled="true">
                                                    <span>Femenino </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa  fa-at text-info"></i></div>
                                                </div>
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email" value="{{ $Agenda->email }}" disabled="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="fa fa-address-card text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="posicion" class="form-control"
                                                    placeholder="Posición" value="{{ $Agenda->posicion }}"
                                                    disabled="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="fa fa-map-marker-alt text-info"></i>
                                                    </div>
                                                </div>

                                                @php($departamentos = ['Gerencia de TI', 'Auditoria TI', 'Contabilidad'])

                                                <select name="departamento" class="form-control" disabled="true">
                                                    <option class="hidden" selected disabled>Departamento</option>
                                                    @foreach ($departamentos as $dep)
                                                        <option @if ($Agenda->departamento == $dep) selected @endif>
                                                            {{ $dep }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="fa  fa-dollar-sign text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="number" class="form-control" name="salario"
                                                    placeholder="Salario *" value="{{ $Agenda->salario }}"
                                                    disabled="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Fecha de nacimiento</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i
                                                            class="fa fa-calendar-alt text-info"></i>
                                                    </div>
                                                </div>

                                                <input type="date" name="fechadenacimiento" id="fechadenacimiento"
                                                    min="1000-01-01" max="3000-12-31" class="form-control"
                                                    value="{{ $Agenda->fechadenacimiento }}" disabled="true">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </form>
        <br>
        <form method="POST" action="{{ route('agenda.destroy', $Agenda->id) }}">
            @method('DELETE')
            @csrf
            <button class="redondo btn btn-danger">
                <i class="fas fa-trash-alt"></i> Eliminar
            </button>
            <a class="redondo btn btn-secondary" href="{{ route('cancelar') }}"><i class="fas fa-ban"></i> Cancelar</a>
        </form>
    </div>

    @include('plantilla.footer', ['container' => 'container'])

@endsection
