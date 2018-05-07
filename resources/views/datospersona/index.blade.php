@include ('layout')

<h1>hola desde el index</h1>


	<h1>Listado de todos los usuarios</h1>
	@foreach($dato as $datos)
		<p>{{ $datos->user_name }}</p>
		<p>{{ $datos->user_id }}</p>
	@endforeach

@if (empty ($datos->user_id))
	<p>no puto</p>
@elseif ($datos->user_id  === $user->id )

	<p>puto</p>


@endif

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
