 <nav id="sidebar" class="sidebar js-sidebar">
     <div class="sidebar-content js-simplebar text-left">
         <a class="sidebar-brand" href="dashboard">
             <span class="align-middle">لوحة التحكم</span>
         </a>

         <ul class="sidebar-nav">            
             @if (Route::has('dashboard.martyers.index'))
                 <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'martyers')) active @endif">
                     <a class="sidebar-link" href="{{ route('dashboard.martyers.index') }}">
                         <span class="align-middle">الشهداء</span>
                         <i class="align-middle" data-feather="flag"></i>
                     </a>
                 </li>
             @endif
             <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'article')) active @endif">
                 <a class="sidebar-link" href="{{ route('dashboard.sections.index', ['type' => 'article']) }}">
                     <span class="align-middle">{{ config('section.article.plural', 'section') }} </span>
                     <i class="align-middle" data-feather="book-open"></i>
                 </a>
             </li>
             <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'compaign')) active @endif">
                 <a class="sidebar-link" href="{{ route('dashboard.sections.index', ['type' => 'compaign']) }}">
                     <span class="align-middle">{{ config('section.compaign.plural', 'section') }}</span>
                     <i class="align-middle" data-feather="navigation"></i>
                 </a>
             </li>
             <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'news')) active @endif">
                 <a class="sidebar-link" href="{{ route('dashboard.sections.index', ['type' => 'news']) }}">
                     <span class="align-middle"> {{ config('section.news.plural', 'section') }}</span>
                     <i class="align-middle" data-feather="file-text"></i>
                 </a>
             </li>
             <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'story')) active @endif">
                 <a class="sidebar-link" href="{{ route('dashboard.sections.index', ['type' => 'story']) }}">
                     <span class="align-middle"> {{ config('section.story.plural', 'section') }}</span>
                     <i class="align-middle" data-feather="heart"></i>
                 </a>
             </li>
         </ul>

     </div>
 </nav>
