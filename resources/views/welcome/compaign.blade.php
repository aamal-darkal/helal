@if ($compaign)
    <section id="compaign-area">
        <div class="title-wrapper">
            <h2 class="section-title">@lang('helal.campaign')</h2>
        </div>


        <div class="px-5 center-container compaign-content" style="background-image: url({{ getImgUrl($compaign->id) }})">
            <h3 class="text-white text-shadow-black"> {{ $compaign->title }} </h3>
            <div class="d-none">
                {!! $compaign->content !!}
            </div>
            <div class="summary h-70px mb-3 text-white text-shadow-black" data-length="{{ $compaign->summary_length }}"></div>
            <p><a href="{{ route('home.show', $compaign->id) }}">@lang('helal.readmore')...</a></p>
        </div>
    </section>
@endif
