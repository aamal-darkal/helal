@props(['name', 'name_en', 'DOB', 'city'])
<div class="swiper-slide">
    <div class="single-martyr">
        <h4>{{ $name }}</h4>
        <h5>{{ $DOB }}</h5>
        <p>{{ $name_en }} - {{ $city }}</p>
    </div>
</div>
