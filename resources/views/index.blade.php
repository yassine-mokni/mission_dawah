<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Mission dawah</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('/img/favicons/favicon.png')}}">

        <link rel="icon" type="image/png" href="{{asset('/img/favicons/favicon-16x16.png')}}" sizes="16x16">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/favicon-32x32.png')}}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/favicon-96x96.png')}}" sizes="96x96">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/favicon-160x160.png')}}" sizes="160x160">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/favicon-192x192.png')}}" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/img/favicons/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/img/favicons/apple-touch-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/img/favicons/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/favicons/apple-touch-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/img/favicons/apple-touch-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/img/favicons/apple-touch-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/img/favicons/apple-touch-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/img/favicons/apple-touch-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/img/favicons/apple-touch-icon-180x180.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" id="css-main" href="{{asset('/css/oneui.css')}}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{asset('/css/themes/flat.min.css')}}"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
        <div id="page-container" class="sidebar-l side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="side-header side-content">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times"></i>
                        </button>
                        <span class="font-w600">John Parker</span>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content remove-padding-t">
                        <!-- Account -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Account</h3>
                            </div>
                            <div class="block-content">
                                <form class="form-horizontal" action="bd_dashboard.html" method="post" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label>Username</label>
                                            <div class="form-control-static font-w700">johnpar</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="bd-qsettings-name">Name</label>
                                            <input class="form-control" type="text" id="bd-qsettings-name" name="bd-qsettings-name" placeholder="Enter your name.." value="John Parker">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="bd-qsettings-email">Email</label>
                                            <input class="form-control" type="email" id="bd-qsettings-email" name="bd-qsettings-email" placeholder="Enter your email.." value="john.parker@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="bd-qsettings-password">New Password</label>
                                            <input class="form-control" type="password" id="bd-qsettings-password" name="bd-qsettings-new-password" placeholder="Enter a new password..">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="bd-qsettings-password2">Confirm New Password</label>
                                            <input class="form-control" type="password" id="bd-qsettings-password2" name="bd-qsettings-new-password2" placeholder="Confirm your new password..">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-minw btn-rounded btn-primary" type="submit">
                                                <i class="fa fa-check push-5-r"></i>Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Account -->

                        <!-- Quick Settings -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Quick Settings</h3>
                            </div>
                            <div class="block-content">
                                <!-- Quick Settings Form -->
                                <form class="form-bordered" action="base_pages_dashboard.html" method="post" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="font-s13 font-w600">Online Status</div>
                                                <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                            </div>
                                            <div class="col-xs-4 text-right">
                                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="font-s13 font-w600">Auto Updates</div>
                                                <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                            </div>
                                            <div class="col-xs-4 text-right">
                                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="font-s13 font-w600">Notifications</div>
                                                <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                            </div>
                                            <div class="col-xs-4 text-right">
                                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="font-s13 font-w600">API Access</div>
                                                <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                            </div>
                                            <div class="col-xs-4 text-right">
                                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Quick Settings Form -->
                            </div>
                        </div>
                        <!-- END Quick Settings -->
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Header -->
            <header id="header-navbar">
                <div class="content-mini content-mini-full content-boxed">
                    <!-- Header Navigation Right -->
                    <ul class="nav-header pull-right">
                        <li class="visible-xs">
                            <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                            <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </li>
                        <li class="js-header-search header-search remove-margin">
                            <form class="form-horizontal" action="base_pages_search.html" method="post">
                                <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                                    <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                                    <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                                </div>
                            </form>
                        </li>
                        <li>
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-default btn-image" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                                <img src="{{asset('/img/avatars/avatar9.jpg')}}" alt="Avatar">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                        </li>
                    </ul>
                    <!-- END Header Navigation Right -->

                    <!-- Header Navigation Left -->
                    <ul class="nav-header pull-left">
                        <li class="header-content">
                            <a class="h5" href="index.html">
                                <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 text-primary-dark">ne</span>
                            </a>
                        </li>
                        <li>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            <div class="btn-group">
                                <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                    <i class="si si-drop"></i>
                                </button>
                                <ul class="dropdown-menu sidebar-mini-hide font-s13">
                                    <li>
                                        <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="asset('/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="asset('/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="asset('/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="asset('/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="asset('/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- END Header Navigation Left -->
                </div>
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Sub Header -->
                <div class="bg-gray-lighter visible-xs">
                    <div class="content-mini content-boxed">
                        <button class="btn btn-block btn-default visible-xs push" data-toggle="collapse" data-target="#sub-header-nav">
                            <i class="fa fa-navicon push-5-r"></i>Menu
                        </button>
                    </div>
                </div>
                <div class="bg-primary-lighter collapse navbar-collapse remove-padding" id="sub-header-nav">
                    <div class="content-mini content-boxed">
                        <ul class="nav nav-pills nav-sub-header push">
                            <li class="active">
                                <a href="bd_dashboard.html">
                                    <i class="fa fa-dashboard push-5-r"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="bd_products.html">
                                    <i class="fa fa-briefcase push-5-r"></i>Products
                                </a>
                            </li>
                            <li>
                                <a href="bd_customers.html">
                                    <i class="fa fa-users push-5-r"></i>Customers
                                </a>
                            </li>
                            <li>
                                <a href="bd_sales.html">
                                    <i class="fa fa-paypal push-5-r"></i>Sales
                                </a>
                            </li>
                            <li>
                                <a href="bd_settings.html">
                                    <i class="fa fa-cog push-5-r"></i>Settings
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-coffee push-5-r"></i>More <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0)">Payment</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Privacy</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="javascript:void(0)">Shop</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Sub Header -->

                <!-- Page Content -->
                <div class="content content-boxed">
                    <!-- Section -->
                    <div class="bg-image img-rounded overflow-hidden push" style="background-image: url('{{asset('/img/photos/photo29@2x.jpg')}}">
                        <div class="bg-black-op">
                            <div class="content">
                                <div class="block block-transparent block-themed text-center">
                                    <div class="block-content">
                                        <h1 class="h1 font-w700 text-white animated fadeInDown push-5">Mission Dawah</h1>
                                        <h2 class="h4 font-w400 text-white-op animated fadeInUp">Welcome Brother.</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Section -->

                    <!-- Stats -->
                    <div class="row text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <div class="text-muted">
                                        <small><i class="si si-calendar"></i> Today</small>
                                    </div>
                                    <div class="font-s12 font-w700">Unq Visitors</div>
                                    <a class="h2 font-w300 text-primary" href="bd_dashboard.html" data-toggle="countTo" data-to="96780"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <div class="text-muted">
                                        <small><i class="si si-calendar"></i> Today</small>
                                    </div>
                                    <div class="font-s12 font-w700">Prd Sales</div>
                                    <a class="h2 font-w300 text-primary" href="bd_dashboard.html" data-toggle="countTo" data-to="680"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <div class="text-muted">
                                        <small><i class="si si-calendar"></i> Today</small>
                                    </div>
                                    <div class="font-s12 font-w700">Earnings</div>
                                    <a class="h2 font-w300 text-primary" href="bd_dashboard.html" data-toggle="countTo" data-to="63000" data-before="$ "></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <div class="text-muted">
                                        <small><i class="si si-calendar"></i> Today</small>
                                    </div>
                                    <div class="font-s12 font-w700">Average Sale</div>
                                    <a class="h2 font-w300 text-primary" href="bd_dashboard.html" data-toggle="countTo" data-to="249" data-before="$ "></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Stats -->

                    <!-- Charts -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block block-rounded block-opt-refresh-icon8">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Earnings in $</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter text-center">
                                    <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard_v2.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                                    <div style="height: 320px;"><canvas class="js-dash-chartjs-earnings"></canvas></div>
                                </div>
                                <div class="block-content text-center">
                                    <div class="row items-push-2x text-center push-20-t">
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-15"><i class="fa fa-bank fa-2x"></i></div>
                                            <div class="h5 text-muted">$148,000</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-15"><i class="fa fa-angle-double-up fa-2x"></i></div>
                                            <div class="h5 text-muted">+9% Earnings</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-15"><i class="fa fa-headphones fa-2x"></i></div>
                                            <div class="h5 text-muted">+20% Tickets</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-15"><i class="fa fa-users fa-2x"></i></div>
                                            <div class="h5 text-muted">+46% Clients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block block-rounded block-opt-refresh-icon8">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Sales</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter text-center">
                                    <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard_v2.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                                    <div style="height: 320px;"><canvas class="js-dash-chartjs-sales"></canvas></div>
                                </div>
                                <div class="block-content text-center">
                                    <div class="row items-push-2x text-center push-20-t">
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-15"><i class="fa fa-wordpress fa-2x"></i></div>
                                            <div class="h5 text-muted">+20% Themes</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-15"><i class="fa fa-font fa-2x"></i></div>
                                            <div class="h5 text-muted">+25% Fonts</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-15"><i class="fa fa-archive fa-2x"></i></div>
                                            <div class="h5 text-muted">-10% Icons</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-15"><i class="fa fa-paint-brush fa-2x"></i></div>
                                            <div class="h5 text-muted">+8% Graphics</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Charts -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body font-s12">
                <div class="content-mini content-mini-full content-boxed clearfix push-15">
                    <div class="pull-right">
                        Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="pull-left">
                        <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 3.4</a> &copy; <span class="js-year-copy">2015</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{asset('/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{asset('/js/core/jquery.appear.min.js')}}"></script>
        <script src="{{asset('/js/core/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('/js/core/jquery.placeholder.min.js')}}"></script>
        <script src="{{asset('/js/core/js.cookie.min.js')}}"></script>
        <script src="{{asset('/js/app.js')}}"></script>

        <!-- Page Plugins -->
        <script src="{{asset('/js/plugins/chartjs/Chart.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('/js/pages/base_pages_dashboard_v2.js')}}"></script>
        <script>
            jQuery(function () {
                // Init page helpers (CountTo plugin)
                App.initHelpers('appear-countTo');
            });
        </script>
    </body>
</html>