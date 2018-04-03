<div class="tab-pane" role="tabpanel" id="step7">
    <div class="container">
      <div class="row">
        <h3>1.7 –Estado patrimonial del grupo familiar</h3>
      </div>
	      <div class="row">
	      	<h4>Vivienda del Grupo Familiar</h4>
	      </div>
	      <div class="col-sm-offset-2 col-sm-5">
		        
		        <div class="form-group">
              <label for="validate-letras">Propietario:</label>
                <div class="input-group">
                  <select value="{{ old('propietario') }}" class="form-control" name="propietario" id="propietario" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
		       
		        <div class="form-group">
              <label for="validate-letras">Alquila:</label>
                <div class="input-group">
                  <select value="{{ old('alquila') }}" class="form-control" name="alquila" id="alquila" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
		        <div class="form-group">
			          <label for="validate-number">Monto  $:</label>
			          <div class="input-group" data-validate="number">
			            <input value="{{ old('precioalquiler') }}" type="number" min="0" class="form-control" name="precioalquiler" id="precioalquiler" placeholder="Ingrese solo numeros">
			            <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
		          	</div>
		        </div>             
		        
				

		          <div class="form-group">
              <label for="validate-letras">Prestada:</label>
                <div class="input-group">
                  <select value="{{ old('prestada') }}" class="form-control" name="prestada" id="prestada" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
		        
		        <div class="form-group">
			        <label for="validate-optional">Otros Especifique:</label>
			        <div class="input-group">
			        <input value="{{ old('otrosvivienda') }}" type="text-area" class="form-control" name="otrosvivienda" id="otrosvivienda" placeholder="Ingrese numeros o letras">
			        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
			        </div>
		        </div>


			       <div class="form-group">
              <label for="validate-letras">Posee Campos:</label>
                <div class="input-group">
                  <select value="{{ old('campo') }}" class="form-control" name="campo" id="campo" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>

			     <div class="form-group">
			        <label for="validate-optional">Superficie en Hectareas:</label>
			        <div class="input-group">
			        <input value="{{ old('has') }}" type="number" min="0" class="form-control" name="has" id="has" placeholder="Ingrese solo numeros">
			        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
			        </div>
			     </div>

			     <div class="form-group">
	              <label for="validate-optional">Actividad:</label>
	                <div class="input-group" data-validate="letras">
	                <input value="{{ old('actividad') }}" type="text" class="form-control" name="actividad" id="actividad" placeholder="Ingrese solo letras">
	                <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
	            	</div>
	          	</div>

			        <div class="form-group">
              <label for="validate-letras">Posee Terrenos:</label>
                <div class="input-group">
                  <select value="{{ old('terreno') }}" class="form-control" name="terreno" id="terreno" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>

			       <div class="form-group">
			        <label for="validate-optional">Cuántos:</label>
			        <div class="input-group">
			        <input value="{{ old('terrenocant')}}" type="number" min="0" class="form-control" name="terrenocant" id="terrenocant" placeholder="Ingrese solo numeros">
			        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
			        </div>
			       </div>


			          <div class="form-group">
              <label for="validate-letras">Posee automotores:</label>
                <div class="input-group">
                  <select value="{{ old('auto') }}" class="form-control" name="auto" id="auto" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>


			        <div class="form-group">
				        <label for="validate-optional">Cuántos:</label>
				        <div class="input-group">
				        <input value="{{ old('autocant') }}" type="number" class="form-control" min="0" name="autocant" id="autocant" placeholder="Ingrese solo numeros">
				        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
				        </div>
			        </div>


			          <div class="form-group">
              <label for="validate-letras">Posee motocicletas:</label>
                <div class="input-group">
                  <select value="{{ old('moto') }}" class="form-control" name="moto" id="moto" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>


			        <div class="form-group">
				        <label for="validate-optional">Cuántos:</label>
				        <div class="input-group">
				        <input value="{{ old('motocant') }}" type="number" min="0" class="form-control" name="motocant" id="terrenocant" placeholder="Ingrese solo numeros">
				        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
				        </div>
			        </div>
	      
	      <ul class="list-inline pull-right">
            	<li><button type="button" class="btn btn-default prev-step">anterior</button></li>
            	<li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
            </ul>

	      </div>
        
        	
        </div>
	</div>



 
