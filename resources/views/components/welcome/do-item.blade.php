@props([
    'href',
    'icon',
    'title',
])
<div class="doing-list-item col-4">
    <a href="{{ $href }}" data-aos="fade-up">
        @include("welcome.doing-icons.$icon")
        <h3>@lang($title)</h3>
    </a>
</div>
