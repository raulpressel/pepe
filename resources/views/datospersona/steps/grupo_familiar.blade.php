<div class="tab-pane" role="tabpanel" id="step6">
    <div class="container">
      <div class="row">
        <h3>1.6 – Otras Personas que Conforman el Grupo Familiar</h3>
      </div>

        
        <div class="col-sm-offset-2 col-sm-6">
        
        <div id="proposalAccordion">
          
          <div id="tab_logic"> 

         <!-- <div id='addr0'> 
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#proposalAcoordion1" href="#collapseContact1">Familiar 1</a>
                </h4>
            </div>
            <div id="collapseContact1" class="panel-collapse collapse in">
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
          <label for="validate-number">Ingresa fotos de frente y dorso del DNI</label>
        
        </div>
        
        <div class="form-group">
          <label for="validate-number">  Solo frente</label>
          <div class="input-group">
            <input type="file" id="familiar[0][frente]"  name="familiar[0][frente]" class="form-control" accept=".jpg, .jpeg, .png" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        
        <img class="thumb" id="list-familiar0frente"> />    
        
        </div>



        <div class="form-group">
          <label for="validate-number">  Solo dorso</label>
          <div class="input-group">
            <input type="file" id="familiar[0][dorso]" name="familiar[0][dorso]" class="form-control" accept=".jpg, .jpeg, .png" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        <div class="input-group">
            <output id="list-familiar0dorso"></output>
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
   
          <div style="display:none;" id="comprobanteIngresosfam0" >
            <div class="form-group">
           

           <label style="display:none;" id="recibofam0" for="validate-number">Últimos tres recibos de sueldo</label>
            <label style="display:none;" id="afipfam0" for="validate-number">Comrpobante de AFIP/pago monotributo</label>
            <label style="display:none;" id="juradafam0" for="validate-number">Declaración jurada especificando actividad laboral e ingresos mensuales</label>
            
             

            <div style="display:none;" id="imag11" > 
              <label for="validate-number">Comprobante:</label>
              <div class="input-group">
              <input  type="file" id="familiar[0][comping1]" name="familiar[0][comping1]" accept=".jpg, .jpeg, .png, .pdf" class="form-control" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <output id="list-familiar0comping1"></output>
              </div>
            </div>
              
            </div>  
              
            <div style="display:none;" id="imag12" >
              <label for="validate-number">Comprobante:</label>
              <div class="input-group">
              <input  type="file" id="familiar[0][comping2]" name="familiar[0][comping2]" accept=".jpg, .jpeg, .png, .pdf" class="form-control" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <output id="list-familiar0comping2"></output>
              </div>
              </div>
            

            
            <div style="display:none;" id="imag13" >
              <label for="validate-number">Comprobante:</label>
              <div class="input-group">
              <input  type="file" id="familiar[0][comping3]" name="familiar[0][comping3]" accept=".jpg, .jpeg, .png, .pdf"  class="form-control" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
              <div class="input-group">
                <output id="list-familiar0comping3"></output>
              </div>
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
            <input type="file" id="familiar[0][ansesfam]" name='familiar[0][ansesfam]' accept=".jpg, .jpeg, .png, .pdf" class="form-control" required>   
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
          <div class="input-group">
            <output id="list-familiar0ansesfam"></output>
          </div>
        </div>
      
      </div>
                  </div>
              </div>


      </div>   cierra div addr -->
    
      
      <div id='addr0'>
      </div> 
      <div id='addrscriptselect0'>
      </div>
      <div id='addrscriptotroselect0'>
      </div> 
      <div id='addrscriptvalidate0'>
      </div> 
      <div id='addrscriptfrente0'>
      </div> 
      
    

    </div>  <!--  cierra tablogic -->

    </div> <!--  cierra div according -->


<a id="add_div" class="btn btn-default pull-left">Agregar</a><a id='delete_div' class="pull-right btn btn-default">Eliminar</a>

<br>
<br>
<br>


<ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>




    </div> <!-- cierra div col-6 -->
      
        
  
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
    toogle.init('#toogleButton', '#proposalAccordion1');
});

</script>

  
  </div>

  
    

</div>




<script type="text/javascript">

$('#familiartrabaja0').on('change',function()
{
var selected = $(this).val();
$('#comprobanteIngresosfam0').hide(); 

if (selected === "") {
$('#actlabfamdiv0').hide(); 
$("#ingresosfamdiv0").hide(); 
$('#comprobanteIngresosfam0').hide(); 
}
else{

if(selected === "Si") {
$('#comprobanteIngresosfam0').show(); 
$('#actlabfamdiv0').show(); 
$("#ingresosfamdiv0").show(); 

}
else if(selected === "No") {
$('#comprobanteIngresosfam0').hide(); 
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
  $('#imag11').hide();
  $('#imag12').hide();
  $('#imag13').hide();

  }
else{


if(selected === "monotrifam0") {
  $('#recibofam0').hide(); 
  $('#juradafam0').hide();
  $('#afipfam0').show(); 
  $('#imag12').hide();
  $('#imag13').hide();
  $('#imag11').show();

}
else if(selected === "informalfam0"){
  $('#recibofam0').hide(); 
  $('#afipfam0').hide(); 
  $('#juradafam0').show(); 
  $('#imag11').show();
  $('#imag13').hide();
  $('#imag12').hide();
  
  }
else if(selected === "activosfam0") {
  $('#afipfam0').hide(); 
  $('#juradafam0').hide();
  $('#recibofam0').show(); 
  $('#imag11').show();
  $('#imag12').show();
  $('#imag13').show();
}
else{
   
  }  
}
});
</script>



<script type="text/javascript">
  $(document).ready(function(){
    var i=0;
          
         $('#familiaractlab'+i).focus(function(){

          $('#comprobanteIngresosfam'+i).html('');

          
          $('#comprobanteIngresosfam'+i).html("<div class='form-group'><label style='display:none;' id='recibofam"+i+"' for='validate-number'>Últimos tres recibos de sueldo</label><label style='display:none;' id='afipfam"+i+"' for='validate-number'>Comrpobante de AFIP/pago monotributo</label>            <label style='display:none;' id='juradafam"+i+"' for='validate-number'>Declaración jurada especificando actividad laboral e ingresos mensuales</label>            <div style='display:none;' id='imag11' >           <label for='validate-number'>Comprobante:</label>              <div class='input-group'>              <input  type='file' id='familiar["+i+"][comping1]' name='familiar["+i+"][comping1]' accept='.jpg, .jpeg, .png, .pdf' class='form-control' required>              <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>              </div>              <div class='input-group'>                <output id='list-familiar"+i+"comping1'></output>              </div>            </div>            <div style='display:none;' id='imag12' >              <label for='validate-number'>Comprobante:</label>              <div class='input-group'> <input  type='file' id='familiar["+i+"][comping2]' name='familiar["+i+"][comping2]' accept='.jpg, .jpeg, .png, .pdf' class='form-control' required>   <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>  </div>   <div class='input-group'>                <output id='list-familiar"+i+"comping2'></output>              </div>              </div>                <div style='display:none;' id='imag13' >    <label for='validate-number'>Comprobante:</label>              <div class='input-group'>  <input  type='file' id='familiar["+i+"][comping3]' name='familiar["+i+"][comping3]' accept='.jpg, .jpeg, .png, .pdf'  class='form-control' required>   <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>              </div>              <div class='input-group'>                <output id='list-familiar"+i+"comping3'></output>              </div>              </div>                              <div style='display:none;' id='ingresosfamdiv"+i+"' class='form-group'>          <label for='validate-number'>Ingresos:</label>            <div class='input-group' data-validate='number'> <input   type='text' class='form-control' name='familiar["+i+"][ingresosfam]' id='familiar["+i+"].ingresosfam' placeholder='Ingrese solo numeros' required>              <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>            </div>        </div> </div>");

            
          $(document).ready(function() {

        $('.input-group input').on('change', function() {
        
        var $form = $(this).closest('form'),
        $group = $(this).closest('.input-group'),
        $addon = $group.find('.input-group-addon'),
        $icon = $addon.find('span'),
        state = false;

        if (!$group.data('validate')) {
        state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "number") {
        state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());}
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

        $('.input-group input[required]').trigger('change');
               
        }); //cierra div document ready



          $('#familiartrabaja0').on('change',function()
          {
          var selected = $(this).val();
          $('#comprobanteIngresosfam0').hide(); 

          if (selected === "") {
          $('#actlabfamdiv0').hide(); 
          $("#ingresosfamdiv0").hide(); 
          $('#comprobanteIngresosfam0').hide(); 
          }
          else{

          if(selected === "Si") {
          $('#comprobanteIngresosfam0').show(); 
          $('#actlabfamdiv0').show(); 
          $("#ingresosfamdiv0").show(); 

          }
          else if(selected === "No") {
          $('#comprobanteIngresosfam0').hide(); 
          $('#actlabfamdiv0').hide(); 
          $("#ingresosfamdiv0").hide(); 
          }
          }

          });


        
          $('#familiaractlab0').on('change',function(){
        var selected = $(this).val();
        if (selected === "") {

          $('#recibofam0').hide(); 
          $('#afipfam0').hide(); 
          $('#juradafam0').hide();
          $('#imag11').hide();
          $('#imag12').hide();
          $('#imag13').hide();

          }
        else{


        if(selected === "monotrifam0") {
          $('#recibofam0').hide(); 
          $('#juradafam0').hide();
          $('#afipfam0').show(); 
          $('#imag12').hide();
          $('#imag13').hide();
          $('#imag11').show();

        }
        else if(selected === "informalfam0"){
          $('#recibofam0').hide(); 
          $('#afipfam0').hide(); 
          $('#juradafam0').show(); 
          $('#imag11').show();
          $('#imag13').hide();
          $('#imag12').hide();
          
          }
        else if(selected === "activosfam0") {
          $('#afipfam0').hide(); 
          $('#juradafam0').hide();
          $('#recibofam0').show(); 
          $('#imag11').show();
          $('#imag12').show();
          $('#imag13').show();
        }
        else{
           
          }  
        }
        });


         
    $(document).one('click', 'input[id="familiar['+i+'][comping2]"]' , function(evt) {
    let idd = this.id;

  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    
      $('#list-familiar'+i+'comping2').html("");      
          
    // Loop through the FileList and render image files as thumbnails.
    for (var j = 0, f; f = files[j]; j++) {
 
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
          document.getElementById('list-familiar'+i+'comping2').insertBefore(span, null);
        };
      })(f);
 
      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  
    }
  document.getElementById(idd).addEventListener('change', handleFileSelect, false);
  
  }); //comping2


   $(document).one('click', 'input[id="familiar['+i+'][comping3]"]' , function(evt) {
    let idd = this.id;

  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    
      $('#list-familiar'+i+'comping3').html("");      
          
    // Loop through the FileList and render image files as thumbnails.
    for (var j = 0, f; f = files[j]; j++) {
 
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
          document.getElementById('list-familiar'+i+'comping3').insertBefore(span, null);
        };
      })(f);
 
      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  
    }
  document.getElementById(idd).addEventListener('change', handleFileSelect, false);
  
  });

    
  $(document).one('click', 'input[id="familiar['+i+'][comping1]"]' , function(evt) {
    let idd = this.id;

  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    
      $('#list-familiar'+i+'comping1').html("");

    // Loop through the FileList and render image files as thumbnails.
    for (var j = 0, f; f = files[j]; j++) {
 
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
          document.getElementById('list-familiar'+(i)+'comping1').insertBefore(span, null);
        };
      })(f);
 
      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  
    }
  document.getElementById(idd).addEventListener('change', handleFileSelect, false);
  
  
    }); //coming1


   }) 
  

  
       })
</script>


<!-- aca comienza script q crea todo de nuevo -->

<script>
         $(document).ready(function(){
          
          var i=0;
          
         $("#add_div").click(function(){
          $('#addr'+i).html("<div class='panel panel-default'><div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#proposalAcoordion"+(i+1)+"' href='#collapseContact"+(i+1)+"'>Familiar "+(i+1)+"</a> </h4>            </div><div id='collapseContact"+(i+1)+"' class='panel-collapse collapse in'><div class='panel-body'><div class='form-group' ><label for='validate-letras'>Parentesco:</label><div class='input-group'>  <select class='form-control' name='familiar["+i+"][parentesco]' id='familiar["+i+"].parentesco' placeholder='Seleccione una opción' required> <option value=''>Seleccione una opción</option><option value='Abuelo'>Abuelo/a</option><option value='Concubino'>Concubino/a</option>  <option value='Conyuge'>Cónyuge</option> <option value='Cuniado'>Cuñado/a</option>  <option value='Hermano'>Hermano/a</option>     <option value='Hijo'>Hijo/a</option>  <option value='madre'>Madre</option>   <option value='padre'>Padre</option>     <option value='Nieto'>Nieto/a</option>   <option value='novio'>Novio/a</option>   <option value='Nuera'>Nuera</option> <option value='Otro'>Otro</option> <option value='Primo'>Primo/a</option>  <option value='Sobrino'>Sobrino/a</option> <option value='Tio'>Tio/a</option> <option value='Yerno'>Yerno</option>  </select>    <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div> </div>  <div class='form-group'> <label for='validate-letras'>Apellidos y Nombres:</label>   <div class='input-group' data-validate='letras'>            <input  type='text' class='form-control' name='familiar["+i+"][apeynom]' id='familiar["+i+"].apeynom' placeholder='Ingrese solo letras' required>            <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>        </div>  </div> <div class='form-group'> <label for='validate-number'>DNI:</label>            <div class='input-group' data-validate='number'>  <input  type='text' class='form-control' name='familiar["+i+"][dnifam]' id='familiar["+i+"].dnifam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div>  </div><div class='form-group'> <label for='validate-number'>Ingresa fotos de frente y dorso del DNI</label>   </div><div class='form-group'>  <label for='validate-number'>  Solo frente</label>          <div class='input-group'>   <input type='file' id='familiar["+i+"][frente]' name='familiar["+i+"][frente]' class='form-control' accept='.jpg, .jpeg, .png' required> <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div>  </div><div id='list-familiar["+i+"][frente]-1' style='display:none;' class='form-group'> <div class='input-group'><img class='thumb' id='list-familiar["+i+"][frente]' /> </div></div><div class='form-group'>          <label for='validate-number'>  Solo dorso</label> <div class='input-group'> <input type='file' id='familiar["+i+"][dorso]' name='familiar["+i+"][dorso]' class='form-control' accept='.jpg, .jpeg, .png' required> <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div>    </div><div id='list-familiar["+i+"][dorso]-1' style='display:none;' class='form-group'>    <div class='input-group'>  <img class='thumb' id='list-familiar["+i+"][dorso]'></output> </div></div> <div class='form-group'>   <label for='validate-number'>Edad:</label> <div class='input-group' data-validate='number'>  <input   type='text' class='form-control' name='familiar["+i+"][edadfam]' id='familiar["+i+"].edadfam' placeholder='Ingrese solo numeros' required> <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div>  </div>   <div class='form-group'> <label for='validate-letras'>Ocupación:</label> <div class='input-group' data-validate='letras'> <input  type='text' class='form-control' name='familiar["+i+"][ocupacionfam]' id='familiar["+i+"].ocupacionfam' placeholder='Ingrese solo letras' required> <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>  </div></div> <div class='form-group'> <label for='validate-letras'>Trabaja:</label> <div class='input-group'><select class='form-control' name='familiar["+i+"][trabaja]' id='familiartrabaja"+i+"' placeholder='Seleccione una opción' required>  <option value=''>Seleccione una opción</option><option value='Si'>Si</option><option value='No'>No</option>                </select>    <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>       </div>          </div><div style='display:none;' id='actlabfamdiv"+i+"' class='form-group'>  <label for='validate-letras'>Actividad laboral:</label>   <div class='input-group'>  <select class='form-control' name='familiar["+i+"][actlab]' id='familiaractlab"+i+"' placeholder='Seleccione una opción' required> <option value=''>Seleccione una opción</option><option value='activosfam"+i+"'>Empleados Activos o Jubilados</option>  <option value='monotrifam"+i+"'>Autónomos y Monotributistas</option> <option value='informalfam"+i+"'>Trabajadores Informales</option></select><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>  </div>          </div>     <div style='display:none;' id='comprobanteIngresosfam"+i+"' >   <div class='form-group'>  <label style='display:none;' id='recibofam"+i+"' for='validate-number'>Últimos tres recibos de sueldo</label>  <label style='display:none;' id='afipfam0' for='validate-number'>Comrpobante de AFIP/pago monotributo</label>    <label style='display:none;' id='juradafam"+i+"' for='validate-number'>Declaración jurada especificando actividad laboral e ingresos mensuales</label> <div style='display:none;' id='imag"+(i+1)+"1' > <label for='validate-number'>Comprobante:</label>   <div class='input-group'>  <input  type='file' id='familiar["+i+"][comping1]' name='familiar["+i+"][comping1]' accept='.jpg, .jpeg, .png, .pdf' class='form-control' required> <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div> </div><div id='list-familiar["+i+"][comping1]-1' style='display:none;' class='form-group'><div class='input-group'><img class='thumb' id='list-familiar["+i+"][comping1]' />   </div> </div></div><div style='display:none;' id='imag"+(i+1)+"2' > <label for='validate-number'>Comprobante:</label> <div class='input-group'><input  type='file' id='familiar["+i+"][comping2]' name='familiar["+i+"][comping2]' accept='.jpg, .jpeg, .png, .pdf' class='form-control' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>      </div></div><div id='list-familiar["+i+"][comping2]-1' style='display:none;' class='form-group'><div class='input-group'> <img class='thumb' id='list-familiar["+i+"][comping2]' /></div></div><div style='display:none;' id='imag"+(i+1)+"3' ><label for='validate-number'>Comprobante:</label><div class='input-group'>  <input  type='file' id='familiar["+i+"][comping3]' name='familiar["+i+"][comping3]' accept='.jpg, .jpeg, .png, .pdf'  class='form-control' required>  <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div id='list-familiar["+i+"][comping3]-1' style='display:none;' class='form-group'><div class='input-group'><img class='thumb' id='list-familiar["+i+"][comping3]' /></div> </div></div> <div style='display:none;' id='ingresosfamdiv"+i+"' class='form-group'> <label for='validate-number'>Ingresos:</label>   <div class='input-group' data-validate='number'><input   type='text' class='form-control' name='familiar["+i+"][ingresosfam]' id='familiar["+i+"].ingresosfam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>  </div></div> <div class='form-group'><label for='validate-number'>Certificación Negativa ANSES:</label><div class='input-group'> <input type='file' id='familiar["+i+"][ansesfam]' name='familiar["+i+"][ansesfam]' accept='.jpg, .jpeg, .png, .pdf' class='form-control' required>   <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div> </div><div id='list-familiar["+i+"][ansesfam]-1' style='display:none;' class='form-group'><div class='input-group'> <img class='thumb' id='list-familiar["+i+"][ansesfam]'/></div></div></div></div>  </div></div>  <script type='text/javascript'> var toogle = (function () {    return {        init: function(buttonId, accordionId) {    var that = this;            $(buttonId).click(function() {   that.togglePanels(accordionId, $(buttonId));   });   }, togglePanels : function(accordionId, buttonContainer){ var onButton = $(buttonContainer).children('.onToggle').eq(0); var offButton = $(buttonContainer).children('.offToggle').eq(0); if (onButton.hasClass('hideToggleButton')){        this.openAllPanels(accordionId);  offButton.addClass('hideToggleButton');        offButton.removeClass('showToggleButton');        onButton.removeClass('hideToggleButton');       onButton.addClass('showToggleButton');      }      else{        this.closeAllPanels(accordionId);        onButton.addClass('hideToggleButton');        onButton.removeClass('showToggleButton');        offButton.addClass('showToggleButton');        offButton.removeClass('hideToggleButton');      }              },        openAllPanels : function(aId) {        $(aId + ' .panel-collapse:not(.in)').collapse('show');    },    closeAllPanels : function(aId) {      $(aId + ' .panel-collapse.in').collapse('hide');    }   }}) (); $(function () {    toogle.init('#toogleButton', '#proposalAccordion"+(i+1)+"');}); ");

      $('#addrscriptselect'+i).html(" <script type='text/javascript'> $('#familiartrabaja"+i+"').on('change',function(){var selected = $(this).val();$('#comprobanteIngresosfam"+i+"').hide(); if (selected === '') {$('#actlabfamdiv"+i+"').hide();$('#ingresosfamdiv"+i+"').hide();$('#comprobanteIngresosfam"+i+"').hide();} else{ if(selected === 'Si') {$('#comprobanteIngresosfam"+i+"').show();$('#actlabfamdiv"+i+"').show(); $('#ingresosfamdiv"+i+"').show(); } else if(selected === 'No') {$('#comprobanteIngresosfam"+i+"').hide();$('#actlabfamdiv"+i+"').hide(); $('#ingresosfamdiv"+i+"').hide();}}}); ");

        $('#addrscriptotroselect'+i).html(" <script type='text/javascript'> $('#familiaractlab"+i+"').on('change',function(){ var selected = $(this).val();  if (selected === '') { $('#recibofam"+i+"').hide();   $('#afipfam"+i+"').hide();    $('#juradafam"+i+"').hide(); $('#imag"+(i+1)+"1').hide();  $('#imag"+(i+1)+"2').hide(); $('#imag"+(i+1)+"3').hide(); }  else{ if(selected === 'monotrifam"+i+"') {  $('#recibofam"+i+"').hide(); $('#juradafam"+i+"').hide(); $('#afipfam"+i+"').show(); $('#imag"+(i+1)+"1').show();  $('#imag"+(i+1)+"2').hide(); $('#imag"+(i+1)+"3').hide(); } else if(selected === 'informalfam"+i+"') { $('#recibofam"+i+"').hide();  $('#afipfam"+i+"').hide();             $('#juradafam"+i+"').show();   $('#imag"+(i+1)+"1').show();       $('#imag"+(i+1)+"2').hide();     $('#imag"+(i+1)+"3').hide();    }          else if(selected === 'activosfam"+i+"') {         $('#afipfam"+i+"').hide();             $('#juradafam"+i+"').hide();            $('#recibofam"+i+"').show();             $('#imag"+(i+1)+"1').show();            $('#imag"+(i+1)+"2').show();            $('#imag"+(i+1)+"3').show();          }          }          });");

        $('#addrscriptvalidate'+i).html(" <script type='text/javascript'> $(document).ready(function() {         $('.input-group input[required], .input-group textarea[required], .input-group select[required], input-group radio[required]').on('keyup change', function() {        var $form = $(this).closest('form'),        $group = $(this).closest('.input-group'),        $addon = $group.find('.input-group-addon'),        $icon = $addon.find('span'),        state = false;        if (!$group.data('validate')) {        state = $(this).val() ? true : false;        }else if ($group.data('validate') == 'email') {        state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($(this).val())        }else if($group.data('validate') == 'phone') {        state = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test($(this).val())        }else if ($group.data('validate') == 'length') {        state = $(this).val().length >= $group.data('length') ? true : false;        }else if ($group.data('validate') == 'number') {        state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());}        else if ($group.data('validate') == 'date') {        state = /^([0-9]{4})-(1[0-2]|0[1-9])-(3[0-1]|0[1-9]|[1-2][0-9])$/.test($(this).val())        }        else if ($group.data('validate') == 'letras') {        state = /^([a-zñA-ZÑ]+(\s*[a-zñA-ZÑ]*)*[a-zñA-ZÑ])+$/.test($(this).val())                               }        if (state) {        $addon.removeClass('danger');        $addon.addClass('success');        $icon.attr('class', 'glyphicon glyphicon-ok');        }else{        $addon.removeClass('success');        $addon.addClass('danger');        $icon.attr('class', 'glyphicon glyphicon-remove');        }        if ($form.find('.input-group-addon.danger').length == 0) {        $form.find('[type=submit]').prop('disabled', false);        }else{        $form.find('[type=submit]').prop('disabled', true);        }        });   $('.input-group input[required], .input-group textarea[required], .input-group select[required]').trigger('change');        }); " );

        

          
        $('#addrscriptfrente'+i).html('<script type="text/javascript"> $(document).on("click", "input[type='+"file"+']", function(evt) { let idd = this.id; document.getElementById(idd).onchange = function () { var reader = new FileReader(); reader.onload = function (e) { document.getElementById("list-" + idd).src = e.target.result;             document.getElementById("list-" + idd+ "-1").style.display = "inline";   }; reader.readAsDataURL(this.files[0]); }; });');

        $('#familiaractlab'+i).focus(function(){

          
          $('#comprobanteIngresosfam'+i).html("");

          
          $('#comprobanteIngresosfam'+i).html("<div class='form-group'>  <label style='display:none;' id='recibofam"+i+"' for='validate-number'>Últimos tres recibos de sueldo</label>  <label style='display:none;' id='afipfam0' for='validate-number'>Comrpobante de AFIP/pago monotributo</label>    <label style='display:none;' id='juradafam"+i+"' for='validate-number'>Declaración jurada especificando actividad laboral e ingresos mensuales</label> <div style='display:none;' id='imag"+(i+1)+"1' > <label for='validate-number'>Comprobante:</label>   <div class='input-group'>  <input  type='file' id='familiar["+i+"][comping1]' name='familiar["+i+"][comping1]' accept='.jpg, .jpeg, .png' class='form-control' required> <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span> </div>  </div><div id='list-familiar["+i+"][comping1]-1' style='display:none;' class='form-group'><div class='input-group'><img class='thumb' id='list-familiar["+i+"][comping1]' />   </div> </div></div><div style='display:none;' id='imag"+(i+1)+"2' > <label for='validate-number'>Comprobante:</label> <div class='input-group'><input  type='file' id='familiar["+i+"][comping2]' name='familiar["+i+"][comping2]' accept='.jpg, .jpeg, .png' class='form-control' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>      </div></div><div id='list-familiar["+i+"][comping2]-1' style='display:none;' class='form-group'><div class='input-group'> <img class='thumb' id='list-familiar["+i+"][comping2]' /></div></div><div style='display:none;' id='imag"+(i+1)+"3' ><label for='validate-number'>Comprobante:</label><div class='input-group'>  <input  type='file' id='familiar["+i+"][comping3]' name='familiar["+i+"][comping3]' accept='.jpg, .jpeg, .png'  class='form-control' required>  <span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><div id='list-familiar["+i+"][comping3]-1' style='display:none;' class='form-group'><div class='input-group'><img class='thumb' id='list-familiar["+i+"][comping3]' /></div> </div></div> <div style='display:none;' id='ingresosfamdiv"+i+"' class='form-group'> <label for='validate-number'>Ingresos:</label>   <div class='input-group' data-validate='number'><input   type='text' class='form-control' name='familiar["+i+"][ingresosfam]' id='familiar["+i+"].ingresosfam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span>  </div></div> <script type='text/javascript'> $(document).ready(function() {         $('.input-group input[required], .input-group textarea[required], .input-group select[required], input-group radio[required]').on('keyup change', function() {        var $form = $(this).closest('form'),        $group = $(this).closest('.input-group'),        $addon = $group.find('.input-group-addon'),        $icon = $addon.find('span'),        state = false;        if (!$group.data('validate')) {        state = $(this).val() ? true : false;        }else if ($group.data('validate') == 'email') {        state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($(this).val())        }else if($group.data('validate') == 'phone') {        state = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test($(this).val())        }else if ($group.data('validate') == 'length') {        state = $(this).val().length >= $group.data('length') ? true : false;        }else if ($group.data('validate') == 'number') {        state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());}        else if ($group.data('validate') == 'date') {        state = /^([0-9]{4})-(1[0-2]|0[1-9])-(3[0-1]|0[1-9]|[1-2][0-9])$/.test($(this).val())        }        else if ($group.data('validate') == 'letras') {        state = /^([a-zñA-ZÑ]+(\s*[a-zñA-ZÑ]*)*[a-zñA-ZÑ])+$/.test($(this).val())                               }        if (state) {        $addon.removeClass('danger');        $addon.addClass('success');        $icon.attr('class', 'glyphicon glyphicon-ok');        }else{        $addon.removeClass('success');        $addon.addClass('danger');        $icon.attr('class', 'glyphicon glyphicon-remove');        }        if ($form.find('.input-group-addon.danger').length == 0) {        $form.find('[type=submit]').prop('disabled', false);        }else{        $form.find('[type=submit]').prop('disabled', true);        }        });   $('.input-group input[required], .input-group textarea[required], .input-group select[required]').trigger('change');        }); ");

          });



           

          $('#tab_logic').append('<div id="addr'+(i+1)+'"></div><div id="addrscriptselect'+(i+1)+'"></div><div id="addrscriptotroselect'+(i+1)+'"></div><div id="addrscriptvalidate'+(i+1)+'"></div> <div id="addrscriptfrente'+(i+1)+'"></div> '); 

          i++;

            });    
          
          $("#delete_div").click(function(){
           if(i>0){
         $("#addr"+(i-1)).html('');
         $("#addrscriptselect"+(i-1)).html('');
         $("#addrscriptotroselect"+(i-1)).html('');
         $("#addrscriptvalidate"+(i-1)).html('');
         $("#addrscriptfrente"+(i-1)).html('');
         

         i--;
         }
      
      
      

////////////////////////////// hasta aca revisado


  
       });
    });
</script>

