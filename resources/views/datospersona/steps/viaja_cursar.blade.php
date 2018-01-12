<div class="tab-pane" role="tabpanel" id="step5">
    <div class="container">
      <div class="row">
        <h3>1.5 - Viaja para cursar</h3>
      </div>

        <div class="col-sm-offset-2 col-sm-5">

        <div class="form-group">
          <label for="validate-select">Utiliza colectivos Urbanos:</label>
          <br>
          <div class="input-group" data-validate="radioviaja">
              <input  value=1 type="radio" name="urbano" id="urbanoSi"  required> Si 
              <input  value=0 type="radio" name="urbano" id="urbanoNo" required> No <br>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>
    
      <div class="form-group">
              <label for="validate-letras">Cantidad de veces que viaja por semana:</label>
                <div class="input-group">
                  <select class="form-control" name="cantviaja" id="cantviaja" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>

        <div class="form-group">
          <label for="validate-select">Utiliza colectivos de Media Distancia:</label>
          <br>
          <div class="input-group" data-validate="radioviaja">
              <input  value=1 type="radio" name="mediadist" id="mediadistSi"  required> Si 
              <input  value=0 type="radio" name="mediadist" id="mediadistNo" required> No <br>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>

       <div class="form-group">
          <label for="validate-number">Precio Pasaje  $:</label>
          <div class="input-group" data-validate="number">
            <input value="{{ old('preciopasaje') }}"  type="number" class="form-control" name="preciopasaje" id="preciopasaje" placeholder="Ingrese solo numeros">
            <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
          </div>
        </div>             
        <p><i>Ingrese solo numeros</i></p>     

      <div class="form-group">
              <label for="validate-letras">Cantidad de veces que viaja por semana:</label>
                <div class="input-group">
                  <select value="{{ old('cantviajamedia') }}" class="form-control" name="cantviajamedia" id="cantviajamedia" placeholder="Seleccione una opción" required>
                    <option value="">Seleccione una opción</option>
                    <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option>
                </select>
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
          </div>
    
    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
    </ul>
</div>




</div>
</div>