 <div class="row">
        <div class="text">
       
          <div class="block-w">
              <img style="width:550px; height:500px;" src="pic/alco1.jpg"/>
            </div>
          <div class="block-v">
              <img style="width:200px; height:500px;" src="pic/alco3.jpg"/>
          </div>
          <div class="block-k">
              <img style="width:380px; height:400px;" src="pic/wine.jpg"/>
          </div>
          <div class="block-wi">
              <img style="width:380px; height:400px;" src="pic/konyak.jpg"/>
          </div>
        </div>
        <br>
        <br>
        <div class="slid">
          <div class="pictureCurrent">
            <img src="pic/konyak.jpg">
          </div>
           <section class="regular slider">
              <div>
                <img src="pic/alco1.jpg"/>
              </div>
              <div>
                <img src="pic/alco3.jpg"/>
              </div>
              <div>
                <img src="pic/wine.jpg"/>
              </div>
              <div>
                <img src="pic/konyak.jpg"/>
              </div>
              <div>
                <img src="pic/alco1.jpg"/>
              </div>
              <div>
                <img src="pic/alco3.jpg"/>
              </div>
              <div>
                <img src="pic/wine.jpg"/>
              </div>
              <div>
                <img src="pic/konyak.jpg"/>
              </div>
              <div>
                <img src="pic/alco1.jpg"/>
              </div>
              <div>
                <img src="pic/alco3.jpg"/>
              </div>
              <div>
                <img src="pic/wine.jpg"/>
              </div>
              <div>
                <img src="pic/konyak.jpg"/>
              </div>
         </section>

          <script type="text/javascript">
            $(document).on('ready', function() {
              $(".regular").slick({
                dots: true,
                autoplay: true,
                autoplaySpeed: 3000,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true
              });

            });
          </script>
        </div>
    
      </div>