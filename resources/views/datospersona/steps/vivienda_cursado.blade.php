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
        
        <div style="display:none;" id="reciboalqdiv" class="form-group">

            <label for="validate-number">Recibo de Alquiler:</label>
            
            <div class="input-group">
              <input  type="file" id="reciboalq" name="reciboalq" accept=".jpg, .jpeg, .png, .pdf" class="form-control" required>
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

<script >
  $(document).ready(function(){
          
         $("#alq").focus(function(){

          $('#reciboalqdiv').html('');

          
          $('#reciboalqdiv').html("<label for='validate-number'>Recibo de Alquiler:</label><div class='input-group'> <input  type='file' id='reciboalq' name='reciboalq' accept='.jpg, .jpeg, .png, .pdf' class='form-control' required>  <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div>             <div class='input-group'> <output id='list-reciboalq'></output>  </div>");

          

            
            
          

          $(document).ready(function() {

        $('.input-group input[required]').on('change', function() {
        
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

         
$(document).one('click', 'input[id="reciboalq"]' , function(evt) {
    let idd = this.id;

  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    
      $('#list-'+ idd).html("");      
          
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {
 
      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }
 
      var reader = new FileReader();
 
      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['Nombre: ', escape(theFile.name), ' || Tamanio: ', escape(theFile.size), ' bytes || type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/><br />'].join('');
          document.getElementById('list-'+ idd).insertBefore(span, null);
        };
      })(f);
 
      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  
    }
  document.getElementById(idd).addEventListener('change', handleFileSelect, false);
  
  });

   }) 
       })
</script>
