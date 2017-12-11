@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/plugins/products-comparison-table/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('content')
    <form  class="col s12" method="post" id="data_toy_form" >
        {{ csrf_field() }}
        <div class="col s12 m12 l12" id="toy-div">
            <br><span class="card-title"><font size="5"><center>VENTAS</center></font> </span>
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><font size="4"><center>Datos del cliente</center></font> </span><br>
                    <div class="row">
                        <input type="hidden" class="validate" name="id_customer" id="id_customer">
                        <input type="hidden" value="" id="helper" name="helper">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">credit_card</i>
                            <input placeholder="" type="text" class="validate" name="nit" id="nit">
                            <label for="nit">Nit</label>
                        </div>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">person_pin</i>
                            <input placeholder="" type="text" class="validate" name="name" id="name">
                            <label for="icon_telephone">Nombre</label>
                        </div>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">person_pin</i>
                            <input placeholder="" type="text" class="validate" name="lastname" id="lastname">
                            <label for="icon_telephone">Apellido</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input placeholder="" type="text" class="validate" name="email" id="email">
                            <label for="icon_prefix2">Correo</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input placeholder="" type="text" class="validate" name="phone" id="phone">
                            <label for="icon_prefix2">Telefono</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">location_on</i>
                            <input placeholder="" type="text" class="validate" name="address" id="address">
                            <label for="icon_prefix2">Direccion</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">today</i>
                            <input placeholder="" type="text" class="validate" name="birthday" id="birthday">
                            <label for="icon_prefix2">Fecha de nacimiento</label>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <div class="col s12 m12 l12" id="toy-div">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><font size="4"><center>Productos</center></font> </span><br>
                    <div class="row">
                        <div class="input-field col s7">
                            <i class="material-icons prefix">local_grocery_store</i>
                            <input type="text" class="validate" name="product" id="product">
                            <label for="nit">Codigo o nombre de producto</label>
                        </div>
                        <div class="input-field col s3">
                            <i class="material-icons prefix">filter_9_plus</i>
                            <input type="text" class="validate" name="cantidad" id="cantidad">
                            <label for="nit">Cantidad</label>
                        </div>
                        <div class="input-field col s2">
                            <a class="btn-floating btn-large waves-effect waves-light orange" onclick="addToySell()"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                    <input type="hidden" class="validate" name="id_toy" id="id_toy">
                    <input type="hidden" class="validate" name="name_toy" id="name_toy">
                    <input type="hidden" class="validate" name="price_sell" id="price_sell">

                    <div class="row">
                        <table class="bordered" >
                            <thead>
                            <tr>
                                <th data-field="id">Nombre</th>
                                <th data-field="name">Cantidad</th>
                                <th data-field="price">Precio unitario</th>
                                <th data-field="price">Precio total</th>
                                <th data-field="price">Opciones</th>
                            </tr>
                            </thead>
                            <tbody id="TableToys">

                                <!-- <td><a class="btn-floating waves-effect waves-light "><i class="material-icons">delete_forever</i></a></td> -->

                            </tbody>
                        </table>
                    </div>
                    <br>
                    <center>
                        <button type="submit" class="waves-effect waves-light btn green m-b-xs">Aceptar</button>
                        <a href="" class="waves-effect waves-light btn red m-b-xs">Cancelar</a>
                    </center>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('js')


    <script src="{{asset('assets/plugins/google-code-prettify/prettify.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.js')}}"></script>
    <script type="text/javascript">

        $('#nit').autocomplete({
            source: '{{ route('search.customer.nit') }}',
            minlength: 1,
            select: function (event, ui) {
                $('#id_customer').val(ui.item.id);
                $('#birthday').val(ui.item.birthday);
                $('#name').val(ui.item.name);
                $('#lastname').val(ui.item.lastname);
                $('#phone').val(ui.item.phone);
                $('#address').val(ui.item.address);
                $('#email').val(ui.item.email);
                $('#helper').val(1);
            }
        });

        $('#product').autocomplete({
            source: '{{ route('search.toys') }}',
            minlength: 1,
            select: function (event, ui) {
                $('#id_toy').val(ui.item.id);
                $('#name_toy').val(ui.item.name);
                $('#price_sell').val(ui.item.precio_compra);
            }
        });

        $(function () {
            $('#toy-div form').validate({

                submitHandler: function(form) {
                    //form.submit();

                    $.ajax({
                        url: '{{ route('sale.store') }}',
                        type: 'POST',
                        data: $('#data_reservation_form').serialize(),
                        success: function (result) {
                            if(result.state == 1){
                                // $.toaster({priority: 'success', title: '¡ÉXITO!', message: 'Registro exitoso'});
                                //location.href =result.show;
                                alert('PRUEBA');
                            }
                            else{
                                //if(result.errorCode) $.toaster({priority: 'danger', title: '¡ERROR!', message: [result.message+' '+result.errorCode]});
                            }
                        },
                        error: function (data) {
                            // $.toaster({priority: 'danger', title: '¡ERROR!', message: 'No se registraron los datos de la reserva.'+data});
                            alert(data);
                        },
                    });
                }
            });

            /*$('#data_toy_form').on('submit', function (e) {
              //  if(!e.isDefaultPrevented()){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                    $.ajax({

                        url: '{{ route('sale.store') }}',
                        type: 'POST',
                        data: $('#data_reservation_form').serialize(),
                        success: function (result) {
                            if(result.state == 1){
                               // $.toaster({priority: 'success', title: '¡ÉXITO!', message: 'Registro exitoso'});
                                //location.href =result.show;
                                alert('PRUEBA');
                            }
                            else{
                                //if(result.errorCode) $.toaster({priority: 'danger', title: '¡ERROR!', message: [result.message+' '+result.errorCode]});
                            }
                        },
                        error: function (data) {
                           // $.toaster({priority: 'danger', title: '¡ERROR!', message: 'No se registraron los datos de la reserva.'+data});
                            alert(data);
                        },
                    });
                    return false;
              //  }
            });*/
        });


        function addToySell() {
            var id_toy = $('#id_toy').val();
            var name_toy = $('#name_toy').val();
            var price_sell = $('#price_sell').val();
            var quantity = $('#cantidad').val();
            var price_total = price_sell * quantity;

            var newtr = '<tr  data-id="' + id_toy + '">';
            newtr = newtr + '<td><input type="hidden" id="id_toy" name="id_toy[]" value="'+id_toy+'"><input  class="form-control"  id="name_toy" name="name_toy[]" value="' + name_toy + '" /></td>';
            newtr = newtr + '<td class="name_table"><input class="form-control" id="quantity" name="quantity[]" value="' + quantity + '" /></td>';
            newtr = newtr + '<td class="name_table"><input class="form-control" id="price_sell" name="price_sell[]" value="' + price_sell + '" /></td>';
            newtr = newtr + '<td class="name_table"><input class="form-control" id="price_total" name="price_total[]" value="' + price_total + '" /></td>';
            newtr = newtr + '<td align="center"><button type="button" class="btn-floating waves-effect waves-light red remove-item"><i class="material-icons">delete_forever</i></button></td></tr>';
            $('#TableToys').append(newtr); //Agrego el Producto al tbody de la Tabla con el id=ProSelected

            $('.name-table').each(function() {
                $(this).find('option[value="' + $(this).val() + '"]').remove(); // borro la opcion  que selecciono.
            });
            //  RefrescaProducto();//Refresco Productos
            $('.remove-item').off().click(function (e) {
                $(this).parent('td').parent('tr').remove(); //En accion elimino el Producto de la Tabla
                $('#name_table').append('<option value="' + $(this).parents("tr").find(".name_table input").val() +'">' + $(this).parents("tr").find(".name_table input").val() + '</option>');
                if ($('#TableToys tr.item').length == 0)
                    $('#TableToys .no-item').slideDown(300);
            });
        }


    </script>
@endsection