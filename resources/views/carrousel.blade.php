<section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4>1</h4><img src="../img/drag.png">
            </div>
            <div class="item">
              <h4>2</h4><img src="../img/logo.png">
            </div>
            <div class="item"><img src="img/becas.jpg" width="100%">
              <h4>3</h4>
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
          
          <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoWidth:true,
                autoplay:false,
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
        </div>
      </div>
    </section>
