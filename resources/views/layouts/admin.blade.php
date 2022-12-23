<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
@if (App::getLocale() == 'en')
<html lang="en">
@else
<html lang="en" dir="rtl">
@endif
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Admin | @yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #2 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        @if (App::getLocale() == 'en')
        <link href="{{ asset('assets/admin/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        @else
        <link href="{{ asset('assets/admin-rtl/global/plugins/bootstrap/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin-rtl/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        @endif


        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield('css')
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        @if (App::getLocale() == 'en')
        <link href="{{ asset('assets/admin/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/admin/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        @else
        <link href="{{ asset('assets/admin-rtl/global/css/components-rtl.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/admin-rtl/global/css/plugins-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        @endif

        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        @if (App::getLocale() == 'en')
        <link href="{{ asset('assets/admin/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/layouts/layout2/css/themes/blue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('assets/admin/layouts/layout2/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        @else
        <link href="{{ asset('assets/admin-rtl/layouts/layout2/css/layout-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin-rtl/layouts/layout2/css/themes/blue-rtl.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('assets/admin-rtl/layouts/layout2/css/custom-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        @endif

        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">

        @include('admin.includes.header')

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">

            @include('admin.includes.sidebar')

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->

                    @include('admin.includes.theme-panel')

                    <h1 class="page-title"> @yield('page-title')
                        <small>...</small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>@yield('page')</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->

                    @yield('content')

                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

            @include('admin.includes.quick-sidebar')

        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2019 &copy; Metronic Theme By
                <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->

            @include('admin.includes.quick-nav')

            <!--[if lt IE 9]>
<script src="{{ asset('assets/admin/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('assets/admin/global/plugins/excanvas.min.js') }}"></script>
<script src="{{ asset('assets/admin/global/plugins/ie8.fix.min.js') }}"></script>
<![endif]-->
            <!-- BEGIN CORE PLUGINS -->
            <script src="{{ asset('assets/admin/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/admin/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/admin/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/admin/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            @yield('plugin')
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{ asset('assets/admin/global/scripts/app.min.js') }}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            @yield('script')
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{ asset('assets/admin/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/admin/layouts/layout2/scripts/demo.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/admin/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/admin/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <script>
                $(document).ready(function()
                {
                    $('#clickmewow').click(function()
                    {
                        $('#radio1003').attr('checked', 'checked');
                    });
                })
            </script>
    </body>

</html>
