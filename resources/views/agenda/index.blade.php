@extends('plantilla.plantilla')

@section('titulo', 'Agenda')

@section('contenido')
    <div class="container-fluid registerinicio">
        <div class="row">
            <div class="col-md-6 register-left register-left1">
                <img src="https://cio.com.mx/wp-content/uploads/2021/02/proteccion-de-datos-personales-791x1024-1.png"
                    alt="" style="width: 120px;" />
            </div>
            <div class="col-md-6 register-left">

                <h3>Bienvenid@</h3>
                <p>Por favor llena los datos correctamente en el sistema!</p>

            </div>
        </div>
    </div>



    <div class="container-fluid ">


        @if (session('datos'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('datos') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
        @endif
        @if (session('cancelar'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('cancelar') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
        @endif

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

        <br>
        <h1 class="text-center">Datos personales</h1>

        <br>
        <div class="row float-right">
            <a href="{{ route('agenda.create') }}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i>
                Agregar un nuevo Registro</a>
        </div>
        <br>

        <table class="table-responsive table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres y apellidos</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Posición</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($Agenda as $Agendaitem)
                    <tr>
                        <th scope="row">{{ $Agendaitem->id }}</th>
                        <td>{{ $Agendaitem->nombres }} {{ $Agendaitem->apellidos }}</td>
                        <td>{{ $Agendaitem->telefono }}</td>
                        <td>{{ $Agendaitem->celular }}</td>
                        <td>{{ $Agendaitem->sexo }}</td>
                        <td>{{ $Agendaitem->email }}</td>
                        <td>{{ $Agendaitem->posicion }}</td>
                        <td>{{ $Agendaitem->departamento }}</td>
                        <td>{{ $Agendaitem->salario }}</td>
                        <td>{{ $Agendaitem->fechadenacimiento }}</td>
                        <td><a class="btn btn-success btncolorblanco">
                                <i class="fa fa-edit"></i> Editar
                            </a>

                            <a href="{{ route('agenda.confirm', $Agendaitem->id) }}" class="btn btn-danger btncolorblanco">
                                <i class="fa fa-trash-alt"></i> Eliminar
                            </a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $Agenda->links() }}

    </div>


    @include('plantilla.footer', ['container' => 'container-fluid'])

@endsection
