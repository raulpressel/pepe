<div class="tab-pane" role="tabpanel" id="step7">
    <div class="container">
      <div class="row">
        <h3>1.7 –Estado patrimonial del grupo familiar</h3>
      </div>
	      <div class="row">
	      	<h4>Vivienda del Grupo Familiar</h4>
	      </div>
	      <div class="col-sm-offset-2 col-sm-6">
		        
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
          </div>
          
          <div class="col-sm-offset-3 col-sm-4">

          <div  id="reciboalqfamdiv" class="form-group">
            
            </div>

		        <div  id="precioalqdiv" class="form-group">
			          
		        </div>             
		        
				
          </div>

          <div class="col-sm-offset-2 col-sm-6">

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
        </div>
          <div class="col-sm-offset-3 col-sm-4">
			     <div  id="hasdiv" class="form-group">
			        
			     </div>

			     <div  id="actividaddiv" class="form-group">
	              
	          	</div>

            </div>

            <div class="col-sm-offset-2 col-sm-6">

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

        </div>

        <div class="col-sm-offset-3 col-sm-4">

			       <div  id="terrenocantdiv" class="form-group">
			        
			       </div>
          </div>

          <div class="col-sm-offset-2 col-sm-6">
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
        </div>
          <div class="col-sm-offset-3 col-sm-4">
			        <div id="autocantdiv" class="form-group">
				        
			        </div>

            </div>

            <div class="col-sm-offset-2 col-sm-6">
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

        </div>

        <div class="col-sm-offset-3 col-sm-4">
			        <div  id="motocantdiv" class="form-group">
				        
          </div>

        </div>
	      
        <div class="col-sm-offset-2 col-sm-6">

	      <ul class="list-inline pull-right">
            	<li><a href="#top" class="btn btn-default prev-step">Anterior</a></li>
            	<li><a href="#top" class="btn btn-primary next-step">Siguiente</a></li>
            </ul>

	      </div>
        
        	
        </div>
	</div>



 

<script type="text/javascript">

$('#alquila').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#precioalqdiv').html("");
$('#reciboalqfamdiv').html(""); 

}
else{

if(selected === "Si") {
$('#precioalqdiv').html("<label class='label label-info' for='validate-number'>Monto  $:</label>                <div class='input-group' data-validate='number'>                  <input  type='number' min='0' class='form-control' name='precioalquiler' id='precioalquiler' placeholder='Ingrese solo numeros' required>                  <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>                </div>");
 
          $('#reciboalqfamdiv').html("<label class='label label-info' for='validate-number'>Recibo de Alquiler:</label><div class='input-group'> <input  type='file' id='reciboalqfam' name='reciboalqfam' accept='.jpg, .jpeg, .png' class='form-control' required> <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div> <div id='list-reciboalqfam-1' style='display:none;' class='form-group'><div class='input-group'>       <img class='thumb' id='list-reciboalqfam' /> </div>  </div>");


          $(document).ready(function() {

        $('#reciboalqfam, #precioalquiler').on('change', function() {
        
        var $form = $(this).closest('form'),
        $group = $(this).closest('.input-group'),
        $addon = $group.find('.input-group-addon'),
        $icon = $addon.find('span'),
        state = false;

        if (!$group.data('validate')) {
        state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "number") {
        state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());}
        
        


        if (state) {
        $addon.removeClass('danger');
        $addon.addClass('success');
        $icon.attr('class', 'glyphicon glyphicon-ok');
        }else{
        $addon.removeClass('success');
        $addon.addClass('danger');
        $icon.attr('class', 'glyphicon glyphicon-remove');
        }

        if ($form.find('.input-group-addon.danger').length == 0) {
        $form.find('[type="submit"]').prop('disabled', false);
        }else{
        $form.find('[type="submit"]').prop('disabled', true);
        }
        });  //cierra div change key up

        $('#reciboalqfam, #precioalquiler').trigger('change');
               
        });
}
else if(selected === "No") {
$('#precioalqdiv').html("");
$('#reciboalqfamdiv').html("");  

}
}

});
</script>

<script type="text/javascript">

$('#campo').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#hasdiv').html(""); 
$('#actividaddiv').html(""); 

}
else{

if(selected === "Si") {
$('#hasdiv').html("<label class='label label-info' for='validate-optional'>Superficie en Hectareas:</label><div class='input-group'>              <input  type='number' min='0' class='form-control' name='has' id='has' placeholder='Ingrese solo numeros'>              <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>        </div>"); 
$('#actividaddiv').html("<label class='label label-info' for='validate-text'>Actividad:</label>                  <div class='input-group' >                  <input  type='text' class='form-control' name='actividad' id='actividad' placeholder='Ingrese solo letras'>                  <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>                </div>"); 


          $(document).ready(function() {

        $('#actividad, #has').on('change', function() {
        
        var $form = $(this).closest('form'),
        $group = $(this).closest('.input-group'),
        $addon = $group.find('.input-group-addon'),
        $icon = $addon.find('span'),
        state = false;

        if (!$group.data('validate')) {
        state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "number") {
        state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());}
        
        


        if (state) {
        $addon.removeClass('danger');
        $addon.addClass('success');
        $icon.attr('class', 'glyphicon glyphicon-ok');
        }else{
        $addon.removeClass('success');
        $addon.addClass('danger');
        $icon.attr('class', 'glyphicon glyphicon-remove');
        }

        if ($form.find('.input-group-addon.danger').length == 0) {
        $form.find('[type="submit"]').prop('disabled', false);
        }else{
        $form.find('[type="submit"]').prop('disabled', true);
        }
        });  //cierra div change key up

        $('#reciboalqfam, #precioalquiler').trigger('change');
               
        });
}
else if(selected === "No") {
$('#hasdiv').html(""); 
$('#actividaddiv').html(""); 
}
}

});
</script>

<script type="text/javascript">

$('#terreno').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#terrenocantdiv').html("");  
}
else{

if(selected === "Si") {
$('#terrenocantdiv').html("<label for='validate-number'>Cuántos:</label>              <div class='input-group'><input  type='number' min='0' class='form-control' name='terrenocant' id='terrenocant' placeholder='Ingrese solo numeros'>          <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>       </div>"); 
 $(document).ready(function() {

        $('#terrenocant').on('change', function() {
        
        var $form = $(this).closest('form'),
        $group = $(this).closest('.input-group'),
        $addon = $group.find('.input-group-addon'),
        $icon = $addon.find('span'),
        state = false;

        if (!$group.data('validate')) {
        state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "number") {
        state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());}
        
        


        if (state) {
        $addon.removeClass('danger');
        $addon.addClass('success');
        $icon.attr('class', 'glyphicon glyphicon-ok');
        }else{
        $addon.removeClass('success');
        $addon.addClass('danger');
        $icon.attr('class', 'glyphicon glyphicon-remove');
        }

        if ($form.find('.input-group-addon.danger').length == 0) {
        $form.find('[type="submit"]').prop('disabled', false);
        }else{
        $form.find('[type="submit"]').prop('disabled', true);
        }
        });  //cierra div change key up

        $('#terrenocant').trigger('change');
               
        });

}
else if(selected === "No") {
$('#terrenocantdiv').html(""); 
}
}

});
</script>

<script type="text/javascript">

$('#auto').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#autocantdiv').html(""); 
}
else{

if(selected === "Si") {
$('#autocantdiv').html("<label for='validate-number'>Cuántos:</label>                <div class='input-group'>                <input  type='number' min='0' class='form-control' name='autocant' id='autocant' placeholder='Ingrese solo numeros'>               <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>                </div>              </div>"); 

$(document).ready(function() {

        $('#autocant').on('change', function() {
        
        var $form = $(this).closest('form'),
        $group = $(this).closest('.input-group'),
        $addon = $group.find('.input-group-addon'),
        $icon = $addon.find('span'),
        state = false;

        if (!$group.data('validate')) {
        state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "number") {
        state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());}
        
        


        if (state) {
        $addon.removeClass('danger');
        $addon.addClass('success');
        $icon.attr('class', 'glyphicon glyphicon-ok');
        }else{
        $addon.removeClass('success');
        $addon.addClass('danger');
        $icon.attr('class', 'glyphicon glyphicon-remove');
        }

        if ($form.find('.input-group-addon.danger').length == 0) {
        $form.find('[type="submit"]').prop('disabled', false);
        }else{
        $form.find('[type="submit"]').prop('disabled', true);
        }
        });  //cierra div change key up

        $('#autocant').trigger('change');
               
        });

}
else if(selected === "No") {
$('#autocantdiv').html(""); 
}
}

});
</script>

<script type="text/javascript">

$('#moto').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#motocantdiv').html(""); 
}
else{

if(selected === "Si") {
$('#motocantdiv').html("<label for='validate-number'>Cuántos:</label>                <div class='input-group'>                <input  type='number' class='form-control' min='0' name='motocant' id='motocant' placeholder='Ingrese solo numeros'>                <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>                </div>"); 

$(document).ready(function() {

        $('#motocant').on('change', function() {
        
        var $form = $(this).closest('form'),
        $group = $(this).closest('.input-group'),
        $addon = $group.find('.input-group-addon'),
        $icon = $addon.find('span'),
        state = false;

        if (!$group.data('validate')) {
        state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "number") {
        state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());}
        
        


        if (state) {
        $addon.removeClass('danger');
        $addon.addClass('success');
        $icon.attr('class', 'glyphicon glyphicon-ok');
        }else{
        $addon.removeClass('success');
        $addon.addClass('danger');
        $icon.attr('class', 'glyphicon glyphicon-remove');
        }

        if ($form.find('.input-group-addon.danger').length == 0) {
        $form.find('[type="submit"]').prop('disabled', false);
        }else{
        $form.find('[type="submit"]').prop('disabled', true);
        }
        });  //cierra div change key up

        $('#motocant').trigger('change');
               
        });

}
else if(selected === "No") {
$('#motocantdiv').html("");  
}
}

});
</script>

