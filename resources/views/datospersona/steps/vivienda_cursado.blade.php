<div class="tab-pane" role="tabpanel" id="step4">
    <div class="container">
      <div class="row">
        <h3>1.4 - Vivienda durante el cursado</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-5">


        <div class="form-group">
        <label for="validate-text">Domicilio durante el cursado:</label>
        <div class="input-group">
        <input value="{{ old('domicursa') }}" type="text" class="form-control" name="domicursa" id="domicursa" placeholder="" required>
        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        </div>


          <div class="form-group">
              <label for="validate-letras">Casa de Familiares:</label>
                <div class="input-group">
                  <select value="{{ old('casafam') }}" class="form-control" name="casafam" id="casafam" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>


          <div class="form-group">
              <label for="validate-letras">Alquila:</label>
                <div class="input-group">
                  <select value="{{ old('urbano') }}" class="form-control" name="alq" id="alq" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Si</option><option value="2">No</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
        <!-- <div class="form-group">
          <label for="validate-select">Casa de Familiares:</label>
          <br>
          <div class="input-group" data-validate="radiovivienda">
              <input value=1 type="radio" name="casafam" id="casafamSi"  required> Si 
              <input value=0 type="radio" name="casafam" id="casafamNo" required> No <br>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>
   
       <div class="form-group">
          <label for="validate-select">Alquila:</label>
          <br>
          <div class="input-group" data-validate="radiovivienda">
              <input value=1 type="radio" name="alq" id="alqSi"  required> Si 
              <input value=0 type="radio" name="alq" id="alqNo" required> No <br>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>  -->
   
        <div class="form-group">
          <label for="validate-number">Monto  $:</label>
          <div class="input-group" data-validate="number">
            <input value="{{ old('montoalq') }}" type="number" class="form-control" name="montoalq" id="montoalq" placeholder="Ingrese solo numeros">
            <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
          </div>
        </div>             
        <p><i>Ingrese solo numeros</i></p>    

    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">siguiente</button></li>
    </ul>
  </div>

</div>
</div>
