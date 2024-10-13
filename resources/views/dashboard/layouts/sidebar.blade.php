 <nav id="sidebar" class="sidebar js-sidebar">
     <div class="sidebar-content js-simplebar">
         <a class="sidebar-brand" href="index.html">
             <span class="align-middle">AdminKit</span>
         </a>

         <ul class="sidebar-nav">
             <li class="sidebar-header">
                 Pages
             </li>
             @if (Route::has('categories.index'))
                 <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'categories')) active @endif">
                     <a class="sidebar-link" href="{{ route('categories.index') }}">
                         <i class="align-middle" data-feather="sliders"></i> <span
                             class="align-middle">Categories</span>
                     </a>
                 </li>
             @endif
             @if (Route::has('books.index'))
                 <li class="sidebar-item @if (str_contains(Route::currentRouteName(), 'books')) active @endif">
                     <a class="sidebar-link" href="{{ route('books.index') }}">
                         <i class="align-middle" data-feather="book"></i> <span
                             class="align-middle">Books</span>
                     </a>
                 </li>
             @endif
             
         </ul>

         <div class="sidebar-cta">
             <div class="sidebar-cta-content">
                 <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                 <div class="mb-3 text-sm">
                     Are you looking for more components? Check out our premium version.
                 </div>
                 <div class="d-grid">
                     <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                 </div>
             </div>
         </div>
     </div>
 </nav>
