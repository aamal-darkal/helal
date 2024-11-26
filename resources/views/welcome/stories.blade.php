<section id="stories-area" class="bg_cover section-wrapper">
    <div class="container stories-carousel-wrapper">
        <h2 class="section-title">@lang('helal.human_storeis')</h2>
        <div class="swiper stories-swiper">
            <div class="swiper-wrapper">
                @foreach ($stories as $story)
                    <div class="swiper-slide container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-md-6 story-img">
                                <img src="{{ getImgUrl($story->image_id) }}" alt="" >
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="story-content bg-white p-3 shadow">
                                    <h4 class="text-salmon">{{ $story->title }}</h4>
                                    <div class="d-none">
                                        {!! $story->content !!}
                                    </div>
                                    <div class="summary mb-3" data-length="{{ $story->summary_length }}"></div>
                                    <div class="text-center pt-2">
                                        <a href="{{ route('home.show', $story->id) }}">@lang('helal.readmore')...</a>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </div>
    </div>
</section>
