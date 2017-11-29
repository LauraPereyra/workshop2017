@extends('layouts.head')

@section('content')

    <h4>Listado de Usuarios</h4>
    <br>
    <a href="{{ route('user.create') }}" class="waves-effect waves-light btn">Agregar</a>

    <table class="striped">
        <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Sucursal</th>
        <th>acciones</th>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
                <td> {{ $users -> id }}</td>
                <td> {{ $users -> names." ".$users -> lastname1."".$users -> lastname2 }}</td>
                <td> {{ $users -> phone }}</td>
                <td> {{ $users -> cellphone }}</td>
                <td> {{ $users -> email }}</td>
                <td>
                    @if($users -> role == "superadmin")
                        <span class="label label-danger">{{ $users -> role }}</span>
                    @elseif($users -> role == "manager")
                        <span class="label label-primary">{{ $users -> role }}</span>
                    @elseif($users -> role == "employee")
                        <span class="label label-default">{{ $users -> role }}</span>
                    @endif
                </td>
                <td> {{ $users -> branch_id }} </td>
                <td><a href="{{ route('user.edit', $users -> id) }}" class="waves-effect waves-light btn blue m-b-xs"> <i class="material-icons dp48">edit</i></a>
                    <a href="{{ route('user.destroy', $users -> id) }}" onclick="return confirm('¿Estas seguro de eliminarlo?')" class="waves-effect waves-light btn orange m-b-xs"><i class="material-icons dp48">clear</i> </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection