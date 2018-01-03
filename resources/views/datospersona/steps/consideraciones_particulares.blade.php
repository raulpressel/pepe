
<div class="tab-pane" role="tabpanel" id="step8">
    
        <h3>1.8 – Consideraciones particulares</h3>
      

        
                        
                        
<p>Detalle de las enfermedades que afectan al estudiante y a los miembros del grupo familiar (presentación de los certificados médicos correspondientes, diagnóstico y medicación)</p>



<div class="row clearfix">
      <div class="col-md-12 column">
        <table class="table table-bordered table-hover" id="tab_logic">
          <thead>
            <tr >
              <th class="text-center">
                #
              </th>
              <th class="text-center">
                Parentesco
              </th>
              <th class="text-center">
                Enfermedad
              </th>
              
                <th class="text-center">
                Produce Incapacidad
              </th>
              <th class="text-center">
                Imagen Certificado
              </th>
              
              </th>
            </tr>
          </thead>
          <tbody>
            <tr id='add0'>
              <td>
              1
              </td>
              
              <td>
              <input type="text" name='parentesco0'  placeholder='Parentesco' class="form-control"/>
              </td>
              
              <td>
              <input type="text" name='enfermedad0' placeholder='Enfermedad' class="form-control"/>
              </td>
              
              <td>
              <input type="text" name='incapacidad0' placeholder='Produce Incapacidad' class="form-control"/>
              
              </td>
              <td>
              <input type="file" name='imagen_incapacidad0' accept=".jpg, .jpeg, .png" class="form-control"/>
              </td>
              
            </tr>
            <tr id='add1'></tr>
          </tbody>
        </table>
      </div>
    <script>
         $(document).ready(function(){
          var i=1;
         $("#add_row").click(function(){
          $('#add'+i).html("<td>"+ (i+1) +"</td><td><input name='parentesco"+i+"' type='text' placeholder='Parentesco' class='form-control input-md'  /> </td><td><input  name='enfermedad"+i+"' type='text' placeholder='Enfermedad'  class='form-control input-md'></td><td><input  name='incapacidad"+i+"' type='text' placeholder='Produce Incapacidad'  class='form-control input-md'></td></td><td><input type='file' name='imagen_incapacidad0"+i+"' accept='.jpg, .jpeg, .png' class='form-control input-md'></td>");

          $('#tab_logic').append('<tr id="add'+(i+1)+'"></tr>');
          i++; 
      });
         $("#delete_row").click(function(){
           if(i>1){
         $("#add"+(i-1)).html('');
         i--;
         }
       });

    });
  </script>
  </div>
  <a id="add_row" class="btn btn-default pull-left">Agregar</a><a id='delete_row' class="pull-right btn btn-default">Eliminar</a>
<br>
<br>
<br>

    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>

</div>

