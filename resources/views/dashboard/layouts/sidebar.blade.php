 <nav id="sidebar" class="sidebar js-sidebar">
     <div class="sidebar-content js-simplebar text-left">
         <a class="sidebar-brand" href="/dashboard">
             <span class="align-middle">لوحة التحكم</span>
         </a>

         <ul class="sidebar-nav pe-0"> 
            <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'main-page')) active @endif">
                 <a class="sidebar-link" href="{{ route('dashboard.main-components.index') }}">
                     <i class="align-middle" data-feather="clipboard"></i>
                     <span class="align-middle">عناصر الصفحة الرئيسية</span>
                 </a>
             </li>           
             
             <li class="sidebar-item @if( session()->get('type') == 'article') active @endif">
                 <a class="sidebar-link" href="{{ route('dashboard.sections.index', ['type' => 'article']) }}">
                     <i class="align-middle" data-feather="book-open"></i>
                     <span class="align-middle">{{ config('section.article.plural', 'section') }} </span>
                 </a>
             </li>
             <li class="sidebar-item @if( session()->get('type') == 'compaign') active @endif">
                 <a class="sidebar-link" href="{{ route('dashboard.sections.index', ['type' => 'compaign']) }}">
                     <i class="align-middle" data-feather="navigation"></i>
                     <span class="align-middle">{{ config('section.compaign.plural', 'section') }}</span>
                 </a>
             </li>
             <li class="sidebar-item @if( session()->get('type') == 'news') active @endif ">
                 <a class="sidebar-link" href="{{ route('dashboard.sections.index', ['type' => 'news']) }}">
                     <i class="align-middle" data-feather="file-text"></i>
                     <span class="align-middle"> {{ config('section.news.plural', 'section') }}</span>
                 </a>
             </li>
             <li class="sidebar-item @if( session()->get('type') == 'story') active @endif">
                 <a class="sidebar-link" href="{{ route('dashboard.sections.index', ['type' => 'story']) }}">
                     <i class="align-middle" data-feather="heart"></i>
                     <span class="align-middle"> {{ config('section.story.plural', 'section') }}</span>
                 </a>
             </li>
             @if (Route::has('dashboard.martyers.index'))
                 <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'martyers')) active @endif">
                     <a class="sidebar-link" href="{{ route('dashboard.martyers.index') }}">
                         <i class="align-middle" data-feather="flag"></i>
                         <span class="align-middle">الشهداء</span>
                     </a>
                 </li>
             @endif             
             
             @if (Route::has('dashboard.branches.index'))
                 <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'branches')) active @endif">
                     <a class="sidebar-link" href="{{ route('dashboard.branches.index') }}">
                         <i class="align-middle" data-feather="grid"></i>
                         <span class="align-middle">الفروع</span>
                     </a>
                 </li>
             @endif             
             
             @if (Route::has('dashboard.users.index'))
                 <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'users')) active @endif">
                     <a class="sidebar-link" href="{{ route('dashboard.users.index') }}">
                         <i class="align-middle" data-feather="users"></i>
                         <span class="align-middle">الحسابات</span>
                     </a>
                 </li>
             @endif             
         </ul>
     </div>
 </nav>
 
 @php 
 session()->forget('type')   
 @endphp
