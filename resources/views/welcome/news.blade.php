    @if ($news->count())
     <section id="news-area" class="bg_cover section-wrapper">
         <div class="container my-3">
             <h2 class="section-title"> @lang('helal.news') </h2>
             <div class="swiper news-swipper">
                 <div class="swiper-wrapper">
                     @foreach ($news as $new)
                         <div class = "swiper-slide">
                             <div class="single-news">
                                 <div class="img-wrapper">
                                     <img src="{{ asset(getImgUrl($new->image_id)) }}">
                                 </div>

                                 <h4 class="sub-title">{{ $new->title }}</h4>
                                 <div class="news-content px-2">
                                     <div class="d-none">
                                         {!! $new->content !!}
                                     </div>

                                     <div class="summary h-70px mb-3" data-length="{{ $new->summary_length }}"></div>
                                     <a href="{{ route('home.show', $new->id) }}"> @lang('helal.readmore')... </a>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
             </div>
     </section>
 @endif
