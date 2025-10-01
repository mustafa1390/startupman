


    <!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->


{{-- <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"  > --}}

<html lang="ar" dir="rtl">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $tabTitle ?? '' }}</title>

    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('index_template/index/assets/css/style.css')}}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('index_template/index/assets/css/responsive.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('index_template/index/assets/icon/Favicon.css')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('index_template/index/assets/icon/Favicon.css')}}">


<style>
.dropdown .btn-secondary {
  padding: 10px 25px!important;
}
    </style>


<style>
.bodyl_rtl {
  direction: rtl!important;
  text-align: right!important;
}
.bodyl_ltr {
  direction: ltr!important;
  text-align: left!important;
}
    </style>
    @yield('style')
</head>

<body class="body bodyl_{{ __('message.dir') }}">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="middle">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
          </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="pt-40 home-1">

            <header id="header_main" class="header_1 header-fixed">

    @include('index_template.layouts.navbar')
    @include('index_template.layouts.sidebar')

    @include('index_template.layouts.navbar_mobile')

            </header>

    @yield('content')

    @include('index_template.layouts.footer')

        </div>
        <!-- /#page -->


            @include('index_template.layouts.modal')

    </div>
    <!-- /#wrapper -->

    <div class="tf-mouse tf-mouse-outer"></div>
    <div class="tf-mouse tf-mouse-inner"></div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('index_template/index/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/swiper.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/count-down.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/simpleParallax.min.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/gsap.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/SplitText.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/ScrollTrigger.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/gsap-animation.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/tsparticles.min.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/tsparticles.js')}}"></script>
    <script src="{{ asset('index_template/index/assets/js/main.js')}}"></script>
     @include('sweetalert::alert')
    @yield('script')

</body>

</html>
