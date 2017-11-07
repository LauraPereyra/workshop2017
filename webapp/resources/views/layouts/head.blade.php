<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Juguetería</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/plugins/materialize/css/materialize.min.css')}}"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
@yield('css')
</head>
<body>

<!-- Loader -->
<div class="loader-bg"></div>
<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-teal lighten-1">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Loader -->

<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">
        <nav class="cyan darken-1">
            <div class="nav-wrapper row">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <div class="header-title col s3 m3">
                    <span class="chapter-title">Alpha</span>
                </div>
            </div>
        </nav>
    </header>
    <aside id="slide-out" class="side-nav white fixed">

        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="{{asset('assets/images/profile-image.png')}}" class="circle" alt="">
                </div>
                <div class="sidebar-profile-info">
                    <a href="javascript:void(0);" class="account-settings-link">
                        <p>
                         {{ Auth::user()->names." ".Auth::user()->lastname1 }}
                        </p>
                        <span>{{Auth::user()->email}}<i class="material-icons right">arrow_drop_down</i></span>
                    </a>
                </div>
            </div>

            <div class="sidebar-account-settings">
                <ul>
                    <li class="divider"></li>
                    <li class="no-padding">
                        <a href="{{ route('auth.logout') }}" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                    </li>
                </ul>
            </div>

            <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                <li class="no-padding active"><a class="waves-effect waves-grey active" href="catalog"><i class="material-icons">settings_input_svideo</i>Inicio</a></li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">store</i>Proveedores<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ route('supplier.index') }}">Proveedores</a></li>
                            <li><a href="{{ route('supplierorder.index') }}">Pedidos proveedores</a></li>
                            <li><a href="todo.html">Todo</a></li>
                        </ul>
                    </div>
                </li>

                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">loyalty</i>Juguetes<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ url('/toy/create') }}">Registrar</a></li>
                            <li><a href="{{ url('/toy/list') }}">Lista</a></li>
                            <li><a href="{{ url('/toy/update') }}">Todo</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">supervisor_account</i>Usuarios<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ route('user.index') }}">Listar</a></li>
                            <li><a href="{{ route('user.create') }}">Registrar</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

            <div class="footer">
                <p class="copyright">Taller de Sistemas©</p>
                <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
            </div>
        </div>

    </aside>

    <main class="mn-inner inner-active-sidebar">
        <div class="row">
            <div class="col s12">
                @yield('content')
            </div>
        </div>
    </main>

</div>

<div class="left-sidebar-hover"></div>


<!-- Javascripts -->
<script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}"></script>
<script src="{{asset('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
<script src="{{asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/plugins/counter-up-master/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/plugins/chart.js/chart.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/plugins/curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/js/alpha.min.js')}}"></script>
<script src="{{asset('assets/js/pages/form_elements.js')}}"></script>


@yield('js')
</body>
</html>