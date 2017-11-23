
	{{ csrf_field() }}


<h1>Datos Personales Para la beca</h1>




	<select name="age">
		  <option value="young">Under 18</option>
		  <option value="adult">19 to 30</option>
		  <option value="adult2">Over 30</option>
	</select>

{{Form::file('image')}}
{{Form::select('size', ['L' => 'Large', 'S' => 'Small'])}}

{{Form::select('animal',[
    'Cats' => ['leopard' => 'Leopard'],
    'Dogs' => ['spaniel' => 'Spaniel'],
])}}


  <div class="row">
    <div class="form-group col-md-4">
    
    {{ Form::checkbox('name', 'value') }}

      {{ Form::label('email', 'Dirección de E-mail') }}
      {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}

    </div>
    <div class="form-group col-md-4">
      {{ Form::label('full_name', 'Nombre completo') }}
      {{ Form::text('full_name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('password', 'Contraseña') }}
      {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('password_confirmation', 'Confirmar contraseña') }}
      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
    </div>
  </div>
 




	@foreach($datos as $dato)

 		<tr>
					<td>{{ $dato->id }}</td>
					<td>{{ $dato->user_name }}</td>
					
					<td>
				@endforeach


		@foreach($users as $user)
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
				@endforeach
            
        </div>
 
    </div>









  {{Form::submit('Click Me!')}}
  {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    



{{ Form::close() }}

