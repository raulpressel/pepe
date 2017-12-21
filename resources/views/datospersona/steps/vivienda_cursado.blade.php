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
