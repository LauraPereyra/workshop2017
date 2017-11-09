<!DOCTYPE html>
<!-- templatemo 413 flip turn -->
<!--
Flip Turn Template
http://www.templatemo.com/tm-413-flip-turn
-->
<head>
    <title>Jugueteria</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/pagina/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/pagina/css/templatemo_style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main-container">
    <nav class="main-nav">
        <div id="logo" class="left"><a href="#">Juguetería</a></div>
        <ul class="nav right center-text">
            <li class="btn active">Inicio</li>
            <li class="btn"><a href="about.html">Sobre nosotros</a></li>
            <li class="btn"><a href="contact.html">Contacto</a></li>
            <li class="btn"><a href="#">Ingresar</a></li>
        </ul>
    </nav>
    <div class="content-container">
        <header>
            <h1 class="center-text">Login</h1>
        </header>
        <div class="content-container" align="left">
                {{ Form::open(['route'=>'auth.login', 'method' => 'POST']) }}

                    <div class="input-group margin-bottom-sm">
                        {!! Html::decode(Form::label('email','<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw-5x"></i></span>')) !!}
                        {{Form::email('email', null,['class'=>'form-control', 'placeholder' => 'example@gmail.com'])}}
                    </div>

                    <div class="input-group">
                        {!! Html::decode(Form::label('password','<span class="input-group-addon"><i class="fa fa-key fa-fw-5x"></i></span>')) !!}
                        {{Form::password('password',['class'=>'form-control', 'placeholder' => '**********'])}}
                    </div>

                    <div class="input-group">
                        {{ Form::submit('Ingresar',['class' => 'btn btn-primary']) }}
                    </div>

                {{ Form::close() }}
        </div>

    </div>	<!-- /.content-container -->
    <footer>
        <p>Copyright &copy; Taller de Sistemas</p>
        <div class="social right">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
    </footer>
</div>

</body>
</html>