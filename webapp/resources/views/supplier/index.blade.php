@extends('layouts.head')

@section('content')
    <br>
    <a href="{{ route('supplier.create') }}" class="waves-effect waves-light btn">Agregar</a>

    <table class="striped">
        <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>País</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Acciones</th>
        </thead>
        <tbody>
        @foreach($suppliers as $suppliers)
            <tr>
                <td> {{ $suppliers -> id }}</td>
                <td> {{ $suppliers -> name_supplier }}</td>
                <td> {{ $suppliers -> country }}</td>
                <td> {{ $suppliers -> phone }}</td>
                <td> {{ $suppliers -> address_supplier }}</td>
                <td><a href="{{ route('supplier.edit', $suppliers -> id) }}" class="waves-effect waves-light btn blue m-b-xs"> <i class="material-icons dp48">edit</i></a>
                    <a href="{{ route('supplier.destroy', $suppliers -> id) }}" onclick="return confirm('¿Estas seguro de eliminarlo?')" class="waves-effect waves-light btn orange m-b-xs"><i class="material-icons dp48">clear</i> </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection