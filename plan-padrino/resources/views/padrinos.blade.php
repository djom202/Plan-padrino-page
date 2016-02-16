<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Plan padrino - Padrinos</title>

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

        <!-- DataTables CSS -->
        {!!Html::style('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')!!}

        <!-- DataTables Responsive CSS -->
        {!!Html::style('bower_components/datatables-responsive/css/dataTables.responsive.css')!!}

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
                        <h1 class="page-header">Padrinos</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <p><strong>Nuestros padrinos</strong></p>

                        <p>
                            Forma de pago:
                            <select id="forma-pago" style="margin-right:1em">
                                <option value="" style="">- Todos -</option>
                            </select>

                            Periodo de pago:
                            <select id="periodo-pago" style="margin-right:1em">
                                <option value="">- Todos -</option>
                            </select>

                            País:
                            <select id="pais" style="margin-right:1em">
                                <option value="">- Todos -</option>
                            </select>

                            Estado:
                            <select id="estado" style="margin-right:1em">
                                <option value="">- Todos -</option>
                            </select>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="dataTables-padrinos">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Identificación</th>
                                        <th>Valor a pagar</th>
                                        <th>Forma de pago</th>
                                        <th>No. de ahijados</th>
                                        <th style="display:none;">Periodo de pago</th>
                                        <th style="display:none;">País</th>
                                        <th style="display:none;">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Héctor Villazón</a></td>
                                        <td>Soledad</td>
                                        <td>1140123456</td>
                                        <td>$30.000</td>
                                        <td>Efectivo</td>
                                        <td>1</td>
                                        <td style="display:none;">2</td>
                                        <td style="display:none;">Colombia</td>
                                        <td style="display:none;">1</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Andrés Racedo</td>
                                        <td>Barranquilla</td>
                                        <td>1140345678</td>
                                        <td>$60.000</td>
                                        <td>Tarjeta débito</td>
                                        <td>2</td>
                                        <td style="display:none;">2</td>
                                        <td style="display:none;">Colombia</td>
                                        <td style="display:none;">1</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Victor Albis</td>
                                        <td>Barranquilla</td>
                                        <td>1150000111</td>
                                        <td>$30.000</td>
                                        <td>Tarjeta débito</td>
                                        <td>1</td>
                                        <td style="display:none;">1</td>
                                        <td style="display:none;">Canadá</td>
                                        <td style="display:none;">0</td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
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

    <!-- DataTables JavaScript -->
    {!!Html::script('bower_components/datatables/media/js/jquery.dataTables.min.js')!!}
    {!!Html::script('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')!!}
    
    <!-- Custom Theme JavaScript -->
    {!!Html::script('dist/js/sb-admin-2.js')!!}

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>

    $(document).ready(function() {
        var oTable = $('#dataTables-padrinos');

        oTable.DataTable( {
            "paging": false,
            "info": false,
            // "bFilter": false,
            "oLanguage":{
                "sSearch": "Buscar: "
            },
            responsive: true,

            //Se llenan los desplegables
            initComplete: function () {
                //Forma de pago
                this.api().columns(4).every( function () {
                    this.data().unique().sort().each( function ( d, j ) {
                        $('#forma-pago').append($('<option>', {
                            value: d,
                            text: d
                        }));
                    });
                });

                //Periodo de pago
                this.api().columns(6).every( function () {
                    this.data().unique().sort().each( function ( d, j ) {
                        var name;
                        if(d == 1){
                            name = "Mensual";
                        }else if(d == 2){
                            name = "Bimestral";
                        }else if(d == 3){
                            name = "Trimestral";
                        }else if(d == 4){
                            name = "Cuatrimestral";
                        }else if(d == 6){
                            name = "Semestral";
                        }else if(d == 12){
                            name = "Anual";
                        }

                        $('#periodo-pago').append($('<option>', {
                            value: d,
                            text: name
                        }));
                    });
                });

                //País
                this.api().columns(7).every( function () {
                    this.data().unique().sort().each( function ( d, j ) {
                        $('#pais').append($('<option>', {
                            value: d,
                            text: d
                        }));
                    });
                });

                //Estado
                this.api().columns(8).every( function () {
                    this.data().unique().sort().each( function ( d, j ) {
                        var name;
                        if(d == 0){
                            name = "Inactivo";
                        }else{
                            name = "Activo";
                        }

                        $('#estado').append($('<option>', {
                            value: d,
                            text: name
                        }));
                    });
                });
            }
        });

        //Se filtran los datos
        $('select#forma-pago').change( function() {oTable.dataTable().fnFilter( $(this).val(), 4 ); } );
        $('select#periodo-pago').change( function() {oTable.dataTable().fnFilter( $(this).val(), 6 ); } );
        $('select#pais').change( function() {oTable.dataTable().fnFilter( $(this).val(), 7 ); } );
        $('select#estado').change( function() {oTable.dataTable().fnFilter( $(this).val(), 8 ); } );
    });


    </script>

</body>
</html>