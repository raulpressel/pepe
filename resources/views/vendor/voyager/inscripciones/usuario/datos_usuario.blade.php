@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>


    function ponerReadOnly(id)
    {
        // Ponemos el atributo de solo lectura
        $("#"+id).attr("readonly","readonly");
        // Ponemos una clase para cambiar el color del texto y mostrar que
        // esta deshabilitado
        $("#"+id).addClass("readOnly");
    }
 
    function quitarReadOnly(id)
    {
        // Eliminamos el atributo de solo lectura
        $("#"+id).removeAttr("readonly");
        // Eliminamos la clase que hace que cambie el color
        $("#"+id).removeClass("readOnly");
    }
 
    /**
     * Mostramos en un alert si esta el atributo de solo lectura activado
     */
    function estado(id)
    {
        if($("#"+id).attr("readonly"))
        {
            alert("Tiene el atributo de solo lectura");
        }else{
            alert("NO Tiene el atributo de solo lectura");
        }
    }
    </script>

@section('content')



 

<h1><p align="center">Panel administrativo de inscripciones</p></h1>
<h3>Bienvenido {{Auth::user()->name}} </h3>

 {!! Form::open(['route' =>'carga', 'method' => 'post' ]) !!}


<div class="form-group">


<div class="rwd">
  <h2 align="center"><div class="p-3 mb-2 bg-primary text-white">Datos de {{$datos->user_name}} {{$datos->user_apellido}}</div></h2>
    <table class="rwd_auto table table-responsive table-bordered" width="100%" cellpadding="5" cellspacing="5" border="0">
    <tr>
    <td width="50%">
  <h3 align="center" class="">Datos Personales</h3>
  
    <table border="1">  
      <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td><td class="bg-info">Modificar</td></th></tr>
      <tr>          
      <th width="20%">Nombre</th>
  

      <td width="40%">
      <input readonly value="{{ $datos->user_name}}" type="text"  class="form-control" name="nombre" id="idNombre" required></td><td>asd</td>
      <td>
       <input type="Button" onclick="quitarReadOnly('idNombre')"  title="Modificar" style="display: inline;" value="Modifcar" class="btn-xs btn-success">
        <input type="Button" onclick="ponerReadOnly('idNombre')" title="Guardar"  style="display: inline;" value="Guardar" class="btn-xs btn-warning">
      </td>

      </tr>
  <tr>
      <th width="20%">Apellido</th> 

      <td width="40%"><input readonly value="{{$datos->user_apellido}}" type="text" class="form-control" name="apellido" id="idApellido" required></td><td>asd</td>
      
      <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('idApellido')"  class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('idApellido')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
      </tr>

      <tr>
      <th>Dni / Cuit</th>
      
      <td width="40%"><input readonly value="{{$datos->user_dni}}" type="text" class="form-control" name="dni" id="idDNI" required></td>
      <td><a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
        Imagen del dni frente
            <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->imagen_dni_frente]) }}" alt="..." class="img-responsive lightbox hide">
        </a>
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
        Imagen del dni Dorso
            <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->imagen_dni_dorso]) }}" alt="..." class="img-responsive lightbox hide">
        </a>
        </td>         
    <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('idDNI')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('idDNI')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
      </tr>

    <tr>
    <th>Estado civil</th>   
    
    <td width="40%">
    <select  readonly  class="form-control" name="estcivil" id="idEstcivil" placeholder="Seleccione una opción" required>

                  
                  <option value="soltero" {{ ($datos->estado_civil) == 'soltero' ? 'selected' : '' }}>Soltero</option>
                  <option value="casado" {{ ($datos->estado_civil) == 'casado' ? 'selected' : '' }}>Casado</option>
                  <option value="divorciado" {{ ($datos->estado_civil) == 'divorciado' ? 'selected' : '' }}>Divorciado</option>
                  <option value="viudo" {{ ($datos->estado_civil) == 'viudo' ? 'selected' : '' }}>Viudo</option>
                </select>
                </td>
      <td>asd          
      </td>

      
      <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('idEstcivil')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('idEstcivil')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
    </tr>

    <tr>
    <th>Cumpleaños</th>
    
    <td width="40%"><input readonly value="{{$datos->cumple}}" type="date" class="form-control" name="cumple" id="idCumple" required></td><td>asd</td>
      
      <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('idCumple')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('idCumple')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
    </tr>
    
    <tr>
    <th>Domicilio</th>
    
    <td width="40%"><input readonly value="{{ $datos->domicilio}}" type="text" class="form-control" name="domi" id="idDomi" required></td><td>asd</td>
      
      <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('idDomi')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('idDomi')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
    </tr>

    <tr>
    <th>Codigo posta - Provincia - Nacionalidad</th>
    <td>{{ $datos->cp}} - {{ $datos->provincia}} - {{ $datos->nacionalidad}}</td>
    <td></td>
    <td></td>

    </tr>

    <tr>
    <th>Celurar</th>
    
    <td width="40%"><input readonly value="{{ $datos->cel}}" type="text" class="form-control" name="cel" id="idCel" required></td><td>asd</td>
      
      <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('idCel')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('idCel')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
    </tr>

    <tr>
    <th>E-Mail</th>
    
    <td width="40%"><input readonly value="{{ $datos->user_email }}" type="text" class="form-control" name="email" id="idEmail" required></td><td>asd</td>
      
      <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('idEmail')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('idEmail')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
    </tr>

    <tr>
      <th>Facebook</th>
      
      <td width="40%"><input readonly value="{{ $datos->face}}" type="text" class="form-control" name="face" id="idFace" required></td><td>asd</td>
      
      <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('idFace')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('idFace')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
    </tr>

    <tr><th>Posee discapacidad</th>
      
      <td width="40%">


    <select  readonly  class="form-control" name="discaest" id="idDiscaest" placeholder="Seleccione una opción" required>

        <option value="Si" {{ ($datos->disca_estudiante) == 'Si' ? 'selected' : '' }}>Si</option>
        <option value="No" {{ ($datos->disca_estudiante) == 'No' ? 'selected' : '' }}>No</option>
        
      </select>
      
      
      </td>
      <td><a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
            Certificado de discapacidad 
              <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->certificado_discapacidad]) }}" alt="..." class="img-responsive lightbox hide">
          </a></td>
          <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('idDiscaest')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('idDiscaest')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
      </tr>



    </table>
      </td>

  <td width="50%">
  <h3 align="center" class="">Datos Academicos</h3>
    <table border="1">    
        <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td><td class="bg-info">Modificar</td></th></tr>
      
      <tr>
        
        <th>Condicion estudiante</th>
        <td width="40%">
          

          <select readonly class="form-control" name="cond" id="IdCond" placeholder="Seleccione una opción" required>
            @foreach($condicion as $condiciones)
            <option 
            value= {{$condiciones->nombre}} {{ ($datos->condicion_estudiante) == $condiciones->nombre ? 'selected' : '' }}>{{ $condiciones->nombre }}
            </option>
            @endforeach
            </select>
        </td>


        
        <td>
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
           Certificado de Estudiante 
            <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->certificado_estudiante]) }}" alt="..." class="img-responsive lightbox hide">
          </a>
          <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
          Constancia de Estudiante 
            <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->constancia_estudiante]) }}" alt="..." class="img-responsive lightbox hide">
          </a>
        </td>
        
        <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('IdCond')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('IdCond')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
       </tr>


       <tr>
        <th>Carrera que cursa</th>
        <td>{{ $datos->carrera_cursa}} <- nombre
        </td><td></td>
        <td>
        <input type="Button" style="display: inline;" onclick="quitarReadOnly('IdCond')" class="btn-xs btn-success" title="Modificar" value="Modificar">
        <input type="Button" style="display: inline;" onclick="ponerReadOnly('IdCond')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
      </td>
       </tr>


      <tr>
      <th>Año de ingreso - Año de Cursado</th>
        <td>
        <select readonly  class="form-control" name="anioingreso" id="IdAnioingreso"  required>
                    <option value="2000" {{ ($datos->anio_ingreso) == '2000' ? 'selected' : '' }}>2000</option>
                    <option value="2001" {{ ($datos->anio_ingreso) == '2001' ? 'selected' : '' }}>2001</option>
                    <option value="2002" {{ ($datos->anio_ingreso) == '2002' ? 'selected' : '' }}>2002</option>
                    <option value="2003" {{ ($datos->anio_ingreso) == '2003' ? 'selected' : '' }}>2003</option>
                    <option value="2004" {{ ($datos->anio_ingreso) == '2004' ? 'selected' : '' }}>2004</option>
                    <option value="2005" {{ ($datos->anio_ingreso) == '2005' ? 'selected' : '' }}>2005</option>
                    <option value="2006" {{ ($datos->anio_ingreso) == '2006' ? 'selected' : '' }}>2006</option>
                    <option value="2007" {{ ($datos->anio_ingreso) == '2007' ? 'selected' : '' }}>2007</option>
                    <option value="2008" {{ ($datos->anio_ingreso) == '2008' ? 'selected' : '' }}>2008</option>
                    <option value="2009" {{ ($datos->anio_ingreso) == '2009' ? 'selected' : '' }}>2009</option>
                    <option value="2010" {{ ($datos->anio_ingreso) == '2010' ? 'selected' : '' }}>2010</option>
                    <option value="2011" {{ ($datos->anio_ingreso) == '2011' ? 'selected' : '' }}>2011</option>
                    <option value="2012" {{ ($datos->anio_ingreso) == '2012' ? 'selected' : '' }}>2012</option>
                    <option value="2013" {{ ($datos->anio_ingreso) == '2013' ? 'selected' : '' }}>2013</option>
                    <option value="2014" {{ ($datos->anio_ingreso) == '2014' ? 'selected' : '' }}>2014</option>
                    <option value="2015" {{ ($datos->anio_ingreso) == '2015' ? 'selected' : '' }}>2015</option>
                    <option value="2016" {{ ($datos->anio_ingreso) == '2016' ? 'selected' : '' }}>2016</option>
                    <option value="2017" {{ ($datos->anio_ingreso) == '2017' ? 'selected' : '' }}>2017</option>
                    <option value="2018" {{ ($datos->anio_ingreso) == '2018' ? 'selected' : '' }}>2018</option>
                    <option value="2019" {{ ($datos->anio_ingreso) == '2019' ? 'selected' : '' }}>2019</option>
                    <option value="2020" {{ ($datos->anio_ingreso) == '2020' ? 'selected' : '' }}>2020</option>
                    <option value="2021" {{ ($datos->anio_ingreso) == '2021' ? 'selected' : '' }}>2021</option>
                    <option value="2022" {{ ($datos->anio_ingreso) == '2022' ? 'selected' : '' }}>2022</option>
                    <option value="2023" {{ ($datos->anio_ingreso) == '2023' ? 'selected' : '' }}>2023</option>
                    <option value="2024" {{ ($datos->anio_ingreso) == '2024' ? 'selected' : '' }}>2024</option>
                    <option value="2025" {{ ($datos->anio_ingreso) == '2025' ? 'selected' : '' }}>2025</option>
                    <option value="2026" {{ ($datos->anio_ingreso) == '2026' ? 'selected' : '' }}>2026</option>
                    <option value="2027" {{ ($datos->anio_ingreso) == '2027' ? 'selected' : '' }}>2027</option>
                    <option value="2028" {{ ($datos->anio_ingreso) == '2028' ? 'selected' : '' }}>2028</option>
                    <option value="2029" {{ ($datos->anio_ingreso) == '2029' ? 'selected' : '' }}>2029</option>
                    <option value="2030" {{ ($datos->anio_ingreso) == '2030' ? 'selected' : '' }}>2030</option>
                    <option value="2031" {{ ($datos->anio_ingreso) == '2031' ? 'selected' : '' }}>2031</option>
                    <option value="2032" {{ ($datos->anio_ingreso) == '2032' ? 'selected' : '' }}>2032</option>
                    <option value="2033" {{ ($datos->anio_ingreso) == '2033' ? 'selected' : '' }}>2033</option>
                    <option value="2034" {{ ($datos->anio_ingreso) == '2034' ? 'selected' : '' }}>2034</option>
                    <option value="2035" {{ ($datos->anio_ingreso) == '2035' ? 'selected' : '' }}>2035</option>
                    <option value="2036" {{ ($datos->anio_ingreso) == '2036' ? 'selected' : '' }}>2036</option>
                    <option value="2037" {{ ($datos->anio_ingreso) == '2037' ? 'selected' : '' }}>2037</option>
                    <option value="2038" {{ ($datos->anio_ingreso) == '2038' ? 'selected' : '' }}>2038</option>
                    <option value="2039" {{ ($datos->anio_ingreso) == '2039' ? 'selected' : '' }}>2039</option>
                    <option value="2040" {{ ($datos->anio_ingreso) == '2040' ? 'selected' : '' }}>2040</option>
                    <option value="2041" {{ ($datos->anio_ingreso) == '2041' ? 'selected' : '' }}>2041</option>
                    <option value="2042" {{ ($datos->anio_ingreso) == '2042' ? 'selected' : '' }}>2042</option>
                    <option value="2043" {{ ($datos->anio_ingreso) == '2043' ? 'selected' : '' }}>2043</option>
                    <option value="2044" {{ ($datos->anio_ingreso) == '2044' ? 'selected' : '' }}>2044</option>
                    <option value="2045" {{ ($datos->anio_ingreso) == '2045' ? 'selected' : '' }}>2045</option>
                    <option value="2046" {{ ($datos->anio_ingreso) == '2046' ? 'selected' : '' }}>2046</option>
                    <option value="2047" {{ ($datos->anio_ingreso) == '2047' ? 'selected' : '' }}>2047</option>
                    <option value="2048" {{ ($datos->anio_ingreso) == '2048' ? 'selected' : '' }}>2048</option>
                    <option value="2049" {{ ($datos->anio_ingreso) == '2049' ? 'selected' : '' }}>2049</option>
                    <option value="2050" {{ ($datos->anio_ingreso) == '2050' ? 'selected' : '' }}>2050</option>

                </select>
        </td><td></td>
        <td>
          <input type="Button" style="display: inline;" onclick="quitarReadOnly('IdAnioingreso')" class="btn-xs btn-success" title="Modificar" value="Modificar">
          <input type="Button" style="display: inline;" onclick="ponerReadOnly('IdAnioingreso')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
        </td>
        </tr>

      </table>
  </td>
  </tr>
  </table>


  <table class="rwd_auto table table-responsive table-bordered" width="100%" cellpadding="5" cellspacing="5" border="0">
    <tr>
      <td width="50%">
    <h3 align="center" class="">Datos Economicos</h3>
  
      <table border="1">  
          <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td><td class="bg-info">Modificar</td></th></tr>

          <tr>
            <th>Posee trabajo</th>
            <td>
              <select readonly  class="form-control" name="trabaja" id="Idtrabaja" required>
                    
                    <option value="Si" {{ ($datos->tiene_trabajo) == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ ($datos->tiene_trabajo) == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td>
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('Idtrabaja')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('Idtrabaja')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Tipo trabajo</th>
            <td>
              <select readonly class="form-control" name="actlab" id="IdActlab"  required>
                      <option value="activos" {{ ($datos->tipo_trabajo) == 'activos' ? 'selected' : '' }}>Empleados Activos o Jubilados</option>
                      <option value="monotri" {{ ($datos->tipo_trabajo) == 'monotri' ? 'selected' : '' }}>Autónomos y Monotributistas</option>
                      <option value="informal" {{ ($datos->tipo_trabajo) == 'informal' ? 'selected' : '' }}>Trabajadores Informales</option>
                </select>
            </td>
            <td>  
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('IdActlab')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('IdActlab')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Sueldo</th>
            <td width="40%"><input readonly value="{{$datos->sueldo}}" type="text" class="form-control" name="sueldo" id="idSueldo" required></td><td>
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
              Comprobante de ingresos
               <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->comprobante_ingresos]) }}" alt="..." class="img-responsive lightbox hide">
              </a>
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idSueldo')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idSueldo')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          

          <tr>
            <th>Otra Beca</th>
            <td>
              <select readonly  class="form-control" name="beca" id="IdBeca" required>
                    
                    <option value="1" {{ ($datos->tiene_beca) == '1' ? 'selected' : '' }}>Si</option>
                    <option value="2" {{ ($datos->tiene_beca) == '2' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td>
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('IdBeca')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('IdBeca')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>PROGRESAR</th>
            
            <td>
              <select readonly  class="form-control" name="progresar" id="IdProgresar" required>
                    
                    <option value="1" {{ ($datos->tiene_progresar) == '1' ? 'selected' : '' }}>Si</option>
                    <option value="2" {{ ($datos->tiene_progresar) == '2' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td>
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('IdProgresar')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('IdProgresar')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Pasantia</th>
            
            <td>
              <select readonly  class="form-control" name="pasan" id="idPasan" required>
                    
                    <option value="1" {{ ($datos->tiene_pasantia) == '1' ? 'selected' : '' }}>Si</option>
                    <option value="2" {{ ($datos->tiene_pasantia) == '2' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td>
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idPasan')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idPasan')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>


          <tr>
            <th>Asignacion Universal por Hijo</th>
            
            <td>
              <select readonly  class="form-control" name="asig" id="idAsig" required>
                    
                    <option value="1" {{ ($datos->tiene_asig) == '1' ? 'selected' : '' }}>Si</option>
                    <option value="2" {{ ($datos->tiene_asig) == '2' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td>
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idAsig')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idAsig')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>


          <tr>
            <th>Otros Ingresos</th>
            <td>
              <input readonly value="{{ $datos->otros_ing }}" type="text-area" class="form-control" name="otrosing" id="idOtrosing">
            </td><td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idOtrosing')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idOtrosing')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>
        



      </table>
      </td>

  <td width="50%">
  <h3 align="center" class="">Datos de Vivienda</h3>
    <table border="1">    
        <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td><td class="bg-info">Modificar</td></th></tr>


          <tr>
            <th>Domicilio durante cursado</th>
            
            <td>
              <input readonly value="{{ $datos->domi_cursado }}" type="text-area" class="form-control" name="domicursa" id="idDomicursa">
            </td><td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idDomicursa')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idDomicursa')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>


          <tr>
            <th>Vive con la familia</th>
            <td>
            <select readonly class="form-control" name="casafam" id="idCasafam" required>
                    <option value="Si" {{ ($datos->casa_fam) == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ ($datos->casa_fam) == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </td>
                <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idCasafam')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idCasafam')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>
          

  
          <tr>
            <th>Alquila</th>
            
              <td>
            <select readonly class="form-control" name="alq" id="idAlq" required>
                    <option value="Si" {{ ($datos->tiene_alq) == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ ($datos->tiene_alq) == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </td>
                <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idAlq')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idAlq')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
              
          </tr>

            <tr>
            <th>Monto</th>
            
            <td>
              <input readonly value="{{ $datos->monto_alq }}" type="text-area" class="form-control" name="montoalq" id="idMontoalq">            
            </td>
            <td>
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
              Recibo Alquiler
               <img src="{{ action('InscripcionesController@getFile',['filename' =>$datos->recibo_alquiler]) }}" alt="..." class="img-responsive lightbox hide">
              </a>
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idMontoalq')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idMontoalq')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
              
          </tr>
    </table>
  </td>
  </tr>
  </table>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// --> 

<table class="rwd_auto table table-responsive table-bordered" width="100%" cellpadding="5" cellspacing="5" border="0">
    <tr>
      <td width="50%">
    <h3 align="center" class="">Viaja para cursar</h3>
  
      <table border="1">  
          <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td><td class="bg-info">Modificar</td></th></tr>

          <tr>
            <th>Usa colectivo urbano</th>
            <td> 
               <select readonly class="form-control" name="urbano" id="idUrbano"  required>
                    <option value="Si" {{ ($datos->usa_urbano) == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ ($datos->usa_urbano) == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idUrbano')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idUrbano')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th> Cantidad de viajes</th>
            <td> 
            <select readonly class="form-control" name="cantviaja" id="idCantviaja" required>
                    
                    <option value="0" {{ ($datos->cant_viajes) == '0' ? 'selected' : '' }}>0</option>
                    <option value="1"  {{ ($datos->cant_viajes) == '1' ? 'selected' : '' }}>1</option>
                    <option value="2"  {{ ($datos->cant_viajes) == '2' ? 'selected' : '' }}>2</option>
                    <option value="3"  {{ ($datos->cant_viajes) == '3' ? 'selected' : '' }}>3</option>
                    <option value="4"  {{ ($datos->cant_viajes) == '4' ? 'selected' : '' }}>4</option>
                    <option value="5"  {{ ($datos->cant_viajes) == '5' ? 'selected' : '' }}>5</option>
                    <option value="6"  {{ ($datos->cant_viajes) == '6' ? 'selected' : '' }}>6</option>
                    <option value="7"  {{ ($datos->cant_viajes) == '7' ? 'selected' : '' }}>7</option>
                    <option value="8"  {{ ($datos->cant_viajes) == '8' ? 'selected' : '' }}>8</option>
                    <option value="9"  {{ ($datos->cant_viajes) == '9' ? 'selected' : '' }}>9</option>
                    <option value="10" {{ ($datos->cant_viajes) == '10' ? 'selected' : '' }}>10</option>
                    <option value="11" {{ ($datos->cant_viajes) == '11' ? 'selected' : '' }}>11</option>
                    <option value="12" {{ ($datos->cant_viajes) == '12' ? 'selected' : '' }}>12</option>
                    <option value="13" {{ ($datos->cant_viajes) == '13' ? 'selected' : '' }}>13</option>
                    <option value="14" {{ ($datos->cant_viajes) == '14' ? 'selected' : '' }}>14</option>
                    <option value="15" {{ ($datos->cant_viajes) == '15' ? 'selected' : '' }}>15</option>
                    <option value="16" {{ ($datos->cant_viajes) == '16' ? 'selected' : '' }}>16</option>
                    <option value="17" {{ ($datos->cant_viajes) == '17' ? 'selected' : '' }}>17</option>
                    <option value="18" {{ ($datos->cant_viajes) == '18' ? 'selected' : '' }}>18</option>
                    <option value="19" {{ ($datos->cant_viajes) == '19' ? 'selected' : '' }}>19</option>
                    <option value="20" {{ ($datos->cant_viajes) == '20' ? 'selected' : '' }}>20</option>
                    <option value="21" {{ ($datos->cant_viajes) == '21' ? 'selected' : '' }}>21</option>
                    <option value="22" {{ ($datos->cant_viajes) == '22' ? 'selected' : '' }}>22</option>
                    <option value="23" {{ ($datos->cant_viajes) == '23' ? 'selected' : '' }}>23</option>
                    <option value="24" {{ ($datos->cant_viajes) == '24' ? 'selected' : '' }}>24</option>
                    <option value="25" {{ ($datos->cant_viajes) == '25' ? 'selected' : '' }}>25</option>
                    <option value="26" {{ ($datos->cant_viajes) == '26' ? 'selected' : '' }}>26</option>
                    <option value="27" {{ ($datos->cant_viajes) == '27' ? 'selected' : '' }}>27</option>
                    <option value="28" {{ ($datos->cant_viajes) == '28' ? 'selected' : '' }}>28</option>
                    <option value="29" {{ ($datos->cant_viajes) == '29' ? 'selected' : '' }}>29</option>
                    <option value="30" {{ ($datos->cant_viajes) == '30' ? 'selected' : '' }}>30</option>
                    <option value="31" {{ ($datos->cant_viajes) == '31' ? 'selected' : '' }}>31</option>
                    <option value="32" {{ ($datos->cant_viajes) == '32' ? 'selected' : '' }}>32</option>
                    <option value="33" {{ ($datos->cant_viajes) == '33' ? 'selected' : '' }}>33</option>
                    <option value="34" {{ ($datos->cant_viajes) == '34' ? 'selected' : '' }}>34</option>
                    <option value="35" {{ ($datos->cant_viajes) == '35' ? 'selected' : '' }}>35</option>
                    <option value="36" {{ ($datos->cant_viajes) == '36' ? 'selected' : '' }}>36</option>
                    <option value="37" {{ ($datos->cant_viajes) == '37' ? 'selected' : '' }}>37</option>
                    <option value="38" {{ ($datos->cant_viajes) == '38' ? 'selected' : '' }}>38</option>
                    <option value="39" {{ ($datos->cant_viajes) == '39' ? 'selected' : '' }}>39</option>
                    <option value="40" {{ ($datos->cant_viajes) == '40' ? 'selected' : '' }}>40</option>
                    <option value="41" {{ ($datos->cant_viajes) == '41' ? 'selected' : '' }}>41</option>
                    <option value="42" {{ ($datos->cant_viajes) == '42' ? 'selected' : '' }}>42</option>
                    <option value="43" {{ ($datos->cant_viajes) == '43' ? 'selected' : '' }}>43</option>
                    <option value="44" {{ ($datos->cant_viajes) == '44' ? 'selected' : '' }}>44</option>
                    <option value="45" {{ ($datos->cant_viajes) == '45' ? 'selected' : '' }}>45</option>
                    <option value="46" {{ ($datos->cant_viajes) == '46' ? 'selected' : '' }}>46</option>
                    <option value="47" {{ ($datos->cant_viajes) == '47' ? 'selected' : '' }}>47</option>
                    <option value="48" {{ ($datos->cant_viajes) == '48' ? 'selected' : '' }}>48</option>
                    <option value="49" {{ ($datos->cant_viajes) == '49' ? 'selected' : '' }}>49</option>
                    <option value="50" {{ ($datos->cant_viajes) == '50' ? 'selected' : '' }}>50</option>
                </select>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idCantviaja')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idCantviaja')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>
  
          <tr>
            <th>Usa colectivo media distancia</th>
              
              <td> 
               <select readonly class="form-control" name="mediadist" id="idMediadist"  required>
                    <option value="Si" {{ ($datos->usa_media_dist) == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ ($datos->usa_media_dist) == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td>  
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idMediadist')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idMediadist')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Cantidad de viajes</th>
            
            <td> 
               <select readonly class="form-control" name="cantviajamedia" id="idCantviajamedia" required>
                    
                    <option value="0" {{ ($datos->cant_viaja_media) == '0' ? 'selected' : '' }}>0</option>
                    <option value="1"  {{ ($datos->cant_viaja_media) == '1' ? 'selected' : '' }}>1</option>
                    <option value="2"  {{ ($datos->cant_viaja_media) == '2' ? 'selected' : '' }}>2</option>
                    <option value="3"  {{ ($datos->cant_viaja_media) == '3' ? 'selected' : '' }}>3</option>
                    <option value="4"  {{ ($datos->cant_viaja_media) == '4' ? 'selected' : '' }}>4</option>
                    <option value="5"  {{ ($datos->cant_viaja_media) == '5' ? 'selected' : '' }}>5</option>
                    <option value="6"  {{ ($datos->cant_viaja_media) == '6' ? 'selected' : '' }}>6</option>
                    <option value="7"  {{ ($datos->cant_viaja_media) == '7' ? 'selected' : '' }}>7</option>
                    <option value="8"  {{ ($datos->cant_viaja_media) == '8' ? 'selected' : '' }}>8</option>
                    <option value="9"  {{ ($datos->cant_viaja_media) == '9' ? 'selected' : '' }}>9</option>
                    <option value="10" {{ ($datos->cant_viaja_media) == '10' ? 'selected' : '' }}>10</option>
                    <option value="11" {{ ($datos->cant_viaja_media) == '11' ? 'selected' : '' }}>11</option>
                    <option value="12" {{ ($datos->cant_viaja_media) == '12' ? 'selected' : '' }}>12</option>
                    <option value="13" {{ ($datos->cant_viaja_media) == '13' ? 'selected' : '' }}>13</option>
                    <option value="14" {{ ($datos->cant_viaja_media) == '14' ? 'selected' : '' }}>14</option>
                    <option value="15" {{ ($datos->cant_viaja_media) == '15' ? 'selected' : '' }}>15</option>
                    <option value="16" {{ ($datos->cant_viaja_media) == '16' ? 'selected' : '' }}>16</option>
                    <option value="17" {{ ($datos->cant_viaja_media) == '17' ? 'selected' : '' }}>17</option>
                    <option value="18" {{ ($datos->cant_viaja_media) == '18' ? 'selected' : '' }}>18</option>
                    <option value="19" {{ ($datos->cant_viaja_media) == '19' ? 'selected' : '' }}>19</option>
                    <option value="20" {{ ($datos->cant_viaja_media) == '20' ? 'selected' : '' }}>20</option>
                    <option value="21" {{ ($datos->cant_viaja_media) == '21' ? 'selected' : '' }}>21</option>
                    <option value="22" {{ ($datos->cant_viaja_media) == '22' ? 'selected' : '' }}>22</option>
                    <option value="23" {{ ($datos->cant_viaja_media) == '23' ? 'selected' : '' }}>23</option>
                    <option value="24" {{ ($datos->cant_viaja_media) == '24' ? 'selected' : '' }}>24</option>
                    <option value="25" {{ ($datos->cant_viaja_media) == '25' ? 'selected' : '' }}>25</option>
                    <option value="26" {{ ($datos->cant_viaja_media) == '26' ? 'selected' : '' }}>26</option>
                    <option value="27" {{ ($datos->cant_viaja_media) == '27' ? 'selected' : '' }}>27</option>
                    <option value="28" {{ ($datos->cant_viaja_media) == '28' ? 'selected' : '' }}>28</option>
                    <option value="29" {{ ($datos->cant_viaja_media) == '29' ? 'selected' : '' }}>29</option>
                    <option value="30" {{ ($datos->cant_viaja_media) == '30' ? 'selected' : '' }}>30</option>
                </select>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idCantviajamedia')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idCantviajamedia')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Precio</th>
            <td>
            <input readonly value="{{ $datos->precio_pasaje}}"  type="number" min="0" class="form-control" name="preciopasaje" id="idPreciopasaje" required>
            </td>
            <td>
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
              Recibo pasaje
               <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->recibo_pasaje]) }}" alt="..." class="img-responsive lightbox hide">
              </a>
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idPreciopasaje')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idPreciopasaje')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>


      </table>
      </td>

  <td width="50%">
  <h3 align="center" class="">Familiares</h3>
    <table border="1">    
        <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td><td class="bg-info">Modificar</td></th></tr>

        <tr>
            <th>Propietario</th>
            <td>
                <select readonly class="form-control" name="propietario" id="idPropietario" required>
                    <option value="1" {{ ($datos->es_propietario) == '1' ? 'selected' : '' }}>Si</option>
                    <option value="2" {{ ($datos->es_propietario) == '2' ? 'selected' : '' }}>No</option>
                </select>
             </td>   
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idPropietario')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idPropietario')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>

          </tr>


          <tr>
            <th>Alquila</th>
            <td>
              <select readonly class="form-control" name="alquila" id="idAlquila" required>
                    <option value="1" {{ ($datos->alquila) == '1' ? 'selected' : '' }}>Si</option>
                    <option value="2" {{ ($datos->alquila) == '2' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td>
             
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idAlquila')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idAlquila')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Precio</th>
            <td>
              <input readonly value="{{ $datos->precio_alquiler}}"  type="number" min="0" class="form-control" name="reciboalqfam" id="idReciboalqfam" required>
            </td>
            <td>
             <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
              Recibo Alquiler
               <img src="{{ action('InscripcionesController@getFile',['filename' => $datos->recibo_alquiler_familiar]) }}" alt="..." class="img-responsive lightbox hide">
              </a>
            </td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idReciboalqfam')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idReciboalqfam')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Prestada</th>
            <td>
            
              <select readonly class="form-control" name="prestada" id="idPrestada" required>
                    <option value="1" {{ ($datos->prestada) == '1' ? 'selected' : '' }}>Si</option>
                    <option value="2" {{ ($datos->prestada) == '2' ? 'selected' : '' }}>No</option>
                </select>
            
          </td>            
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idPrestada')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idPrestada')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>

          </tr>

          <tr>
            <th>Otras vivienda</th>
            <td>
              <input readonly value="{{ $datos->otros_vivienda}}"  type="text-area"class="form-control" name="otrosvivienda" id="idOtrosvivienda" required>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idOtrosvivienda')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idOtrosvivienda')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Posee campo</th>
            <td>
              <select readonly class="form-control" name="campo" id="idCampo" required>
                    <option value="Si" {{ ($datos->tiene_campo) == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ ($datos->tiene_campo) == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idCampo')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idCampo')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Hectareas</th>
            <td>
              
              <input readonly value="{{ $datos->cant_has}}"  type="number" min="0" class="form-control" name="has" id="idHas" required>
            </td><td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idHas')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idHas')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Actividad</th>
            <td>
            <input readonly value="{{ $datos->actividad }}"  type="text-area"class="form-control" name="actividad" id="idActividad" required>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idActividad')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idActividad')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Posee terreno</th>
            <td>
                <select readonly class="form-control" name="terreno" id="idTerreno" required>
                    <option value="Si" {{ ($datos->tiene_terreno) == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ ($datos->tiene_terreno) == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idTerreno')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idTerreno')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Cantidad</th>
            <td>
              <input readonly value="{{ $datos->cant_terreno}}"  type="number" min="0" class="form-control" name="terrenocant" id="idTerrenocant" required>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idTerrenocant')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idTerrenocant')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Posee Automovil</th>
            <td>
                <select readonly class="form-control" name="auto" id="idAuto" required>
                    <option value="Si" {{ ($datos->tiene_auto) == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ ($datos->tiene_auto) == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idAuto')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idAuto')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Cantidad</th>
            <td>
              <input readonly value="{{ $datos->cant_auto}}"  type="number" min="0" class="form-control" name="autocant" id="idAutocant" required>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idAutocant')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idAutocant')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Posee Motovehiculo</th>
            <td>
                <select readonly class="form-control" name="moto" id="idMoto" required>
                    <option value="Si" {{ ($datos->tiene_moto) == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ ($datos->tiene_moto) == 'No' ? 'selected' : '' }}>No</option>
                </select>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idMoto')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idMoto')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

          <tr>
            <th>Cantidad</th>
            <td>
              <input readonly value="{{ $datos->cant_moto}}"  type="number" min="0" class="form-control" name="motocant" id="idMotocant" required>
            </td>
            <td></td>
            <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('idMotocant')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('idMotocant')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td>
          </tr>

    </table>
  </td>
  </tr>
  </table>
  
                    




  <table class="rwd_auto table table-responsive table-bordered" width="100%" cellpadding="5" cellspacing="5" border="0">
    <tr>
      <td width="50%">
  <h3 align="center" class="">Grupo Familiar</h3>


  @for ($i = 0; $i < count($familiar)  ; $i++)

    <table border="1">    
    <h4 align="left" class="">Familiar {{ $i+1 }}</h4>     
        <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td><td class="bg-info">Modificar</td></th></tr>

        <tr>
            <th>Parentesco</th>
            <td> <input readonly value="{{ $familiar[$i]->parentesco}}"  type="text" class="form-control" name="familiar[{{ $i }}][parentesco]" id="familiar{{ $i }}idParentesco" required>              
            </td>
            <td></td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('familiar{{ $i }}idParentesco')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('familiar{{ $i }}idParentesco')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>

          <tr>
            <th>Nombre y Apellido</th>
            <td> <input readonly value="{{ $familiar[$i]->apeynom}}"  type="text" class="form-control" name="familiar[{{ $i }}][apeynom]" id="familiar{{ $i }}idApeynom" required>              
            </td>
            <td></td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('familiar{{ $i }}idApeynom')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('familiar{{ $i }}idApeynom')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>

          <tr>
            <th>DNI</th>
            <td> <input readonly value="{{ $familiar[$i]->dni}}"  type="text" class="form-control" name="familiar[{{ $i }}][dnifam]" id="familiar{{ $i }}dnifam" required>              
            </td>
            <td>
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                Imagen del dni frente
                    <img src="{{ action('InscripcionesController@getFile',['filename' => $familiar[$i]->imagen_dni_frente]) }}" alt="..." class="img-responsive lightbox hide">
                </a>
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                Imagen del dni Dorso
                    <img src="{{ action('InscripcionesController@getFile',['filename' => $familiar[$i]->imagen_dni_dorso]) }}" alt="..." class="img-responsive lightbox hide">
                </a>
            </td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('familiar{{ $i }}dnifam')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('familiar{{ $i }}dnifam')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>


          <tr>
            <th>Edad</th>
            <td> <input readonly value="{{ $familiar[$i]->edad}}"  type="text" class="form-control" name="familiar[{{ $i }}][edadfam]" id="familiar{{ $i }}edadfam" required>              
            </td>
            <td></td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('familiar{{ $i }}edadfam')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('familiar{{ $i }}edadfam')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>

          <tr>
            <th>Ocupación</th>
            <td> <input readonly value="{{ $familiar[$i]->ocupacion}}"  type="text" class="form-control" name="familiar[{{ $i }}][ocupacionfam]" id="familiar{{ $i }}ocupacionfam" required>              
            </td>
            <td></td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('familiar{{ $i }}ocupacionfam')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('familiar{{ $i }}ocupacionfam')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>
          

          <tr>
            <th>Actividad laboral </th>
            <td> 
              <select readonly class="form-control" name="familiar[{{ $i }}][actlab]" id="familiar{{ $i }}actlab" placeholder="Seleccione una opción" required>
                    
                      <option value="activosfam0" {{ ($familiar[$i]->actividad_laboral) == 'activosfam0'  ? 'selected' : '' }}>Empleado Activo o Jubilado</option>
                      <option value="monotrifam0" {{ ($familiar[$i]->actividad_laboral) == 'monotrifam0' ? 'selected' : '' }}>Autónomo o Monotributista</option>
                      <option value="informalfam0" {{ ($familiar[$i]->actividad_laboral) == 'informalfam0' ? 'selected' : '' }}>Trabajador Informal</option>
                </select>
            </td>
            <td></td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('familiar{{ $i }}actlab')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('familiar{{ $i }}actlab')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>

          <tr>
            <th>Ingresos</th>
            <td> <input readonly type="number" value="{{ $familiar[$i]->ingresos}}" class="form-control" name="familiar[{{ $i }}][ingresosfam]" id="familiar{{ $i }}ingresosfam"required>
            </td>
            <td>
              @if (!$familiar[$i]->comprobante_ingresos_1 == NULL)
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  Comprobante Ingresos 1
                      <img src="{{ action('InscripcionesController@getFile',['filename' => $familiar[$i]->comprobante_ingresos_1]) }}" alt="..." class="img-responsive lightbox hide">
                  </a>  
              @endif
              @if (!$familiar[$i]->comprobante_ingresos_2 == NULL)
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  Comprobante Ingresos 2
                      <img src="{{ action('InscripcionesController@getFile',['filename' => $familiar[$i]->comprobante_ingresos_2]) }}" alt="..." class="img-responsive lightbox hide">
                  </a>  
              @endif
              @if (!$familiar[$i]->comprobante_ingresos_3 == NULL)
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  Comprobante Ingresos 3
                      <img src="{{ action('InscripcionesController@getFile',['filename' => $familiar[$i]->comprobante_ingresos_3]) }}" alt="..." class="img-responsive lightbox hide">
                  </a>  
              @endif

            </td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('familiar{{ $i }}ocupacionfam')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('familiar{{ $i }}ocupacionfam')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>

          <tr>
            <th>Certificación Negativa Anses</th>
            <td> 
            <td>
              
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  Comprobante
                      <img src="{{ action('InscripcionesController@getFile',['filename' => $familiar[$i]->anses]) }}" alt="..." class="img-responsive lightbox hide">
                  </a>  
              
            </td>

           <td>
              
            </td> 

          </tr>
    
@endfor    
    
      </table>
      </td>



  <td width="50%">
  <h3 align="center" class="">Consideraciones particulares</h3>
    @for ($i = 0; $i < count($consideraciones)  ; $i++)
    <table align="center" border="1">
    <h4 align="left" class="">Familiar {{ $i+1 }}</h4>         
        <tr><th class="bg-info">Datos<td class="bg-info">Informacion</td><td class="bg-info">Adjuntos</td><td class="bg-info">Modificar</td></th></tr>

          <tr>
            <th>Parentesco</th>
            <td> <input readonly value="{{ $consideraciones[$i]->parentesco}}"  type="text" class="form-control" name="consideraciones[{{ $i }}][parentesco]" id="consideraciones{{ $i }}idParentesco" required>              
            </td>
            <td></td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('consideraciones{{ $i }}idParentesco')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('consideraciones{{ $i }}idParentesco')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>

          <tr>
            <th>Enfermedad</th>
            <td> <input readonly value="{{ $consideraciones[$i]->enfermedad}}"  type="text" class="form-control" name="consideraciones[{{ $i }}][enfermedad]" id="consideraciones{{ $i }}idEnfermedad" required>              
            </td>
            <td></td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('consideraciones{{ $i }}idEnfermedad')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('consideraciones{{ $i }}idEnfermedad')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>
          
          <tr>
            <th>Produce Incapacidad o Enfermedad cronica grave</th>
            <td> <input readonly value="{{ $consideraciones[$i]->incapacidad}}"  type="text" class="form-control" name="consideraciones[{{ $i }}][incapacidad]" id="consideraciones{{ $i }}idIncapacidad" required>              
            </td>
            <td>
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  Certificado
                      <img src="{{ action('InscripcionesController@getFile',['filename' => $consideraciones[$i]->cert_incapacidad]) }}" alt="..." class="img-responsive lightbox hide">
                  </a>  
            </td>

           <td>
              <input type="Button" style="display: inline;" onclick="quitarReadOnly('consideraciones{{ $i }}idIncapacidad')" class="btn-xs btn-success" title="Modificar" value="Modificar">
              <input type="Button" style="display: inline;" onclick="ponerReadOnly('consideraciones{{ $i }}idIncapacidad')" class="btn-xs btn-warning" title="Guardar" value="Guardar">
            </td> 

          </tr>


      @endfor
  </table>
  </td>
  </tr>
  </table>



<table class="rwd_auto table table-responsive table-bordered" width="100%" cellpadding="5" cellspacing="5" border="0">
    <tr>
      <td width="100%" class="bg-info">
    
    <h4 align="left" class="">Motivos del estudiante</h4>     
        

          <tr>
            
            <td>{{ $datos->motivos}}</td>
          </tr>

      </table>    



  <h3 align="center" class="">Conformacion del puntaje del <strong>postulante</strong></h3>
    <table align="center" border="3" class=""> 
        <tr><th class="bg-success"><td class="bg-success" align="center">Puntaje</td> </th></tr>

          <tr>
            <th>puntaje 1</th>
            <td align="center"> <input readonly value="{{ $datos->cant_terreno}}"  type="text" class="form-control" name="punt_1" id="punt_1" required> 
            </td>
            
          </tr>

          <tr>
            <th>Puntaje 2</th>
            <td align="center"> <input readonly value="{{ $datos->cant_terreno}}"  type="text" class="form-control" name="punt_2" id="punt_2" required>              
            </td>

          </tr>
          
          
          <tr>
            <th>Puntaje 3</th>
            <td align="center"> <input readonly value="{{ $datos->cant_terreno}}"  type="text" class="form-control" name="punt_3" id="punt_3" required>              
            </td>
          </tr>
         
          <tr align="center">
            <th align="center"><font color="red"><strong>Total</strong></font></th>
            <td class="" align="center"> <input readonly value="{{ $datos->cant_terreno}}"  type="text" class="form-control" name="punt_3" id="punt_3" required align="center">              
            </td>

          </tr>


          </tr>


  
    </table>


   



<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
                 <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
</div>



<br><br><br>
<div align="center">


 

  @if(  $datos->revision==0  )

<strong>Los datos que se observan del postulante son correctos?.</strong><br> Tener en cuenta que al ser correctos, y aceptar los datos se incluira el postulante en la orden de meritos<br>
  <input type="radio" name="band" value="0" {{ ($datos->band) == '0' ? 'checked': ''}}/> Datos incompletos o no correctos!<br>         
 <input type="radio" name="band" value="1" {{ ($datos->band) =='1' ? 'checked': ''}}/> Datos correctos!<br>

    <h4 class="p-3 mb-2 bg-warning text-warning">Establecer revision sobre postulante</h4>

    <select name = 'accion'>
      <option value=""> Seleccione una opcion</option>
      <option value="acepta"> Aceptar datos cargados (no guarda modificaciones)</option>
      <option value="modifica">Guardar modificaciones y Aceptar</option>
      <option value="borra"> Borrar datos de la inscripcion del usuario</option>
    </select>


<button type="Submit" name="id" value="{{$datos->user_id}}" class="btn btn-primary btn-lg">
 Ir
</button>

@else

<h3 class="p-3 mb-2 bg-primary text-white">Usuario ya incorporado en la orden de meritos - <i>(siga con el proximo)</i>
{{ link_to(('/administracion/inscripciones'), 'Volver!', ['class' => 'secondary button']) }}
</h4>

@endif

{!! Form::close() !!}

<br><br><br><br><br>
@endsection



<script>
  $(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});
</script>