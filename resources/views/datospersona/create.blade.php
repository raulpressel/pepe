
 
{{ Form::open(array('route' => 'datospersona.store', 'method' => 'POST')) }}

          @include('datospersona.form', [
                    'dato' => new App\DatosPersona,
                    'user' =>  App\User::all()
          
                    ])





