@include ('layout')
<h1>hola desde el index</h1>


	<h1>Listado de todos los usuarios</h1>
	@foreach($datos as $dato)
		<p>{{ $dato->user_name }}</p>
		
	@endforeach

{{ $user->name }}
{{ $user->email }}
{{ $user->apellido }}
{{ $user->dni }}


<select>
	@foreach($carrera as $carreras)
	<option value= {{$carreras->id}}><p>{{ $carreras->nombre }}</p></option>
	@endforeach
</select>


<form>
@foreach($carrera as $carreras)
<label>asd</label>
<input type="text" name="pepe[{{$carreras->id}}]">
@endforeach
</form>
