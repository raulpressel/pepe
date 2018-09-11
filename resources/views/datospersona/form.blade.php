<!--Agregado para el modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<div class="container">
  <div class="row">
    <section>
        <div class="wizard">
            <h1>Inscripción a la BECA - UADER</h1>
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">


                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Datos Personales del Estudiante">
                            <span class="round-tab">
                                <i class="icon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Situacion Academica">
                            <span class="round-tab">
                              <i class="icon-mortar-board"></i>  
                                 
                                 
                           </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Situacion Economica del Estudiante">
                            <span class="round-tab">
                                <i class="icon-attach_money"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Vivienda durante el cursado">
                            <span class="round-tab">
                                <i class="icon-home"></i>
                            </span>
                        </a>
                    </li>
                   <li role="presentation" class="disabled">
                        <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Viaja para cursar">
                            <span class="round-tab">
                                <i class="icon-bus"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" title="Grupo familiar">
                            <span class="round-tab">
                                <i class="icon-group2"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab" title="Patrimonio grupo familiar">
                            <span class="round-tab">
                                <i class="icon-moneybag"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab" title="Consideraciones particulares">
                            <span class="round-tab">
                                <i class="icon-aid-kit"></i>
                            </span>
                        </a>
                    </li>                    
                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Motivos">
                            <span class="round-tab">
                                <i class="icon-checkmark"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Esto es para los errores!!-->
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
              <p>Porfavor corrije los siguientes errores:</p>
              <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
              @endif
            </div>

              <form method="POST" action="{{ route('datospersona.store') }}" files="true" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="modal fade" id="condiciones_rgpd" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="lbcondiciones_rgpd" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div id="condiciones_rgpdDiv">
          <div class="panel panel-default">
            <div class="panel-heading" align="center">
              <h3 class="panel-title" ><font color="blue">Requisitos para el formulario</font></h3>
            </div>
            <div>
              <strong>Debera tener los siguientes formulario:</strong><br>
            * Fotocopia del dni (frente y dorso)<br>
            * Certificacion negativa del Anses<br>
            * Si posee algun tipo de discapacidad, contar con el certificado<br>
            * Si es ingresante: Constancia de inscripcion a la universidad y titulo de la universidad<br>
            * Si es nuevo-renovante-condicional-: Constancia de alumno regular y analitico de materias aprobadas<br>
            * Si trabaja y es empleado activo: ultimos 3 recibos de sueldo<br>
            * Si trabaja y es monotributista: Comprobante de Afip<br>
            * Si es trabajador informal: Declaracion jurada<br>
            * Si alquila en donde recide: Recibo de alquiler<br>
            * Si utiliza transporte (colectivo): Recibo de pasaje<br>
            * De sus familiares a cargar se necesitan:<br>
              - Certificacion Negativa de Anses
              - Constancia de trabajo en el caso de tener actividad laboral
              - En el caso de poseer algun tipo de incapacidad, su certificado<br><br>
              <strong>Aclaraciones: </strong><br>
              * La carga del siguiente formulario es en caracter de declaracion jurada. Ley?<br>
              * Tiempo estimado de carga: 12minutos<br> 
              * Se podran subir archivos de imagenes(.jpeg, .png) y documentos de formato portable (.pdf)<br>
              * Si visualiza:<br>
              <div class="glyphicon" style="height:10px; width:10px;">
                <span class="input-group-addon success">
                <span class="glyphicon glyphicon-ok">  
                </span></span>
              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indica que falta cargar o poosee algun error en la carga<BR><BR>
              <div class="glyphicon" style="height:10px; width:10px;">
                <span class="input-group-addon success">
                <span class="glyphicon glyphicon-ok">  
                </span></span>
              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indica que cargo correctamente el campo
              <br><br>
              <div class="glyphicon" style="height:10px; width:10px;">
                <span class="input-group-addon info">
                <span class="glyphicon glyphicon-asterisk">
                </span></span>
              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indica que su carga es opcional<br><br>
              <br><br>
              <div class="panel-footer" align="center">
                <font color="red"><strong>Tener en cuenta que no podra completar la postulacion si no completa todos los campos</strong></font> <br>
                <!--<input type="Button"  class="btn-xs btn-success" id="oki">-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


              <input type="hidden" id="becaid" name="becaid" value={{$aux->id}}>
                @include('datospersona.steps.datos_estudiante')
                @include('datospersona.steps.situacion_academica')
                @include('datospersona.steps.situacion_economica_estudiante')
                @include('datospersona.steps.vivienda_cursado')
                @include('datospersona.steps.viaja_cursar')
                @include('datospersona.steps.grupo_familiar')
                @include('datospersona.steps.patrimonio_familiar')
                @include('datospersona.steps.consideraciones_particulares')
                @include('datospersona.steps.enviar')
               </form>

              </div>
    
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


<script>
$('#oki').on('click',function(){
  $('#condiciones_rgpd').modal('hide');
})

setTimeout(
  $(window).on('load', function() {
    $('#condiciones_rgpd').modal('show');
  }),
  5000
);
</script>