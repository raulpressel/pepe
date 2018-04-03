          
<div class="tab-content">
  <div class="tab-pane active" role="tabpanel" id="step1">
    <div class="container">
      <div class="row">
        <h3>1.1 - Datos Personales del Estudiante</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-5">
          
              <input type="hidden" name="user_id" id="user_id" value={{ $user->id }}>


        <div class="form-group">
            <label for="validate-letras">Apellidos:</label>
            <div class="input-group" data-validate="letras">
                <input readonly value="{{ $user->apellido }}" type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese solo letras" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div>    
    

        <div class="form-group">
        <label for="validate-letras">Nombres:</label>
        <div class="input-group" data-validate="letras">
        <input readonly value="{{ $user->name  }}" type="text" class="form-control" name="nombre" id="nombres" placeholder="Ingrese solo letras" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>

        </div>
        

        <div class="form-group">
        <label for="validate-number">DNI/Pasaporte N°:</label>
        <div class="input-group" data-validate="number">
        <input readonly value="{{ $user->dni }}" type="text" class="form-control" name="dni" id="dni" placeholder="Ingrese solo numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>             
        


        <div class="form-group">
          <label for="validate-number">Ingresa la imagen del DNI:</label>
          <div class="input-group">
            <input type="file" name='imagen_dni' accept=".jpg, .jpeg, .png" class="form-control" required>
          </div>
        </div>


        <div class="form-group">
        <label for="validate-number">CUIL N°:</label>
        <div class="input-group" data-validate="number">
        <input value="{{ old('cuil') }}"  type="text" class="form-control" name="cuil" id="cuil" placeholder="Ingrese solo numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>             
        
                          

        <div class="form-group">
          <label for="validate-select">Estado Civil:</label>
            <div class="input-group">
                <select  class="form-control" name="estcivil" id="estcivil" placeholder="Seleccione una opción" required>
                  <option value="">Seleccione una opción</option>
                  <option value="soltero">Soltero</option>
                  <option value="casado">Casado</option>
                  <option value="divorciado">Divorciado</option>
                  <option value="viudo">Viudo</option>
                </select>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div> 



        <div class="form-group">
        <label for="validate-date">Fecha de nacimiento:</label>
        <div class="input-group" data-validate="date">
        <input value="{{ old('cumple') }}" type="date" class="form-control" name="cumple" id="cumple" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>

        <div class="form-group">
        <label for="validate-text">Domicilio que figura en el DNI:</label>
        <div class="input-group">
        <input value="{{ old('domi') }}" type="text" class="form-control" name="domi" id="domi" placeholder="Ingrese letras y numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>

        <div class="form-group">
          <label for="validate-select">Provincia:</label>
            <div class="input-group">
                <select class="form-control" id="provincia" name="provincia" required><option value="">Seleccione una provincia</option><option value="1">Buenos Aires</option><option value="2">Buenos Aires-GBA</option><option value="3">Capital Federal</option><option value="4">Catamarca</option><option value="5">Chaco</option><option value="6">Chubut</option><option value="7">Córdoba</option><option value="8">Corrientes</option><option value="9">Entre Ríos</option><option value="10">Formosa</option><option value="11">Jujuy</option><option value="12">La Pampa</option><option value="13">La Rioja</option><option value="14">Mendoza</option><option value="15">Misiones</option><option value="16">Neuquén</option><option value="17">Río Negro</option><option value="18">Salta</option><option value="19">San Juan</option><option value="20">San Luis</option><option value="21">Santa Cruz</option><option value="22">Santa Fe</option><option value="23">Santiago del Estero</option><option value="24">Tierra del Fuego</option><option value="25">Tucumán</option></select>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div> 

        <div class="form-group">
          <label for="validate-select">Localidad:</label>
            <div class="input-group">
                     <select class="form-control" id="localidad" name="localidad" required><option value="" selected>Selecciona una localidad</option></select>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div> 
               

            



        <div class="form-group">
        <label for="validate-number">Código Postal:</label>
        <div class="input-group" data-validate="number">
        <input value="{{ old('cp') }}" type="text" class="form-control" name="cp" id="cp" placeholder="Ingrese solo numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>             
        



        <div class="form-group">
        <label for="validate-letras">Nacionalidad:</label>
        <div class="input-group" data-validate="letras">
        <input value="{{ old('nacionalidad') }}" type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="Ingrese solo letras" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>

        </div>
        

        <div class="form-group">
        <label for="validate-phone">Celular:</label>
        <div class="input-group" data-validate="phone">
        <input value="{{ old('cel') }}" type="text" class="form-control" name="cel" id="cel" placeholder="Ingrese solo numeros" required >
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        <ul class="center-block ">
            
            <li class="input-group-addon text-left">
                Sin el 0 y sin el 15
            </li>
        </ul>
        </div>
        


        <div class="form-group">
        <label for="validate-email">E-mail:</label>
        <div class="input-group" data-validate="email">
        <input readonly value="{{ $user->email }}" type="text" class="form-control" name="email" id="email" placeholder="Ingrese un E-mail valido" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>
        <p><i>Ingrese un E-mail valido</i></p>              

        <div class="form-group">
        <label for="validate-optional">Facebook</label>
        <div class="input-group">
        <input value="{{ old('face') }}" type="text" class="form-control" name="face" id="face" placeholder="Ingrese usuario de facebook">
        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
        <ul class="center-block">
            
            <li class="input-group-addon text-left">
                Ej: www.facebook.com/<b>fcytUader</b>
            </li>
        </ul>
        </div>
        


        
        <script>

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
        /*else if ($group.data('validate') == "radioecono") {
            
         state = $(this).prop('checked') === true;
              
        }
        else if ($group.data('validate') == "radiovivienda") {
            
         state = $(this).prop('checked') === true;
              
        }
        else if ($group.data('validate') == "radioviaja") {
            
         state = $(this).prop('checked') === true;
              
        }
        else if ($group.data('validate') == "radiofamiliar") {
            
         state = $(this).prop('checked') === true;
              
        } */




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


        </script>   
        
        <script language="javascript">
            $("#provincia").change(function (event) {
             
                $("#localidad").empty();
                $("#localidad").append("<option value='' selected>Seleccione una localidad </option>");
            $.get("localidad/"+event.target.value+"", function(response, state) {
                
                for(i=0; i<response.length; i++){
                $("#localidad").append("<option value='"+response[i].localidad+"'>"+response[i].localidad+" </option>");
            }
            });
        });
        </script> 

        


        <ul class="list-unstyled pull-right">
          <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
        </ul>
      
            
    </div>
  </div>
</div>

