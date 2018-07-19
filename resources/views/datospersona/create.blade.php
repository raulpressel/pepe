@extends('layout')
@section('contenido')





@if (empty ($id->user_id))
	@if($beca->habilitada=="Si")

	@include('datospersona.form',['user'])
	  
	@endif
@else
<div align="center">
<a href="/administracion">
<h3>{{$id->user_name}} ya cargaste satisfactoriamente tus datos<br> acceda al panel de administracion para mas info</h3></a> 
</div>
@endif

<br><br><br>
@include('footer')
@endsection


