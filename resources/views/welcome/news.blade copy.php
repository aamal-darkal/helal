 <section id="news-area" class="bg_cover section-wrapper">
     <div class="container my-3">
         <h2 class="section-title"> @lang('helal.news') </h2>

         <div class="row">
             <!-- <div id="news-carousel" class="carousel slide" data-bs-ride="carousel"> -->
             <div id="news-carousel" class="carousel slide carousel-fade">
                 <div class="carousel-inner">
                     <x-welcome.news-item image="new-1.jpg" title="News Title1" class="active"
                         content="location of news Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sequi." />
                     <x-welcome.news-item image="new-2.jpg" title="News Title2"
                         content="location of news Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sequi." />
                     <x-welcome.news-item image="new-3.jpg" title="News Title3"
                         content="location of news Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sequi." />
                     <x-welcome.news-item image="new-4.jpg" title="News Title4"
                         content="location of news Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sequi." />
                     <x-welcome.news-item image="new-5.jpg" title="News Title5"
                         content="location of news Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sequi." />
                     <x-welcome.news-item image="new-6.jpg" title="News Title6"
                         content="location of news Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sequi." />
                 </div>

                 <button class="carousel-control-prev" type="button" data-bs-target="#news-carousel"
                     data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#news-carousel"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                 </button>
             </div>
         </div>
 </section>
