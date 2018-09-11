@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@section('content')

@if (session('message'))
        <div class="alert alert-success">
         {{ session('message') }}
        </div>
    @endif

<h1><p align="center">Panel administrativo de inscripciones</p></h1>
<h3>Bienvenido {{Auth::user()->name}} </h3>


<h5>Listado de inscriptos a {{$aux->nombre}} </h5>



<div class="form-group">
 <input class="form-control pull-right" style="width:20%" id="search" placeholder="Ingrese nombre/dni a buscar">
</div>

<br><br>
{!! Form::open(['route' => 'otorgar', 'method' => 'post' ]) !!}


<div class="table-dark table-bordered table-hover table-responsive" id="lista">
	<table class="" id="mytable" style="font-size:15px" width="100%" border="0" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th class="col-md-1" height="150%">Seleccionar</th>
				<th class="col-md-1" height="2000%">Nombre del inscripto</th>
				<th class="col-md-1">Dni/Pasaporte</th>
				<th class="col-md-1">Facultad</th>
				<th class="col-md-1">Meritos</th>
				<th class="col-md-1">Otorgada</th>
				<th class="col-md-2">Observacion</th>
				<th class="col-md-3">Acciones</th>
			</tr>
		</thead>
		@foreach($inscrip as $inscriptos)

<?php if ($inscriptos->otorgamiento == "No"): ?>
			<tr class="bg-danger">
<?php endif; ?>
<?php if ($inscriptos->otorgamiento == "Suspendida"): ?>
			<tr class="bg-warning">
<?php endif; ?>
<?php if ($inscriptos->otorgamiento == "Si"): ?>
			<tr class="bg-success">
<?php endif; ?>
				<td><p>
				{{$loop->index + 1}} - <!--esto??? <input type="checkbox" name="listado[]" value="{{$inscriptos->user_id}}" -->
				<input type="hidden" name="user_id" value="{{$inscriptos->user_id}}">
				<input type="hidden" name="beca_id" value="{{$inscriptos->beca_id}}">

				</p></td>


				<td><p>
					{{ $inscriptos->user_nombre }}
				</p></td>

				<td><p>
					{{$inscriptos->dni}}
				</p></td>

				<td><p>
					{{ $inscriptos->facultad_nombre }}
				</p></td>

				<td><p>
					{{ $inscriptos->merito }}
				</p></td>
				 

				<td><p>
					{{$inscriptos->otorgamiento}} 
				</p></td>


				<td><p>
					{{ $inscriptos->observacion }}
				</p></td>


				<td><p>
				<div class="btn-group">
				         {!! link_to_route('observacion', 'Modificar', ['user_id'=>$inscriptos->user_id], ['class'=>'btn btn-success btn-xs']) !!}
					 <div class="dropdown btn-group" >
				
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><button type="button" class="btn btn-warning btn-xs">Ver</button></a>
                            <ul class="dropdown-menu" role="menu">
                                    <li>
                                    {!! link_to_route('datos_usuario', 'Datos de inscripcion', ['user_id' => $inscriptos->user_id]) !!}</li>
                                    <li><a href="/administracion/users/{{$inscriptos->user_id}}">Datos del Usuario</a></li>
                            </ul>
                            </div>
	 							@if( (Auth::user()->role_id == '1') or (Auth::user()->role_id == '3') )
	                            {!! link_to_route('dar_baja_inscripcion', 'Eliminar', ['user_id' => $inscriptos->user_id], ['class'=>'btn btn-danger btn-xs'] ) !!}
	      						@endif              
                   
                	</div>
				</p></td>
			</tr>
		@endforeach
		</table>
</div>

<br><br>
<div class="container-fluid" style="border: 1px solid #5D0232; padding: 3px; text-align: center;">
<strong><font color="black">
Ingrese la cantidad de n° de becas a otorgar. La cual se otorgaran ordenando los mayores meritos</font></strong>
<input type="numer" name="cant_otor" placeholder="Ingrese la cantidad de becas a otorgar">

<button type="submit" class="btn btn-primary btn-info" type="submit">Otorgar</button>
</div>
{{ Form::close() }}



<div class="dropdown dropright" >			
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><button type="button" class="btn btn-primary active">Reportes en pdf</button></a>
      	<ul class="dropdown-menu" role="menu">
<li>
{!! link_to_route('generate-pdf', 'Crear Pdf con todos los postulantes', ['pdf' => 'Todos'], ['class'=>'btn btn-primary btn-xs'] ) !!}
</li>
<li>
{!! link_to_route('generate-pdf', 'Crear Pdf con los otorgados', ['pdf' => 'Si'], ['class'=>'btn btn-success btn-xs'] ) !!}
</li>
<li>
{!! link_to_route('generate-pdf', 'Crear Pdf con los NO otorgados', ['pdf' => 'No'], ['class'=>'btn btn-warning btn-xs'] ) !!}
</li>
<li>
{!! link_to_route('generate-pdf', 'Crear Pdf con los Suspendidos', ['pdf' => 'Suspendida'], ['class'=>'btn btn-danger btn-xs'] ) !!}
</li>
</ul>

</div>

@endsection

<script>
function eliminarInscripcion(id) {
 $.ajax({
    url: 'url' + id,
    type: 'DELETE',
    dataType:'json',
    success: function(message) {
        alert(message);

    }
 })};
</script>   



<script>
 // Write on keyup event of keyword input element
 $(document).ready(function(){
 $("#search").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them
 $.each($("#mytable tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});
</script>


