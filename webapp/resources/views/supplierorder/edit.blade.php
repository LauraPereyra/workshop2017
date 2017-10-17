@extends('layouts.head')
@section('content')

    <div class="row">
        <h4>Creacion de Pedido</h4>

        {!! Form::open(['route' => ['supplierorder.update', $supplierorders], 'method' => 'PUT' ]) !!}

        <div class="form-group col s12 m6 l3">
            {!! Form::label('supplier', 'Proveedor') !!}
            {!! Form::select('supplier', ['1' => 'Proveedor 1', '2' => 'Proveedor 2'],$supplierorders->supplier_id, ['class' => 'form-control', 'placeholder' => 'Selecciona un proveedor', 'required']) !!}
        </div>

        <div class="form-group col s12 m6 l3">
            {!! Form::label('matrix_house', 'Casa Matriz') !!}
            {!! Form::select('matrix_house', ['1' => 'Casa Matriz 1', '2' => 'Casa Matriz 2'], $supplierorders->matrix_house_id, ['class' => 'form-control', 'placeholder' => 'Selecciona casa matriz', 'required']) !!}
        </div>

        <div class="form-group col s12 m6 l3">
            {!! Form::label('order_limit_date', 'Fecha limite de entrega') !!}
            {!! Form::date('order_limit_date', Carbon\Carbon::parse($supplierorders->order_arrive)->format('Y-m-d')) !!}
        </div>

        <div class="form-group col col s12">
            {!! Form::label('employee', 'Encargado') !!}
            {!! Form::select('employee', ['Encargado1' => 'Carlos Martinez', 'Encargado2' => 'Joel Rojas'], null, ['class' => 'form-control', 'placeholder' => 'Seleccionar encargado', 'required']) !!}
        </div>

        <div class="form-group col col s12">
            {!! Form::label('order_status', 'Estado del Pedido') !!}
            {!! Form::select('order_status', ['pendiente' => 'Pendiente', 'atrasado' => 'Atrasado', 'entregado' => 'Entregado'], $supplierorders->status, ['class' => 'form-control', 'placeholder' => 'Seleccionar estado', 'required']) !!}
        </div>
        <br>
        <div class="form-group col col s12">
            {!! Form::submit('Modificar',['class' => 'waves-effect waves-light btn']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection