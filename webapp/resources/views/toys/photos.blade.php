@extends('layouts.head')
@section('css')

    <link rel="stylesheet" href="{{asset('assets/css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/w3-theme-blue-grey.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/pagina/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pagina/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/pagina/css/templatemo_style.css')}}" rel="stylesheet" type="text/css">

@endsection


@section('content')

        <br>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="col s12"><div class="card grey darken-4"><div class="card-content center"><font size="5" color="orange"><center>Imágenes del Juguete </center></font> </div></div></div>
                <div class="card-content">

                    <div class="row">

                            <form action="/upload" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                Elija mas fotografias:
                                <br />
                                <input type="file" name="photos[]" multiple />
                                <input type="hidden" name="id" id='id' value="{{ $toy->id }}">
                                <br /><br />
                                <input type="submit" value="Upload" />
                            </form>

                    </div>
                <br><Br><br>

                    <div class="content-container">
                        <div id="portfolio-content" class="center-text">
                            <div class="portfolio-page" id="page-1">
                                @foreach($toys as $toy)
                                    <div class="portfolio-group">
                                            <img src="<?php echo asset("storage/$toy->images")?>" style="width:200px;height:200px;">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        </div>

@endsection
@section('js')
    <script type="text/javascript" src="{{asset('assets/pagina/js/modernizr.2.5.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/pagina/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/pagina/js/templatemo_script.js')}}"></script>
    @endsection