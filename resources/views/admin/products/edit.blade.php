@extends('layouts.admin')
@section('title','Gestión de Producto')
@section('styles')
<link rel="stylesheet" href="{{asset('melody/vendors/lightgallery/css/lightgallery.css')}}">
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
@section('imgnav')
<div class="profile-image">
    <img src="{{asset('images/'.$imgusers)}}" alt="image" />
</div>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
           Actualizacion de Producto
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
                  <h4 class="card-title">Complete el formulario</h4>
                  <form class="cmxform" id="signupForm" method="POST"  action="{{action('ProductController@update',$product->id)}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  @method('PUT')
                    <fieldset>
                    
                    
                      <div class="form-group">
                        <label for="name">Nombre</label>
                        <input id="name" class="form-control form-control-lg" name="name" type="text" value="{{old('name', $product->name )}}">
                        @error('name')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                     
                      <div class="form-group">
                        <label for="sell_price">Precio de venta</label>
                        <input id="sell_price" class="form-control form-control-lg" name="sell_price" type="text" value="{{old('sell_price', $product->sell_price)}}">
                        @error('sell_price')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                     
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Categoria</label>
                            <select class="form-control form-control-lg" name="categoria_id" id="exampleFormControlSelect1">
                            @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}" 
                                @if ($categorie->id == $product->category->id)
                                selected
                                @endif
                              
                            >{{$categorie->name}}</option>
                            @endforeach
                          
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Proveedor</label>
                            <select class="form-control form-control-lg" name="provider_id" id="exampleFormControlSelect1">
                            @foreach($providers as $provider)
                            <option value="{{$provider->id}}"
                                @if ($provider->id == $product->provider->id)
                                    selected
                                @endif
                            
                            >{{$provider->name}}</option>
                            @endforeach
                            </select>
                        </div>
                         
                        <input class="btn btn-outline-success btn-fw float-right" type="submit" value="Actualizar">

                        <h4 class="card-title">Cargar imagenes</h4>
                        <div class="file-upload-wrapper">
                          <div id="fileuploader">Actualizar</div>
                        </div>

                        
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Galeria de imagenes</h4>
                              <div id="lightgallery" class="row lightGallery">
                                @foreach ($product->images as $image)
                                <a href="{{$image->url}}" class="image-tile"><img src="{{$image->url}}" alt="image small"></a>
                                @endforeach
                              
                                  </div>
                                    @error('images')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>


                    

                    
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

<script src="{{asset('melody/vendors/lightgallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('melody/js/light-gallery.js')}}"></script>


<script>
  (function($) {
  'use strict';
  if ($("#fileuploader").length) {
    $("#fileuploader").uploadFile({
      url: "/upload/product/{{$product->id}}/picture",
      fileName: "picture"
    });
  }
})(jQuery);


</script>


@endsection