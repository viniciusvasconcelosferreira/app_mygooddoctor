<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <title>
        {{ucwords(explode('/',request()->path())[1])}} &middot; My Good Doctor
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('css/material-dashboard.css?v=3.0.5')}}" rel="stylesheet"/>
    @yield('stylesheets')
</head>

<body class="g-sidenav-show bg-gray-100">

@include('sections.aside')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('sections.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                @yield('content')
            </div>
        </div>
        @include('sections.footer')
    </div>
</main>
<!--   Core JS Files   -->
<script src="{{asset('js/core/popper.min.js')}}"></script>
<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('js/plugins/fullcalendar.min.js')}}"></script>
<!-- Kanban scripts -->
<script src="{{asset('js/plugins/dragula/dragula.min.js')}}"></script>
<script src="{{asset('js/plugins/jkanban/jkanban.js')}}"></script>
<script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
<script src="{{asset('js/plugins/world.js')}}"></script>
<script src="{{asset('js/plugins/sweetalert.min.js')}}"></script>
<script src="{{asset('js/plugins/datatables.js')}}"></script>
<script src="{{asset('js/plugins/multistep-form.js')}}"></script>
<script src="{{asset('js/plugins/choices.min.js')}}"></script>
<script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
            damping: "0.5"
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/material-dashboard.min.js?v=3.0.5')}}"></script>
@yield('scripts')
</body>

</html>
