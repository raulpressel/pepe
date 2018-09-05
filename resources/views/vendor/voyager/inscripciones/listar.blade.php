@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@section('content')



<h1><p align="center">Panel administrativo de inscripciones</p></h1>
<h3>Bienvenido {{Auth::user()->name}} </h3>


{!! Form::open(['action' => 'InscripcionesController@seleccion','method' => 'post'] ) !!}

<div align="center">
	<h4>Seleccione la beca para listar los inscriptos: </h4>
	<select name = 'beca'>
		@foreach($becas as $beca)
			<option value="{{$beca->id}}"> {{$beca->nombre}} año: {{$beca->anio}}</option>
		@endforeach
	</select>

{!!Form::submit('Listar')!!}
</div>
{!! Form::close() !!}


@endsection