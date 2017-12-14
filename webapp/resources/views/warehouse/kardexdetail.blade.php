@extends('layouts.head')
@section('content')
    <div class="row">
        <h4 align="center">Detalle del Kardex</h4>
        <br>
        <table class="bordered">
            <thead>
                <th> </th>
                <th> </th>
                <th> </th>
                <th colspan="3" > <center><b> ENTRADAS </b></center></th>
                <th colspan="3" > <center><b> SALIDAS </b></center></th>
                <th colspan="3" > <center><b> EXISTENCIAS </b></center> </th>
            </thead>
            <thead>
                <th>Fecha</th>
                <th>Operacion</th>
                <th>Motivo</th>
                <th>Uds</th>
                <th>Precio</th>
                <th>Importe</th>
                <th>Uds</th>
                <th>Precio</th>
                <th>Importe</th>
                <th>Uds</th>
                <th>Precio</th>
                <th>Importe</th>
            </thead>
            <tbody>
            @foreach($results as $results)
                @if($results -> reason == 'compra')
                    <tr>
                        <td> {{ $results -> date_kardex_detail }}</td>
                        <td> {{ $results -> reason }}</td>
                        <td> {{ $results -> operation }}</td>
                        <td> {{ $results -> stock_total }}</td>
                        <td> {{ $results -> costo }}</td>
                        <td> {{ $results -> balance }}</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                @elseif($results -> operation == 'salida')
                    <tr>
                        <td> {{ $results -> date_kardex_detail }}</td>
                        <td> {{ $results -> reason }}</td>
                        <td> {{ $results -> operation }}</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> {{ $results -> stock_total }}</td>
                        <td> {{ $results -> costo }}</td>
                        <td> {{ $results -> balance }}</td>

                @elseif($results -> reason == 'total')

                        <td> {{ $results -> stock_total }}</td>
                        <td> {{ $results -> costo }}</td>
                        <td> {{ $results -> balance }}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>

    </div>
@endsection()