<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <title>Gestionar Celulares !</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('gentella/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('gentella/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('gentella/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo e(asset('gentella/vendors/iCheck/skins/flat/green.css')); ?>" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo e(asset('gentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo e(asset('gentella/vendors/jqvmap/dist/jqvmap.min.css')); ?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(asset('gentella/vendors/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('gentella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet">


    <!-- Datatables -->
    <link href="<?php echo e(asset('gentella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('gentella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')); ?>" rel="stylesheet)}}">
    <link href="<?php echo e(asset('gentella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')); ?>" rel="stylesheet)}}">
    <link href="<?php echo e(asset('gentella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('gentella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('gentella/build/css/custom.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('gentella/vendors/select2/dist/css/select2.min.css')); ?>" rel="stylesheet">
</head>

<body  class="nav-md">
<?php echo e(csrf_field()); ?>

<div class="container body" >
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#"></a>

                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <!--<div class="profile clearfix">
                  <div class="profile_pic">
                    <img src="gentella/production/images/img.jpg" alt="..." class="img-circle profile_img">
                  </div>
                  <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>John Doe</h2>
                  </div>
                </div>-->
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Opciones</h3>
                        <ul class="nav side-menu">
                            <?php if(Session::get('user')->role =='Administrador'): ?>
                            <!--Moduo de Seguridad -->
                            <li class="active"><a> <h3>Seguridad</h3> <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: block">
                                    <li class="active"><a href="<?php echo e(url('/roles')); ?>"><i class="fa fa-user"></i> Roles</a></li>
                                    <li class="active"><a href="<?php echo e(url('/usuarios')); ?>"><i class="fa fa-users"></i>Usuarios</a></li>
                                </ul>
                            </li>
                             <!--Moduo de Seguridad -->
                            <?php endif; ?>

                            <!--Moduo de Productos -->
                            <li ng-show="$rootScope.rol_name == 'Admin' || $rootScope.rol_name == 'User'" class="active"><a><h3>Productos</h3> <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: block">

                                    <li class="active"><a href="<?php echo e(url('/celulares')); ?>"><i class="fa fa-mobile"></i> Equipos</a></li>
                                    <?php if(Session::get('user')->role =='Administrador'): ?>
                                    <li class="active"><a href="<?php echo e(url('/marcas')); ?>"><i class="fa  fa-maxcdn"></i> Marcas</a></li>
                                    <li class="active"><a href="<?php echo e(url('/modelos')); ?>"><i class="fa fa-tablet"></i> Modelos</a></li>
                                    <li class="active"><a href="<?php echo e(url('/capacidades')); ?>"><i class="fa  fa-balance-scale"></i> Capacidades</a></li>
                                    <li class="active"><a href="<?php echo e(url('/colores')); ?>"><i class="fa fa-file-image-o"></i> Colores</a></li>
                                    <?php endif; ?>
                                </ul>
                                <!--Moduo de Productos -->

                            <!--Moduo de Operaciones -->
                             <li class="active"><a> <h3>Operaciones</h3> <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: block">

                                    <li class="active"><a href="<?php echo e(url('/ventas')); ?>"><i class="fa  fa-gift"></i> Venta</a></li>
                                    <li class="active"><a href="<?php echo e(url('/caja')); ?>"><i class="fa  fa-line-chart"></i> Caja</a></li>
                                     <li class="active"><a href="<?php echo e(url('/cotizacion')); ?>"><i class="fa  fa-money"></i> Cotizacion</a></li>
                                </ul>
                            </li>
                            <!--Moduo de Opreraciones -->

                            <!--Moduo de Reportes -->
							<li class="active"><a><h3>Reportes</h3> <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: block">
                                    <li class="current-page"><a href="<?php echo e(url('/celulares/reportExport/'.$rol = Session::get('user')->role)); ?>"><i class="fa fa-file"></i>Equipos</a></li>
                                </ul>
                            </li>
                            <!--Moduo de Reportes -->

                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                  <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                  </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Opciones
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-sign-out pull-right"></i> Cerrar sesi??n</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                <a href="#"></a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo e(asset('gentella/vendors/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('gentella/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('gentella/vendors/fastclick/lib/fastclick.js')); ?>"></script>
<!-- NProgress -->
<script src="<?php echo e(asset('gentella/vendors/nprogress/nprogress.js')); ?>"></script>
<!-- Chart.js -->
<script src="<?php echo e(asset('gentella/vendors/Chart.js/dist/Chart.min.js')); ?>"></script>
<!-- gauge.js -->
<script src="<?php echo e(asset('gentella/vendors/gauge.js/dist/gauge.min.js')); ?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo e(asset('gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset('gentella/vendors/iCheck/icheck.min.js')); ?>"></script>
<!-- Skycons -->
<script src="<?php echo e(asset('gentella/vendors/skycons/skycons.js')); ?>"></script>
<!-- Flot -->
<script src="<?php echo e(asset('gentella/vendors/Flot/jquery.flot.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/Flot/jquery.flot.pie.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/Flot/jquery.flot.time.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/Flot/jquery.flot.stack.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/Flot/jquery.flot.resize.js')); ?>"></script>
<!-- Flot plugins -->
<script src="<?php echo e(asset('gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/flot-spline/js/jquery.flot.spline.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/flot.curvedlines/curvedLines.js')); ?>"></script>
<!-- DateJS -->
<script src="<?php echo e(asset('gentella/vendors/DateJS/build/date.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('gentella/vendors/jqvmap/dist/jquery.vmap.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')); ?>"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo e(asset('gentella/vendors/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>

<script src="<?php echo e(asset('gentella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')); ?>"></script>


<script src="<?php echo e(asset('gentella/vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-buttons/js/buttons.flash.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/jszip/dist/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/pdfmake/build/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/pdfmake/build/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('gentella/vendors/select2/dist/js/select2.min.js')); ?>"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo e(asset('gentella/build/js/custom.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/angularjs/angular.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/angularjs/angular-resource.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/angularjs/ngStorage.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/angularjs/app.js')); ?>"></script>

<script>
    $(document).ready(function () {
        $('.js-example-basic-single').select2();
    });
</script>

<?php echo $__env->yieldContent('js'); ?>



</body>
</html>
<?php /**PATH /home/alejandro/Documentos/sellphone/resources/views/layout.blade.php ENDPATH**/ ?>