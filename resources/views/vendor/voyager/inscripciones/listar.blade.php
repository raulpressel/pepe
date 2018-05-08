@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@section('content')

<h1><p align="center">Panel administrativo de inscripciones</p></h1>
<h3>Bienvenido {{Auth::user()->name}} </h3>




<div align="center">
	<h4>Seleccione la beca para listar los inscriptos: </h4>
	<select name = 'beca'>
		@foreach($becas as $beca)
			<option value="{{$beca->id}}"> {{$beca->nombre}} año: {{$beca->anio}}</option>
		@endforeach
	</select>
</div>



<div class="form-group">
 <input class="form-control pull-right" style="width:20%" id="search" placeholder="Ingrese nombre/dni a buscar">
</div>

<br><br>


{!! Form::open(['route' => ['pdf', 'inscrip' =>$inscrip], 'method' => 'get']) !!}
              {{ csrf_field() }}


<div class= "table-responsive" id="lista">
	<table class= "table table-hover table-bordered" id="id">
		<thead>
			<tr>
				<th class="col-md-1">Seleccionar</th>
				<th>Nombre del inscripto</th>
				<th>Dni/Pasaporte</th>
				<th>Meritos</th>
				<th>Aprobar inscripcion</th>
				<th class="col-md-3">Acciones</th>
			</tr>
		</thead>
	
		@foreach($inscrip as $inscriptos)
			<tr id = "asd" name = "aaaa">
				<td class="col-md-1"><p>
				{!!Form::checkbox('usuario[]', $inscriptos->user_id,false )!!}
				</p></td>

				<td><p>
					{{ $inscriptos->user_nombre }}
				</p></td>

				<td><p>
					{{$inscriptos->dni}}
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

				<td><p>
					 <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><button type="button" class="btn btn-warning">Ver</button></a>
                            <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://www.uader.com.ar">Datos de inscripcion</a></li>
                                    <li><a href="http://fcyt.uader.edu.ar">Datos del Usuario</a></li>
                            </ul>
                    	<button type="button" class="btn btn-danger">Eliminar</button>
                    </div>
                    
				</p></td>
			</tr>
		@endforeach
		</table>
</div>
  	<button type="submit" class="btn btn-primary btn-warning" type="submit">Crear Pdf con los seleccionados</button>

<button type="submit" class="btn btn-success btn-sm">Seleccionar</button>


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

<script>
$(document).ready(function(){
$(function(){
$("#mytable").tablesorter(
{
	theme : 'blue',
 
	sortList : [[1,0],[2,0],[3,0]],
 
    // header layout template; {icon} needed for some themes
    headerTemplate : '{content}{icon}',
 
	// initialize column styling of the table
    widgets : ["columns"],
	widgetOptions : {
      // change the default column class names
      // primary is the first column sorted, secondary is the second, etc
      columns : [ "primary", "secondary", "tertiary" ]
	}
});
});
});
</script>

<script>

 function oculta(id){

      var elDiv = document.getElementById(id); //se define la variable "elDiv" igual a nuestro div

      elDiv.style.display='none'; //damos un atributo display:none que oculta el div     

    }

 function muestra(id){
     var elDiv = document.getElementById(id); //se define la variable "elDiv" igual a nuestro div

      elDiv.style.display='block';//damos un atributo display:block que  el div     


 window.onload = function(){/*hace que se cargue la función */

 /* "Mandamos como parametro el nombre de la Div para ocultar" */

 oculta('Pmoral'); /*Ocultamos Pmoral*/

 }

 </script>
