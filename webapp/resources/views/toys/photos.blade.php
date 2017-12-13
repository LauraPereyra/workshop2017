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

                    <div class="row">
                    <div class="col s12">


                        <div class="col s12 m12 l12" id="toy-div">
                            <br><br>

                            <form action="/upload" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                Product photos (can attach more than one):
                                <br />
                                <input type="file" name="photos[]" multiple />
                                <input type="hidden" name="id" id='id' value="{{ $toy->id }}">
                                <br /><br />
                                <input type="submit" value="Upload" />
                            </form>

                        </div>

                    </div>
                </div>
                <br><Br><br>

                    @foreach($toys as $toy)
                    <img src="<?php echo asset("storage/$toy->images")?>" style="width:100px;height:100px;"><br><br>

                    @endforeach


            </div>
        </div>
        </div>
    </div>
@endsection