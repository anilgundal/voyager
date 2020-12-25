<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}" class="loading">
<head>
    <title>@yield('page_title', setting('admin.title') . " - " . setting('admin.description'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="assets-path" content="{{ route('voyager.voyager_assets') }}"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Favicon -->
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>
    @if($admin_favicon == '')
        <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/png">
    @else
        <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    @endif



    <!-- App CSS
        <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    -->

    @include('vendor.voyager.layouts.css')

    @yield('css')

    @yield('head')

</head>

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky fixed-footer @if(isset($dataType) && isset($dataType->slug)){{ $dataType->slug }}@endif" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


<?php
if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
    $user_avatar = Auth::user()->avatar;
} else {
    $user_avatar = Voyager::image(Auth::user()->avatar);
}
?>

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
@include('voyager::dashboard.navbar')
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
@include('voyager::dashboard.sidebar')
<!-- END: Main Menu-->


<!-- Main Content -->
<div class="app-content content app-container mt-5">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        @yield('page_header')
        <div id="voyager-notifications"></div>
        @yield('content')
    </div>
</div>




<div class="sidenav-overlay"></div>
<div class="drag-target"></div>



@include('voyager::partials.app-footer')

<!-- Javascript Libs -->

@include('vendor.voyager.layouts.javascript')


    <script>
        @if(Session::has('alerts'))
            let alerts = {!! json_encode(Session::get('alerts')) !!};
            helpers.displayAlerts(alerts, toastr);
        @endif

        @if(Session::has('message'))

        // TODO: change Controllers to use AlertsMessages trait... then remove this
        var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
        var alertMessage = {!! json_encode(Session::get('message')) !!};
        var alerter = toastr[alertType];

        if (alerter) {
            alerter(alertMessage);
        } else {
            toastr.error("toastr alert-type " + alertType + " is unknown");
        }
        @endif
    </script>

</body>
</html>
