@extends('layouts.head')
@section('content')
    <div class="row">
        <h4>Traspaso</h4>

        {!! Form::open(['route' => 'warehouse.maketransfer', 'method' =>'POST' ]) !!}

        <div class="form-group col s6">
            {!! Form::label('toy_id', 'Item') !!}
            {!! Form::text('toy_id', null, ['class' => 'form-control', 'placeholder' => 'Nombre del item', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('quantity','Cantidad') !!}
            {!! Form::number('quantity',null, ['class' => 'form-control', 'placeholder' => '700', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('warehouse_origin', 'Origen') !!}
            {!! Form::select('warehouse_origin',
            [
             1 => 'Sucursal Obrajes',
             2 => 'Sucursal Miraflores',
             ],
             null, ['class' => 'form-control', 'placeholder' => 'Selecciona una sucursal']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('warehouse_destiny', 'Destino') !!}
            {!! Form::select('warehouse_destiny',
            [
             1 => 'Sucursal Obrajes',
             2 => 'Sucursal Miraflores',
             ],
             null, ['class' => 'form-control', 'placeholder' => 'Selecciona una sucursal']) !!}
        </div>

        <br>
        <div class="form-group col col s12">
            {!! Form::submit('Hacer Traspaso',['class' => 'waves-effect waves-light btn']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection