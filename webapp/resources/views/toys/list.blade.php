@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/plugins/products-comparison-table/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('title','Juguetes')

@section('content')

        <div class="row">
            <br>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Basic</span><br>
                        <div id="example_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="browser-default"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div><div id="example_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search records" aria-controls="example"></label></div><table id="example" class="display responsive-table datatable-example dataTable" role="grid" aria-describedby="example_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">Código</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Nombre</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 270px;">Descripcion</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;">Precio</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 115px;">Opciones</th>
                                </thead>
                                @foreach($toys as $toy)
                                <tbody>
                                <tr role="row" class="odd">
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
                                </tbody>
                                @endforeach
                            </table>
                            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous"><i class="material-icons">chevron_left</i></a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next"><i class="material-icons">chevron_right</i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
