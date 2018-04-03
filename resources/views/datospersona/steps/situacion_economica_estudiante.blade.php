<div class="tab-pane" role="tabpanel" id="step3">
  <div class="container">
    <div class="row">
      <h3>1.3 - Situación Económica del Estudiante</h3>
    </div>

    
    <div class="col-sm-offset-2 col-sm-5" >
      
        <div class="form-group">
              <label for="validate-letras">Trabaja:</label>
                <div class="input-group">
                  <select value="{{ old('trabaja') }}" class="form-control" name="trabaja" id="trabaja" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
   
        <div class="form-group">
          <label for="validate-number">Ingresos Propios (Mensuales) $:</label>
          <div class="input-group" data-validate="number">
            <input value="{{ old('sueldo') }}" type="number" min="0" class="form-control" name="sueldo" id="sueldo" placeholder="Ingrese solo numeros" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>             
        

        <div class="form-group">
              <label for="validate-letras">Tiene Becas:</label>
                <div class="input-group">
                  <select value="{{ old('beca') }}" class="form-control" name="beca" id="beca" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>

          <div class="form-group">
              <label for="validate-letras">PROGRESAR:</label>
                <div class="input-group">
                  <select value="{{ old('progresar') }}" class="form-control" name="progresar" id="progresar" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>

          <div class="form-group">
              <label for="validate-letras">Asignación Universal por Hijo:</label>
                <div class="input-group">
                  <select value="{{ old('asig') }}" class="form-control" name="asig" id="asig" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
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

