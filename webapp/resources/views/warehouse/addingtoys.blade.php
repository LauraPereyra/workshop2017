@extends('layouts.head')
@section('content')
    <div class="row">
        <h4>Agregando Juguetes a almacen</h4>

        {!! Form::open(['route' => 'warehouse.storetoyswarehouse', 'method' =>'POST' ]) !!}

        <div class="form-group col m6">
            {!! Form::label('warehouse_id', 'Almacen') !!}
            {!! Form::select('warehouse_id', $warehouse,
             null, ['class' => 'form-control', 'placeholder' => 'Selecciona una sucursal']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('toy_id', 'Juguete') !!}
            {!! Form::select('toy_id',$toys,
             null, ['class' => 'form-control', 'placeholder' => 'Selecciona un juguete']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('stock','Cantidad') !!}
            {!! Form::number('stock',null, ['class' => 'form-control', 'placeholder' => '500', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('precio_compra','Al precio de: ') !!}
            {!! Form::number('precio_compra',null, ['class' => 'form-control', 'placeholder' => '500', 'autocomplete' => 'off']) !!}
        </div>

        <br>
        <div class="form-group col col s12">
            {!! Form::submit('Agregar juguetes',['class' => 'waves-effect waves-light btn']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection()