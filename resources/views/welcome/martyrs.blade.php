@if ($martyers->count())
    <section id="martyers">
        <div class="container swiper martyer-swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($martyers as $martyer)
                    <div class="swiper-slide">
                        <div class="single-martyr">
                            <h4>{{ $martyer->name }}</h4>
                            <h5>{{ $martyer->DOB }}</h5>
                            <p>{{ $martyer->province->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
    </section>
@endif
