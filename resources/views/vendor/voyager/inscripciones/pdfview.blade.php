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
					<th>Dni/Pasaporte</th>
					<th>Meritos</th>
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
						{{ $inscriptos->merito }}
					</p></td>
					</tr>

			@endforeach
	</table>	

</body>
</html>