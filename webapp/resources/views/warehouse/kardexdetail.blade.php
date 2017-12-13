@extends('layouts.head')
@section('content')
    <div class="row">
        <h4>Detalle del Kardex</h4>
        <br>
        <table class="striped">
            <thead>
            <th>Fecha</th>
            <th>Motivo</th>
            <th>Operacion</th>
            <th>Cantidad</th>
            <th>Costo</th>
            <th>Amount</th>
            <th>Stock</th>
            <th>Balance</th>
            </thead>
            <tbody>
            @foreach($results as $results)
                <tr>
                    <td> {{ $results -> date_kardex_detail }}</td>
                    <td> {{ $results -> reason }}</td>
                    <td> {{ $results -> operation }}</td>
                    <td> {{ $results -> quantity }}</td>
                    <td> {{ $results -> costo }}</td>
                    <td> {{ $results -> amount }}</td>
                    <td> {{ $results -> stock_total }}</td>
                    <td> {{ $results -> balance }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection()