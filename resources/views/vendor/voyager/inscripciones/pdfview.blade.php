<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listado de becados</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<table class= "table table-hover table-bordered">
			<thead>
				<tr>
					<th>Nombre del inscripto</th>
					<th>Facultad</th>
					<th>Otorgada</th>
				</tr>
			</thead>
			@foreach($inscrip as $inscriptos)
				<tr>
					<td><p>
						{{ $inscriptos->user_nombre }}
					</p></td>
					<td><p>
						{{$inscriptos->facultad_nombre}}
					</p></td>
					<td><p>
						{{ $inscriptos->otorgamiento }}
					</p></td>
					</tr>

			@endforeach
	</table>	

</body>
</html>