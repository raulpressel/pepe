<div class="tab-pane" role="tabpanel" id="step3">
  <div class="container">
    <div class="row">
      <h3>1.3 - Situación Económica del Estudiante</h3>
    </div>

    
    <div class="col-sm-offset-2 col-sm-6" >
      
        <div class="form-group">
              <label for="validate-letras">Trabaja:</label>
                <div class="input-group">
                  <select value="{{ old('trabaja') }}" class="form-control" name="trabaja" id="trabaja" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
        </div>
   
                  <div class="col-sm-offset-3 col-sm-4">

        <div style="display:none;" id="actividad" class="form-group">
              <label for="validate-letras">Actividad laboral:</label>
                <div class="input-group">
                  <select value="{{ old('actlab') }}" class="form-control" name="actlab" id="actlab" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                      <option value="activos">Empleados Activos o Jubilados</option>
                      <option value="monotri">Autónomos y Monotributistas</option>
                      <option value="informal">Trabajadores Informales</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
   
          
           <div style="display:none;" id="comprobanteIngresos" >
            <div class="form-group">

            <label style="display:none;" id="recibo" for="validate-number">Últimos tres recibos de sueldo:</label>
            <label style="display:none;" id="afip" for="validate-number">Comrpobante de AFIP/pago monotributo:</label>
            <label style="display:none;" id="jurada" for="validate-number">Declaración jurada especificando actividad laboral e ingresos mensuales:</label>
            <div class="input-group">
              <input type="file" id="comping1" name="comping1" multiple accept=".jpg, .jpeg, .png, .pdf" class="form-control" required>
              
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <img class="thumb" id="list-comping1" />
              </div>

              </div>
            
              <div style="display:none;" id="comprobanteIngresos2" class="form-group">
            <div class="input-group">
              <input  type="file" id="comping2" name="comping2" multiple accept=".jpg, .jpeg, .png, .pdf" class="form-control" >
              
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <output id="list-comping2"></output>
              </div>
              </div>            

            <div style="display:none;" id="comprobanteIngresos3" class="form-group">
            <div  class="input-group">
              
              <input type="file" id="comping3" name="comping3" multiple accept=".jpg, .jpeg, .png, .pdf" class="form-control" >
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <output id="list-comping3"></output>
              </div>
            </div>
            

          </div> <!-- cierra div comprobanteingreso -->

        <div style="display:none;" id="sueldodiv" class="form-group">
          <label for="validate-number">Ingresos Propios (Mensuales) $:</label>
          <div class="input-group" data-validate="number">
            <input value="{{ old('sueldo') }}" type="number" min="0" class="form-control" name="sueldo" id="sueldo" placeholder="Ingrese solo numeros" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>  

        </div>

            <div class="col-sm-offset-2 col-sm-6" >
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


<script type="text/javascript">

$('#trabaja').on('change',function()
{
var selected = $(this).val();

$("#actlab").empty();
$("#actlab").append("<option value='' selected>Seleccione una opción </option>");
$("#actlab").append("<option value='activos'>Empleados Activos o Jubilados </option>");
$("#actlab").append("<option value='monotri'>Autónomos y Monotributistas </option>");
$("#actlab").append("<option value='informal'>Trabajadores Informales </option>");


if (selected === "") {
$('#actividad').hide(); 
$('#comprobanteIngresos').hide();
$('#sueldodiv').hide();


}
else{

if(selected === "Si") {

$('#actividad').show(); 
$('#sueldodiv').show(); 
 
}
else {
$('#actividad').hide(); 
$('#comprobanteIngresos').hide(); 
$('#sueldodiv').hide(); 

}

if(selected === "No") {
$('#actividad').hide(); 
$('#sueldodiv').hide(); 
}

}

});
</script>

<script type="text/javascript">

$('#actlab').on('change',function()
{
var selected = $(this).val();


if (selected === "") {
$('#recibo').hide(); 
$('#afip').hide(); 
$('#jurada').hide();
$('#comprobanteIngresos').hide(); 
$('#comprobanteIngresos2').hide(); 
$('#comprobanteIngresos3').hide();  
   
}
else{

$('#comprobanteIngresos').show(); 

if(selected === "monotri") {
  $('#recibo').hide(); 
  $('#jurada').hide();
  $('#afip').show();
  $('#comprobanteIngresos2').hide(); 
  $('#comprobanteIngresos3').hide();  
}
else if(selected === "informal"){
  $('#recibo').hide(); 
  $('#afip').hide(); 
  $('#jurada').show();
  $('#comprobanteIngresos2').hide(); 
  $('#comprobanteIngresos3').hide();  
  }
else if(selected === "activos") {
  $('#afip').hide(); 
  $('#jurada').hide();
  $('#recibo').show(); 
  $('#comprobanteIngresos2').show(); 
  $('#comprobanteIngresos3').show();  
}
else{

  $('#recibo').hide(); 
  $('#afip').hide(); 
  $('#jurada').hide();
  $('#comprobanteIngresos').hide(); 
  $('#comprobanteIngresos2').hide(); 
  $('#comprobanteIngresos3').hide();  
  }
}


});
</script>


<script >
  $(document).ready(function(){
          
         $("#actlab").focus(function(){

          $('#comprobanteIngresos').html('');

          
          $('#comprobanteIngresos').html("<div class='form-group'><label style='display:none;' id='recibo' for='validate-number'>Últimos tres recibos de sueldo:</label><label style='display:none;' id='afip' for='validate-number'>Comrpobante de AFIP/pago monotributo:</label><label style='display:none;' id='jurada' for='validate-number'>Declaración jurada especificando actividad laboral e ingresos mensuales:</label><div> <label >Comprobante:</label> </div><div class='input-group'><input type='file' id='comping1' name='comping1' accept='.jpg, .jpeg, .png' class='form-control' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div id='list-comping1-1' style='display:none;' class='form-group'><div class='input-group'><img class='thumb' id='list-comping1' />              </div></div><div style='display:none;' id='comprobanteIngresos2' class='form-group'><div> <label >Comprobante:</label> </div><div class='input-group'><input  type='file' id='comping2' name='comping2'  accept='.jpg, .jpeg, .png' class='form-control'><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div id='list-comping2-1' style='display:none;' class='form-group'><div class='input-group'><img class='thumb' id='list-comping2' />              </div></div><div style='display:none;' id='comprobanteIngresos3' class='form-group'><div> <label >Comprobante:</label> </div><div  class='input-group'><input type='file' id='comping3' name='comping3'  accept='.jpg, .jpeg, .png' class='form-control' ><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div id='list-comping3-1' style='display:none;' class='form-group'><div class='input-group'><img class='thumb' id='list-comping3' />             </div></div>");

          
          
            

          $(document).ready(function() {
        $('#sueldo, #comping1, #comping2, #comping3').on('change', function() {
        var $form = $(this).closest('form'),
        $group = $(this).closest('.input-group'),
        $addon = $group.find('.input-group-addon'),
        $icon = $addon.find('span'),
        state = false;

        console.log($(this).val());

        if (!$group.data('validate')) {
        state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "email") {
        state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($(this).val())
        }else if($group.data('validate') == 'phone') {
        state = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test($(this).val())
        }else if ($group.data('validate') == "length") {
        state = $(this).val().length >= $group.data('length') ? true : false;
        }else if ($group.data('validate') == "number") {
        state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());}
        else if ($group.data('validate') == "date") {
        state = /^([0-9]{4})-(1[0-2]|0[1-9])-(3[0-1]|0[1-9]|[1-2][0-9])$/.test($(this).val())
        }
        else if ($group.data('validate') == "letras") {
        state = /^([a-zñA-ZÑ]+(\s*[a-zñA-ZÑ]*)*[a-zñA-ZÑ])+$/.test($(this).val())
                }
        
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
        });

        $('#sueldo, #comping1, #comping2, #comping3').trigger('change');

               
        });

         
  


   }) 
       })
</script>