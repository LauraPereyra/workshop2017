@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/plugins/products-comparison-table/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>




@endsection

@section('title','Juguetes')

@section('content')

    @if(count($errors)> 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    <label  class="error" for="idtoy">{{$errors}}</label>
                </li>
            @endforeach
        </ul>
    @endif

    <div class="col s12 m12 l12" id="toy-div">
        <br><br>
        <form  class="col s12" method="post" enctype="multipart/form-data" id="createToy" >
            {{ csrf_field() }}
        <div class="card">
            <div class="card-content">
                <span class="card-title"><font size="4"><center>REGISTRO JUGUETES</center></font> </span><br>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">vpn_key</i>
                        <input type="text" class="validate" id="idtoy" name="idtoy" minlength="5" required>
                        <label for="icon_prefix">Código</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">loyalty</i>
                        <input type="text" class="validate" id="name" name="name" minlength="5" required=""  oninvalid="setCustomValidity('Por favor llene este campo')">
                        <label for="icon_telephone">Nombre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">payment</i>
                        <input type="number" class="validate" id="price" name="price" required="">
                        <label for="icon_telephone">Precio</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">description</i>
                        <input type="text" class="validate" id="description" name="description" minlength="7" required="">
                        <label for="icon_prefix">Descripción</label>
                    </div>
                </div>


                <br>

                <div class="row">
                    <center>
                    <button class="waves-effect waves-light btn green m-b-xs btn-message"  id="savetoy">Aceptar</button>
                    &nbsp&nbsp;
                    <a href="{{url('toy/list')}}" class="waves-effect waves-light btn red m-b-xs">Cancelar</a>
                    </center>
                 </div>
            </div>
        </div>

        </form>


    </div>

@endsection

@section('js')


    <script src="{{asset('assets/plugins/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.js')}}"></script>
    

    <script type="text/javascript">

        $(function () {

            $('#toy-div form').validate({
                rules: {
                    // simple rule, converted to {required:true}
                    idtoy:{
                        required:true
                        //minlenght:5
                    },
                    name: {
                        required: true
                        //minlength: 5
                    },
                    description:{
                        required:true
                        //minlength: 7
                    },
                    price:{
                        required:true
                        //minlenght: 4
                    }
                    // compound rule
                },
                messages: {
                    idtoy: {required:"Ingrese código del juguete"},
                    name: {required: "Ingrese nombre del juguete"},
                    description: {required:"Ingrese descripción del juguete"},
                    price:{required:"Ingrese precio del juguete"}
                },
                submitHandler: function(form) {
                    //form.submit();

                    $.ajax({
                        url:  '{{url('/toy/store')}}',
                        type: 'POST',
                        data: $('#createToy').serialize(),
                        success: function (obj) {
                            var result = obj.result;
                            var query = obj.query;
                            if(result == 1)
                            {
                                swal("Exelente!", "Juguete Registrado", "success");
                                document.getElementById('createToy').reset();
                                //obj.preventDefault();
                            }
                            else {
                                swal({   title: "Auto close alert!",
                                    text: "Me cerrare en 2 segundos.",
                                    timer: 2000,
                                    showConfirmButton: false
                                });
                            }
                        }
                    });

                }
            });

        });

    </script>
@endsection


