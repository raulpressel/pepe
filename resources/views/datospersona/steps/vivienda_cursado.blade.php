<div class="tab-pane" role="tabpanel" id="step4">
    <div class="container">
      <div class="row">
        <h3>1.4 - Vivienda durante el cursado</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-6">


        <div class="form-group">
        <label for="validate-text">Domicilio durante el cursado:</label>
        <div class="input-group">
        <input value="{{ old('domicursa') }}" type="text" class="form-control" name="domicursa" id="domicursa" placeholder="Ingrese letras y numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>


          <div class="form-group">
              <label for="validate-letras">Casa de Familiares:</label>
                <div class="input-group">
                  <select value="{{ old('casafam') }}" class="form-control" name="casafam" id="casafam" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>


          <div  class="form-group">
              <label for="validate-letras">Alquila:</label>
                <div class="input-group">
                  <select value="{{ old('urbano') }}" class="form-control" name="alq" id="alq" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
        </div>

                <div class="col-sm-offset-3 col-sm-4">

        <div style="display:none;" id="reciboalqdiv" class="form-group">

            </div>
   
        <div style="display:none;" id="montoalqdiv" class="form-group">
          <label class="label label-info" for="validate-number">Monto  $</label>
          <div class="input-group" data-validate="number">
            <input value="{{ old('montoalq') }}" type="number" class="form-control" name="montoalq" id="montoalq" placeholder="Ingrese solo numeros" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>             
        
      </div>

      <div class="col-sm-offset-2 col-sm-6">


    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>
  </div>
  

</div>
</div>


<script type="text/javascript">

$('#alq').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#montoalqdiv').hide(); 
$('#reciboalqdiv').hide();

}
else{



if(selected === "Si") {

$('#reciboalqdiv').show(); 
$('#montoalqdiv').show(); 
 
}
else if(selected === "No") {
$('#montoalqdiv').hide(); 
$('#reciboalqdiv').hide(); 

}


}

});
</script>

<script >
  $(document).ready(function(){
          
         $("#alq").focus(function(){

          $('#reciboalqdiv').html('');

          
          $('#reciboalqdiv').html("<label class='label label-info' for='validate-number'>Recibo de Alquiler</label><div class='input-group'> <input  type='file' id='reciboalq' name='reciboalq' accept='.jpg, .jpeg, .png' class='form-control' required>  <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div> </div><div id='list-reciboalq-1' style='display:none;' class='form-group'><div class='input-group'> <img class='thumb' id='list-reciboalq' />  </div>");

          

            
            
          

          $(document).ready(function() {

        $('#montoalq, #reciboalq').on('change', function() {
        
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

        $('.input-group input[required]').trigger('change');
               
        }); //cierra div document ready



   }) 
       })
</script>
