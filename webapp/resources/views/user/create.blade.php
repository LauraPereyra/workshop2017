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
        <h4>Creacion de Usuarios</h4>

        {!! Form::open(['route' => 'user.store', 'method' =>'POST' ]) !!}

        <div class="form-group col s12">
            {!! Form::label('names', 'Nombres') !!}
            {!! Form::text('names', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'autocomplete' => 'off' ]) !!}
        </div>

        <div class="form-group col s6">
            {!! Form::label('lastname1', 'Apellido paterno') !!}
            {!! Form::text('lastname1', null, ['class' => 'form-control', 'placeholder' => 'Apellido paterno', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col s6">
            {!! Form::label('lastname2', 'Apellido materno') !!}
            {!! Form::text('lastname2', null, ['class' => 'form-control', 'placeholder' => 'Apellido materno', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('phone','Telefono') !!}
            {!! Form::number('phone',null, ['class' => 'form-control', 'placeholder' => '2222222', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('cellphone','Celular') !!}
            {!! Form::number('cellphone',null, ['class' => 'form-control', 'placeholder' => '7777777', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col s12">
            {!! Form::label('address', 'Dirección') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Av.aaaaa Calle bbbb', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col s6">
            {!! Form::label('sex', 'Género') !!}
            {!! Form::select('sex',
            ['masculino' => 'Masculino',
             'femenino' => 'Femenino'],
             null , ['class' => 'form-control', 'autocomplete' => 'off']) !!}
        </div>
        <div class="form-group col s6">
            {!! Form::label('birthday', 'Fecha nacimiento') !!}
            {!! Form::date('birthday')  !!}
        </div>

        <div class="form-group col s6">
            {!! Form::label('email', 'Correo') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col s6">
            {!! Form::label('branch_id', 'Sucursal') !!}
            {!! Form::select('branch_id',
            [
                1 => 'Sucursal Obrajes',
                2 => 'Sucursal Miraflores',
                3 => 'Sucursal Achumani'],
                1 , ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col s6">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => '*********', 'autocomplete' => 'off']) !!}
        </div>

        <div class="form-group col s6">
            {!! Form::label('role', 'Rol') !!}
            {!! Form::select('role',
            ['superadmin' => 'Administrador',
             'manager' => 'Gerente',
             'employee' => 'Empleado'],
             'employee' , ['class' => 'form-control']) !!}
        </div>
        <br>
        <div class="form-group col col s12">
            {!! Form::submit('Crear',['class' => 'waves-effect waves-light btn']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection