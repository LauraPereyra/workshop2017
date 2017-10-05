@extends('layouts.head')

@section('menu_dashboard', 'open active')
@section('title', 'Listado de Ordenes')
@section('title-description', 'Administración de los pedidos al rpoveedor del sistema')

@section('content')

    <br>
    <a href="#"> <button type="button" class="btn btn-default">Agregar pedido</button> </a>

    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="mainTable">
                        <thead>
                        <tr>
                            <td>Acciones</td>
                            <td>Código</td>
                            <td>item</td>
                            <td>Cantidad</td>
                            <td>Recibido</td>
                            <td>Pendiente</td>
                            <td>Fecha_Pedido</td>
                            <td>Fecha_limite_entrega</td>
                            <td>proveedor</td>
                            <td>Fecha_autorizacion</td>
                            <td>Autorizado por</td>
                            <td>Autorizado por</td>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection	