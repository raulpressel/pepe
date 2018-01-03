<div class="tab-pane" role="tabpanel" id="step3">
  <div class="container">
    <div class="row">
      <h3>1.3 - Situación Económica del Estudiante</h3>
    </div>

    
    <div class="col-sm-offset-2 col-sm-5">
      <div class="form-group">
          <label for="validate-select">Trabaja</label>
          <br>
          <div class="input-group" data-validate="radio">
              <input  type="radio" name="trabaja" id="Si"  required> Si <br>
              <input  type="radio" name="trabaja" id="No" required> No <br>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>

      
          
              Trabaja
              Si {{ Form::radio('trabaja', 'Si') }}
              No {{ Form::radio('trabaja', 'No') }}
              Ingresos Propios (Mensuales)  $
              {{ form::number('sueldo') }} 
            
          
              Posee Becas:  
              Si {{ Form::radio('beca', 'Si') }}
              No {{ Form::radio('beca', 'No') }}                                
              PROGRESAR
              Si {{ Form::radio('beca', 'Si') }}
              No {{ Form::radio('beca', 'No') }}
                                            
          
              Pasantías:  
              Si {{ Form::radio('pasan', 'Si') }}
              No {{ Form::radio('pasan', 'No') }}                                
              Asignación Universal por Hijo  
              Si {{ Form::radio('asig', 'Si') }}
              No {{ Form::radio('asig', 'No') }}
            
          
              Otros Ingresos
              {{ Form::text('otrosing') }}
      
      <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
      </ul>
    </div>
  </div>
</div>

