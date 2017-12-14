<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Juguetería</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/pagina/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/pagina/css/templatemo_style.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('assets/pagina/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/animate.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/et-line-font.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/nivo-lightbox.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/owl.theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/bxslider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/style.css')}}" rel="stylesheet" type="text/css">

</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section
================================================== -->
<section  class="preloader">

    <div class="sk-rotating-plane"></div>

</section>


<!-- Navigation section
================================================== -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#home" class="smoothScroll navbar-brand">TOY HOUSE</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll">INICIO</a></li>
                <li><a href="#portfolio" class="smoothScroll">CATALOGO</a></li>
                <li><a href="#about" class="smoothScroll">SOBRE NOSOTROS</a></li>
                <li><a href="#contact" class="smoothScroll">CONTACTO</a></li>
                <li><a href="{{ route('auth.login') }}">INGRESAR</a></li>
            </ul>
        </div>

    </div>
</section>


<!-- Homepage section
================================================== -->
<div id="home">
    <div class="site-slider">
        <ul class="bxslider">
            <li>
                <img src="{{asset('assets/pagina/images/slider/slide1.jpg')}}" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Plan your trip</h2>
                                <p class="color-white">Fusce elementum nisi et magna tristique, ut facilisis magna dapibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{asset('assets/pagina/images/slider/slide2.jpg')}}" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>Bootstrap Layout</h2>
                        <p class="color-white">Pellentesque mollis purus ipsum. Fusce tristique ante et est placerat dignissim.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{asset('assets/pagina/images/slider/slide3.jpg')}}" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Mobile Ready</h2>
                                <p class="color-white">You may modify any content section as you wish.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{asset('assets/pagina/images/slider/slide4.jpg')}}" alt="slider image 4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Responsive Theme</h2>
                                <p class="color-white">Phasellus ultrices, nunc et tempus porta, tellus purus elementum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{asset('assets/pagina/images/slider/slide5.jpg')}}" alt="slider image 5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Download it FREE!</h2>
                                <p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->
        <div class="bx-thumbnail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bx-pager">
                            <a data-slide-index="0" href=""><img src="{{asset('assets/pagina/images/slider/thumb1.jpg')}}" alt="thumbnail 1" /></a>
                            <a data-slide-index="1" href=""><img src="{{asset('assets/pagina/images/slider/thumb2.jpg')}}" alt="thumbnail 2" /></a>
                            <a data-slide-index="2" href=""><img src="{{asset('assets/pagina/images/slider/thumb3.jpg')}}" alt="thumbnail 3" /></a>
                            <a data-slide-index="3" href=""><img src="{{asset('assets/pagina/images/slider/thumb4.jpg')}}" alt="thumbnail 4" /></a>
                            <a data-slide-index="4" href=""><img src="{{asset('assets/pagina/images/slider/thumb5.jpg')}}" alt="thumbnail 5" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->
</div>




<!-- Plan section
================================================== -->
<section id="portfolio">
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
    </div>
</section>



<!-- About section
================================================== -->
<section id="about" class="parallax-section">
    <div class="container">
        <div class="row">

            <!-- Section title
            ================================================== -->
            <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                <div class="section-title">
                    <h5 class="wow bounceIn">ACTIVE PEOPLE</h5>
                    <h1 class="heading color-white">WHO WE ARE</h1>
                    <hr>
                    <p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">

            <!-- Contact detail section
            ================================================== -->
            <div class="contact-detail col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6">
                    <h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
                    <p>toyhouse@toyhouse.com</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> TELEFONOS</h3>
                    <p>2 2450914 | +591 71234567</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Footer section
================================================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                    <li><a href="#" class="fa fa-github wow fadeIn" data-wow-delay="1.3s"></a></li>
                </ul>

            </div>
        </div>
    </div>
</footer>




<script type="text/javascript" src="{{asset('assets/pagina/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/modernizr.2.5.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/templatemo_script.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/pagina/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/nivo-lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/jquery.easing-1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/jquery.parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pagina/js/custom.js')}}"></script>
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

