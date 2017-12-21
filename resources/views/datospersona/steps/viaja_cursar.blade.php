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
