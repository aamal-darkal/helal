@props(['image', 'title', 'content', 'href'])
<div class="swiper-slide container" data-aos="fade-up">
    <div class="row">
        <div class="col-md-6 story-img">
            <img src="assets/images/story/{{ $image }}" alt="" class="w-100">
        </div>
        <div class="col-md-6 mb-5">
            <div class="story-content bg-white p-3 shadow">
                <h4>{{ $title }}</h4>
                <p class="my-0">
                    {{ $content }}
                </p>
                <div class="text-center pt-2">
                    <a href="{{ $href }}" class="text-salmon">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
