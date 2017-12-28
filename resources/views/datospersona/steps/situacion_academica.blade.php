<div class="tab-pane" role="tabpanel" id="step2">
    <h3>1.2 - Situación Académica</h3>
      <table>
            <tr>
              <th>Carrera que cursa</th>
              <th><input id="carrera_cursa" name="carrera_cursa" type="text" placeholder="Ingrese Carrera que cursa" class="form-control input-md"></th>
            </tr>
            <tr>
              <th>Año de Ingreso</th>
              <th>{{  Form::selectRange('year', 1990, 2030) }}</th>
              <th>Año de la carrera que cursa</th>
              <th>{{  Form::selectRange('aniocursado',  1,  5) }}</th>
            </tr>  
      </table>
    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>
</div>
