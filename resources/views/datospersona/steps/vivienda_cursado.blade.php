<div class="tab-pane" role="tabpanel" id="step4">
    <div class="container">
      <div class="row">
        <h3>1.4 - Vivienda durante el cursado</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-5">


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
        <div style="display:none;" id="reciboalqdiv" class="form-group">

            <label for="validate-number">Recibo de Alquiler:</label>
            
            <div class="input-group">
              <input  type="file" id="reciboalq" name="reciboalq[]" multiple class="form-control" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <output id="list-reciboalq"></output>
              </div>
            </div>
   
        <div style="display:none;" id="montoalqdiv" class="form-group">
          <label for="validate-number">Monto  $:</label>
          <div class="input-group" data-validate="number">
            <input value="{{ old('montoalq') }}" type="number" class="form-control" name="montoalq" id="montoalq" placeholder="Ingrese solo numeros" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
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