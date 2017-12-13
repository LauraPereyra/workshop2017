
<!DOCTYPE html>

<head>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/pagina/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/pagina/css/templatemo_style.css')}}" rel="stylesheet" type="text/css">


    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.material.min.css')}}">

</head>
<body>
<div class="main-container">
    <nav class="main-nav">
        <div id="logo" class="left"><a href="#">Juguetería</a></div>
        <ul class="nav right center-text">
            <li class="btn active">Inicio</li>
            <li class="btn"><a href="about.html">Sobre nosotros</a></li>
            <li class="btn"><a href="contact.html">Contacto</a></li>
            <li class="btn"><a href="{{ route('auth.login') }}">Ingresar</a></li>
        </ul>
    </nav>
    <div class="content-container">
        <header>
            <h1 class="center-text">Catálogo</h1>
        </header>
        <div id="portfolio-content" class="center-text">
            <div class="portfolio-page" id="page-1">
                @foreach($toys as $toy)
                <div class="portfolio-group">
                    <a class="portfolio-item" href="/images/avatars/{{ $toy->image }}">
                        <img src="/images/avatars/{{ $toy->image }}" alt="image 1">
                        <div class="detail">
                            <h3>{{$toy->name}}</h3>
                            <p>{{$toy->description}}</p>
                            <span class="btn">Ver</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
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
<script type="text/javascript" src="{{asset('assets/pagina/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/modernizr.2.5.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/templatemo_script.js')}}"></script>
<script type="text/javascript">
    $(function () {
        $('.pagination li').click(changePage);
        $('.portfolio-item').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
        });
    });
</script>
</body>
</html>