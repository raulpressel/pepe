          
<div class="tab-content">
  <div class="tab-pane active" role="tabpanel" id="step1">
    <div class="container">
      <div class="row">
        <h3>1.1 - Datos Personales del Estudiante</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-5">
          
            <div class="form-group">
              <label for="validate-letras">Apellidos:</label>
                <div class="input-group" data-validate="letras">
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese solo letras" required>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
          <p><i>Ingrese solo letras</i></p>            

        <div class="form-group">
        <label for="validate-letras">Nombres:</label>
        <div class="input-group" data-validate="letras">
        <input type="text" class="form-control" name="nombre" id="nombres" placeholder="Ingrese solo letras" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>

        </div>
        <p><i>Ingrese solo letras</i></p>

        <div class="form-group">
        <label for="validate-number">DNI/Pasaporte N°:</label>
        <div class="input-group" data-validate="number">
        <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingrese solo numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>             
        <p><i>Ingrese solo numeros</i></p>


        <div class="form-group">
        <label for="validate-number">Ingresa la imagen del DNI:</label>
        <div class="input-group">
        {{ Form::file('image') }}
        </div>
        </div>


        <div class="form-group">
        <label for="validate-number">CUIL N°:</label>
        <div class="input-group" data-validate="number">
        <input type="text" class="form-control" name="cuil" id="cuil" placeholder="Ingrese solo numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>             
        <p><i>Ingrese solo numeros</i></p>
                          

        <div class="form-group">
          <label for="validate-select">Estado Civil:</label>
            <div class="input-group">
                <select class="form-control" name="estcivil" id="estcivil" placeholder="Seleccione una opción" required>
                  <option value="">Seleccione una opción</option>
                  <option value="item_1">Soltero</option>
                  <option value="item_2">Casado</option>
                  <option value="item_3">Divorciado</option>
                  <option value="item_4">Viudo</option>
                </select>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </div> 



        <div class="form-group">
        <label for="validate-date">Fecha de nacimiento:</label>
        <div class="input-group" data-validate="date">
        <input type="date" class="form-control" name="cumple" id="cumple" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>

        <div class="form-group">
        <label for="validate-text">Domicilio que figura en el DNI:</label>
        <div class="input-group">
        <input type="text" class="form-control" name="domi" id="domi" placeholder="" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>

        <div class="form-group">
        <label for="validate-letras">Ciudad:</label>
        <div class="input-group" data-validate="letras">
        <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ingrese solo letras" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>

        </div>
        <p><i>Ingrese solo letras</i></p>


        <div class="form-group">
        <label for="validate-number">Código Postal:</label>
        <div class="input-group" data-validate="number">
        <input type="text" class="form-control" name="cp" id="cp" placeholder="Ingrese solo numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>             
        <p><i>Ingrese solo numeros</i></p>


        <div class="form-group">
        <label for="validate-letras">Provincia:</label>
        <div class="input-group" data-validate="letras">
        <input type="text" class="form-control" name="provincia" id="provincia" placeholder="Ingrese solo letras" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>

        </div>
        <p><i>Ingrese solo letras</i></p>

        <div class="form-group">
        <label for="validate-letras">Nacionalidad:</label>
        <div class="input-group" data-validate="letras">
        <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="Ingrese solo letras" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>

        </div>
        <p><i>Ingrese solo letras</i></p>

        <div class="form-group">
        <label for="validate-phone">Celular:</label>
        <div class="input-group" data-validate="phone">
        <input type="text" class="form-control" name="cel" id="cel" placeholder="Ingrese solo numeros" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>
        <p><i>Sin el 0 y sin el 15</i></p>


        <div class="form-group">
        <label for="validate-email">E-mail:</label>
        <div class="input-group" data-validate="email">
        <input type="text" class="form-control" name="validate-email" id="validate-email" placeholder="Ingrese un E-mail valido" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>
        <p><i>Ingrese un E-mail valido</i></p>              

        <div class="form-group">
        <label for="validate-optional">Facebook</label>
        <div class="input-group">
        <input type="text" class="form-control" name="face" id="face" placeholder="Ingrese usuario de facebook">
        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
        </div>
        <p>Ej: www.facebook.com/<b>fcytUader</b></p>              


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
        state = /^([a-zA-Z])+$/.test($(this).val())
                }
        else if ($group.data('validate') == "radio") {
            
         state = $(this).prop('checked')===true;
              
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


        </script>      



        <ul class="list-unstyled pull-right">
          <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
        </ul>
      
            
    </div>
  </div>
</div>
