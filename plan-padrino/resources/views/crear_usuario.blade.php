<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Plan padrino - Agregar nuevo usuario</title>

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
                        <h1 class="page-header">Agregar nuevo usuario</h1>
                        {!!Form::open()!!}
	                    	<div class="row">
	                    		<div class="col-lg-6">
		                    		<div class="form-group">
		                    			<label>Nombre</label>
			                    		{!!Form::text('nombre', null, ['class'=>'form-control', 'required', 'placeholder'=>'Ingrese el nombre del usuario'])!!}
			                    	</div>
			                    </div>
	                    	</div>

	                    	<div class="row">
	                    		<div class="col-lg-4">
		                    		<div class="form-group">
		                    			<label>Usuario</label>
			                    		{!!Form::text('usuario', null, ['class'=>'form-control', 'required','placeholder'=>'Ingrese el usuario'])!!}
			                    	</div>
			                    </div>

			                    <div class="col-lg-4">
		                    		<div class="form-group">
		                    			<label>Contraseña</label>
			                    		{!!Form::password('password', ['class'=>'form-control', 'required', 'placeholder'=>'Ingrese la contraseña'])!!}
			                    	</div>
			                    </div>
	                    	</div>
	                    	
	                    	<div class="row">
	                    		<div class="col-lg-4">
		                    		<div class="form-group">
		                    			<label>Tipo de usuario</label>
		                    			{!!Form::select('tipo_usuario', array('1' => 'Administrador', '2' => 'Coordinador', '3' => 'Comedor'), null, ['class'=>'form-control', 'id' => 'tipo_usuario'])!!}
			                    	</div>
			                    </div>

			                    <div class="col-lg-4">
		                    		<div class="form-group">
		                    			<label>Comedor</label>
			                    		{!!Form::select('comedor', array('1' => 'Santa María', '2' => 'Villa Esperanza', '3' => 'Villanueva'), null, ['class'=>'form-control', 'id' => 'comedor', 'disabled'])!!}
			                    	</div>
			                    </div>
	                    	</div>

	                    	{!!Form::submit('Crear', ['class'=>'btn btn-default'])!!}
	                    {!!Form::close()!!}
	                </div>
                </div>
                <!-- /.row -->
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

        <script>

        $(document).ready(function() {
            $('select#tipo_usuario').change( function() {
                if($(this).val() == 3){
                    $('select#comedor').prop('disabled', false);
                }else{
                    $('select#comedor').prop('disabled', true);
                }
            });
        });


        </script>
    </body>

</html>