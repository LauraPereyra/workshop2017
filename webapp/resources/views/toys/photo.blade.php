@extends('layouts.head')

@section('content')
    <div class="col s12 m12 l12" id="toy-div">
        <br><br>
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

@endsection