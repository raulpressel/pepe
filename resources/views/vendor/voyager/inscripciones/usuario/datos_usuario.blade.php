@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@section('content')

<h1><p align="center">Panel administrativo de inscripciones</p></h1>
<h3>Bienvenido {{Auth::user()->name}} </h3>



<div class="form-group">



<div class="row">
  <div class="col-sm-6 col-md-3">
  	<div class="thumbnail">
		 <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->imagen_dni]) }}" alt="" class="img-responsive">
		 <h6>Imagen dni</h6>
		 @component('vendor.voyager.inscripciones.usuario.popup', array('variable' => $datos->imagen_dni))
		 @endcomponent 
	</div>
  </div>
  <div class="col-sm-6 col-md-3">
  	<div class="thumbnail">
		 <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->cert_anses]) }}" alt="" class="img-responsive">
		 <h6>Certificado de Anses</h6>
		 @component('vendor.voyager.inscripciones.usuario.popup', array('variable' => $datos->cert_anses))
	 	 @endcomponent 
	</div>
  </div>
  ...
</div>



	  Nombre: {{ $datos->id}}	  
	  {{ $datos->user_id}}	  
	  {{ $datos->user_name}}
	  {{ $datos->user_apellido}}
	  {{ $datos->user_dni}}	  
	  {{ $datos->imagen_dni}}



	  {{ $datos->cert_anses}}
	  {{ $datos->cuil}}	  
	  {{ $datos->estado_civil}}
	  {{ $datos->cumple}}
	  {{ $datos->domicilio}} 
	  {{ $datos->cp}}	  {{ $datos->provincia}}
	  {{ $datos->nacionalidad}}
	  {{ $datos->cel}}	  {{ $datos->user_email}}
	  {{ $datos->face}}
	  {{ $datos->disca_estudiante}}
	  {{ $datos->certificado_discapacidad}}
	  {{ $datos->condicion_estudiante}}
	  {{ $datos->constancia_estudiante}}
	  {{ $datos->certificado_estudiante}}
	  {{ $datos->carrera_cursa}}
	  {{ $datos->anio_ingreso}}	  {{ $datos->tiene_trabajo}}
	  {{ $datos->tipo_trabajo}}
	  {{ $datos->comprobante_ingresos}}
	  {{ $datos->sueldo}}	  {{ $datos->tiene_beca}}	  {{ $datos->tiene_pasantia}}	  {{ $datos->tiene_asig}}	  {{ $datos->otros_ing}}
	  {{ $datos->domi_cursado}}
	  {{ $datos->casa_fam}}
	  {{ $datos->tiene_alq}}
	  {{ $datos->recibo_alquiler}}
	  {{ $datos->monto_alq}}	  {{ $datos->usa_urbano}}
	  {{ $datos->cant_viajes}}	  {{ $datos->usa_media_dist}}
	  {{ $datos->precio_pasaje}}	  {{ $datos->cant_viaja_media}}	  {{ $datos->recibo_pasaje}}
	  {{ $datos->es_propietario}}	  {{ $datos->alquila}}
	  {{ $datos->recibo_alquiler_familiar}}
	  {{ $datos->precio_alquiler}}	  {{ $datos->prestada}}	  {{ $datos->otros_vivienda}}
	  {{ $datos->tiene_campo}}
	  {{ $datos->cant_has}}	  {{ $datos->actividad}}
	  {{ $datos->tiene_terreno}}
	  {{ $datos->cant_terreno}}	  {{ $datos->tiene_auto}}
	  {{ $datos->cant_auto}}	  {{ $datos->tiene_moto}}
	  {{ $datos->cant_moto}}	  {{ $datos->motivos}}
	  {{ $datos->localidad}} 
	  {{ $datos->anio_cursado}}	  {{ $datos->tiene_progresar}}	  {{ $datos->created_at}}
	  {{ $datos->updated_at}}
	  {{ $datos->deleted_at}}


	

</div>
@endsection

