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
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>

          <div style="display:none;" id="reciboalqfamdiv" class="form-group">
            <label for="validate-number">Recibo de Alquiler:</label>
            
            <div class="input-group">
              <input  type="file" id="reciboalqfam" name="reciboalqfam" accept=".jpg, .jpeg, .png, .pdf" class="form-control" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <output id="list-reciboalqfam"></output>
              </div>
            </div>

		        <div style="display:none;" id="precioalqdiv" class="form-group">
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
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>

			     <div style="display:none;" id="hasdiv" class="form-group">
			        <label for="validate-optional">Superficie en Hectareas:</label>
			        <div class="input-group">
			        <input value="{{ old('has') }}" type="number" min="0" class="form-control" name="has" id="has" placeholder="Ingrese solo numeros">
			        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
			        </div>
			     </div>

			     <div style="display:none;" id="actividaddiv" class="form-group">
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
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>

			       <div style="display:none;" id="terrenocantdiv" class="form-group">
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
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>


			        <div style="display:none;" id="autocantdiv" class="form-group">
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
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>


			        <div style="display:none;" id="motocantdiv" class="form-group">
				        <label for="validate-optional">Cuántos:</label>
				        <div class="input-group">
				        <input value="{{ old('motocant') }}" type="number" min="0" class="form-control" name="motocant" id="motocant" placeholder="Ingrese solo numeros">
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



 

<script type="text/javascript">

$('#alquila').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#precioalqdiv').hide(); 
$('#reciboalqfamdiv').hide(); 
}
else{

if(selected === "Si") {
$('#precioalqdiv').show();
$('#reciboalqfamdiv').show();   
}
else if(selected === "No") {
$('#precioalqdiv').hide();
$('#reciboalqfamdiv').hide();  
}
}

});
</script>

<script type="text/javascript">

$('#campo').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#hasdiv').hide(); 
$('#actividaddiv').hide(); 

}
else{

if(selected === "Si") {
$('#hasdiv').show(); 
$('#actividaddiv').show(); 
}
else if(selected === "No") {
$('#hasdiv').hide(); 
$('#actividaddiv').hide(); 
}
}

});
</script>

<script type="text/javascript">

$('#terreno').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#terrenocantdiv').hide(); 
}
else{

if(selected === "Si") {
$('#terrenocantdiv').show(); 

}
else if(selected === "No") {
$('#terrenocantdiv').hide(); 
}
}

});
</script>

<script type="text/javascript">

$('#auto').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#autocantdiv').hide(); 
}
else{

if(selected === "Si") {
$('#autocantdiv').show(); 
}
else if(selected === "No") {
$('#autocantdiv').hide(); 
}
}

});
</script>

<script type="text/javascript">

$('#moto').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#motocantdiv').hide(); 
}
else{

if(selected === "Si") {
$('#motocantdiv').show(); 
}
else if(selected === "No") {
$('#motocantdiv').hide(); 
}
}

});
</script>