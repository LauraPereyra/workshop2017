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

@section('content')
    <div class="col s12 m12 l12">
        <br><br>
        <div class="card">
            <div class="card-content">
                <span class="card-title"><center><font color="black" size="6">JUGUETES</font></center></span>
                <!-- Modal Trigger -->
                <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Registrar Juguete</a>
                <!-- Modal Structure -->
                <div id="modal1" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
                    </div>
                </div>
                <br><br>
                <table class="bordered">
                    <thead>
                    <tr>
                        <th data-field="id">Código</th>
                        <th data-field="name">Nombre</th>
                        <th data-field="price">Precio</th>
                        <th data-field="price">Descripción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td>asdasd</td>
                    </tr>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td>asdasd</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
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


