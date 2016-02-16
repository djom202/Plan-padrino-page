<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plan padrino - Iniciar sesión</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}

    <!-- MetisMenu CSS -->
    {!!Html::style('bower_components/metisMenu/dist/metisMenu.min.css')!!}

    <!-- Custom CSS -->
    {!!Html::style('dist/css/sb-admin-2.css')!!}

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#fff12c;">
            <div class="navbar-header">
                <a class="navbar-brand"><img src="images/logonu3.png" style="margin: -10px 10px 0px 0px; float:left;">Base de datos</a>
            </div>
        </dvi>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inicia sesión</h3>
                    </div>
                    <div class="panel-body">
                        {!!Form::open()!!}
                            <fieldset>
                                <div class="form-group">
                                    {!!Form::text('usuario', null, ['class'=>'form-control', 'required', 'autofocus', 'placeholder'=>'Usuario'])!!}
                                </div>
                                <div class="form-group">
                                    {!!Form::password('password', ['class'=>'form-control', 'required', 'placeholder'=>'Contraseña'])!!}
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                            </fieldset>
                            {!!Form::submit('Iniciar sesión', ['class'=>'btn btn-lg btn-success btn-block'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    {!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}
    
    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}

    <!-- Metis Menu Plugin JavaScript -->
    {!!Html::script('bower_components/metisMenu/dist/metisMenu.min.js')!!}

    <!-- Custom Theme JavaScript -->
    {!!Html::script('dist/js/sb-admin-2.js')!!}

</body>

</html>
