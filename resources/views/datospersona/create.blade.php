

@if( session()->has('info'))
     <h3>{{ session('info')}}</h3> 
@else
        
{{ Form::open(array('route' => 'datospersona.store', 'method' => 'POST')) }}

          @include('datospersona.form', [
                    'datos' => new App\DatosPersona,
                    'users' =>  \App\User::all(),
                    'showFields' => auth()->guest()
                    ])





@endif




