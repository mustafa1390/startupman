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
<title> {{ $tabTitle ?? '' }}</title>
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





@if (__('message.dir') == 'rtl')
    <link href="{{ asset('falcon/public/assets/css/mystyle.css') }}" rel="stylesheet"  >
    <link rel="stylesheet" type="text/css" href="{{ asset('index_template/index/assets/css/style-rtl.css')}}">

@endif


@if (__('message.dir') == 'ltr')
    <link rel="stylesheet" type="text/css" href="{{ asset('index_template/index/assets/css/style-ltr.css')}}">
@endif

</head>

<body class="body dashboard bodyl_{{ __('message.dir') }}">

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
        <div id="page" class="home-6 flex">
{{-- @include('user2.layouts.navbar') --}}

            @include('user2.layouts.sidebar')



            <div class="wrap-content">

                            @yield('content')


                                        @include('user2.layouts.footer')

            </div>

            <div class="btn-canvas active">
                <div class="canvas">
                    <span></span>
                </div>
            </div>

        </div>
        <!-- /#page -->

        <!-- Modal Popup Bid -->
        <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="image">
                            <img src="{{ asset('index_template/index/assets/images/backgroup-section/popup.png')}}" alt="">
                        </div>
                        <div class="logo-rotate">
                            <img class="" src="{{ asset('index_template/index/assets/images/item-background/item6-img.png')}}" alt="">
                        </div>
                        <h2>Subscribe to our newsletter</h2>
                        <p>Subscribe for our newsletter to stay in the loop</p>
                        <fieldset class="email">
                            <input type="email" class="style-1" id="email" placeholder="Email address*" name="email" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <a href class="tf-button style-1 h50">Subscribe<i class="icon-arrow-up-right2"></i></a>
                    </div>
                </div>
            </div>
        </div>

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


    <script>
  const btn = document.querySelector('.btn-canvas');
  const left = document.querySelector('.section-menu-left');
  const wrap  = document.querySelector('.wrap-content');

if (window.innerWidth <= 700) {
//   btn.classList.remove('active');
  left.classList.add('null');
  wrap.classList.add('full');
} else {
  btn.classList.add('active');
}
    </script>
</body>

</html>


