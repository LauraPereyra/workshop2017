@extends('layouts.head')

@section('content')
    <div class="row">
        <h4>Modificacion de Proveedor</h4>

        {!! Form::open(['route' => ['supplier.update', $supplier], 'method' =>'PUT' ]) !!}

        <div class="form-group col s6">
            {!! Form::label('name_supplier', 'Nombre') !!}
            {!! Form::text('name_supplier', $supplier->name_supplier, ['class' => 'form-control', 'placeholder' => 'Nombre del proveedor', 'autocomplete' => 'off', 'required']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('country', 'País') !!}
            {!! Form::select('country',
            ['Bolivia' => 'Bolivia',
             'Peru' => 'Peru',
             'Chile' => 'Chile'],
             $supplier->country, ['class' => 'form-control', 'placeholder' => 'Selecciona un País', 'required']) !!}
        </div>

        <div class="form-group col m3">
            {!! Form::label('phone','Telefono(*)') !!}
            {!! Form::number('phone',$supplier -> phone, ['class' => 'form-control', 'placeholder' => '2222222', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m3">
            {!! Form::label('phone2','Telefono2') !!}
            {!! Form::number('phone2',$supplier -> phone2, ['class' => 'form-control', 'placeholder' => '2222222', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m3">
            {!! Form::label('cellphone','Celular(*)') !!}
            {!! Form::number('cellphone',$supplier -> cellphone, ['class' => 'form-control', 'placeholder' => '77777777', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m3">
            {!! Form::label('cellphone2','Celular2') !!}
            {!! Form::number('cellphone2',$supplier -> cellphone2, ['class' => 'form-control', 'placeholder' => '77777777', 'autocomplete' => 'off']) !!}

        </div>

        <div class="form-group col s12">
            {!! Form::label('address_supplier', 'Dirección') !!}
            {!! Form::text('address_supplier', $supplier->address_supplier, ['class' => 'form-control', 'placeholder' => 'Av. avenida # 1234 calle Calle1', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('email', 'Correo') !!}
            {{Form::email('email', $supplier -> email,['class'=>'form-control', 'placeholder' => 'example@gmail.com', 'autocomplete' => 'off'])}}
        </div>

        <div class="form-group col m6">
            {!! Form::label('website', 'Página web') !!}
            {{Form::text('website', $supplier -> website,['class'=>'form-control', 'placeholder' => 'www.Mipagina.com', 'autocomplete' => 'off'])}}
        </div>

        <br>
        <div class="form-group col col s12">
            {!! Form::submit('Modificar',['class' => 'waves-effect waves-light btn']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection