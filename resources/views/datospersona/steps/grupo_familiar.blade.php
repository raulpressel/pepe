                    <div class="tab-pane" role="tabpanel" id="step6">
                        <h3>1.6 – Otras Personas que Conforman el Grupo Familiar</h3>
                        <div class="container">
                        <div class="row clearfix">
                        <div class="col">
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
                                  Apellidos y Nombres
                                </th>
                                <th class="text-center">
                                  D.N.I.
                                </th>
                                <th class="text-center">
                                  Imagen del Dni
                                </th>
                                <th class="text-center">
                                  Edad
                                </th>
                                <th class="text-center">
                                  Ocupación
                                </th>
                                <th class="text-center">
                                  Ingresos
                                </th>
                                <th class="text-center">
                                  Imagen de recibo de sueldo
                                </th>
                                <th class="text-center">
                                  Certificacion Negativa ANSES
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr id='addr0'>
                                <td>
                                1
                                </td>
                                <td>
                                <input type="text" name='parentesco0'  placeholder='Parentesco' class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='apeynom0' placeholder='Apellidos y Nombres' class="form-control"/>
                                </td>
                                <td>
                                <input type="number" name='dni0' placeholder='D.N.I.' class="form-control"/>
                                </td>
                                <td>
                                <input type="file" name='imagen_dni0' accept=".jpg, .jpeg, .png" class="form-control"/>
                                </td>
                                <td>
                                <input type="number" name='edad0' placeholder='Edad' class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='ocu0' placeholder='Ocupación' class="form-control"/>
                                </td>
                                <td>
                                <input type="number" name='ingreso0' placeholder='Ingreso' class="form-control"/>
                                </td>
                                <td>
                                <input type="file" name='imagen_ingreso0' accept=".jpg, .jpeg, .png" class="form-control"/>
                                </td>
                                <td>
                                <input type="file" name='imagen_anses0' accept=".jpg, .jpeg, .png" class="form-control"/>
                                </td>
                              </tr>
                                        <tr id='addr1'></tr>
                            </tbody>
                          </table>
                        </div>
                        <script>
                             $(document).ready(function(){
                              var i=1;
                             $("#add_row").click(function(){
                              $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='parentesco"+i+"' type='text' placeholder='Parentesco' class='form-control input-md'  /> </td><td><input  name='apeynom"+i+"' type='text' placeholder='Apellidos y Nombres'  class='form-control input-md'></td><td><input  name='dni"+i+"' type='numer' placeholder='D.N.I.'  class='form-control input-md'></td></td><td><input type='file' name='imagen_dni0"+i+"' accept='.jpg, .jpeg, .png' class='form-control input-md'></td><td><input  name='edad"+i+"' type='numer' placeholder='Edad'  class='form-control input-md'></td></td><td><input  name='ocu"+i+"' type='text' placeholder='Ocupación'  class='form-control input-md'></td></td><td><input  name='ingreso"+i+"' type='numer' placeholder='Ingreso'  class='form-control input-md'></td><td><input type='file' name='imagen_ingreso0"+i+"' accept='.jpg, .jpeg, .png' class='form-control input-md'></td><td><input type='file' name='imagen_anses0"+i+"' accept='.jpg, .jpeg, .png' class='form-control input-md'></td>");

                              $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
                              i++; 
                          });
                             $("#delete_row").click(function(){
                               if(i>1){
                             $("#addr"+(i-1)).html('');
                             i--;
                             }
                           });

                        });
                      </script>
                      </div>
                      <a id="add_row" class="btn btn-default pull-left">Agregar</a><a id='delete_row' class="pull-right btn btn-default">Eliminar</a>
                    </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step7">
