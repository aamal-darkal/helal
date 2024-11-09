<header id="header-area" class="fixed-top container-fluid">
    <div class="d-flex justify-content-between align-items-center">
        <div class="logo-wrapper">
            <a href="index.html">
                <img class="logo" src="{{ asset('assets/images/logo/logo.png') }} " alt="Logo">
            </a>
        </div>

        <div class="search-wrapper">
            <form action="{{ route('language') }}" class="d-inline-block">
                <button class="btn btn-salmon ms-2">@lang('helal.lang')</button>
            </form>
        </div>
    </div>
</header>
