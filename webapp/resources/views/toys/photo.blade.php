@extends('layouts.head')

@section('css')

    <link rel="stylesheet" href="{{asset('assets/css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/w3-theme-blue-grey.css')}}">

@endsection


@section('content')


    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-col m5">
                <!-- Profile -->
                <div class="w3-card-4 w3-dark-grey">
                    <br>
                    <div class="w3-container w3-center">
                        <img src="/images/avatars/{{ $toy->image }}" style="width:250px;height:250px;"><br><br>
                        <form  class="col s12" method="post" enctype="multipart/form-data" id="createToy" action="/photoproduct" >
                            {{ csrf_field() }}
                            <div class="card-content">
                                <label>Actualiza la imagen del juguete</label><br>
                                <input type="file" name="photo" >
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
                <!-- End Left Column -->
            </div>


            <!-- Middle Column -->
            <div class="w3-col m7">
                <div class="w3-card-4 w3-dark-grey">
                    <div class="w3-container">
                        <div class="card-content">
                            <br>
                            <span class="card-title"><font size="6" color="black" face="Comic Sans M"><center>Información de juguete</center></font></span><br>
                            <center>
                                <img src="/images/avatars/{{ $toy->image }}" style="width:80px;height:80px;"><br><br>
                            </center>

                            &emsp;&emsp;&emsp;<span><font size="5" color="black" face="Comic Sans M">Código:  </font></span>
                            <span><font size="5" color="#ffa726">{{ $toy->idtoy }}</font></span> <br>
                            &emsp;&emsp;&emsp;<span><font size="5" color="black" face="Comic Sans M">Nombre: </font></span>
                            <span><font size="5" color="#ffa726">{{ $toy->name }}</font></span> <Br>
                            &emsp;&emsp;&emsp;<span><font size="5" color="black" face="Comic Sans M">Descripción: </font></span>
                            <span><font size="5" color="#ffa726">{{ $toy->description }}</font></span>
                            <input type="hidden" name="id" id='id' value="{{ $toy->id }}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <p></p>
                            <br><Br>
                        </div>
                    </div>
                </div>
                <!-- End Middle Column -->
            </div>
            <!-- End Grid -->

        <!-- End Page Container -->
    </div>



@endsection