@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/products-comparison-table/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('title','Juguetes')

@section('content')

    <div class="col s12 m12 l12">
        <br><br>
        <form class="col s12" method="post" id="createToy" action="{{ url('/toy/store') }}">
            {{ csrf_field() }}
        <div class="card">
            <div class="card-content">
                <span class="card-title"><font size="4"><center>REGISTRO JUGUETES</center></font> </span><br>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">vpn_key</i>
                        <input type="text" class="validate" id="idtoy" name="idtoy">
                        <label for="icon_prefix">Código</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">loyalty</i>
                        <input type="text" class="validate" id="name" name="name">
                        <label for="icon_telephone">Nombre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">payment</i>
                        <input type="number" class="validate" id="price" name="price">
                        <label for="icon_telephone">Precio</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">description</i>
                        <input type="text" class="validate" id="description" name="description">
                        <label for="icon_prefix">Descripción</label>
                    </div>
                </div>

                <div class="row">
                    <center>
                        <button class="waves-effect waves-light btn green m-b-xs" type="submit">Aceptar</button>
                        <a class="waves-effect waves-light btn red m-b-xs">Cancelar</a>
                    </center>
                </div>

            </div>

        </div>
        </form>


    </div>

@endsection

@section('js')
    <script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}"></script>
    <script src="{{asset('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
    <script src="{{asset('assets/plugins/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/alpha.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.js')}}"></script>
    <script src="{{asset('assets/plugins/products-comparison-table/js/modernizr.js')}}"></script>
    <script src="{{asset('assets/plugins/products-comparison-table/js/main.js')}}"></script>
@endsection


