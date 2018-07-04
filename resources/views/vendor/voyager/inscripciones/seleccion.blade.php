@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@section('content')

<h1><p align="center">Panel administrativo de inscripciones</p></h1>
<h3>Bienvenido {{Auth::user()->name}} </h3>


<h5>Listado de inscriptos a {{$aux->nombre}} </h5>


<div class="form-group">
 <input class="form-control pull-right" style="width:20%" id="search" placeholder="Ingrese nombre/dni a buscar">
</div>

<br><br>

{!! Form::open(['route' => 'pdf', 'method' => 'post' ]) !!}

<div class= "table-responsive" id="lista">
	<table class= "table table-bordered table-hover" id="mytable">
		<thead>
			<tr>
				<th class="col-md-1">Seleccionar</th>
				<th>Nombre del inscripto</th>
				<th>Dni/Pasaporte</th>
				<th>Facultad</th>
				<th>Meritos</th>
				<th>Aprobar inscripcion</th>
				<th class="col-md-3">Acciones</th>
			</tr>
		</thead>
		@foreach($inscrip as $inscriptos)
			<tr>
				<td class="col-md-1"><p>
				{!!Form::checkbox('listado[]',$inscriptos->user_id, false )!!}

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
				 

				<td class="col-md-3"><p>
					<div class="checkbox">
					  <label><input type="checkbox" name="aprobar" value="si">Si</label>
						  <label><input type="checkbox" name="aprobar" value="no">No</label>
					</div>
				</p></td>

				<td class="col-md-1"><p>
				<div align="right">
					 <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><button type="button" class="btn btn-warning">Ver</button></a>
                            <ul class="dropdown-menu" role="menu">
                                    <li>
                                    {!! link_to_route('datos_usuario', 'Datos de inscripcion', ['user_id' => $inscriptos->user_id]) !!}</li>
                                    <li><a href="/administracion/users/{{$inscriptos->user_id}}">Datos del Usuario</a></li>
                            </ul>
                    </div>
                            <div class="dropdown">
                     
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><button type="button" class="btn btn-danger">Eliminar</button></a>
                            <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://www.uader.com.ar">Inscripcion</a></li>
                                    <li><a href="/administracion/users/{{$inscriptos->user_id}}">Eliminar Usuario</a></li>
                            </ul>
                    </div>
                </div>
				</p></td>
			</tr>

		@endforeach
		</table>
</div>


<button type="submit" class="btn btn-primary btn-warning" type="submit">Crear Pdf con los seleccionados</button>


{!! Form::close() !!}



@endsection


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
