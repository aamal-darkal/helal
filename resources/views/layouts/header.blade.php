<header id="header-area" class="fixed-top container-fluid">
    <div class="d-flex justify-content-between align-items-center">
        <div class="logo-wrapper">
            <a href="{{ route('home.index') }}">
                <img class="logo" src="{{ getImgUrl($components['logo']) }}" alt="Logo">
            </a>
        </div>

        <div class="search-wrapper">
            <a class="search open-modal"><i class="fas fa-search icon-search"></i></a>
            <div id="search-modal" class="search-modal">
                <div class="modal-content">
                    <form action="{{ route('home.search') }}">
                        <button type="button" class="btn btn-outline-secondary close-modal">&times;</button>
                        <input type="search" name="search">
                        <button class="btn btn-secondary">search</button>
                    </form>
                </div>
            </div>
            <form action="{{ route('language') }}" class="d-inline-block">
                <button class="btn btn-salmon ms-2">@lang('helal.lang')</button>
            </form>
        </div>
    </div>
</header>
