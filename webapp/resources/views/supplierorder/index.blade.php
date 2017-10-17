@extends('layouts.head')


@section('content')
    <br>
    <a href="{{ route('supplierorder.create') }}" class="waves-effect waves-light btn">Agregar</a>

    <table class="striped">
        <thead>
        <th>Id</th>
        <th>Fecha de la orden</th>
        <th>Limite de llegada</th>
        <th>Estado</th>
        <th>Detalle</th>
        <th>Proveedor</th>
        <th>Casa Matriz</th>
        <th>Encargado</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($supplierorders as $supplierorders)
            <tr>
                <td> {{ $supplierorders -> id }}</td>
                <td> {{ $supplierorders -> order_date }}</td>
                <td> {{ $supplierorders -> order_arrive }}</td>
                <td> {{ $supplierorders -> status }}</td>
                <td><a href="#" class="waves-effect waves-grey btn white m-b-xs">Detalle</a></td>
                <td> {{ $supplierorders -> supplier_id }}</td>
                <td> {{ $supplierorders -> matrix_house_id }}</td>
                <td> {{ $supplierorders -> users_iduser }}</td>
                <td><a href="{{ route('supplierorder.edit', $supplierorders -> id) }}" class="waves-effect waves-light btn blue m-b-xs"> <i class="material-icons dp48">edit</i></a>
                    <a href="{{ route('supplierorder.destroy', $supplierorders -> id) }}" onclick="return confirm('¿Estas seguro de eliminarlo?')" class="waves-effect waves-light btn orange m-b-xs"><i class="material-icons dp48">clear</i> </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop

