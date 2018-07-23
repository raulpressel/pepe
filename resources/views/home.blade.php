@extends('layout')

@section('contenido')

<section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4>Becas</h4><img src="../img/becas.jpg" width="10" height="10">
            </div> 
            <div class="item" style="width:300px;">
              <h4>2</h4><img src="../img/logo.png">
            </div>
            <div class="item" style="width:250px;">
              <h4>FCyT-Uader</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
          </div>
          

<ul><h1>Bienvenidos al sitio web para la inscripcion de la Beca FCyT-Uader</h1>
<p>Raul paga el asado</p></ul>



        </div>
      </div>
    </section>
          <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                items:1,
                margin: 30,
                setPadding:30,
                smartSpeed:450,
                responsiveClass: true,
                loop: true,
                autoWidth:true,
                autoplay:true,
                nav:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
                responsive: {
                  0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
@include('footer')

@stop
