@extends('layout')
@section('contenido')

@if(!empty($id))<!--esta vacia id-->
	@if(!empty($aux))
		@if(($aux->habilitada=="Si")) <!--Para ver si esta habilitada la beca-->
			@include('datospersona.form',['user'])
			
		@else
			<div align="center">
			<a href="/administracion">
			<h3>{{$ids->user_name}} ya cargaste satisfactoriamente tus datos<br> acceda al panel de administracion para mas info</h3></a> 
		</div>
		@endif
	@else <h3>Ninguna beca se encuentra habiltada vuelva luego</h3>
	@endif
@else
	@foreach($id as $ids)
	@endforeach

		@if(($aux->habilitada=="Si")) <!--Para ver si esta habilitada la beca-->
			asd2sssss
			@if ($ids->beca_id != $aux->id) <!--para ver si no esta inscripto en alguna beca-->
				asd3
				@include('datospersona.form',['user'])
			@endif
		@else
			<div align="center">
				<a href="/administracion">
				<h3>{{$ids->user_name}} ya cargaste satisfactoriamente tus datos<br> acceda al panel de administracion para mas info</h3></a> 
			</div>
		@endif
@endif
<br><br><br>

@include('footer')
@endsection


