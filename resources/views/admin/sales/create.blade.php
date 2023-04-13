@extends('layouts.admin')
@section('title','Registro de venta')
@section('styles')
<link href="{{asset('select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
    }
</style>
@endsection
@section('empresa')
<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="{{route('home')}}"><img src="{{asset('images/'.$business->logo)}}" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="{{route('home')}}"><img src="{{asset('images/'.$business->logo)}}" alt="logo"/></a>
</div>
@endsection
@section('create')
<li class="nav-item d-none d-lg-flex">
    <a class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal-2">
      <span class="btn btn-warning">+ Registrar cliente</span>
    </a>
</li>
@endsection
@section('options')
@endsection
@section('imgu')
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
    <img src="{{asset('images/'.$imgusers)}}" alt="profile" />
</a>
@endsection
@section('preference')
@endsection
@section('imgnav')
<div class="profile-image">
    <img src="{{asset('images/'.$imgusers)}}" alt="image" />
</div>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registro de venta
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('sales.index')}}">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de venta</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                 {!! Form::open(['route'=>'sales.store', 'method'=>'POST']) !!}
                    @csrf
                    <div class="card-body">
                        
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Registro de venta</h4>
                        </div>
                        
                        @include('admin.sales._form')
                        
                        
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" id="guardar" class="btn btn-primary float-right">Registrar</button>
                        <a href="{{route('sales.index')}}" class="btn btn-light">
                            Cancelar
                        </a>
                    </div>
                    {!! Form::close() !!}
              
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Registro rápido de cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


           <form class="cmxform" id="signupForm" method="POST"  action="{{action('ClientController@flashstore')}}" enctype="multipart/form-data">
               @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="identification">Cedula</label>
                        <input id="identification" class="form-control form-control-lg @error('identification') is-invalid @enderror" name="identification" type="text" value="{{old('identification')}}">
                        @error('identification')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="name">Nombres</label>
                        <input id="name" class="form-control  form-control-lg @error('name') is-invalid @enderror" name="name" type="text" value="{{old('name')}}">
                        @error('name')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="last_name">Apellidos</label>
                        <input id="last_name" class="form-control form-control-lg @error('last_name') is-invalid @enderror" name="last_name" type="text" value="{{old('last_name')}}">
                        @error('last_name')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="address">Direccion</label>
                        <input id="address" class="form-control form-control-lg @error('address') is-invalid @enderror" name="address" type="text" value="{{old('address')}}">
                        @error('address')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input id="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" type="text" value="{{old('phone')}}">
                        @error('phone')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                     

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" type="text" value="{{old('email')}}">
                        @error('email')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                      <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Seleccione una imagen</h4>
                            <input type="file" class="dropify" name="picture" >
                            @error('picture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                      </div>

                    <input type="hidden" name="sale" value="1">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-success btn-fw">Guardar</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </form>

       

        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{asset('melody/js/alerts.js')}}"></script>
<script src="{{asset('melody/js/avgrund.js')}}"></script>
<script src="{{asset('select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('melody/js/file-upload.js')}}"></script>
<script src="{{asset('melody/js/dropify.js')}}"></script>


@if($errors->any())
    <script>
        $(document).ready(function(){
            $('#exampleModal-2').modal('show');
        });
    </script>
@endif

<script>
    $(document).ready(function() {
      $('#client_id').select2();
      $('#product_id').select2();
  
    
    });
  
  </script>


<script>
    
$(document).ready(function () {
    $("#agregar").click(function () {
        agregar();
    });
});
var cont = 1;
total = 0;
subtotal = [];
$("#guardar").hide();
$("#product_id").change(mostrarValores);
function mostrarValores() {
    datosProducto = document.getElementById('product_id').value.split('_');
    $("#price").val(datosProducto[2]);
    $("#stock").val(datosProducto[1]);
    
}

// var product_id = $('#product_id');
	
//     product_id.change(function(){
//         $.ajax({
//             url: "{{route('get_products_by_id')}}",
//             method: 'GET',
//             data:{
//                 product_id: product_id.val(),
//             },
//             success: function(data){
//                 $("#price").val(data.sell_price);
//                 $("#stock").val(data.stock);
//                 $("#code").val(data.code);
//         }
//     });
// });

$(getProduct());

function getProduct(id){
    $.ajax({
            url: "{{route('get_products_by_id')}}",
            method: 'GET',
            data:{
                product_id: id,
            },
            dataType: 'json',
            success: function(data){
                $("#price").val(data.sell_price);
                $("#stock").val(data.stock);
                $("#code").val(data.code);
        }

    });

}

$(document).on('change', '#product_id', function(){
        var idproduct = $(this).val();
        if(idproduct!=""){
            getProduct(idproduct);
        }else{
            getProduct();
        }
    })

    $(obtener_registro());

    function obtener_registro(code){
        $.ajax({
            url: "{{route('get_products_by_barcode')}}",
            type: 'GET',
            data:{
                code: code
            },
            dataType: 'json',
            success:function(data){
                //console.log(data);
                $("#price").val(data.sell_price);
                $("#stock").val(data.stock);
                $("#product_id").val(data.id);
            }
        });
    }

    $(document).on('keyup', '#code', function(){
        var valorResultado = $(this).val();
        if(valorResultado!=""){
            obtener_registro(valorResultado);
        }else{
            obtener_registro();
        }
    })




function agregar() {
    datosProducto = document.getElementById('product_id').value.split('_');
    product_id = datosProducto[0];
    producto = $("#product_id option:selected").text();
    quantity = $("#quantity").val();
    discount = $("#discount").val();
    price = $("#price").val();
    stock = $("#stock").val();
    impuesto = 0;
    if (product_id != "" && quantity != "" && quantity > 0 && discount != "" && price != "") {
        if (parseInt(stock) >= parseInt(quantity)) {
            subtotal[cont] = (quantity * price) - (quantity * price * discount / 100);
            total = total + subtotal[cont];
            var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont + ');"><i class="fa fa-times fa-2x"></i></button></td> <td><input type="hidden" name="product_id[]" value="' + product_id + '">' + producto + '</td> <td> <input type="hidden" name="price[]" value="' + parseFloat(price).toFixed(2) + '"> <input class="form-control" type="number" value="' + parseFloat(price).toFixed(2) + '" disabled> </td> <td> <input type="hidden" name="discount[]" value="' + parseFloat(discount) + '"> <input class="form-control" type="number" value="' + parseFloat(discount) + '" disabled> </td> <td> <input type="hidden" name="quantity[]" value="' + quantity + '"> <input type="number" value="' + quantity + '" class="form-control" disabled> </td> <td align="right">s/' + parseFloat(subtotal[cont]).toFixed(2) + '</td></tr>';
            cont++;
            limpiar();
            totales();
            evaluar();
            $('#detalles').append(fila);
        } else {
            Swal.fire({
                type: 'error',
                text: 'La cantidad a vender supera el stock.',
            })
        }
    } else {
        Swal.fire({
            type: 'error',
            text: 'Rellene todos los campos del detalle de la venta.',
        })
    }
}
function limpiar() {
    $("#quantity").val("");
    $("#discount").val("0");
    $("#code").val("");
    $("#price").val("");
    $("#stock").val("");
}
function totales() {
    $("#total").html("PEN " + total.toFixed(2));
    total_impuesto = total * impuesto / 100;
    total_pagar = total + total_impuesto;
    $("#total_impuesto").html("PEN " + total_impuesto.toFixed(2));
    $("#total_pagar_html").html("PEN " + total_pagar.toFixed(2));
    $("#total_pagar").val(total_pagar.toFixed(2));
}
function evaluar() {
    if (total > 0) {
        $("#guardar").show();
    } else {
        $("#guardar").hide();
    }
}
function eliminar(index) {
    total = total - subtotal[index];
    total_impuesto = total * impuesto / 100;
    total_pagar_html = total + total_impuesto;
    $("#total").html("PEN" + total);
    $("#total_impuesto").html("PEN" + total_impuesto);
    $("#total_pagar_html").html("PEN" + total_pagar_html);
    $("#total_pagar").val(total_pagar_html.toFixed(2));
    $("#fila" + index).remove();
    evaluar();
}
</script>

@endsection