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
                @foreach ($menus as $menu)
                    @if (!$menu->sub_menus_count)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url($menu->url) }}">
                                {{ $menu->title }}
                            </a>
                        </li>
                    @else
                        <li class="nav-item dropdown" aria-current="page">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                {{ $menu->title }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($menu->subMenus as $subMenu)
                                    @if (!$subMenu->sub_menus_count)
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ url($subMenu->url) }}">{{ $subMenu->title }}
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item dropdown" aria-current="page">
                                            <a class="nav-link dropdown-toggle dropdown-item" href="#" role="button"
                                                data-bs-toggle="dropdown">
                                                {{ $subMenu->title }}
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach ($subMenu->subMenus as $subSubMenu)
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ url($subSubMenu->url) }}">{{ $subSubMenu->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach

                <li class="search-item nav-item">
                    {{-- <a class="search open-modal"><i class="fas fa-search"></i></a> --}}
                    <a class="search open-modal"><i class="fas fa-search icon-search"></i></a>
                    
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
