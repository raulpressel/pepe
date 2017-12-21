
	{{ csrf_field() }}
  
  <div class="container">
  <div class="row">
    <section>
        <div class="wizard">
            <h1>Inscripción a la BECA - UADER</h1>
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">


                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Paso 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Paso 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-book"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Paso 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-usd"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Paso 4">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                        </a>
                    </li>
                   <li role="presentation" class="disabled">
                        <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Paso 5">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" title="Paso 6">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-gift"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab" title="Paso 7">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-euro"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab" title="Paso 8">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>                    
                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Completo">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="container">   
                        
                              <h3>1.1 - Datos Personales del Estudiante</h3>

                              <table>
                                <tr>
                                  <th>Apellidos:</th>
                                  <th><input id="apellido" name="apellido" type="text" placeholder="ingrese apellidos" class="form-control input-md"></th>
                                  <th>Nombres:</th>
                                  <th><input id="name" name="name" type="text" placeholder="ingrese nombres" class="form-control input-md"></th>
                                  </tr>
                                  <tr>
                                  <th>DNI/Pasaporte N°:</th>
                                  <th>{{  Form::text('dni', 'Ingrese DNI')  }}</th>
                                  <th>Ingresa la foto del dni {{ Form::file('image') }} </th>
                                  <tr></tr>
                                  <th>CUIL N°:</th>
                                  <th><input id="cuil" name="cuil" type="text" placeholder="ingrese CUIL" class="form-control input-md"></th>
                                  </tr>
                                  <tr>
                                  <th>Estado Civil:</th>
                                  <th>{{Form::select('estadocivil', ['single' => 'Soltero', 'casado' => 'Casado'])}}</th>
                                  <th>Fecha de Nacimiento:</th>
                                  <th>{{Form::date('date') }}</th>
                                  </tr>
                                  <tr>
                                    <th>Domicilio que figura en DNI</th>
                                    <th>{{  Form::text('domic', 'Ingrese direccion') }}</th>
                                    <th> </th>
                                    <th> </th>
                                  </tr>
                                  <tr>
                                    <th>Ciudad</th>
                                    <th><input id="ciudad" name="ciudad" type="text" placeholder="ingrese ciudad" class="form-control input-md"></th>
                                    <th>Codigo Postal</th>
                                    <th><input id="cp" name="cp" type="text" placeholder="ingrese codigo postal" class="form-control input-md"></th>
                                  </tr>
                                  <tr>
                                    <th>Provincia</th>
                                    <th><input id="provincia" name="provincia" type="text" placeholder="ingrese provincia" class="form-control input-md"></th>
                                    <th>Nacionalidad</th>
                                    <th><input id="nacionalidad" name="nacionalidad" type="text" placeholder="ingrese nacionalidad" class="form-control input-md"></th>
                                  </tr>
                                  <tr>
                                    <th>Celular</th>
                                    <th><input id="cel" name="cel" type="text" placeholder="ingrese celuar" class="form-control input-md"></th>
                                    <th>E-mail</th>
                                    <th><input id="email" name="email" type="email" placeholder="ingrese email" class="form-control input-md"></th>
                                  </tr>
                                  <tr>
                                    <th>Facebook</th>
                                    <th><input id="face" name="face" type="text" placeholder="facebook.com/xxxxxx" class="form-control input-md"></th>
                                    <th> </th>
                                    <th> </th>

                                  </tr>



                              </table>
                          
                        
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>1.2 - Situación Académica</h3>
                          <table>
                                <tr>
                                  <th>Carrera que cursa</th>
                                  <th><input id="apellido" name="apellido" type="text" placeholder="ingrese apellidos" class="form-control input-md"></th>
                                  <th> </th>
                                  <th> </th>
                                  </tr>
                                  <tr>
                                  <th>Año de Ingreso</th>
                                  <th>{{  Form::selectRange('year', 1990, 2030) }}</th>
                                  <th>Año de la carrera que cursa</th>
                                  <th>{{  Form::selectRange('aniocursado',  1,  5) }}</th>
                                  </tr>  
                                </table>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>1.3 - Situación Económica del Estudiante</h3>
                          <table>
                                <tr>
                                  <th>Trabaja</th>
                                  <th>Si {{ Form::radio('trabaja', 'Si') }}</th>
                                  <th>No {{ Form::radio('trabaja', 'No') }}</th>
                                  <th>Ingresos Propios (Mensuales)  $</th>
                                  <th>{{ form::number('sueldo') }} </th>
                                  </tr>
                                  <tr>
                                  <th>Tiene Becas</th>
                                  <th>Si {{ Form::radio('beca', 'Si') }}</th>
                                  <th>No {{ Form::radio('beca', 'No') }}</th>                                
                                  <th>PROGRESAR</th>
                                  <th>Si {{ Form::radio('beca', 'Si') }}</th>
                                  <th>No {{ Form::radio('beca', 'No') }}</th>
                                  </tr>                                
                                  <tr>
                                  <th>Pasantías</th>
                                  <th>Si {{ Form::radio('pasan', 'Si') }}</th>
                                  <th>No {{ Form::radio('pasan', 'No') }}</th>                                
                                  <th>Asignación Universal por Hijo</th>
                                  <th>Si {{ Form::radio('asig', 'Si') }}</th>
                                  <th>No {{ Form::radio('asig', 'No') }}</th>
                                  </tr>
                                  <tr>
                                  <th>Otros Ingresos</th>
                                  <th>{{ Form::text('otrosing') }}</th>
                                  <th> </th>
                                  <th> </th>
                                  </tr>  
                                </table>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step4">
                        <h3>1.4 - Vivienda durante el cursado</h3>
                        <table>
                          <tr>
                            <th>Domicilio durante el cursado</th>
                            <th> {{ form::text ('domicursa') }} </th>
                            <th> </th>
                            <th> </th>
                          </tr>
                          <tr>
                            <th>Casa de Familiares</th>
                            <th>Si {{ Form::radio('casafam', 'Si') }}</th>
                            <th>No {{ Form::radio('casafam', 'No') }}</th>                                
                            <th>Alquila</th>
                            <th>Si {{ Form::radio('alq', 'Si') }}</th>
                            <th>No {{ Form::radio('alq', 'No') }}</th>
                            
                          </tr>
                          <tr>
                            <th> </th>
                            <th> </th>
                            <th> </th>
                            <th>Monto  $</th>
                            <th>{{ form::number('montoalq') }} </th>
                          </tr>
                        </table>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step5">
                        <h3>1.5 - Viaja para cursar</h3>
                        <table>
                          <tr>
                            <th>Urbano</th>
                            <th>Si {{ Form::radio('urbano', 'Si') }}</th>
                            <th>No {{ Form::radio('urbano', 'No') }}</th>
                            <th>Cantidad de veces que viaja por semana</th>
                            <th> </th>
                            
                            <th>{{ Form::selectRange('cantviaja',  0,  7) }}</th>
                          </tr>
                          <tr>
                            <th>Media Distancia</th>
                            <th>Si {{ Form::radio('mediadist', 'Si') }}</th>
                            <th>No {{ Form::radio('mediadist', 'No') }}</th>
                            <th>Precio Pasaje</th>
                            <th>{{ form::number('preciopasaje') }} </th>
                            <th>Cantidad de veces que viaja por semana</th>
                            <th>{{ Form::selectRange('cantviajamedia',  0,  7) }}</th>
                          </tr>
                        </table>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
                        </ul>
                    </div>
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
                        <h3>1.7 –Estado patrimonial del grupo familiar</h3>
                        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step8">
                        <h3>1.8 – Consideraciones particulares</h3>
                        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Enviar</h3>
                        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">anterior</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Enviar</button></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
    
          <script>
              $(document).ready(function () {
              //Initialize tooltips
              $('.nav-tabs > li a[title]').tooltip();

              //Wizard
              $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

              var $target = $(e.target);

              if ($target.parent().hasClass('disabled')) {
              return false;
              }
              });

              $(".next-step").click(function (e) {

              var $active = $('.wizard .nav-tabs li.active');
              $active.next().removeClass('disabled');
              nextTab($active);

              });
              $(".prev-step").click(function (e) {

              var $active = $('.wizard .nav-tabs li.active');
              prevTab($active);

              });
              });

              function nextTab(elem) {
              $(elem).next().find('a[data-toggle="tab"]').click();
              }
              function prevTab(elem) {
              $(elem).prev().find('a[data-toggle="tab"]').click();
              }
          </script>
          </div>
    </section>
   </div>
</div>



{{ Form::close() }}

@stop