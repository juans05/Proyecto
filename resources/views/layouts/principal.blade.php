<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Metro Lab</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="Mosaddek" name="author" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-responsive.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fancybox/source/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/uniform/css/uniform.default.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!--BEGIN SIDEBAR TOGGLE-->
            <div class="sidebar-toggle-box hidden-phone">
                <div class="icon-reorder"></div>
            </div>
            <!--END SIDEBAR TOGGLE-->
            <!-- BEGIN LOGO -->
            <a class="brand" href="index.html">

            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="arrow"></span>
            </a>

            <!-- END  NOTIFICATION -->
            <div class="top-nav ">
                <ul class="nav pull-right top-menu" >
                    <!-- BEGIN SUPPORT -->

                    <li class="dropdown mtop5">
                        <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Soporte">
                            <i class="icon-wrench"></i>
                        </a>
                    </li>
                    <!-- END SUPPORT -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('img/avatar1_small.jpg')}}" alt="">
                            <span class="username">{{Session::get('nombre_persona')}}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="{{route('usuario.edit',Session::get('id_trabajador'))}}"><i class="icon-user"></i>Mi Perfil</a></li>
                            <li><a href="{{route('usuario.show',Session::get('id_trabajador'))}}"><i class="icon-cog"></i>Ajustes Empresa</a></li>
                            <li><a href="login.html"><i class="icon-key"></i>Salir</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="sidebar">
    <div class="sidebar">
        <div id="sidebar" class="nav-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li class="sub-menu active">
                    <a class="" href="index.html">
                        <i class="icon-dashboard"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Personal</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('trabajador.create')}}">Nuevo Trabajador</a></li>
                        <li><a class="" href="{{route('trabajador.show')}}">Listar Trabajador</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Alumnos</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="grids.html">Nueva Alumno</a></li>
                        <li><a class="" href="grids.html">Nueva Matricula</a></li>
                        <li><a class="" href="grids.html">Nueva Apoderado</a></li>
                        <li><a class="" href="calendar.html">Horarios</a></li>
                        <li><a class="" href="chartjs.html">Evaluaciones</a></li>
                    </ul>
                </li>
                <!-- END Alumno MENU -->
                <!-- Evaluacion MENU -->
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="material-icons">description</i>
                        <span>Evaluaciones</span>
                        <span class="arrow"></span>
                    </a>

                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Usuario y Perfil</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('trabajador.show',Session::get('id_trabajador'))}}">Nuevo Usuario</a></li>
                        <li><a class="" href="{{route('trabajador.show',Session::get('id_trabajador'))}}">Listar Usuario</a></li>
                        <li><a class="" href="{{route('trabajador.show',Session::get('id_trabajador'))}}">Nuevo Perfil</a></li>
                        <li><a class="" href="{{route('trabajador.show',Session::get('id_trabajador'))}}">Lisar Perfil</a></li>
                    </ul>
                </li>
                <!-- END Evaluacion MENU -->
                <!-- Administracion MENU -->
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="material-icons">settings</i>
                        <span>Administracion</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="form_layout.html">Salones</a></li>
                        <li><a class="" href="form_component.html">Cursos</a></li>
                        <li><a class="" href="form_wizard.html">Horarios</a></li>
                        <li><a class="" href="form_validation.html">Localidad</a></li>
                        <li><a class="" href="dropzone.html">Turnos y Periodo</a></li>
                        <li><a class="" href="dropzone.html">Tipo de Evaluacion</a></li>
                        <li><a class="" href="dropzone.html">Tipo de Trabajador</a></li>
                        <li><a class="" href="dropzone.html">Configuraciones</a></li>
                        <li><a class="" href="button.html">Horarios</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="material-icons">settings</i>
                        <span>Configuraciones</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('perfil.index')}}">Perfiles</a></li>
                        <li><a class="" href="{{route('permiso.index')}}">Permisos</a></li>
                    </ul>
                </li>
                <!-- END Administracion MENU -->
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        @yield('content')
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div id="footer">
    2013 &copy; Metro Lab Dashboard.
</div>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->

<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>



<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="js/excanvas.js"></script>
<script src="js/respond.js"></script>
<![endif]-->

<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/chart-master/Chart.js"></script>

<!--common script for all pages-->


<!--script for this page only-->

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>