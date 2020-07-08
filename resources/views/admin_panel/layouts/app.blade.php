<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('tabName')</title>
    <link rel="apple-touch-icon" href="{{asset('images/admin_panel/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/admin_panel/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/admin_panel/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/admin_panel/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/admin_panel/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/admin_panel/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/admin_panel/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/admin_panel/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/admin_panel/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/admin_panel/core/colors/palette-gradient.css')}}">
    @yield('pageStyles')
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/admin_panel/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
 @include('admin_panel.layouts.header')
 @include('admin_panel.layouts.side_menu')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
    @yield('content')
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@include('admin_panel.layouts.footer')

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('js/admin_panel/core/app-menu.js')}}"></script>
    <script src="{{asset('js/admin_panel/core/app.js')}}"></script>
    <script src="{{asset('js/admin_panel/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('js/admin_panel/scripts/cards/card-analytics.js')}}"></script>
    <!-- END: Page JS-->

    </body>
    <!-- END: Body-->

    </html>