<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Staff perfomarnce hostital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    @include('layouts.header_links')
    @include('partials.graphs.line_graph')
</head>

<body>
    <!-- Start Left menu area -->
    @include('layouts.sidebar')
    <!-- End Left menu area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{ asset('assets/img/logo/logo.png') }}"
                                alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.top_header')

        @yield('content')
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2023. All rights reserved. At <a href="https://site.mzumbe.ac.tz/"
                                    target="_blank">Mzumbe Univercity</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
  ============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
  ============================================ -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
  ============================================ -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- price-slider JS
  ============================================ -->
    <script src="{{ asset('assets/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
  ============================================ -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
  ============================================ -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
  ============================================ -->
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
  ============================================ -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
  ============================================ -->
    <script src="{{ asset('assets/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
  ============================================ -->
    <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
  ============================================ -->
    <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
  ============================================ -->
    <script src="{{ asset('assets/js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris-active.js') }}"></script>
    <!-- morrisjs JS
  ============================================ -->
    <script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('assets/js/sparkline/sparkline-active.js') }}"></script>
    <!-- calendar JS
  ============================================ -->
    <script src="{{ asset('assets/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar-active.js') }}"></script>
    <!-- plugins JS
  ============================================ -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main JS
  ============================================ -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- tawk chat JS
  ============================================ -->
    {{-- <script src="{{ asset('assets/js/tawk-chat.js') }}"></script> --}}

    
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>
