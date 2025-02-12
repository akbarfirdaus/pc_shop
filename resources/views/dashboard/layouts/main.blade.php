<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.head')

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        @include('dashboard.layouts.sidebar')
        <div id="main">
            @yield('content')

            @include('dashboard.layouts.footer')
        </div>
    </div>
    @include('dashboard.layouts.script')
    @yield('scripts')

</body>

</html>
