@extends('layouts.head')
@section('content')
    <h4>Stock del Almacenes</h4>
    <br>

    <table class="striped">
        <thead>
        <th>Id</th>
        <th>Almacen</th>
        <th>Codigo juguete</th>
        <th>Stock</th>
        </thead>
        <tbody>
        @foreach($stock as $stock)
            <tr>
                <td> {{ $stock -> id }}</td>
                <td> {{ $stock -> warehouse_id }}</td>
                <td> {{ $stock -> toy_id }}</td>
                <td> {{ $stock -> stock }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection