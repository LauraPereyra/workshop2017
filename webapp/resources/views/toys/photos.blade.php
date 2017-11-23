@extends('layouts.head')
@section('css')

    <link rel="stylesheet" href="{{asset('assets/css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/w3-theme-blue-grey.css')}}">

@endsection


@section('content')
    <div class="row">
        <br>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">

                    <span class="card-title"><font size="5" color="black"><center>Imagenes de Juguete</center></font> </span><br>

                    <form action="/upload" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <span><font size="5" color="black" face="Comic Sans M">Nombre: </font></span>
                        <span><font size="5" color="#ffa726">{{ $toy->name }}</font></span> <Br>
                        <br>
                        Imagenes Juguetes (puede poner mas de una):
                        <br>

                        <input type="file" name="photos[]" multiple />
                        <input type="hidden" name="id" id='id' value="{{ $toy->id }}">
                        <br /><br />
                        <input type="submit" value="Upload" />
                    </form>
                    <br><Br><br>


                    <img src="/photos/avatars/{{ $toy->images }}" style="width:100px;height:100px;"><br><br>


            </div>
        </div>
        </div>
    </div>
@endsection