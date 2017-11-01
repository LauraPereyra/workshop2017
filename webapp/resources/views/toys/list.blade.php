@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/plugins/products-comparison-table/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css">
@endsection

@section('title','Juguetes')

@section('content')

        <div class="row">
            <br>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><font size="5" color="black"><center>Lista de Juguetes</center></font> </span><br>
                            <table id="datatable" class="table">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
            });
        } );
    </script>
@endsection
