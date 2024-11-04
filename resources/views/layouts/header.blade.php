<header id="nav-area" class="fixed-top container-fluid">
    <div class="mx-8 d-flex justify-content-between align-items-center">

        <a href="index.html" class="logo">
            <img class="logo" src="{{ asset('assets/images/logo/logo.png') }} " alt="Logo">
        </a>
        
        <div>
            <a class="text-salmon mx-3 search"><i class="fas fa-search"></i></a>
            <form action="{{ route('language') }}" class="d-inline-block">
                <button class="btn btn-salmon ms-2">@lang('helal.lang')</button>                
            </form>
        </div>
    </div>
</header>
