<div class="tab-pane" role="tabpanel" id="step6">
    <div class="container">
      <div class="row">
        <h3>1.6 – Otras Personas que Conforman el Grupo Familiar</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-5">

          <div id="tab_logic"> 

          <div id='addr0'> 

          
            
          <div class="form-group" >
              <label for="validate-letras">Parentesco:</label>
              <div class="input-group" data-validate="letras">
                  <input value="{{ old('parentesco0') }}" type="text" class="form-control" name="familiar[0].parentesco" id="familiar[0].parentesco" placeholder="Ingrese solo letras" required>
                  <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
          </div>    
          <p><i>Ingrese solo letras</i></p>            



          <div class="form-group">
            <label for="validate-letras">Apellidos y Nombres:</label>
            <div class="input-group" data-validate="letras">
            <input value="{{ old('apeynom0') }}" type="text" class="form-control" name="familiar[0].apeynom" id="familiar[0].apeynom" placeholder="Ingrese solo letras" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
         </div>
          <p><i>Ingrese solo letras</i></p>

        <div class="form-group">
          <label for="validate-number">DNI:</label>
            <div class="input-group" data-validate="number">
              <input value="{{ old('dnifam0') }}" type="text" class="form-control" name="familiar[0].dnifam" id="familiar[0].dnifam" placeholder="Ingrese solo numeros" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>             
          <p><i>Ingrese solo numeros</i></p>


        <div class="form-group">
          <label for="validate-number">Ingresa la imagen del DNI:</label>
          <div class="input-group">
            <input type="file" name='familiar[0].imagen_dnifan' accept=".jpg, .jpeg, .png" class="form-control" required>
          </div>
        </div>


        <div class="form-group">
          <label for="validate-number">Edad:</label>
            <div class="input-group" data-validate="number">
              <input value="{{ old('edadfam0') }}"  type="text" class="form-control" name="familiar[0].edadfam" id="familiar[0].edadfam" placeholder="Ingrese solo numeros" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>             
          <p><i>Ingrese solo numeros</i></p>
        

        <div class="form-group">
            <label for="validate-letras">Ocupación:</label>
            <div class="input-group" data-validate="letras">
                <input value="{{ old('ocupacionfam0') }}" type="text" class="form-control" name="familiar[0].ocupacionfam" id="familiar[0].ocupacionfam" placeholder="Ingrese solo letras" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>    
        
        <div class="form-group">
          <label for="validate-number">Ingresos:</label>
            <div class="input-group" data-validate="number">
              <input value="{{ old('ingresosfam0') }}"  type="text" class="form-control" name="ingresosfam0" id="ingresosfam0" placeholder="Ingrese solo numeros" required>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>             
          <p><i>Ingrese solo numeros</i></p>         

        
        <div class="form-group">
          <label for="validate-number">Imagen comprobante ingresos:</label>
          <div class="input-group">
            <input type="file" name='comprobanteingresosfam0' accept=".jpg, .jpeg, .png" class="form-control" required>
          </div>
        </div>

        <div class="form-group">
          <label for="validate-number">Certificación Negativa ANSES:</label>
          <div class="input-group">
            <input type="file" name='ansesfam0' accept=".jpg, .jpeg, .png" class="form-control" required>
          </div>
        </div>
      
      
      
      </div> <!--  cierra div addr -->
    
      
      <div id='addr1'>
      </div> 
    
    </div>
    


    </div>
      
 
          
    <script>
         $(document).ready(function(){
          var i=1;
          
         $("#add_div").click(function(){
          $('#addr'+i).html("<div style='height: 100% !important;'><div class='form-group'><label for='validate-letras'>Parentesco:</label><div class='input-group' data-validate='letras'><input type='text' class='form-control' name='familiar["+i+"].parentesco' id='familiar["+i+"].parentesco' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo letras</i></p><div class='form-group'><label for='validate-letras'>Apellidos y Nombres:</label><div class='input-group' data-validate='letras'><input  type='text' class='form-control' name='familiar["+i+"].apeynom' id='familiar["+i+"].apeynom' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo letras</i></p><div class='form-group'><label for='validate-number'>DNI:</label><div class='input-group' data-validate='number'><input type='text' class='form-control' name='familiar["+i+"].dnifam' id='familiar["+i+"].dnifam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo numeros</i></p><div class='form-group'><label for='validate-number'>Ingresa la imagen del DNI:</label><div class='input-group'><input type='file' name='familiar["+i+"].imagen_dnifan' accept='.jpg, .jpeg, .png' class='form-control' required></div></div><div class='form-group'><label for='validate-number'>Edad:</label><div class='input-group' data-validate='number'><input type='text' class='form-control' name='familiar["+i+"].edadfam' id='familiar["+i+"].edadfam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo numeros</i></p><div class='form-group'><label for='validate-letras'>Ocupación:</label><div class='input-group' data-validate='letras'><input type='text' class='form-control' name='familiar["+i+"].ocupacionfam' id='familiar["+i+"].ocupacionfam' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo letras</i></p><div class='form-group'><label for='validate-number'>Ingresos:</label><div class='input-group' data-validate='number'><input type='text' class='form-control' name='familiar["+i+"].ingresosfam' id='familiar["+i+"].ingresosfam' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo numeros</i></p><div class='form-group'><label for='validate-number'>Imagen comprobante ingresos:</label><div class='input-group'><input type='file' name='familiar["+i+"].comprobanteingresosfam' accept='.jpg, .jpeg, .png' class='form-control' required></div></div><div class='form-group'><label for='validate-number'>Certificación Negativa ANSES:</label><div class='input-group'><input type='file' name='familiar["+i+"].ansesfam' accept='.jpg, .jpeg, .png' class='form-control' required></div></div></div>");


        



          $('#tab_logic').append('<div id="addr'+(i+1)+'"></div>');
            
          
          i++; 
          
      });
         $("#delete_div").click(function(){
           if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
       });

    });

  </script>

  </div> <!-- cierre col -->


  <a id="add_div" class="btn btn-default pull-left">Agregar</a><a id='delete_div' class="pull-right btn btn-default">Eliminar</a>
<br>
<br>
<br>

    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>

</div>
    


