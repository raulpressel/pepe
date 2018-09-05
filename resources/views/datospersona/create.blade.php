@extends('layout')
@section('contenido')


@forelse ($id as $ids) <!--datos-->
	@if($ids->beca_id != $aux->id)
		@include('datospersona.form',['user'])
	@else
		<div align="center">
		<a href="/administracion">
		<h3>{{$ids->user_name}} ya cargaste satisfactoriamente tus datos<br> acceda al panel de administracion para mas info</h3></a>
	@endif
@empty <!--Nunca datos-->

@if(!empty($aux))
	@if($aux->habilitada=="No")<!--Habilitacion beca-->
		 <h3>Ninguna beca se encuentra habiltada vuelva luego</h3>
	@else($aux->habilitada=="Si") <!--habilitada la beca-->
		@include('datospersona.form',['user'])
	@endif
@else
	 <h3>Ninguna beca se encuentra habiltada, vuelva luego</h3>
@endif

@endforelse


<br><br><br>

@include('footer')
@endsection


