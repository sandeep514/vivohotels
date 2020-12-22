<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    @include('propertyAdmin.component.header')
    <style type="text/css">
        .error{
            color: red
        }
    </style>
    <body class="">
        <!-- Extra details for Live View on GitHub Pages -->
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="wrapper ">
           @include('propertyAdmin.component.sidebar')
            <div class="main-panel">
                <!-- Navbar -->
                @include('propertyAdmin.component.topHeader')
                <!-- End Navbar -->
                @yield('content')
                @include('propertyAdmin.component.footer')
            </div>
        </div>
        @include('propertyAdmin.component.script')
        @yield('javascript')
    </body>
    <!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 06:25:00 GMT -->
</html>