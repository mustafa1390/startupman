<!DOCTYPE html>
<html lang="en" dir="{{session('direction')}}" class="{{session('direction')}}"><head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('message.arzico')}}</title>
        <link class="main-css" href="{{ asset('auth-j/auth-temp/style2-'.session('direction').'.css')}}" rel="stylesheet">
        <link class="main-css" href="{{ asset('auth-j/auth-temp/line-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('tem_jid_rtl/myrtl_files/all_f.min.css') }}"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />




    </head>

{{--
    <body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="color_9"
        data-headerbg="color_9" data-sidebar-style="full" data-sidebarbg="color_9" data-sidebar-position="fixed"
        data-header-position="fixed" data-container="wide" direction="{{session('direction')}}" data-primary="color_9">
 --}}


 <body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="color_7"
 data-headerbg="color_2" data-sidebar-style="full" data-sidebarbg="color_13" data-sidebar-position="fixed"
 data-header-position="fixed" data-container="wide" direction="{{session('direction')}}" data-primary="color_2">


    <div id="app">


    </div>
    @vite('resources/js/app.js')




    <link href="{{ asset('tem_jid_rtl/myrtl_files/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('tem_jid_rtl/myrtl_files/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tem_jid_rtl/myrtl_files/css2.css') }}">
    <link rel="stylesheet" href="{{ asset('tem_jid_rtl/myrtl_files/mystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('tem_jid_rtl/myrtl_files/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('tem_jid_rtl/myrtl_files/stele_sidebar_menu.css') }}">


    <script src="{{ asset('tem_jid_rtl/myrtl_files/global.min.js') }}"></script>
    <script src="{{ asset('tem_jid_rtl/myrtl_files/bootstrap-select.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('tem_jid_rtl/myrtl_files/apexchart.js') }}"></script>
    <script src="{{ asset('tem_jid_rtl/myrtl_files/chart.bundle.min.js') }}"></script>

    <!-- counter -->
    <script src="{{ asset('tem_jid_rtl/myrtl_files/counter.min.js') }}"></script>
    <script src="{{ asset('tem_jid_rtl/myrtl_files/waypoint.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('tem_jid_rtl/myrtl_files/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('tem_jid_rtl/myrtl_files/swiper-bundle.min.js') }}"></script>


    </body>
</html>
