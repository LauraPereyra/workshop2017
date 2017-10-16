@extends('layouts.head')


@section('content')
    <br>
    <a href="{{ route('supplierorder.create') }}" class="waves-effect waves-light btn">Agregar</a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="row">
            <h4>Creacion de Pedido</h4>
            <form action="/hola.php">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m6 l3">
                                <select name="supplier">
                                    <option value="" disabled selected>Supplier</option>
                                    <option value="1">Proveedor 1</option>
                                    <option value="2">Proveedor 2</option>
                                    <option value="3">Proveedor 3</option>
                                </select>
                                <label>Proveedor</label>
                            </div>
                            <div class="input-field col s12 m6 l3">
                                <input type="text" name="order_limit_date" class="datepicker">
                                <label for="order_limit_date">Fecha limite de llegada</label>
                            </div>
                            <div class="input-field col s12 m6 l3">
                                <select name="matrix_house">
                                    <option value="" disabled selected>Matrix House</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <label>Casa matriz</label>
                            </div>
                            <div class="input-field col s12">
                                <select name="employee">
                                    <option value="" disabled selected>Encargado del pedido</option>
                                    <option value="1">Carlos Martinez</option>
                                    <option value="2">Joel Rojas</option>
                                    <option value="3">Saul Quiroz</option>
                                </select>
                                <label>Encargado</label>
                            </div>
                            <div class="input-field col s12">
                                <select name="order_status">
                                    <option value="" disabled selected>Estado del pedido</option>
                                    <option value="1">Pendiente</option>
                                    <option value="2">Atrasado</option>
                                    <option value="3">Entregado</option>
                                </select>
                                <label>Estado</label>
                            </div>
                        </div>
                        <input class="waves-effect waves-light btn" type="submit" value="Crear">
                    </form>
                </div>

            </form>
        </div>
    </div>
    <br>


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

