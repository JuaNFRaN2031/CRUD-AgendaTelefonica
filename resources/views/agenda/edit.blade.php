@extends('plantilla.plantilla')

@section('titulo', 'Editar registro')


@section('contenido')

    <div class="container">
        <br>
        <nav class="navbar navbar-light">
            <a class="navbar-brand"><img id="icono" class="img-responsive"
                    src="https://cdn.icon-icons.com/icons2/403/PNG/512/phonebook_40497.png" style="width: 70px;"></a>

            <ul class="nav flex-column text-center">
                <li class="nav-item">
                    <span class="nav-link active">Bienvenido Jhonatan</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar sesión</a>
                </li>
            </ul>

        </nav>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
    </div>

    <form method="POST" action="{{ route('agenda.update', $Agenda->id) }}">
        @method('PUT')
        @csrf
        <div class="container register">

            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://cio.com.mx/wp-content/uploads/2021/02/proteccion-de-datos-personales-791x1024-1.png"
                        alt="" />
                    <h3>Bienvenid@</h3>
                    <p>Por favor llena los datos correctamente en el sistema!</p>

                </div>
                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <h3 class="register-heading">Editar Registro</h3>

                            <div class="row register-form">

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="nombres" name="nombres"
                                                placeholder="Nombres" required="" value="{{ $Agenda->nombres }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user-edit text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="apellidos" name="apellidos"
                                                placeholder="Apellidos" required="" value="{{ $Agenda->apellidos }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                            </div>
                                            <input class="form-control" type="number" name="telefono"
                                                placeholder="Telefono: 999 99 99 99" id="telefono"
                                                value="{{ $Agenda->telefono }}">
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
                                                value="{{ $Agenda->celular }}">
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
                                                <input type="radio" name="sexo" value="Masculino" {{ $hombre }}>
                                                <span> Masculino </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="sexo" value="Femenino" {{ $mujer }}>
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
                                                placeholder="Email" value="{{ $Agenda->email }}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-address-card text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="posicion" class="form-control"
                                                placeholder="Posición" value="{{ $Agenda->posicion }}" />
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

                                            <select name="departamento" class="form-control">
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
                                                <div class="input-group-text"><i class="fa  fa-dollar-sign text-info"></i>
                                                </div>
                                            </div>
                                            <input type="number" class="form-control" name="salario"
                                                placeholder="Salario *" value="{{ $Agenda->salario }}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i>
                                                </div>
                                            </div>

                                            <input type="date" name="fechadenacimiento" id="fechadenacimiento"
                                                min="1000-01-01" max="3000-12-31" class="form-control"
                                                value="{{ $Agenda->fechadenacimiento }}">
                                        </div>
                                    </div>


                                    <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i>
                                        Guardar</button>
                                    <a href="{{ route('cancelar') }}" class="redondo btn btn-danger"><i
                                            class="fas fa-ban"></i>
                                        Cancelar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </form>

    @include('plantilla.footer', ['container' => 'container'])

@endsection