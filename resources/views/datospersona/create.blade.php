@extends('layout')
@section('contenido')

@include('datospersona.form', [
                    'dato' => new App\DatosPersona,
                    'user' =>  App\User::all()
                    ])

@endsection



