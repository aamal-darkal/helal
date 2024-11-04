<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body dir="@lang('helal.dir')">
        @include('layouts.header')
        @include('layouts.navigation')
        @yield('content')
        @include('layouts.footer')
        @include('layouts.fixed-btn')
        @include('layouts.js')
</body>
</html>