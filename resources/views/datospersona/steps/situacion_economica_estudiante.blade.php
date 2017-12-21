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
