@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home Agenda Telefónica') }}

                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('Ya estás logeado. Hola') }} {{ Auth::user()->name }}{{ __('!') }}
                        <a href="{{ route('agenda.index') }}" class="btn btn-outline-dark">Agenda Telefónica</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
