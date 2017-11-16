@extends('layouts.head')

@section('content')
    <h4>Listado de Proveedores</h4>
    <br>
    <a href="{{ route('supplier.create') }}" class="waves-effect waves-light btn">Agregar</a>

    <table class="striped">
        <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>País</th>
        <th>Celular</th>
        <th>Celular2</th>
        <th>Telefono</th>
        <th>Telefono2</th>
        <th>Correo</th>
        <th>Página</th>
        <th>Direccion</th>
        <th>Acciones</th>
        </thead>
        <tbody>
        @foreach($suppliers as $suppliers)
            <tr>
                <td> {{ $suppliers -> id }}</td>
                <td> {{ $suppliers -> name_supplier }}</td>
                <td> {{ $suppliers -> country }}</td>
                <td> {{ $suppliers -> cellphone }}</td>
                <td> {{ $suppliers -> cellphone2 }}</td>
                <td> {{ $suppliers -> phone }}</td>
                <td> {{ $suppliers -> phone2 }}</td>
                <td> {{ $suppliers -> email }}</td>
                <td><a href="{{ url($suppliers -> website) }}">{{ $suppliers -> website }}</a></td>
                <td> {{ $suppliers -> address_supplier }}</td>
                <td><a href="{{ route('supplier.edit', $suppliers -> id) }}" class="waves-effect waves-light btn blue m-b-xs"> <i class="material-icons dp48">edit</i></a>
                    <a href="{{ route('supplier.destroy', $suppliers -> id) }}" onclick="return confirm('¿Estas seguro de eliminarlo?')" class="waves-effect waves-light btn orange m-b-xs"><i class="material-icons dp48">clear</i> </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection