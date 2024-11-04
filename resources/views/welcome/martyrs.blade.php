 <section id="testimonials" class="testimonials section light-background">
     <div class="container" data-aos="fade-up" data-aos-delay="100">
         <div class="swiper init-swiper">
             <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
             <div class="swiper-wrapper">
                 @foreach ($martyers as $martyer)
                     <x-welcome.martyer-item :name="$martyer->name" :name_en="$martyer->name_en" :DOB="$martyer->DOB" :city="$martyer->city" />
                 @endforeach
             </div>
             <div class="swiper-pagination"></div>
         </div>
     </div>
 </section>
