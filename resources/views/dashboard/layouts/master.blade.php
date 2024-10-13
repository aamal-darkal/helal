<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div class="wrapper">
        @include('layouts.sidebar')

        <div class="main">            
            @include('layouts.master-nav')
            <main class="content">
                <div class="container-fluid p-0">
                    @session('success')
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endsession

                    @session('error')
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endsession
                    @yield('content')
                </div>
            </main>

            @include('layouts.footer')
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')
</body>

</html>
