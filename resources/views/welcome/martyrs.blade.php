 <section id="martyrs-area" class="section-wrapper">
     <div class="container">
         <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
             <div class="carousel-inner">
                 @foreach ($martyers as $martyer)
                     <x-welcome.martyer-item :name="$martyer->name" :name_en="$martyer->name_en" :DOB="$martyer->DOB" :city="$martyer->city" class="active"/>
                @endforeach
             </div>
         </div>

     </div>
 </section>
