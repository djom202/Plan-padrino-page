<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Plan padrino - Eventos</title>

        <!-- Bootstrap Core CSS -->
        {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}

        <!-- MetisMenu CSS -->
        {!!Html::style('bower_components/metisMenu/dist/metisMenu.min.css')!!}

        <!-- Timeline CSS -->
        {!!Html::style('dist/css/timeline.css')!!}

        <!-- Custom CSS -->
        {!!Html::style('dist/css/sb-admin-2.css')!!}

        <!-- Morris Charts CSS -->
        {!!Html::style('bower_components/morrisjs/morris.css')!!}
        
        <!-- Custom Fonts -->
        {!!Html::style('bower_components/font-awesome/css/font-awesome.min.css')!!}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    </head>

    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#fff12c;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ URL::to('welcome') }}">{!!Html::image('images/logonu3.png', 'nu3', ['style'=>'margin: -10px 10px 0px 0px; float:left'])!!}Base de datos</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>

                            <li>
                                <a href="{{ URL::to('welcome') }}"><i class="glyphicon glyphicon-bullhorn fa-fw"></i> Eventos</a>
                            </li>

                            <li>
                                <a href="{{ URL::to('padrinos') }}"><i class="glyphicon glyphicon-heart fa-fw"></i> Plan padrino</a>
                            </li>

                            <li>
                                <a href="{{ URL::to('crear/usuario') }}"><i class="fa fa-plus"></i> Agregar nuevos usuarios</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Eventos</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <p><strong>Notificaciones</strong></p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-birthday-cake" style="color:#337ab7;"></i> Cumpleaños - Yuyu</td>
                                        <td style="width: 260px">
                                            <div class="text-right">
                                                <a href="mailto:hector@mobaq.co"><button type="button" class="btn btn-outline"><i class="fa fa-envelope" style="color:#337ab7;"></i></a></button>
                                                <button type="button" class="btn btn-default">Realizado</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-birthday-cake" style="color:#337ab7;"></i> Cumpleaños - Yuyu</td>
                                        <td>
                                            <div class="text-right">
                                                <button type="button" class="btn btn-outline"><i class="fa fa-envelope" style="color:#337ab7;"></i></button>
                                                <button type="button" class="btn btn-default">Realizado</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-money" style="color:#5cb85c;"></i> Cobro - Roasty</td>
                                        <td>
                                            <div class="text-right">
                                                <button type="button" class="btn btn-outline"><i class="fa fa-envelope" style="color:#5cb85c;"></i></button>
                                                <button type="button" class="btn btn-default btn-danger disabled">Por cobrar</button>
                                                <button type="button" class="btn btn-default">Recaudado</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-money" style="color:#5cb85c;"></i> Cobro - Roasty</td>
                                        <td>
                                            <div class="text-right">
                                                <button type="button" class="btn btn-outline"><i class="fa fa-envelope" style="color:#5cb85c;"></i></button>
                                                <button type="button" class="btn btn-default">Por cobrar</button>
                                                <button type="button" class="btn btn-default">Recaudado</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <p></p>
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <p>
                                <strong>Debido recaudo / Enero 2016</strong>
                            </p>
                            <p>
                                $3.000.000 / $5.000.000
                                <span class="pull-right text-muted"><?php echo 3000000/5000000*100 ?>% Completado</span>
                            </p>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

         <!-- jQuery -->
        {!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}
        
        <!-- Bootstrap Core JavaScript -->
        {!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}

        <!-- Metis Menu Plugin JavaScript -->
        {!!Html::script('bower_components/metisMenu/dist/metisMenu.min.js')!!}

        <!-- Morris Charts JavaScript -->
        {!!Html::script('bower_components/raphael/raphael-min.js')!!}
        {!!Html::script('bower_components/morrisjs/morris.min.js')!!}
        <!-- {!!Html::script('js/morris-data.js')!!} -->

        <!-- Custom Theme JavaScript -->
        {!!Html::script('dist/js/sb-admin-2.js')!!}
    </body>

</html>