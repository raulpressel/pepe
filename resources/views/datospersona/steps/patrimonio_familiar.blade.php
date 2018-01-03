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
		          <label for="validate-select">Propietario:</label>
		          <br>
		          <div class="input-group" data-validate="radio">
		              <input  type="radio" name="propietario" id="propietarioSi"  required> Si -  
		              <input  type="radio" name="propietario" id="propietarioNo" required>  No <br>
		            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
		          </div>
		        </div>
		        <div class="form-group">
		          <label for="validate-select">Alquila:</label>
		          <br>
		          <div class="input-group" data-validate="radio">
		              <input  type="radio" name="alquila" id="alquilaSi"  required> Si -  
		              <input  type="radio" name="alquila" id="alquilaNo" required>  No <br>
		            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
		          </div>
		        </div>
		        <div class="form-group">
			          <label for="validate-number">Monto  $:</label>
			          <div class="input-group" data-validate="number">
			            <input type="number" class="form-control" name="precioalquiler" id="precioalquiler" placeholder="Ingrese solo numeros">
			            <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
		          	</div>
		        </div>             
		        <p><i>Ingrese solo numeros</i></p>
				<div class="form-group">
		          <label for="validate-select">Prestada:</label>
		          <br>
		          <div class="input-group" data-validate="radio">
		              <input  type="radio" name="prestada" id="prestadaSi"  required> Si 
		              <input  type="radio" name="prestada" id="prestadaNo" required> No <br>
		            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
		          </div>
		        </div>
		        
		        <div class="form-group">
			        <label for="validate-optional">Otros Especifique:</label>
			        <div class="input-group">
			        <input type="text-area" class="form-control" name="otrosvivienda" id="otrosvivienda" placeholder="">
			        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
			        </div>
		        </div>

		        <div class="row">
		      		<h4>Bienes</h4>
		      	</div>
				<div class="form-group">
			      	<label for="validate-select">Posee Campos:</label>
			          <br>
			          <div class="input-group" data-validate="radio">
			              <input  type="radio" name="campo" id="campoSi"  required> Si 
			              <input  type="radio" name="campo" id="campoNo" required> No <br>
			            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
			          </div>
			     </div>

			     <div class="form-group">
			        <label for="validate-optional">Superficie en Hectareas:</label>
			        <div class="input-group">
			        <input type="number" class="form-control" name="has" id="has" placeholder="">
			        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
			        </div>
			     </div>

			     <div class="form-group">
	              <label for="validate-optional">Actividad:</label>
	                <div class="input-group" data-validate="letras">
	                <input type="text" class="form-control" name="actividad" id="actividad" placeholder="Ingrese solo letras" required>
	                <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
	            	</div>
	          	</div>
			     <div class="form-group">
			        <label for="validate-select">Posee Terrenos:</label>
			          <br>
			          <div class="input-group" data-validate="radio">
			              <input  type="radio" name="terreno" id="terrenoSi"  required> Si 
			              <input  type="radio" name="terreno" id="terrenoNo" required> No <br>
			            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
			          </div>
			      </div>
			       <div class="form-group">
			        <label for="validate-optional">Cuántos:</label>
			        <div class="input-group">
			        <input type="number" class="form-control" name="terrenocant" id="terrenocant" placeholder="">
			        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
			        </div>
			       </div>

					<div class="form-group">
			        	<label for="validate-select">Posee automotores:</label>
			          	<br>
			          	<div class="input-group" data-validate="radio">
			              <input  type="radio" name="auto" id="autoSi"  required> Si 
			              <input  type="radio" name="auto" id="autoaNo" required> No <br>
			            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
			          </div>
			        </div>


			        <div class="form-group">
				        <label for="validate-optional">Cuántos:</label>
				        <div class="input-group">
				        <input type="number" class="form-control" name="autocant" id="autocant" placeholder="">
				        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
				        </div>
			        </div>

					<div class="form-group">
			        	<label for="validate-select">Posee motocicletas:</label>
			          	<br>
			          	<div class="input-group" data-validate="radio">
			              <input  type="radio" name="moto" id="motoSi"  required> Si 
			              <input  type="radio" name="moto" id="motoNo" required> No <br>
			            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
			          </div>
			        </div>


			        <div class="form-group">
				        <label for="validate-optional">Cuántos:</label>
				        <div class="input-group">
				        <input type="number" class="form-control" name="motocant" id="terrenocant" placeholder="">
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



 
