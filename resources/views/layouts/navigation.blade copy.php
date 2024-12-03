<nav class="navbar navbar-expand-xl p-0">

    <div class="container p-0">
        <button class="navbar-toggler btn-salmon" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            {{-- <i class="fa-solid fa-square-caret-down"></i> --}}
            <i class="fa-solid fa-caret-down"></i>
            {{-- <i class="fa-solid fa-bars"></i> --}}
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0 p-0">
                <li clasps="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}">@lang('helal.home')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @lang ('helal.who')
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">@lang('helal.about')</a></li>
                        <li><a class="dropdown-item" href="#">@lang('helal.story')</a></li>
                        <li><a class="dropdown-item" href="#">@lang('helal.principles')</a></li>
                        <li><a class="dropdown-item" href="#">@lang('helal.where')</a></li>
                        <li><a class="dropdown-item" href="#">@lang('helal.movement')</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @lang('helal.do')
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($doings as $doing)
                            <li><a class="dropdown-item"
                                    href="{{ route('home.search', ['doing' => $doing]) }}">{{ $doing->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown" aria-current="page">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">@lang('helal.news')</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">@lang('helal.sarc-news')
                            </a></li>
                        <li><a class="dropdown-item" href="#">@lang('helal.branch-news')</a></li>
                        <li>
                            <!-- <hr class="dropdown-divider"> -->
                        </li>
                        <li><a class="dropdown-item" href="#">@lang('helal.stories')</a></li>
                        <li><a class="dropdown-item" href="#">@lang('helal.press')
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown" aria-current="page">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">@lang('helal.achievements')</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">@lang('helal.reports')
                            </a></li>
                        <li><a class="dropdown-item" href="#">@lang('helal.infographics')</a></li>
                        <li>
                            <!-- <hr class="dropdown-divider"> -->
                        </li>
                        <li><a class="dropdown-item" href="#">@lang('helal.campaign')</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('helal.awareness')</a>
                </li>
                <li class="nav-item dropdown" aria-current="page">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">@lang('helal.join')</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">@lang('helal.vacancies')
                            </a></li>
                        <li><a class="dropdown-item" href="#">@lang('helal.volunteer')</a></li>

                    </ul>
                <li class="search-item">
                    <a class="mx-1 search open-modal"><i class="fas fa-search"></i></a>

                    <div id="search-modal" class="search-modal">
                        <div class="modal-content">
                            <form action="{{ route('home.search') }}">
                                <button type="button" class="btn btn-outline-secondary close-modal" >&times;</button>
                                <input type="search" name="search">
                                <button class="btn btn-secondary">search</button>
                                
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>
