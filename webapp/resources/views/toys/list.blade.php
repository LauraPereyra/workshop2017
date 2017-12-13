@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/plugins/products-comparison-table/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <!--  ********************* QUITE ESTO*************************
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.material.min.css')}}">
    -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/material.min.css')}}">
@endsection

@section('title','Juguetes')

@section('content')

        <div class="row">
            <br>
            <div class="col s12"><div class="card orange accent-3"><div class="card-content center"><font size="5" color="black"><center>Lista de Juguetes</center></font> </div></div></div>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <table id="datatable" class="display highlight" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Imagen</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($toys as $toy)
                                <tr>
                                    <td>{{$toy->idtoy}}</td>
                                    <td>{{$toy->name}}</td>
                                    <td>{{$toy->description}}</td>
                                    <td>{{$toy->price}}</td>
                                    <td><a href="{{url('photo',$toy->id)}}"><img src="/images/avatars/{{$toy->image}}" style="width:30px;height: 44px; border-radius: 50%"></a></td>
                                    <td>
                                        <center>
                                        <a href="{{url('/toy/').'/'.$toy->id}}" class="btn-floating waves-effect waves-light "><i class="material-icons">edit</i></a>
                                        &nbsp&nbsp;
                                        <a href="{{url('/toydelete/').'/'.$toy->id}}" class="btn-floating waves-effect waves-light red "><i class="material-icons">delete_forever</i></a>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                            <!--<div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous"><i class="material-icons">chevron_left</i></a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next"><i class="material-icons">chevron_right</i></a></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


@section('js')


    <script src="{{asset('assets/plugins/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('assets/js/dataTables.material.min.js')}}"></script>
    <script>

        $(document).ready(function() {
            $('#datatable').DataTable({
                "language": {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
            $("select").val('10');
            $('select').addClass("browser-default");
            $('select').material_select();
        } );
    </script>
@endsection
