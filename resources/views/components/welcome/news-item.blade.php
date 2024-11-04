@props(['image',  'title' , 'content', ])
<div {{ $attributes->merge(['class' => 'carousel-item']) }} >
    <div class="col-md-3 p-3">
        <div class="single-news">
            <div class="img-wrapper">
                <img src="assets/images/news/{{ $image }}" alt="">
            </div>

            <a class="section-title" href="news-details.html">{{ $title }}</a>
            <div class="news-content px-4">
                <p> {{ $content }} </p>
            </div>
        </div>
    </div>
</div>
