<div class="tab-pane" role="tabpanel" id="step3">
  <div class="container">
    <div class="row">
      <h3>1.3 - Situación Económica del Estudiante</h3>
    </div>

    
    <div class="col-sm-offset-2 col-sm-5" >
      
      <div class="form-group">
          <label for="validate-select">Trabaja</label>
          <br>
          <div class="input-group" data-validate="radio">
              <input value="{{ old('trabaja') }}" value="Si" type="radio" name="trabaja" id="trabajaSi"  required> Si 
              <input value="{{ old('trabaja') }}" value="No" type="radio" name="trabaja" id="trabajaNo" required> No <br>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>
   
        <div class="form-group">
          <label for="validate-number">Ingresos Propios (Mensuales) $:</label>
          <div class="input-group" data-validate="number">
            <input value="{{ old('sueldo}') }}" type="text" class="form-control" name="sueldo" id="sueldo" placeholder="Ingrese solo numeros" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>             
        <p><i>Ingrese solo numeros</i></p>

     <div class="form-group">
          <label for="validate-select">Tiene Becas:</label>
          <br>
          <div class="input-group" data-validate="radio">
              <input value="{{ old('beca') }}" value="Si" type="radio" name="beca" id="becaSi"  required> Si
              <input value="{{ old('beca') }}" value="No" type="radio" name="beca" id="becaNo" required> No <br>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>

        <div class="form-group">
          <label for="validate-select">PROGRESAR:</label>
          <br>
          <div class="input-group" data-validate="radio">
              <input value="{{ old('pasan') }}" value="Si" type="radio" name="pasan" id="pasanSi"  required> Si
              <input value="{{ old('pasan') }}" value="No" type="radio" name="pasan" id="pasanNo" required> No <br>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>
          
        <div class="form-group">
          <label for="validate-select">Asignación Universal por Hijo:</label>
          <br>
          <div class="input-group" data-validate="radio">
              <input value="{{ old('asig') }}" value="Si" type="radio" name="asig" id="asigSi"  required> Si
              <input value="{{ old('asig') }}" value="No" type="radio" name="asig" id="asigNo" required> No <br>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>
          
        <div class="form-group">
        <label for="validate-optional">Otros Ingresos:</label>
        <div class="input-group">
        <input value="{{ old('otrosing') }}" type="text-area" class="form-control" name="otrosing" id="otrosing" placeholder="Campo opcional">
        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
        </div>
            
          
      
        <ul class="list-inline pull-right">
          <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
          <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
        </ul>
    </div>
  </div>
</div>

