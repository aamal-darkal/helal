<section id="statistic" class="container section-wrapper">
    <div class="row">
        <div class="col-md-6 px-3 py-5 text-justify">
            <p> {{ $components['target'] }}</p>
        </div>
        <div id="statics-counters" class="col-md-6 counter-wrapper row">
            <x-welcome.counter-item icon="fa-calendar-days" max="78" title="Year" />
            <x-welcome.counter-item icon="fa-location-arrow" max="14" title="provinces" />
            <x-welcome.counter-item icon="fa-users" max="12500" title="Volunteers" />
        </div>
    </div>
    
</section>
