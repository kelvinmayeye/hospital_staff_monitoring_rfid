<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>{{ config('app.name') }}</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">

    <link href="{{ asset('assets/home/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/home/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/home/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/home/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home/css/style.css') }}" rel="stylesheet">

    <style>
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin: 20px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    {{-- sidemenu --}}
    @include('layouts.side_menu')
    {{-- topmenu --}}
    @include('layouts.top_menu')



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="p-2">
                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <strong style="color: #ffffff">Error!</strong> {{ session()->get('error') }}
                        </div>
                    @elseif (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <strong style="color: #ffffff">Success!</strong> {{ session()->get('success') }}
                        </div>
                    @else
                    @endif
                </div>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="{{ asset('assets/home/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('assets/home/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{ asset('assets/home/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('assets/home/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/calendar-2/pignose.init.js') }}"></script>


    <script src="{{ asset('assets/home/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/home/js/dashboard2.js') }}"></script>
</body>

</html>
