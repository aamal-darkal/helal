@props(['image',  'title' , 'content', ])
<div {{ $attributes->merge(['class' => 'carousel-item']) }} >
    <div class="col-md-4 me-2">
        <div class="single-news">
            <div class="img-wrapper">
                <img src="assets/images/news/{{ $image }}" alt="">
            </div>

            <div class="news-content p-2">
                <h3 class="text-secondary"><a href="news-details.html">{{ $title }}</a></h3>
                <p> {{ $content }} </p>
            </div>
        </div>
    </div>
</div>
