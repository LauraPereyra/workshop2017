@extends('layouts.head')

@section('css')

    <link rel="stylesheet" href="{{asset('assets/css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/w3-theme-blue-grey.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection


@section('content')



    <div class="row">

        <div class="col s12"><div class="card blue-grey darken-4"><div class="card-content center"><font size="5" color="white"><center>JUGUETE </center></font> </div></div></div>
        <div class="col s5">

            <div class="card white">
                <div class="card orange lighten-1"><font size="4" color="black"><center>Imagen principal</center></font></div>
                <div class="card-content center">
                    <div class="w3-container w3-center">
                        <img src="/images/avatars/{{ $toy->image }}" style="width:250px;height:250px;"><br><br>
                        <form  class="col s12" method="post" enctype="multipart/form-data" id="createToy" action="/photoproduct" >
                            {{ csrf_field() }}
                            <div class="card-content">
                                <label>Actualiza la imagen del juguete</label><br>
                                <input type="file" name="photo" multiple >
                                <input type="hidden" name="id" id='id' value="{{ $toy->id }}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <p></p>
                                <br>
                                <input type="submit" class="waves-effect waves-light btn orange m-b-xs" value="Aceptar">
                                <Br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card white">

            </div>
        </div>
        <div class="col s7">
            <div class="card white">
                <div class="card orange lighten-1"><font size="4" color="black"><center>Datos del juguete</center></font></div>
                <div class="card-content center">
                    <center>
                        <img src="/images/avatars/{{ $toy->image }}" style="width:80px;height:80px;"><br><br>
                    </center>
                    <font size="4" color="black"><p align="center"><i class="fa fa-tag fa-fw w3-margin-right w3-text-theme"></i>Código: &nbsp&nbsp;</font>{{$toy->idtoy}}</p><br>
                    <font size="4" color="black"><p align="center"><i class="fa fa-gamepad fa-fw w3-margin-right w3-text-theme"></i>Nombre: &nbsp&nbsp;</font>{{$toy->name}}</p><br>
                    <font size="4" color="black"><p align="center"><i class="fa fa-ticket fa-fw w3-margin-right w3-text-theme"></i>Descripción: &nbsp&nbsp;</font>{{$toy->description}}</p><br>
                    <input type="hidden" name="id" id='id' value="{{ $toy->id }}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                </div>

            <div class="card white">
                <div class="card-content center">
                    <br>
                    <td><a href="{{url('upload',$toy->id)}}" class="waves-effect waves-light btn  blue-grey darken-4 m-b-xs">Agregar mas imagenes</a></td>
                    <Br>
                </div>
            </div>

            </div>
        </div>

    </div>







@endsection