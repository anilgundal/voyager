<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('vendor.voyager.layouts.metas')
    <title>@yield('title')</title>
    @include('vendor.voyager.layouts.css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky fixed-footer  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    @include('vendor.voyager.layouts.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('vendor.voyager.layouts.main_menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('vendor.voyager.layouts.footer')
    <!-- END: Footer-->
    @include('vendor.voyager.layouts.javascript')
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>