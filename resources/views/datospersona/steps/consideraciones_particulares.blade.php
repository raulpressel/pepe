
<div class="tab-pane" role="tabpanel" id="step8">

  <div class="container">
      <div class="row">
        <h3>1.8 – Consideraciones particulares</h3>
      </div>
    
        
      

        
                        
                        
<p>Detalle de las enfermedades que afectan al estudiante y a los miembros del grupo familiar (presentación de los certificados médicos correspondientes, diagnóstico y medicación)</p>


<div class="col-sm-offset-2 col-sm-5">

        <div id="proposalAccordion">
          
          <div id="tab_logiccon"> 

          <div id='addrp0'> 
            <div class="panel panel-default">
            <div class="panel-heading">
                       <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#proposalAcoordion" href="#collapseConsid">Consideraciones 1</a>
                  </h4>
  
                  </div>
                  <div id="collapseConsid" class="panel-collapse collapse in">
                      <div class="panel-body">
           

          <div class="form-group" >
              <label for="validate-letras">Parentesco:</label>
              <div class="input-group">
                    <select class="form-control" name="consideraciones[0][parentesco]" id="consideraciones[0][parentesco]" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>  
                    <option value='Abuelo'>Abuelo/a</option>
                    <option value='Concubino'>Concubino/a</option>
                    <option value='Conyuge'>Cónyuge</option>
                    <option value='Cuniado'>Cuñado/a</option>
                    <option value='Hermano'>Hermano/a</option>
                    <option value='Hijo'>Hijo/a</option>
                    <option value='madre'>Madre</option>
                    <option value='padre'>Padre</option>
                    <option value='Nieto'>Nieto/a</option>
                    <option value='novio'>Novio/a</option>
                    <option value='Nuera'>Nuera</option>
                    <option value='Otro'>Otro</option>
                    <option value='Primo'>Primo/a</option>
                    <option value='Sobrino'>Sobrino/a</option>
                    <option value='Tio'>Tio/a</option>
                    <option value='Yerno'>Yerno</option>
                </select>
                  <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
          </div>



          <div class="form-group">
            <label for="validate-letras">Enfermedad:</label>
            <div class="input-group" data-validate="letras">
            <input  type="text" class="form-control" name="consideraciones[0][enfermedad]" id="consideraciones[0].enfermedad" placeholder="Ingrese solo letras" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
         </div>

              <div class="form-group">
              <label for="validate-letras">Produce Incapacidad y/o Enfermedad cronica grave:</label>
                <div class="input-group">
                  <select  class="form-control" name="consideraciones[0][incapacidad]" id="incapacidad0" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
        
        <div style="display:none;" id="imagencertificadodiv0" class="form-group">
            <label for="validate-number">Imagen Certificado:</label>
            <div class="input-group">
              <input  type="file" id="imagencertificado0" name="consideraciones[0][imagen]" accept=".jpg, .jpeg, .png, .pdf" class="form-control" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <output id="list-imagencertificado0"></output>
              </div>
            </div>
          </div>
          </div>
          </div>


      </div> <!--  cierra div addr -->
    
      
      <div id='addrp1'>
      </div> 
    

    </div>  <!--  cierra tablogic -->

    </div> <!--  cierra div according -->


    </div>


  </div>
   <script>
         $(document).ready(function(){
          var i=1;
          var j=2;
         $("#add_con").click(function(){
          $('#addrp'+i).html("<div class='panel panel-default'><div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#proposalAcoordion' href='#collapseConsid'>Consideraciones "+(i+1)+"</a></h4></div><div id='collapseConsid' class='panel-collapse collapse in'><div class='panel-body'><div class='form-group' ><label for='validate-letras'>Parentesco:</label><div class='input-group'><select class='form-control' name='consideraciones["+i+"][parentesco]' id='consideraciones["+i+"][parentesco]' placeholder='Seleccione una opción' required><option value=''>Seleccione una opción</option><option value='Abuelo'>Abuelo/a</option><option value='Concubino'>Concubino/a</option><option value='Conyuge'>Cónyuge</option><option value='Cuniado'>Cuñado/a</option><option value='Hermano'>Hermano/a</option><option value='Hijo'>Hijo/a</option><option value='madre'>Madre</option><option value='padre'>Padre</option><option value='Nieto'>Nieto/a</option><option value='novio'>Novio/a</option><option value='Nuera'>Nuera</option><option value='Otro'>Otro</option><option value='Primo'>Primo/a</option><option value='Sobrino'>Sobrino/a</option><option value='Tio'>Tio/a</option><option value='Yerno'>Yerno</option></select><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div class='form-group'><label for='validate-letras'>Enfermedad:</label><div class='input-group' data-validate='letras'><input  type='text' class='form-control' name='consideraciones["+i+"][enfermedad]' id='consideraciones["+i+"].enfermedad' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div class='form-group'><label for='validate-letras'>Produce Incapacidad y/o Enfermedad cronica grave:</label><div class='input-group'><select  class='form-control' name='consideraciones["+i+"][incapacidad]' id='incapacidad"+i+"' placeholder='Seleccione una opción' required><option value=''>Seleccione una opción</option><option value='Si'>Si</option><option value='No'>No</option></select><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div style='display:none;' id='imagencertificadodiv"+i+"' class='form-group'><label for='validate-number'>Imagen Certificado:</label><div class='input-group'><input  type='file' id='imagencertificado"+i+"' name='consideraciones["+i+"][imagen]' accept='.jpg, .jpeg, .png, .pdf' class='form-control' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div><div class='input-group'><output id='list-imagencertificado"+i+"'></output></div></div></div></div></div>");


        
          

          $('#tab_logiccon').append('<div id="addrp'+(i+1)+'"></div>'); 
            
         

          i++; 
          j++;

          $('#incapacidad1').on('change',function()
          {
          var selected = $(this).val();

          if (selected === "") {
          $('#imagencertificadodiv1').hide(); 

          }
          else{

          if(selected === "Si") {
          $('#imagencertificadodiv1').show(); 
          }
          else if(selected === "No") {
          $('#imagencertificadodiv1').hide(); 
          }
          }

          });
        
        $(document).ready(function() {
        $('.input-group input[required], .input-group textarea[required], .input-group select[required], input-group radio[required]').on('keyup change', function() {
        var $form = $(this).closest('form'),
        $group = $(this).closest('.input-group'),
        $addon = $group.find('.input-group-addon'),
        $icon = $addon.find('span'),
        state = false;

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
        state = /^([a-zA-Z])+$/.test($(this).val())
                }
        else if ($group.data('validate') == "radio") {
            
         state = $(this).prop('checked') === true;

              
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

        $('.input-group input[required], .input-group textarea[required], .input-group select[required]').trigger('change');

               
        });





      });
         $("#delete_con").click(function(){
           if(i>1){
         $("#addrp"+(i-1)).html('');
         i--;
         }
       });

    });
  </script>
  
  <a id="add_con" class="btn btn-default pull-left">Agregar</a><a id='delete_con' class="pull-right btn btn-default">Eliminar</a>
<br>
<br>
<br>

    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>

</div>

<script type="text/javascript">

$('#incapacidad0').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#imagencertificadodiv0').hide(); 

}
else{

if(selected === "Si") {
$('#imagencertificadodiv0').show(); 
}
else if(selected === "No") {
$('#imagencertificadodiv0').hide(); 
}
}

});
</script>