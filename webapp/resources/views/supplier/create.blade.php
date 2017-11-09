@extends('layouts.head')

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
        <h4>Creacion de Proveedor</h4>

        {!! Form::open(['route' => 'supplier.store', 'method' =>'POST' ]) !!}

        <div class="form-group col s6">
            {!! Form::label('name_supplier', 'Nombre') !!}
            {!! Form::text('name_supplier', null, ['class' => 'form-control', 'placeholder' => 'Nombre del proveedor']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('country', 'País') !!}
            {!! Form::select('country',
            ['Bolivia' => 'Bolivia',
             'Peru' => 'Peru',
             'Chile' => 'Chile'],
             'Bolivia', ['class' => 'form-control', 'placeholder' => 'Selecciona un País']) !!}
        </div>

<<<<<<< Updated upstream
        <div class="form-group col m6">
            {!! Form::label('phone','Telefono') !!}
            {!! Form::number('phone',null, ['class' => 'form-control', 'placeholder' => '2222222']) !!}
=======
        <div class="form-group col m3">
            {!! Form::label('phone','Telefono(*)') !!}
            {!! Form::number('phone',null, ['class' => 'form-control', 'placeholder' => '2222222', 'autocomplete' => 'off']) !!}
>>>>>>> Stashed changes
        </div>

        <div class="form-group col m3">
            {!! Form::label('phone2','Telefono2') !!}
            {!! Form::number('phone2',null, ['class' => 'form-control', 'placeholder' => '2222222', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m3">
            {!! Form::label('cellphone','Celular(*)') !!}
            {!! Form::number('cellphone',null, ['class' => 'form-control', 'placeholder' => '77777777', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m3">
            {!! Form::label('cellphone2','Celular2') !!}
            {!! Form::number('cellphone2',null, ['class' => 'form-control', 'placeholder' => '77777777', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col s12">
            {!! Form::label('address_supplier', 'Dirección') !!}
            {!! Form::text('address_supplier', null, ['class' => 'form-control', 'placeholder' => 'Av. avenida # 1234 calle Calle1']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('email', 'Correo') !!}
            {{Form::email('email', null,['class'=>'form-control', 'placeholder' => 'example@gmail.com'])}}
        </div>

        <div class="form-group col m6">
            {!! Form::label('website', 'Página web') !!}
            {{Form::text('website', null,['class'=>'form-control', 'placeholder' => 'www.Mipagina.com'])}}
        </div>



        <br>
        <div class="form-group col col s12">
            {!! Form::submit('Crear',['class' => 'waves-effect waves-light btn']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection