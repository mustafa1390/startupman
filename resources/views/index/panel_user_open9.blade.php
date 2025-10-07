{{--
@include('user1.layouts.navbar' , [ 'guard' => 'user'  ] )


@include('sweetalert::alert')
@yield('script')
@yield('style') --}}
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title> استارتاپ من</title>
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('index_template/index/assets/css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('index_template/index/assets/css/style.css')}}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('index_template/index/assets/css/responsive.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('index_template/index/assets/icon/Favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('index_template/index/assets/icon/Favicon.png')}}">



    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('fontsaws/fontaws_all.min')}}"> --}}

    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
  integrity="sha512-jQ0k8nCgD1OQptdrU9XwV8uU2YGXK1c0K/+QcX+ZUvXvD4vHqN2u8rO9Z9JHDvL9V0xOjVtU3u9H2e3rqRZ7Fw=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>


@if (__('message.dir') == 'rtl')
    <link href="{{ asset('falcon/public/assets/css/mystyle.css') }}" rel="stylesheet"  >
    <link rel="stylesheet" type="text/css" href="{{ asset('index_template/index/assets/css/style-rtl.css')}}">

@endif


@if (__('message.dir') == 'ltr')
    <link rel="stylesheet" type="text/css" href="{{ asset('index_template/index/assets/css/style-ltr.css')}}">
@endif

</head>

<body class="body dashboard bodyl_{{ __('message.dir') }}">
    @vite('resources/js/app.js')



        <div class="preload preload-container"  style="display: none;"   >
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

<div  id="app">



</div>

    <div class="tf-mouse tf-mouse-outer"></div>
    <div class="tf-mouse tf-mouse-inner"></div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>



    <!-- Javascript -->
     {{-- <script src="{{ asset('index_template/index/assets/js/jquery.min.js')}}"></script> --}}
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


    {{-- <script>
  const btn = document.querySelector('.btn-canvas');
  const left = document.querySelector('.section-menu-left');
  const wrap  = document.querySelector('.wrap-content');

if (window.innerWidth <= 700) {
  left.classList.add('null');
  wrap.classList.add('full');
} else {
    // alert('hhh');
  btn.classList.add('active');
}
    </script> --}}
</body>

</html>


