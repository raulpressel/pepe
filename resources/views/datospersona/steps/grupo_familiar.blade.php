<div class="tab-pane" role="tabpanel" id="step6">
    <div class="container">
      <div class="row">
        <h3>1.6 – Otras Personas que Conforman el Grupo Familiar</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-5" id="tab_logic">

        <div class="form-group" id="accordion">

          <div id='addr0'> 

           <h3 class="sectiondropdown">Familiar 1<i class="fa fa-caret-down" aria-hidden="true"></i></h3>
          <div style="height: 100% !important;">
          <div class="form-group" >
            <label for="validate-letras">Parentesco:</label>
            <div class="input-group" data-validate="letras">
                <input value="{{ old('parentesco0') }}" type="text" class="form-control" name="parentesco0" id="parentesco0" placeholder="Ingrese solo letras" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>    
          <p><i>Ingrese solo letras</i></p>            



        <div class="form-group">
        <label for="validate-letras">Apellidos y Nombres:</label>
        <div class="input-group" data-validate="letras">
        <input value="{{ old('apeynom0') }}" type="text" class="form-control" name="apeynom0" id="apeynom0" placeholder="Ingrese solo letras" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>

        </div>
        <p><i>Ingrese solo letras</i></p>

        <div class="form-group">
        <label for="validate-number">DNI:</label>
        <div class="input-group" data-validate="number">
        <input value="{{ old('dnifam0') }}" type="text" class="form-control" name="dnifam0" id="dnifam0" placeholder="Ingrese solo numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>             
        <p><i>Ingrese solo numeros</i></p>


        <div class="form-group">
          <label for="validate-number">Ingresa la imagen del DNI:</label>
          <div class="input-group">
            <input type="file" name='imagen_dnifan0' accept=".jpg, .jpeg, .png" class="form-control" required>
          </div>
        </div>


        <div class="form-group">
        <label for="validate-number">Edad:</label>
        <div class="input-group" data-validate="number">
        <input value="{{ old('edadfam0') }}"  type="text" class="form-control" name="edadfam0" id="edadfam0" placeholder="Ingrese solo numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>             
        <p><i>Ingrese solo numeros</i></p>
        

        <div class="form-group">
            <label for="validate-letras">Ocupación:</label>
            <div class="input-group" data-validate="letras">
                <input value="{{ old('ocupacionfam0') }}" type="text" class="form-control" name="ocupacionfam0" id="ocupacionfam0" placeholder="Ingrese solo letras" required>
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
      </div>
      </div> <!--  cierra div addr -->
    <div id='addr1'></div>
    </div> <!--  cierra div according -->

      

        </div>
      

 
          
    <script>
         $(document).ready(function(){
          var i=1;
         $("#add_div").click(function(){
          $('#addr'+i).html("<h3 class='sectiondropdown'>Familiar "+(i+1)+"<i class='fa fa-caret-down' aria-hidden='true'></i></h3><div style='height: 100% !important;'><div class='form-group'><label for='validate-letras'>Parentesco:</label><div class='input-group' data-validate='letras'><input type='text' class='form-control' name='parentesco"+i+"' id='parentesco"+i+"' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo letras</i></p><div class='form-group'><label for='validate-letras'>Apellidos y Nombres:</label><div class='input-group' data-validate='letras'><input  type='text' class='form-control' name='apeynom"+i+"' id='apeynom"+i+"' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo letras</i></p><div class='form-group'><label for='validate-number'>DNI:</label><div class='input-group' data-validate='number'><input type='text' class='form-control' name='dnifam"+i+"' id='dnifam0"+i+"' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo numeros</i></p><div class='form-group'><label for='validate-number'>Ingresa la imagen del DNI:</label><div class='input-group'><input type='file' name='imagen_dnifan"+i+"' accept='.jpg, .jpeg, .png' class='form-control' required></div></div><div class='form-group'><label for='validate-number'>Edad:</label><div class='input-group' data-validate='number'><input type='text' class='form-control' name='edadfam"+i+"' id='edadfam"+i+"' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo numeros</i></p></div><div class='form-group'><label for='validate-letras'>Ocupación:</label><div class='input-group' data-validate='letras'><input type='text' class='form-control' name='ocupacionfam"+i+"' id='ocupacionfam"+i+"' placeholder='Ingrese solo letras' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo letras</i></p><div class='form-group'><label for='validate-number'>Ingresos:</label><div class='input-group' data-validate='number'><input type='text' class='form-control' name='ingresosfam"+i+"' id='ingresosfam"+i+"' placeholder='Ingrese solo numeros' required><span class='input-group-addon danger'><span class='glyphicon glyphicon-remove'></span></span></div></div><p><i>Ingrese solo numeros</i></p><div class='form-group'><label for='validate-number'>Imagen comprobante ingresos:</label><div class='input-group'><input type='file' name='comprobanteingresosfam"+i+"' accept='.jpg, .jpeg, .png' class='form-control' required></div></div><div class='form-group'><label for='validate-number'>Certificación Negativa ANSES:</label><div class='input-group'><input type='file' name='ansesfam"+i+"' accept='.jpg, .jpeg, .png' class='form-control' required></div></div></div></div>");


        



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

  <script src="https://use.fontawesome.com/9bc7fc2951.js"></script>
<script src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js" integrity="sha256-WyjlLy3rvVSitHOXMctYkMCOU6GAletPg+qniNKLCQM=" crossorigin="anonymous"></script>
<script type="text/javascript">
    jQuery( function() {
      jQuery( "#accordion" ).accordion({ header: "h3", collapsible: true, active: false, heightStyle: "content", autoHeight: false });
    } );
    jQuery('.sectiondropdown').click(function() {
    jQuery("i", this).toggleClass("fa-caret-up fa-caret-down");
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
    


