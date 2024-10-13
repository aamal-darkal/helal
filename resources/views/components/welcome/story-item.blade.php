@props(['image', 'title', 'content', 'href'])
<div class="row feature-news-carousel p-2" data-aos="fade-up">
    <div class="col-md-6 story-img">
        <img src="assets/images/story/{{ $image }}" alt="" class="w-100">
    </div>
    <div class="col-md-6 mb-5">
        <div class="story-content bg-white p-4 shadow">
            <h4>{{ $title }}</h4>
            <p>
                {{ $content }}
            </p>
            <div class="text-center"><a href="{{ $href }}" class="mt-3 text-salmon">Read
                    More</a>
            </div>
        </div>
    </div>
</div>
