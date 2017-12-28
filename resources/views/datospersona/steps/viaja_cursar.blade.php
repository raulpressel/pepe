<div class="tab-pane" role="tabpanel" id="step5">
    <h3>1.5 - Viaja para cursar</h3>
    <table>
      <tr>
        <th>Utiliza colectivos Urbanos</th>
        <th>Si {{ Form::radio('urbano', 'Si') }}</th>
        <th>No {{ Form::radio('urbano', 'No') }}</th>
        <th>Cantidad de veces que viaja por semana</th>        
        <th>{{ Form::selectRange('cantviaja',  0,  50) }}</th>
      </tr>
      <tr>
        <th>Utiliza colectivos de Media Distancia</th>
        <th>Si {{ Form::radio('mediadist', 'Si') }}</th>
        <th>No {{ Form::radio('mediadist', 'No') }}</th>
        <th>Precio Pasaje</th>
        <th>{{ form::number('preciopasaje') }} </th>
      </tr>
      <tr>
        <th>Cantidad de veces que viaja por semana</th>
        <th>{{ Form::selectRange('cantviajamedia',  0,  7) }}</th>
      </tr>
    </table>
    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>
</div>
