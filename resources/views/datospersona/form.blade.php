  <div class="container"> <!!Esto se puede cambiar  o la de abajo!!>
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

            <!!Esto es para los errores!!>
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

              <form method="POST" action="{{ route('datospersona.store') }}">
              {{ csrf_field() }}
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



