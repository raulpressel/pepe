@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
@section('content')



<h1><p align="center">Panel administrativo de inscripciones</p></h1>
<h3>Bienvenido {{Auth::user()->name}} </h3>



<div class="form-group">


<div class="rwd">
  <h2 align="center"><div class="p-3 mb-2 bg-primary text-white">Datos de {{$datos->user_name}} {{$datos->user_apellido}}</div></h2>
    <table class="rwd_auto table table-responsive table-bordered" width="100%" cellpadding="5" cellspacing="5" border="0">
    <tr>
    <td width="50%">
 	<h3 align="center" class="">Datos Personales</h3>
	
	  <table border="1">  
      <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td></th></tr>
      <tr>          
      <th width="20%">Nombre y Apellido</th>
      <td width="40%">{{ $datos->user_name}} {{ $datos->user_apellido}}</td><td>asd</td>
      </tr>
      
      <tr>
      <th>Dni / Cuit</th>
      <td>{{ $datos->user_dni}}</td>
      <td><a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
        Imagen del dni frente
            <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->imagen_dni_frente]) }}" alt="..." class="img-responsive lightbox hide">
        </a>
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
        Imagen del dni Dorso
            <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->imagen_dni_dorso]) }}" alt="..." class="img-responsive lightbox hide">
        </a>
        </td>         
	  </tr>

	  <tr>
	  <th>Estado civil</th>	  
	  <td>{{ $datos->estado_civil}}</td><td></td>
	  </tr>

	  <tr>
	  <th>Cumpleaños</th>
	  <td>{{ $datos->cumple}}</td><td></td>
	  </tr>
	  
	  <tr>
	  <th>Domicilio</th>
	  <td>{{ $datos->domicilio}}</td> <td></td>
	  </tr>

	  <tr>
	  <th>Codigo posta - Provincia - Nacionalidad</th>
	  <td>{{ $datos->cp}} - {{ $datos->provincia}} - {{ $datos->nacionalidad}}</td><td></td>
	  </tr>

	  <tr>
	  <th>Celurar</th>
	  <td>{{ $datos->cel}}</td><td></td>	  
	  </tr>

	  <tr>
	  <th>E-Mail</th>
	  <td>{{ $datos->user_email}}</td><td></td>
	  </tr>

	  <tr>
		  <th>Facebook</th>
		  <td>{{ $datos->face}}</td><td></td>
	  </tr>

	  <tr><th>Posee discapacidad</th>
		  <td>{{ $datos->disca_estudiante}}</td>
		  <td><a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
        		Certificado de discapacidad 
            	<img src="{{ action('InscripcionesController@getFile',['filename' => $datos->certificado_discapacidad]) }}" alt="..." class="img-responsive lightbox hide">
        	</a></td>
		  </tr>



	  </table>
      </td>

	<td width="50%">
	<h3 align="center" class="">Datos Academicos</h3>
		<table border="1">	  
	      <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td></th></tr>
		  
		  <tr>
		  	<th>Condicion estudiante</th>
		  	<td>{{ $datos->condicion_estudiante}}</td>
	  		<td>
	  		<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
       		 Certificado de Estudiante 
            <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->certificado_estudiante]) }}" alt="..." class="img-responsive lightbox hide">
        	</a>
        	<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
        	Constancia de Estudiante 
            <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->constancia_estudiante]) }}" alt="..." class="img-responsive lightbox hide">
       		</a>
	  		</td>
	  	 </tr>


	  	 <tr>
	  	 	<th>Carrera que cursa</th>
	  	 	<td>{{ $datos->carrera_cursa}} <- nombre
	  		</td><td></td>
	  	 </tr>


		  <tr>
		  <th>Año de ingreso - Año de Cursado</th>
	  	 	<td>{{ $datos->carrera_cursa}}{{ $datos->anio_ingreso}} - {{ $datos->anio_cursado}}
	  		</td><td></td>

	  	  </tr>

		  </table>
	</td>
  </tr>
  </table>


  <table class="rwd_auto table table-responsive table-bordered" width="100%" cellpadding="5" cellspacing="5" border="0">
    <tr>
	    <td width="50%">
 		<h3 align="center" class="">Datos Economicos</h3>
	
	  	<table border="1">  
      		<tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td></th></tr>

      		<tr>
      			<th>Posee trabajo - Tipo trabajo - Sueldo</th>
      			<td>{{ $datos->tiene_trabajo}} - {{ $datos->tipo_trabajo}} - ${{ $datos->sueldo}}</td><td>
      				<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
       				Comprobante de ingresos
           		 <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->comprobante_ingresos]) }}" alt="..." class="img-responsive lightbox hide">
        			</a>
      			</td>
      		</tr>

      		<tr>
      			<th>Posee beca</th>
      			<td>{{ $datos->tiene_beca}}</td><td></td>
      		</tr>

      		<tr>
      			<th>Posee PROGRESAR</th>
      			<td>{{ $datos->tiene_progresar}}</td><td></td>
      		</tr>

      		<tr>
      			<th>Posee Pasantia</th>
      			<td>{{ $datos->tiene_pasantia}}</td><td></td>
      		</tr>


      		<tr>
      			<th>Posee Asignacion x H</th>
      			<td>{{ $datos->tiene_asig}}</td><td></td>
      		</tr>


      		<tr>
      			<th>Posee Asignacion x H</th>
      			<td>{{ $datos->otros_ing}}</td><td></td>
      		</tr>
      	



	  	</table>
     	</td>

	<td width="50%">
	<h3 align="center" class="">Datos de Vivienda</h3>
		<table border="1">	  
	      <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td></th></tr>


	      	<tr>
      			<th>Domicilio durante cursado</th>
      			<td>{{ $datos->domi_cursado}}</td><td></td>
      		</tr>


	      	<tr>
      			<th>Vive con la familia</th>
      			<td>{{ $datos->casa_fam}}</td><td></td>
      		</tr>

  
          <tr>
            <th>Alquila - Monto $</th>
            <td>{{ $datos->tiene_alq}} - ${{ $datos->monto_alq}}</td><td>
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
              Recibo Alquiler
               <img src="{{ action('InscripcionesController@getFile',['filename' =>$datos->recibo_alquiler]) }}" alt="..." class="img-responsive lightbox hide">
              </a>
            </td>
          </tr>
  
          <tr>
            <th>Usa colectivo urbano - Cantidad de viajes</th>
            <td>{{ $datos->usa_urbano}} - {{ $datos->cant_viajes}}</td><td></td>
          </tr>
	

          <tr>
            <th>Usa colectivo media distancia - Cantidad de viajes - Precio</th>
            <td>{{ $datos->usa_media_dist}} - {{ $datos->cant_viaja_media}} - {{ $datos->precio_pasaje}}</td>
            <td>
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
              Recibo pasaje
               <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->recibo_pasaje]) }}" alt="..." class="img-responsive lightbox hide">
              </a>
            </td>
          </tr>          


		</table>
	</td>
	</tr>
	</table>



  <table class="rwd_auto table table-responsive table-bordered" width="100%" cellpadding="5" cellspacing="5" border="0">
    <tr>
      <td width="50%">
  <h3 align="center" class="">Patrimonio Familiar</h3>
    <table border="1">    
        <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td></th></tr>


          <tr>
            <th>Propietario de casa</th>
            <td>{{ $datos->es_propietario}}</td><td></td>
          </tr>


          <tr>
            <th>Alquila - Precio</th>
            <td>{{ $datos->alquila}} - {{ $datos->precio_alquiler}}</td>
            <td>
             <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
              Recibo pasaje
               <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->recibo_alquiler_familiar]) }}" alt="..." class="img-responsive lightbox hide">
              </a>
            </td>
          </tr>

          <tr>
            <th>Prestadao - Otras vivienda</th>
            <td>{{ $datos->prestada }} - {{ $datos->otros_vivienda }}</td><td></td>
          </tr>

          <tr>
            <th>Posee campo - Hectareas - Actividad</th>
            <td>{{ $datos->tiene_campo }} - {{ $datos->cant_has }} - {{ $datos->actividad }}</td><td></td>
          </tr>

          <tr>
            <th>Posee terreno - Cantidad</th>
            <td>{{ $datos->tiene_terreno }} - {{ $datos->cant_terreno }}</td><td></td>
          </tr>


          <tr>
            <th>Posee Automovil</th>
            <td>{{ $datos->tiene_auto }} - {{ $datos->cant_auto }}</td><td></td>
          </tr>

          <tr>
            <th>Posee Motovehiculo</th>
            <td>{{ $datos->tiene_moto }} - {{ $datos->cant_moto }}</td><td></td>
          </tr>


      </table>
      </td>



  <td width="50%">
  <h3 align="center" class="">Obtencion de Beca</h3>
    <table align="center" border="1">    
        <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td></th></tr>


          <tr>
            <th>Motivo de beca</th>
            <td>{{ $datos->motivos}}</td><td></td>
          </tr>


  </table>
  </td>
  </tr>
  </table>




	 



<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
                 <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			      </div>
            </div>
        </div>
    </div>
</div>



<br><br><br>
<div align="center">

  @if(  $datos->revision==1  )

  {!! Form::open(['route' =>'rev', 'method' => 'post' ]) !!}

    <h4 class="p-3 mb-2 bg-warning text-warning">Aceptar los datos cargados</h4>

    <select name = 'aceptar'>
      <option value=""> Seleccione una opcion</option>
      <option value="acepta"> Aceptar datos cargados</option>
      <option value="modifica"> Modificar datos</option>
      <option value="borra"> Borrar datos de la inscripcion del usuario</option>
      <option value="acepta-go"> Aceptar datos cargados e ir al siguiente</option>
    </select>

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Ir</h4>
      </div>
      <div class="modal-body">
        Esta seguro q desea ele
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">
 Ir
</button>
{{Form::submit('Go')}}

@else
<h4 class="p-3 mb-2 bg-primary text-white">Usuario ya chequeado los datos!! (siga con el proximo)</h4>
@endif

{!! Form::close() !!}
@endsection

<script>
	$(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});
</script>