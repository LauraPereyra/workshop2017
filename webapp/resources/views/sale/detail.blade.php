@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/plugins/products-comparison-table/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section('content')

    <div class="row">

        <div class="col s12"><div class="card grey darken-4"><div class="card-content center"><font size="5" color="white"><center>VENTA Sr. {{$sales->lastname}} </center></font> </div></div></div>
        <div class="col s3">

            <div class="card white">
                <div class="card orange lighten-1"><font size="4" color="black"><center>Datos de cliente</center></font></div>
                <p align="center"><img src="{{asset('assets/images/avatar3.png')}}" style="height:106px;width:106px"></p>
                <div class="card-content center">
                    <font size="2" color="black"><p align="center"><i class="fa fa-vcard fa-fw w3-margin-right w3-text-theme"></i>&nbsp; Nit: &nbsp&nbsp;</font>{{$sales->nit}}</p><br>
                    <font size="2" color="black"><p align="center"><i class="fa fa-user-circle-o fa-fw w3-margin-right w3-text-theme"></i>&nbsp; Nombre: &nbsp&nbsp;</font>{{$sales->name}}</p><br>
                    <font size="2" color="black"><p align="center"><i class="fa fa-user-o fa-fw w3-margin-right w3-text-theme"></i>&nbsp; Apellido: &nbsp&nbsp;</font>{{$sales->lastname}}</p>
                </div>

            </div>
        </div>
        <div class="col s9">
            <div class="card white">
                <div class="card orange lighten-1"><font size="4" color="black"><center>Detalle de venta</center></font></div>
                <p align="center"><img src="{{asset('assets/images/shop.png')}}" style="height:106px;width:106px"></p>
                <div class="card-content center">{{$sales->date_sale}}
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script src="{{asset('assets/plugins/google-code-prettify/prettify.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.js')}}"></script>
@endsection