@extends('layout')
@section('contenido')





@if (empty ($id->user_id))

<p> esta vacia la tabla datos.. cargar form</p>

	

@include('datospersona.form',['user'])

@else



<a href="{{ route('datospersona.edit', $id->user_id) }} ">
<h1>Editar datos cargados de {{$id->user_name}}</h1>

</a> 



@endif

@endsection



