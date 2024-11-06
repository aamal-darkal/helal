 <section id="martyers" >
     <div class="container swiper martyer-swiper" data-aos="fade-up" data-aos-delay="100">
             <div class="swiper-wrapper">
                 @foreach ($martyers as $martyer)
                     <x-welcome.martyer-item :name="$martyer->name" :name_en="$martyer->name_en" :DOB="$martyer->DOB" :city="$martyer->city" />
                 @endforeach
             </div>
             <div class="swiper-pagination"></div>
         </div>
     </div>
 </section>
