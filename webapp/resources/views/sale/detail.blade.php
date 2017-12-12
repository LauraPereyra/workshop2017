@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/plugins/products-comparison-table/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <div class="row">

        <div class="col s12"><div class="card orange accent-3"><div class="card-content center"><font size="5" color="black"><center>VENTA Sr. {{$sales->lastname}} </center></font> </div></div></div>
        <div class="col s6">
            <div class="card white">
                <div class="card-content center">{{$sales->user_id}}
                </div>
            </div>
        </div>
        <div class="col s6"><div class="card white"><div class="card-content center">{{$sales->date_sale}}</div></div></div>

    </div>

    <div class="row">

        <div class="col s12"><div class="card white"><div class="card-content center">{{$sales->id}}</div></div></div>
        <div class="col s6"><div class="card white"><div class="card-content center">{{$sales->user_id}}</div></div></div>
        <div class="col s6"><div class="card white"><div class="card-content center">{{$sales->date_sale}}</div></div></div>
    </div>
    <div class="row">

        <div class="col s12"><div class="card white"><div class="card-content center">{{$sales->status}}</div></div></div>
        <div class="col s6"><div class="card white"><div class="card-content center">{{$sales->phone}}</div></div></div>
        <div class="col s6"><div class="card white"><div class="card-content center">{{$sales->address}}</div></div></div>
    </div>

@endsection

@section('js')
    <script src="{{asset('assets/plugins/google-code-prettify/prettify.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.js')}}"></script>
@endsection