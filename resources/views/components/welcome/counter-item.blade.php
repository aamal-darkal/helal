@props([
    'icon',
    'max',
    'title',
])
<div class="col-4 single-counter">
    <div class="icon">
        <i class="fa {{ $icon }}"></i>
    </div>
    <h3>
        <div class="counter" data-max={{$max}}>0</div>
    </h3>
    <h4>{{ $title }}</h4>
</div>
