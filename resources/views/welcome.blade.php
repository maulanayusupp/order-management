<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Paradox Coming-Soon Page ">
    <meta name="keywords" content="coming-soon,bootstrap,youtube background,slideshow background">
    <meta name="author" content="">
    <title>Order Management System</title>    
    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/lib/font-awesome-4.3.0/css/font-awesome.min.css') }}">
    <!-- plugin stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/vegas.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/jquery.mb.YTPlayer.min.css') }}">
    <!-- default css files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/lib/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/lib/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/structure.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/responsive.css') }}">

</head>
<body class="single-image video-bg">
    <!-- main section -->
    <div id="main-wrapper">
        <!-- page section -->
        <main id="main" class="background vd-bg" data-image="{{ asset('front-assets/images/main-bg.jpg') }}">
            <!-- Overlay -->  
            <div class="overlay">
                <div class="gradient-overlay background-blue-dark opacity-60">
                </div>
            </div>
            <!-- image overlay -->
            <div class="overlay" style="background-color: rgba(0,0,0,0.6)"></div>
            <!-- end images overlay -->
            <div class="nc-content-section index nc-active vhm">
                <!-- particles effects -->
                <div id="particles"></div>
                <!-- home page -->
                <div id="home-page" class="page-wrapper vhm-item active-home anim s01">
                    <div class="container">
                        <!-- tagline -->
                        <div class="tagline ac anim fadeInUp s01 delay-0-6s">
                            <!-- text animation -->
                            <div class="carousel-widget text-carousel" data-itemrange="false" data-in="zoomIn" data-out="slideOutDown" data-autoplay="true" data-loop="true" data-items="1" data-mouseDrag="false" data-touchDrag="false">
                                <div class="carousel">                                  
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <h1>INSTAPP<font color="red">.ID</font></h1>
                                        </div>
                                        <div class="item">
                                            <h1>Multi-Platform Application</h1>
                                        </div>
                                        <div class="item">
                                            <h1>Android Mobile Application</h1>
                                        </div>
                                        <div class="item">
                                            <h1>iOS Mobile Application</h1>
                                        </div>
                                        <div class="item">
                                            <h1>Facebook Page</h1>
                                        </div>
                                        <div class="item">
                                            <h1>HTML5</h1>
                                        </div>
                                    </div>
                        
                                </div>
                            </div>
                            <!-- Counter -->
                            <div class="counter-container">
                                    <h2>Order Management System</h2>
                                </div>                                        
                            </div>                 
                        </div>
                        <!-- end tagline -->
                        <!-- subscribe -->
                        <div class="subscribe ac anim fadeInUp s01 delay-0-8s">
                            <form class="subscription-form clear form-field-wrapper" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <input type="text" class="form-control error" name="email" required="required" placeholder="Enter your E-Mail">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong><font color="red">{{ $errors->first('email') }}</font></strong>
                                    </span>
                                @endif
                                <br>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong><font color="red">{{ $errors->first('password') }}</font></strong>
                                    </span>
                                @endif
                                <br>
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                                <br><br>
                                <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-sign-in vhm-item"></i> Login</button>
                            </form>
                        </div>
                        <!-- end subscribe -->

                        <!-- social icons -->
                        <div class="social-icon ac anim fadeInUp s01 delay-0-9s">
                            <a class="icon vhm" href="https://www.facebook.com/instapp.id.official" target="blank">
                                <span class="box"></span>
                                <i class="fa fa-facebook vhm-item"></i>
                            </a>
                        </div>
                        <!-- end social icons -->

                        <!-- copyright -->
                        <div class="copyrights ac anim fadeInUp s01 delay-1s">
                            <span><i class="fa fa-copyright"></i></span>2016 All Rights Reserved
                        </div>
                        <!-- end copyright -->
                    </div>
                </div>
                <!-- home-page end -->
                <!-- ajax page -->
                <div id="ajax-page" class="page-wrapper vhm-item">                    
                </div>
                <!-- end ajax page -->
            </div>
            <!-- click overlay -->
            <div class="nc-overlay"></div>
            <!-- end click overlay -->
        </main>
        <!-- end page section -->
    </div>
    <!-- end main section -->

    <!-- Javascript files -->
    <script src="{{ asset('front-assets/js/jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/js/plugins.min.js') }}"></script>
    <!-- plugin scripts -->
    <script src="{{ asset('front-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('front-assets/js/vegas.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/video-bg.js') }}"></script>        
    <!-- Particles effects -->
    <script type='text/javascript' src="{{ asset('front-assets/js/jquery.particleground.js') }}"></script> 
    <!-- common script -->
    <script src="{{ asset('front-assets/js/common.js') }}"></script>
    </body>

</html>