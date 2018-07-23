<h2>Bienvenido {{Auth::user()->name}} al panel de administracion de becas FCYT</h2>

@inject('inscripcion', 'App\Http\Controllers\InscripcionesController')    

<br><br>


<h4>A continuacion se detalla el contenido de su estado de inscripcion </h4>
<br>

@foreach( $inscripcion->se_inscribio() as $inscrip)


<center>
<table class="table-responsive" border="4" width="80%" cellpadding="5" cellspacing="5">
<thead>
<tr>
	<th class="badge-primary"><div align="center">Nombre de la beca</div></th>
	<th class="badge-primary"><div align="center">Año de beca</div></th>
	<th class="badge-warning"><div align="center">Informacion</div></th>
</tr>
</thead>
<tbody>
<tr align="center">
	<td style="width: 180px">{{$inscrip->beca_nombre}}</td>
	<td style="width: 180px">{{$inscrip->anio}}</td>
	<td>


@foreach( $inscripcion->revision($inscrip->user_id) as $inscrip1)

	@if($inscrip->beca_id == $inscrip1->beca_id)
		@if ($inscrip1->revision == 0)
			Sus datos estan siendo procesados
			<h6>Porfavor, vuelva a ingresar luego</h6>
		@else
			Sus datos ya fueron chequeados por personal Becario
			<h6 >Espere el cierre de inscripcion de la beca para visualizar si se le otorgo el beneficio</h6>
		@endif
	@else 
	@endif
@endforeach
	
	</td>	
</tr>

</tbody>
</table>
</center>
<br>	





@endforeach


