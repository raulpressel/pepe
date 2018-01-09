@extends('layout')
@section('contenido')

@include('datospersona.form', [
                    'dato' => new App\DatosPersona,
                    'user'])

@endsection



