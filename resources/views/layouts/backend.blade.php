<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="bootstrap admin template, admin template ,admin panel template ,bootstrap 4 admin template ,bootstrap admin ,admin dashboard template ,bootstrap admin panel ,bitcoin dashboard ,crypto dashboard ,btc dashboard ,cryptocurrency dashboard ,bitcoin template ,cryptocurrency template ,crypto template ,cryptocurrency dashboard template ,cryptocurrency admin template ,crypto admin template ,btconline dashboard ,ryptocurrency dashboard template ,crypto admin template ,crypto trading dashboard ,cryptocurrency admin template " />

    <!-- Title -->
    <title> Xino - Premium dashboard ui bootstrap rwd admin html5 template </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- Internal Chart-Morris css-->
    <link href="{{ asset('assets/plugins/morris.js/morris.css') }}" rel="stylesheet">

    <!--  Left-Sidebar css -->
    <link href="{{ asset('assets/css/sidemenu.css') }}" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- Internal Nice-select css  -->
    <link href="{{ asset('assets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />

    <!-- Internal News-Ticker css-->
    <link href="{{ asset('assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!-- Jquery-countdown css-->
    <link href="{{ asset('assets/plugins/jquery-countdown/countdown.css') }}" rel="stylesheet">

    <!-- Internal News-Ticker css-->
    <link href="{{ asset('assets/plugins/newsticker/jquery.jConveyorTicker.css') }}" rel="stylesheet" />

    <!-- style css-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- skin css-->
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet">

    <!-- dark-theme css-->
    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet">

    <!--- Animations css-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

</head>

<body class="main-body app sidebar-mini dark-theme">

    <!-- Loader -->
    <div id="global-loader" class="dark-loader">
        <img src="{{ asset('assets/img/loaders/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-sidebar opened -->
        @include('layouts.backend.sidebar')

        <!-- main-sidebar -->

        <!-- main-content -->
        <div class="main-content app-content">


            <!-- main-header -->
            @include('layouts.backend.header')
            <!-- /main-header -->

            <!-- mobile-header -->
            @include('layouts.backend.mobileHeader')
            <!-- mobile-header -->

            @if (auth()->user()->is_temp_password == 1)
                )
                <!-- container -->
                @yield('content')
            @else
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <strong>Warning!</strong> Your account is password is temporary. Please change your
                                password.
                                Click <a href="{{ route('password.request') }}">here</a> to change password.
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- /conatiner -->
        </div>
        <!-- /main-content -->

        <!-- Right-sidebar-->
        @include('layouts.backend.rightSidebar')


        <!-- Right-sidebar-closed -->


        <!-- Footer opened -->
        <div class="main-footer ht-40">
            <div class="container-fluid pd-t-0-f ht-100p">
                <span>Copyright © 2020 <a href="#">Xino</a>. Designed by <a href="https://www.spruko.com/">Spruko</a>
                    All rights reserved.</span>
            </div>
        </div>
        <!-- Footer closed -->
    </div>
    <!--end  Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="la la-chevron-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Datepicker js -->
    <script src="{{ asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Ionicons js -->
    <script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

    <!--Chart bundle min js -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- JQuery sparkline js -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Sampledata js -->
    <script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Internal  Flot js-->
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>

    <!-- Internal Newsticker js-->
    <script src="{{ asset('assets/plugins/newsticker/jquery.jConveyorTicker.js') }}"></script>
    <script src="{{ asset('assets/js/newsticker.js') }}"></script>

    <!-- Eva-icons js -->
    <script src="{{ asset('assets/js/eva-icons.min.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('assets/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- right-sidebar js -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>

    <!-- Internal Nice-select js-->
    <script src="{{ asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-nice-select/js/nice-select.js') }}"></script>


    <!-- Sticky js -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>
    @stack('js')

    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
