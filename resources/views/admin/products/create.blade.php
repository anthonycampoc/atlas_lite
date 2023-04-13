@extends('layouts.admin')
@section('title','Gestión de Producto')
@section('styles')
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
           Ingreso de Producto
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('products.index')}}">Lista de Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Producto</li>
            </ol>
        </nav>
    </div>

    
      <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <form class="cmxform" id="signupForm" method="POST"  action="{{action('ProductController@store')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <fieldset>
                        <?php
                           $rand = 0;
                            $code = 0;
                          
                            $rand = mt_rand(0,10);
                            $code = $rand.time();

                            //rand_chars("ABCEDFG", 10) == GABGFFGCDA
                        

                        ?>
                    <div class="form-group">
                        <label for="code">Codigo</label>
                        <input id="code" class="form-control form-control form-control-lg" name="code" type="text" value="<?php echo $code;?>">
                        @error('code')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="name">Nombre</label>
                        <input id="name" class="form-control form-control form-control-lg" name="name" type="text" required value="{{old('name')}}">
                        @error('name')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="stock">Cantidad de productos</label>
                        <input id="stock" class="form-control  form-control-lg" name="stock" type="text" value="{{old('stock')}}">
                        @error('stock')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="sell_price">Precio de venta</label>
                        <input id="sell_price" class="form-control form-control-lg" name="sell_price" type="text" value="{{old('sell_price')}}">
                        @error('sell_price')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                     
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Categoria</label>
                            <select class="form-control form-control-lg" name="categoria_id" id="exampleFormControlSelect1">
                            
                            @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                            @endforeach
                          
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Proveedor</label>
                            <select class="form-control form-control-lg" name="provider_id" id="exampleFormControlSelect1">
                            @foreach($providers as $provider)
                            <option value="{{$provider->id}}">{{$provider->name}}</option>
                            @endforeach
                            </select>
                        </div>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Seleccione una imagen</h4>
                            <input type="file" class="dropify"  multiple name="picture[]" >
                            @error('picture')
                            <p style="color: red;">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                    </div>
 
                   

                      <input class="btn btn-outline-success btn-fw" type="submit" value="Guardar">

                    
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
    </div>

</div>
@endsection
@section('scripts')
<script src="{{asset('melody/js/data-table.js')}}"></script>
<script src="{{asset('melody/js/file-upload.js')}}"></script>
<script src="{{asset('melody/js/dropify.js')}}"></script>


@endsection