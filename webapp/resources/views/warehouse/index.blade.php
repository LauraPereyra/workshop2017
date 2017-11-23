@extends('layouts.head')
@section('content')
    <h4>Listado de Almacenes</h4>
    <br>
    <a href="{{ route('warehouse.create') }}" class="waves-effect waves-light btn">Agregar</a>

    <table class="striped">
        <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Casa matriz</th>
        <th>Sucursal</th>
        <th>Direccion</th>
        <th>Capacidad</th>
        <th>Stock</th>
        <th>Acciones</th>
        </thead>
        <tbody>
        @foreach($warehouse as $warehouse)
            <tr>
                <td> {{ $warehouse -> id }}</td>
                <td> {{ $warehouse -> name }}</td>
                <td> {{ $warehouse -> matrix_house_id }}</td>
                <td> {{ $warehouse -> branch_id }}</td>
                <td> {{ $warehouse -> address }}</td>
                <td> {{ $warehouse -> capacity }}</td>
                <td><a href="{{ route('warehouse.stock', $warehouse -> id) }}" class="waves-effect waves-grey btn white m-b-xs">Ver stock</a></td>
                <td><a href="{{ route('warehouse.edit', $warehouse -> id) }}" class="waves-effect waves-light btn blue m-b-xs"> <i class="material-icons dp48">edit</i></a>
                    <a href="{{ route('warehouse.destroy', $warehouse -> id) }}" onclick="return confirm('¿Estas seguro de eliminarlo?')" class="waves-effect waves-light btn orange m-b-xs"><i class="material-icons dp48">clear</i> </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection