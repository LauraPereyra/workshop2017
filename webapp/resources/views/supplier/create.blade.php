@extends('layouts.head')

@section('content')
    <div class="row">
        <h4>Creacion de Proveedor</h4>

        {!! Form::open(['route' => 'supplier.store', 'method' =>'POST' ]) !!}

        <div class="form-group col s12">
            {!! Form::label('name_supplier', 'Nombre') !!}
            {!! Form::text('name_supplier', null, ['class' => 'form-control', 'placeholder' => 'Nombre del proveedor', 'required']) !!}
        </div>

        <div class="form-group col s6">
            {!! Form::label('country', 'País') !!}
            {!! Form::select('country',
            ['Bolivia' => 'Bolivia',
             'Peru' => 'Peru',
             'Chile' => 'Chile'],
             'Bolivia', ['class' => 'form-control', 'placeholder' => 'Selecciona un País', 'required']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('phone','Telefono') !!}
            {!! Form::number('phone',null, ['class' => 'form-control', 'placeholder' => '2222222'], 'required') !!}
        </div>

        <div class="form-group col s12">
            {!! Form::label('address_supplier', 'Dirección') !!}
            {!! Form::text('address_supplier', null, ['class' => 'form-control', 'placeholder' => 'Av. avenida # 1234 calle Calle1', 'required']) !!}
        </div>

        <br>
        <div class="form-group col col s12">
            {!! Form::submit('Crear',['class' => 'waves-effect waves-light btn']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection