@extends('layouts.head')
@section('content')
@section('content')
    @if(count($errors)>0)
        <div class="red lighten-4">
            <ol>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif

    <div class="row">
        <h4>Creacion de Almacenes</h4>

        {!! Form::open(['route' => 'warehouse.store', 'method' =>'POST' ]) !!}

        <div class="form-group col s12">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Almacen', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('branch_id', 'Sucursal') !!}
            {!! Form::select('branch_id',
            [
             1 => 'Sucursal Obrajes',
             2 => 'Sucursal Miraflores',
             3 => 'Sucursal Achumani',
             ],
             1, ['class' => 'form-control', 'placeholder' => 'Selecciona una sucursal']) !!}
        </div>


        <div class="form-group col m6">
            {!! Form::label('capacity','Capacidad') !!}
            {!! Form::number('capacity',null, ['class' => 'form-control', 'placeholder' => '700', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col s12">
            {!! Form::label('address', 'Dirección') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Av. avenida # 1234 calle Calle1', 'autocomplete' => 'off']) !!}
        </div>

        <br>
        <div class="form-group col col s12">
            {!! Form::submit('Crear',['class' => 'waves-effect waves-light btn']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection