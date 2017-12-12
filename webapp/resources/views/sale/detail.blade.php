@extends('layouts.head)
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/plugins/products-comparison-table/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')
    {{dd($sales)}}
    <div class="row">

        <div class="col s12"><div class="card white"><div class="card-content center">{{$sales->nit}}</div></div></div>
        <div class="col s6"><div class="card white"><div class="card-content center">{{$sales->name}}</div></div></div>
        <div class="col s6"><div class="card white"><div class="card-content center">{{$sales->lastname}}</div></div></div>
    </div>
    <div class="row">

        <div class="col s12"><div class="card white"><div class="card-content center">{{$sales->email}}</div></div></div>
        <div class="col s6"><div class="card white"><div class="card-content center">{{$sales->phone}}</div></div></div>
        <div class="col s6"><div class="card white"><div class="card-content center">{{$sales->address}}</div></div></div>
    </div>
    <div class="row">

        <div class="col s12"><div class="card white"><div class="card-content center">{{$sales->birthday}}</div></div></div>

    </div>
@endsection

@section('js')
    <script src="{{asset('assets/plugins/google-code-prettify/prettify.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.js')}}"></script>
@endsection