<div class="tab-pane" role="tabpanel" id="step5">
    <div class="container">
      <div class="row">
        <h3>1.5 - Viaja para cursar</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-6">

     

          <div class="form-group">
              <label for="validate-letras">Utiliza colectivos Urbanos:</label>
                <div class="input-group">
                  <select value="{{ old('urbano') }}" class="form-control" name="urbano" id="urbano" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
    
      <div style="display:none;" id="cantviajadiv" class="form-group">
              <label for="validate-letras">Cantidad de veces que viaja por semana:</label>
                <div class="input-group">
                  <select class="form-control" name="cantviaja" id="cantviaja" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>

       
          <div class="form-group">
              <label for="validate-letras">Utiliza colectivos de Media Distancia:</label>
                <div class="input-group">
                  <select value="{{ old('mediadist') }}" class="form-control" name="mediadist" id="mediadist" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
  
  <div style="display:none;" id="cantviajamediadiv" class="form-group">
              <label for="validate-letras">Cantidad de veces que viaja por semana:</label>
                <div class="input-group">
                  <select value="{{ old('cantviajamedia') }}" class="form-control" name="cantviajamedia" id="cantviajamedia" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
    
 
        <div style="display:none;" id="recibopasajdiv" class="form-group">

            <label for="validate-number">Recibo Pasaje de transporte:</label>
            
            <div class="input-group">
              <input  type="file" id="recibopasaj" name="recibopasaj" accept=".jpg, .jpeg, .png, .pdf" class="form-control">
                <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
              <div class="input-group">
                <output id="list-recibopasaj"></output>
              </div>
            </div>
         
        <div style="display:none;" id="preciopasajediv" class="form-group">
          <label for="validate-number">Precio del Pasaje $:</label>
          <div class="input-group" data-validate="number">
            <input value="{{ old('preciopasaje') }}"  type="number" min="0" class="form-control" name="preciopasaje" id="preciopasaje" placeholder="Ingrese solo numeros" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>  

        <div style="display:none;" id="cantkmdiv" class="form-group">
          <label for="validate-number">Cantidad de kilometros:</label>
          <div class="input-group" data-validate="number">
            <input value="{{ old('cantkilometros') }}"  type="number" min="0" max="500" class="form-control" name="cantkm" id="cantkm" placeholder="Ingrese solo numeros" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
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

$('#urbano').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#cantviajadiv').hide(); 

}
else{



if(selected === "Si") {

$('#cantviajadiv').show(); 
 }
else if(selected === "No") {
$('#cantviajadiv').hide(); 
}
}

});
</script>

<script type="text/javascript">

$('#mediadist').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#cantviajamediadiv').hide();
$('#recibopasajdiv').hide(); 
$('#preciopasajediv').hide();
$('#cantkm ').hide();


}
else{

if(selected === "Si") {
$('#cantviajamediadiv').show();
$('#recibopasajdiv').show(); 
$('#preciopasajediv').show(); 
$('#cantkm ').show();
 }
else if(selected === "No") {
$('#cantviajamediadiv').hide();
$('#recibopasajdiv').hide(); 
$('#preciopasajediv').hide(); 
$('#cantkm ').show();
}
}

});
</script>


<script >
  $(document).ready(function(){
          
         $("#mediadist").focus(function(){

          $('#recibopasajdiv').html('');

          
          $('#recibopasajdiv').html("<label for='validate-number'>Recibo Pasaje de transporte:</label>        <div class='input-group'><input  type='file' id='recibopasaj' name='recibopasaj' accept='.jpg, .jpeg, .png, .pdf' class='form-control' required>   <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div> <div class='input-group'>              <output id='list-recibopasaj'></output></div>");


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

         
$(document).one('click', 'input[id="recibopasaj"]' , function(evt) {
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
