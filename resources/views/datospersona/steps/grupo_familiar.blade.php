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
              <div class="input-group" data-validate="letras">
                  <input  type="text" class="form-control" name="familiar[0][parentesco]" id="familiar[0].parentesco" placeholder="Ingrese solo letras" required>
                  <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
          </div>    
          <p><i>Ingrese solo letras</i></p>            



          <div class="form-group">
            <label for="validate-letras">Apellidos y Nombres:</label>
            <div class="input-group" data-validate="letras">
            <input  type="text" class="form-control" name="familiar[0][apeynom]" id="familiar[0].apeynom" placeholder="Ingrese solo letras" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
         </div>
          <p><i>Ingrese solo letras</i></p>

        <div class="form-group">
          <label for="validate-number">DNI:</label>
            <div class="input-group" data-validate="number">
              <input  type="text" class="form-control" name="familiar[0][dnifam]" id="familiar[0].dnifam" placeholder="Ingrese solo numeros" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>             
          <p><i>Ingrese solo numeros</i></p>


        <div class="form-group">
          <label for="validate-number">Ingresa la imagen del DNI:</label>
          <div class="input-group">
            <input type="file" name='familiar[0][imagen_dnifam]' accept=".jpg, .jpeg, .png" class="form-control" required>
          </div>
        </div>


        <div class="form-group">
          <label for="validate-number">Edad:</label>
            <div class="input-group" data-validate="number">
              <input   type="text" class="form-control" name="familiar[0][edadfam]" id="familiar[0].edadfam" placeholder="Ingrese solo numeros" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>             
          <p><i>Ingrese solo numeros</i></p>
        

        <div class="form-group">
            <label for="validate-letras">Ocupación:</label>
            <div class="input-group" data-validate="letras">
                <input  type="text" class="form-control" name="familiar[0][ocupacionfam]" id="familiar[0].ocupacionfam" placeholder="Ingrese solo letras" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>    
        
        <div class="form-group">
          <label for="validate-number">Ingresos:</label>
            <div class="input-group" data-validate="number">
              <input   type="text" class="form-control" name="familiar[0][ingresosfam]" id="familiar[0].ingresosfam" placeholder="Ingrese solo numeros" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>             
          <p><i>Ingrese solo numeros</i></p>         

        
        <div class="form-group">
          <label for="validate-number">Imagen comprobante ingresos:</label>
          <div class="input-group">
            <input type="file" name='familiar[0][comprobanteingresosfam]' accept=".jpg, .jpeg, .png" class="form-control" required>
          </div>
        </div>

        <div class="form-group">
          <label for="validate-number">Certificación Negativa ANSES:</label>
          <div class="input-group">
            <input type="file" name='familiar[0][ansesfam]' accept=".jpg, .jpeg, .png" class="form-control" required>
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
          $('#addr'+i).html("<div class='panel panel-default'><div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#proposalAcoordion' href='#collapseContact"+i+"'>Familiar "+(i+1)+"</a></h4></div><div id='collapseContact"+i+"' class='panel-collapse collapse in'><div class='panel-body'><div class='form-group'><label for='validate-letras'>Parentesco:</label><div class='input-group' data-validate='letras'><input type='text' class='form-control' name='familiar["+i+"][parentesco]' id='familiar["+i+"].parentesco' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo letras</i></p><div class='form-group'><label for='validate-letras'>Apellidos y Nombres:</label><div class='input-group' data-validate='letras'><input  type='text' class='form-control' name='familiar["+i+"][apeynom]' id='familiar["+i+"].apeynom' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo letras</i></p><div class='form-group'><label for='validate-number'>DNI:</label><div class='input-group' data-validate='number'><input type='text' class='form-control' name='familiar["+i+"][dnifam]' id='familiar["+i+"].dnifam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo numeros</i></p><div class='form-group'><label for='validate-number'>Ingresa la imagen del DNI:</label><div class='input-group'><input type='file' name='familiar["+i+"][imagen_dnifam]' accept='.jpg, .jpeg, .png' class='form-control' required></div></div><div class='form-group'><label for='validate-number'>Edad:</label><div class='input-group' data-validate='number'><input type='text' class='form-control' name='familiar["+i+"][edadfam]' id='familiar["+i+"].edadfam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo numeros</i></p><div class='form-group'><label for='validate-letras'>Ocupación:</label><div class='input-group' data-validate='letras'><input type='text' class='form-control' name='familiar["+i+"][ocupacionfam]' id='familiar["+i+"].ocupacionfam' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo letras</i></p><div class='form-group'><label for='validate-number'>Ingresos:</label><div class='input-group' data-validate='number'><input type='text' class='form-control' name='familiar["+i+"][ingresosfam]' id='familiar["+i+"].ingresosfam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo numeros</i></p><div class='form-group'><label for='validate-number'>Imagen comprobante ingresos:</label><div class='input-group'><input type='file' name='familiar["+i+"][comprobanteingresosfam]' accept='.jpg, .jpeg, .png' class='form-control' required></div></div><div class='form-group'><label for='validate-number'>Certificación Negativa ANSES:</label><div class='input-group'><input type='file' name='familiar["+i+"][ansesfam]' accept='.jpg, .jpeg, .png' class='form-control' required></div></div></div></div></div>");


        
          

          $('#tab_logic').append('<div id="addr'+(i+1)+'"></div>'); 
            
          
          i++; 
          j++;

        
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
    


