@extends('layouts.head')
@section('content')
    <div class="row">
        <h4>Kardex</h4>

        @if(count($errors)>0)
            <div class="red lighten-4">
                <ol>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ol>
            </div>
        @endif

        {!! Form::open(['route' => 'warehouse.showkardex', 'method' =>'POST' ]) !!}

        <div class="form-group col m6">
            {!! Form::label('kardex_warehouse', 'Almacen') !!}
            {!! Form::select('kardex_warehouse', $warehouse,
             null, ['class' => 'form-control', 'placeholder' => 'Selecciona una sucursal']) !!}
        </div>

        <div class="form-group col m6">
            {!! Form::label('kardex_toy', 'Juguete') !!}
            {!! Form::select('kardex_toy',$toys,
             null, ['class' => 'form-control', 'placeholder' => 'Selecciona un juguete']) !!}
        </div>

        <br>
        <div class="form-group col col s12">
            {!! Form::submit('Mostrar kardex',['class' => 'waves-effect waves-light btn']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection()