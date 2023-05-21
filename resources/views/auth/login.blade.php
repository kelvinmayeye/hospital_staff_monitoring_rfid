<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hospital Staff Perfomance | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- morrisjs CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css') }}">
    <!-- forms CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/form/all-type-forms.css') }}">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- modernizr JS
  ============================================ -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>Hospital Staff Perfomance</h3>
                <p></p>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="#" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username"
                                    required="" value="" name="username" id="username" class="form-control">
                                {{-- <span class="help-block small">Your unique username to app</span> --}}
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******"
                                    required="" value="" name="password" id="password" class="form-control">
                                {{-- <span class="help-block small">Yur strong password</span> --}}
                            </div>
                            <a href="{{ url('dashboard') }}" class="btn btn-success btn-block loginbtn">Login</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
            </div>
        </div>
    </div>
    <!-- jquery
  ============================================ -->
    <script src="{{ asset('assets/jsjs/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/bootstrap.min.js') }}"></script>
    <!-- wow JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/wow.min.js') }}"></script>
    <!-- price-slider JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/jsjs/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/jsjs/metisMenu/metisMenu-active.js') }}"></script>
    <!-- tab JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/tab.js') }}"></script>
    <!-- icheck JS
  ============================================ -->
    <script src="{{ asset('assets/jsjs/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/jsjs/icheck/icheck-active.js') }}"></script>
    <!-- plugins JS
  ============================================ -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main JS
  ============================================ -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- tawk chat JS
  ============================================ -->
    <script src="{{ asset('assets/js/tawk-chat.js') }}"></script>
</body>

</html>
