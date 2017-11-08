@extends('layouts.head')

@section('content')






    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
    </style>

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <!-- The Grid -->
        <div class="w3-row">
            <!-- Left Column -->
            <div class="w3-col m4">
                <!-- Profile -->
                <div class="w3-card w3-round w3-white">
                    <form  class="col s12" method="post" enctype="multipart/form-data" id="createToy" action="{{ url('/toy/store') }}" >
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-content">

                                <img src="/images/avatars/{{ $toy->image }}" style="width:100px;height:100px;">
                                <h2><span style="color: steelblue;">{{ $toy->name }}</span></h2>

                                <form enctype="multipart/form-data" action="/photoproduct" method="POST">
                                    <label>Actualiza la imagen de la portada</label><br>
                                    <input type="file" name="photo" >
                                    <input type="hidden" name="id" id='id' value="{{ $toy->id }}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <p></p>
                                    <br><Br>
                                    <input type="submit" class="btn btn-md btn--warning btn--wider" value="Aceptar">
                                </form>

                            </div>
                        </div>

                    </form>
                </div>
                <br>
                <!-- End Left Column -->
            </div>

            <!-- Middle Column -->
            <div class="w3-col m8">

                <div class="w3-row-padding">
                    <div class="w3-col m12">
                        <div class="w3-card w3-round w3-white">
                            <div class="w3-container w3-padding">
                                <h6 class="w3-opacity">Social Media template by w3.css</h6>
                                <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
                                <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Middle Column -->
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>




@endsection