@props([
    'href',
    'icon',
    'title',
])
<div class="doing-list-item col-4">
    <a href="{{ $href }}" data-aos="fade-up">
        <div class="icon">
            <i class="lni lni-{{ $icon }}"></i>
        </div>
        <h3>@lang($title)</h3>
    </a>
</div>
