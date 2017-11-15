<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Alpha | Responsive Admin Dashboard Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>


    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


</head>
<body class="signin-page">
<br><Br><Br><br><br><Br><Br><br><br><Br><Br><br>
<div class="main-container">

    <div class="content-container">

        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                    <div class="row">
                        <div class="col s12 m6 l4 offset-l4 offset-m3">
                            <div class="card white darken-1">
                                <div class="card-content ">
                                    <span class="card-title">Iniciar Sesión</span>
                                    <div class="row">
                                        {{ Form::open(['route'=>'auth.login', 'method' => 'POST']) }}

                                        <div class="input-group margin-bottom-sm">
                                            {!! Html::decode(Form::label('email','<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw-5x"></i></span>')) !!}
                                            {{Form::email('email', null,['class'=>'form-control', 'placeholder' => 'example@gmail.com'])}}
                                        </div>

                                        <div class="input-group">
                                            {!! Html::decode(Form::label('password','<span class="input-group-addon"><i class="fa fa-key fa-fw-5x"></i></span>')) !!}
                                            {{Form::password('password',['class'=>'form-control', 'placeholder' => '**********'])}}
                                        </div>


                                        <center>
                                            <div class="input-group">
                                                {{ Form::submit('Ingresar',['class' => 'waves-effect waves-light btn orange m-b-xs']) }}
                                            </div>
                                        </center>
                                        {{ Form::close() }}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>	<!-- /.content-container -->

</div>
<!-- Javascripts -->
<script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="assets/plugins/materialize/js/materialize.min.js"></script>
<script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/js/alpha.min.js"></script>

</body>
</html>





