@extends('layouts.head')
@section('css')

    <link rel="stylesheet" href="{{asset('assets/css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/w3-theme-blue-grey.css')}}">

@endsection


@section('content')
    <main class="mn-inner inner-active-sidebar hidden-fixed-sidebar">
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
    </main>
@endsection