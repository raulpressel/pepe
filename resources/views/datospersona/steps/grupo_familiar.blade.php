<div class="tab-pane" role="tabpanel" id="step6">
    <div class="container">
      <div class="row">
        <h3>1.6 – Otras Personas que Conforman el Grupo Familiar</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-5">

        <div id="proposalAccordion">
          
          <div id="tab_logic"> 

          <div id='addr0'> 
            <div class="panel panel-default">
            <div class="panel-heading">
                       <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#proposalAcoordion" href="#collapseContact">Familiar 1</a>
                  </h4>
  
                  </div>
                  <div id="collapseContact" class="panel-collapse collapse in">
                      <div class="panel-body">
           

            
          <div class="form-group" >
              <label for="validate-letras">Parentesco:</label>
              <div class="input-group">
                    <select class="form-control" name="familiar[0][parentesco]" id="familiar[0].parentesco" placeholder="Seleccione una opción" required>
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
            <label for="validate-letras">Apellidos y Nombres:</label>
            <div class="input-group" data-validate="letras">
            <input  type="text" class="form-control" name="familiar[0][apeynom]" id="familiar[0].apeynom" placeholder="Ingrese solo letras" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
         </div>
          

        <div class="form-group">
          <label for="validate-number">DNI:</label>
            <div class="input-group" data-validate="number">
              <input  type="text" class="form-control" name="familiar[0][dnifam]" id="familiar[0].dnifam" placeholder="Ingrese solo numeros" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>             
          

        <div class="form-group">
          <label for="validate-number">Ingresa la imagen del DNI:</label>
          <div class="input-group">
            <input type="file" id="familiar[0][imagen_dnifam]" name='familiar[0][imagen_dnifam]' accept=".jpg, .jpeg, .png" class="form-control" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
          <div class="input-group">
            <output id="list-familiar[0][imagen_dnifam]"></output>
          </div>
        </div>


        <div class="form-group">
          <label for="validate-number">Edad:</label>
            <div class="input-group" data-validate="number">
              <input   type="text" class="form-control" name="familiar[0][edadfam]" id="familiar[0].edadfam" placeholder="Ingrese solo numeros" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>             
          
        

        <div class="form-group">
            <label for="validate-letras">Ocupación:</label>
            <div class="input-group" data-validate="letras">
                <input  type="text" class="form-control" name="familiar[0][ocupacionfam]" id="familiar[0].ocupacionfam" placeholder="Ingrese solo letras" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>

        <div class="form-group">
              <label for="validate-letras">Trabaja:</label>
                <div class="input-group">
                  <select class="form-control" name="familiar[0][trabaja]" id="familiartrabaja0" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si">Si</option><option value="No">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
   

        <div style="display:none;" id="actlabfamdiv0" class="form-group">
              <label for="validate-letras">Actividad laboral:</label>
                <div class="input-group">
                  <select value="{{ old('actlab') }}" class="form-control" name="familiar[0][actlab]" id="familiaractlab0" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                      <option value="activosfam0">Empleados Activos o Jubilados</option>
                      <option value="monotrifam0">Autónomos y Monotributistas</option>
                      <option value="informalfam0">Trabajadores Informales</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
   
          
           <div style="display:none;" id="comingfamdiv0" class="form-group">

            <label style="display:none;" id="recibofam0" for="validate-number">Últimos tres recibos de sueldo:</label>
            <label style="display:none;" id="afipfam0" for="validate-number">Comrpobante de AFIP/pago monotributo:</label>
            <label style="display:none;" id="juradafam0" for="validate-number">Declaración jurada especificando actividad laboral e ingresos mensuales:</label>
            <div class="input-group">
              <input  type="file" id="familiar[0][comping]" name="familiar[0][comping]" multiple class="form-control" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <output id="list-familiar[0][comping]"></output>
              </div>
            </div>    
        
        <div style="display:none;" id="ingresosfamdiv0" class="form-group">
          <label for="validate-number">Ingresos:</label>
            <div class="input-group" data-validate="number">
              <input   type="text" class="form-control" name="familiar[0][ingresosfam]" id="familiar[0].ingresosfam" placeholder="Ingrese solo numeros" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>             


        <div class="form-group">
          <label for="validate-number">Certificación Negativa ANSES:</label>
          <div class="input-group">
            <input type="file" id="familiar[0][ansesfam]" name='familiar[0][ansesfam]' accept=".jpg, .jpeg, .png" class="form-control" required>   
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
          <div class="input-group">
            <output id="list-familiar[0][ansesfam]"></output>
          </div>
        </div>
      
      </div>
                  </div>
              </div>


      </div> <!--  cierra div addr -->
    
      
      <div id='addr1'>
      </div> 
    

    </div>  <!--  cierra tablogic -->

    </div> <!--  cierra div according -->


    </div>
      
          
          
        <script>
         $(document).ready(function(){
          
          var i=1;
          var j=2;
         $("#add_div").click(function(){
          $('#addr'+i).html("<div class='panel panel-default'><div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#proposalAcoordion' href='#collapseContact'>Familiar "+(i+1)+"</a></h4></div><div id='collapseContact' class='panel-collapse collapse in'><div class='panel-body'><div class='form-group' ><label for='validate-letras'>Parentesco:</label><div class='input-group'><select class='form-control' name='familiar["+i+"][parentesco]' id='familiar["+i+"].parentesco' placeholder='Seleccione una opción' required><option value=''>Seleccione una opción</option><option value='Abuelo'>Abuelo/a</option><option value='Concubino'>Concubino/a</option><option value='Conyuge'>Cónyuge</option><option value='Cuniado'>Cuñado/a</option><option value='Hermano'>Hermano/a</option><option value='Hijo'>Hijo/a</option><option value='madre'>Madre</option><option value='padre'>Padre</option><option value='Nieto'>Nieto/a</option><option value='novio'>Novio/a</option><option value='Nuera'>Nuera</option><option value='Otro'>Otro</option><option value='Primo'>Primo/a</option><option value='Sobrino'>Sobrino/a</option><option value='Tio'>Tio/a</option><option value='Yerno'>Yerno</option></select><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div class='form-group'><label for='validate-letras'>Apellidos y Nombres:</label><div class='input-group' data-validate='letras'><input  type='text' class='form-control' name='familiar["+i+"][apeynom]' id='familiar["+i+"].apeynom' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div class='form-group'><label for='validate-number'>DNI:</label><div class='input-group' data-validate='number'><input  type='text' class='form-control' name='familiar["+i+"][dnifam]' id='familiar["+i+"].dnifam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div class='form-group'><label for='validate-number'>Ingresa la imagen del DNI:</label><div class='input-group'><input type='file' id='familiar["+i+"][imagen_dnifam]' name='familiar["+i+"][imagen_dnifam]' accept='.jpg, .jpeg, .png' class='form-control' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div><div class='input-group'><output id='list-familiar["+i+"][imagen_dnifam]'></output></div></div><div class='form-group'><label for='validate-number'>Edad:</label><div class='input-group' data-validate='number'><input   type='text' class='form-control' name='familiar["+i+"][edadfam]' id='familiar["+i+"].edadfam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div class='form-group'><label for='validate-letras'>Ocupación:</label><div class='input-group' data-validate='letras'><input  type='text' class='form-control' name='familiar["+i+"][ocupacionfam]' id='familiar["+i+"].ocupacionfam' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div class='form-group'><label for='validate-letras'>Trabaja:</label><div class='input-group'><select class='form-control' name='familiar["+i+"][trabaja]' id='familiartrabaja"+i+"' placeholder='Seleccione una opción' required><option value=''>Seleccione una opción</option><option value='Si'>Si</option><option value='No'>No</option></select><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div style='display:none;' id='actlabfamdiv"+i+"' class='form-group'><label for='validate-letras'>Actividad laboral:</label><div class='input-group'><select class='form-control' name='familiar["+i+"][actlab]' id='familiaractlab"+i+"' placeholder='Seleccione una opción' required><option value=''>Seleccione una opción</option><option value='activosfam"+i+"'>Empleados Activos o Jubilados</option><option value='monotrifam"+i+"'>Autónomos y Monotributistas</option><option value='informalfam"+i+"'>Trabajadores Informales</option></select><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div style='display:none;' id='comingfamdiv"+i+"' class='form-group'><label style='display:none;' id='recibofam"+i+"' for='validate-number'>Últimos tres recibos de sueldo:</label><label style='display:none;' id='afipfam"+i+"' for='validate-number'>Comrpobante de AFIP/pago monotributo:</label><label style='display:none;' id='juradafam"+i+"' for='validate-number'>Declaración jurada especificando actividad laboral e ingresos mensuales:</label><div class='input-group'><input  type='file' id='familiar["+i+"][comping]' name='familiar["+i+"][comping]' multiple class='form-control' required>                <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div><div class='input-group'><output id='list-familiar["+i+"][comping]'></output></div></div><div style='display:none;' id='ingresosfamdiv"+i+"' class='form-group'><label for='validate-number'>Ingresos:</label><div class='input-group' data-validate='number'><input   type='text' class='form-control' name='familiar["+i+"][ingresosfam]' id='familiar["+i+"].ingresosfam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div class='form-group'><label for='validate-number'>Certificación Negativa ANSES:</label><div class='input-group'><input type='file' id='familiar["+i+"][ansesfam]' name='familiar["+i+"][ansesfam]' accept='.jpg, .jpeg, .png' class='form-control' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div><div class='input-group'><output id='list-familiar["+i+"][ansesfam]'></output></div></div></div></div></div>");
          

          $('#tab_logic').append('<div id="addr'+(i+1)+'"></div>'); 
            
          
          i++; 
          j++;

        
          $('#familiartrabaja1').on('change',function()
          {
          var selected = $(this).val();

          if (selected === "") {
          $('#actlabfamdiv1').hide(); 
          $("#ingresosfamdiv1").hide(); 
          }
          else{

          if(selected === "Si") {
          $('#actlabfamdiv1').show(); 
          $("#ingresosfamdiv1").show(); 
          }
          else if(selected === "No") {
          $('#actlabfamdiv1').hide(); 
          $("#ingresosfamdiv1").hide(); 
          }
          }

          });

          $('#familiaractlab1').on('change',function(){
          var selected = $(this).val();
          if (selected === "") {
            $('#recibofam1').hide(); 
            $('#afipfam1').hide(); 
            $('#juradafam1').hide();
            $('#comingfamdiv1').hide(); 
            }
          else{

          $('#comingfamdiv1').show(); 

          if(selected === "monotrifam1") {
            $('#recibofam1').hide(); 
            $('#juradafam1').hide();
            $('#afipfam1').show(); 
          }
          else if(selected === "informalfam1"){
            $('#recibofam1').hide(); 
            $('#afipfam1').hide(); 
            $('#juradafam1').show(); 
            }
          else if(selected === "activosfam1") {
            $('#afipfam1').hide(); 
            $('#juradafam1').hide();
            $('#recibofam1').show(); 
          }
          else{
            $('#comingfamdiv1').hide();  
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
        });  //cierra div change key up

        $('.input-group input[required], .input-group textarea[required], .input-group select[required]').trigger('change');
               
        }); //cierra div document ready




        });


        $("#delete_div").click(function(){
           if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
        });

    });


  </script>

  
<script type="text/javascript">
    
var toogle = (function () {
    return {
        init: function(buttonId, accordionId) {
            var that = this;
            $(buttonId).click(function() {
                that.togglePanels(accordionId, $(buttonId));
            });
        },
        togglePanels : function(accordionId, buttonContainer){
      var onButton = $(buttonContainer).children('.onToggle').eq(0);
      var offButton = $(buttonContainer).children('.offToggle').eq(0);
      
      if (onButton.hasClass('hideToggleButton')){
        this.openAllPanels(accordionId);
        offButton.addClass('hideToggleButton');
        offButton.removeClass('showToggleButton');
        onButton.removeClass('hideToggleButton');
        onButton.addClass('showToggleButton');
      }
      else{
        this.closeAllPanels(accordionId);
        onButton.addClass('hideToggleButton');
        onButton.removeClass('showToggleButton');
        offButton.addClass('showToggleButton');
        offButton.removeClass('hideToggleButton');
      }
      
        },
        openAllPanels : function(aId) {
        $(aId + ' .panel-collapse:not(".in")').collapse('show');
    },
    closeAllPanels : function(aId) {
      $(aId + ' .panel-collapse.in').collapse('hide');
    }
   }

}) ();

$(function () {
    toogle.init('#toogleButton', '#proposalAccordion');
});

</script>

  </div>
  <a id="add_div" class="btn btn-default pull-left">Agregar</a><a id='delete_div' class="pull-right btn btn-default">Eliminar</a>
<br>
<br>
<br>

    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>

</div>



<script type="text/javascript">

$('#familiartrabaja0').on('change',function()
{
var selected = $(this).val();

if (selected === "") {
$('#actlabfamdiv0').hide(); 
$("#ingresosfamdiv0").hide(); 
}
else{

if(selected === "Si") {
$('#actlabfamdiv0').show(); 
$("#ingresosfamdiv0").show(); 
}
else if(selected === "No") {
$('#actlabfamdiv0').hide(); 
$("#ingresosfamdiv0").hide(); 
}
}

});
</script>

<script type="text/javascript">
  $('#familiaractlab0').on('change',function(){
var selected = $(this).val();
if (selected === "") {
  $('#recibofam0').hide(); 
  $('#afipfam0').hide(); 
  $('#juradafam0').hide();
  $('#comingfamdiv0').hide(); 
  }
else{

$('#comingfamdiv0').show(); 

if(selected === "monotrifam0") {
  $('#recibofam0').hide(); 
  $('#juradafam0').hide();
  $('#afipfam0').show(); 
}
else if(selected === "informalfam0"){
  $('#recibofam0').hide(); 
  $('#afipfam0').hide(); 
  $('#juradafam0').show(); 
  }
else if(selected === "activosfam0") {
  $('#afipfam0').hide(); 
  $('#juradafam0').hide();
  $('#recibofam0').show(); 
}
else{
  $('#comingfamdiv0').hide();  
  }
}
});
</script>

