
<div class="tab-content">
<div class="tab-pane active" role="tabpanel" id="step1">
    <div class="container">   
    
          <h3>1.1 - Datos Personales del Estudiante</h3>

          <table>
            <tr>
              <th>Apellidos:</th>
              <th><input id="apellido" name="apellido" type="text" placeholder="Ingrese apellido" class="form-control input-md"></th>
              <th>Nombres:</th>
              <th><input id="name" name="name" type="text" placeholder="Ingrese nombres" class="form-control input-md"></th>
            </tr>
            <tr>
              <th>DNI/Pasaporte N°:</th>
              <th>{{  Form::text('dni', 'Ingrese n° de DNI')  }}</th>
              <th>Ingresa la imagen del DNI {{ Form::file('image') }}</th>
            </tr>
            <tr>
              <th>CUIL N°:</th>
              <th><input id="cuil" name="cuil" type="text" placeholder="Ingrese CUIL" class="form-control input-md"></th>
              <th>Estado Civil:</th>
              <th>{{Form::select('estadocivil', ['single' => 'Soltero', 'casado' => 'Casado'])}}</th>
            </tr>
            <tr>
              <th>Fecha de Nacimiento:</th>
              <th>{{Form::date('date') }}</th>
              <th>Domicilio que figura en DNI</th>
              <th>{{  Form::text('domicilio', 'Ingrese direccion') }}</th>
            </tr>
            <tr>
              <th>Ciudad</th>
              <th><input id="ciudad" name="ciudad" type="text" placeholder="Ingrese ciudad" class="form-control input-md"></th>
              <th>Codigo Postal</th>
              <th><input id="cp" name="cp" type="text" placeholder="Ingrese codigo postal" class="form-control input-md"></th>
            </tr>
            <tr>
              <th>Provincia</th>
              <th><input id="provincia" name="provincia" type="text" placeholder="Ingrese provincia" class="form-control input-md"></th>
              <th>Nacionalidad</th>
              <th><input id="nacionalidad" name="nacionalidad" type="text" placeholder="Ingrese nacionalidad" class="form-control input-md"></th>
            </tr>
            <tr>
              <th>Celular</th>
              <th><input id="cel" name="cel" type="text" placeholder="Ingrese celuar" class="form-control input-md"></th>
              <th>E-mail</th>
              <th><input id="email" name="email" type="email" placeholder="Ingrese email" class="form-control input-md"></th>
            </tr>
            <tr>
              <th>Facebook</th>
              <th><input id="face" name="face" type="text" placeholder="facebook.com/xxxxxx" class="form-control input-md"></th>
            </tr>

          </table>
      
    
    </div>
    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>
</div>

