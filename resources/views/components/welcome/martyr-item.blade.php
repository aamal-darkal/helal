@props(['name', 'dob', 'content'])
<div {{ $attributes->merge(['class' => 'carousel-item']) }}>
    <div class="row">
        <div class="single-martyr col-8 col-md-4 col-lg-3 mx-auto">
            <h4>{{ $name }}</h4>
            <h5>{{ $dob }}</h5>
            <p>{{ $content }}</p>
        </div>
    </div>
</div>
