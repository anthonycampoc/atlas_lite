@extends('layouts.admin')
@section('title','información de producto')
@section('styles')
<link rel="stylesheet" href="{{asset('melody/vendors/lightgallery/css/lightgallery.css')}}">

@endsection
@section('empresa')
<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="{{route('home')}}"><img src="{{asset('images/'.$business->logo)}}" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="{{route('home')}}"><img src="{{asset('images/'.$business->logo)}}" alt="logo"/></a>
</div>
@endsection
@section('create')

@endsection
@section('options')

@endsection
@section('preference')

@endsection
@section('imgnav')
<div class="profile-image">
    <img src="{{asset('images/'.$imgusers)}}" alt="image" />
</div>
@endsection
@section('imgu')
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
    <img src="{{asset('images/'.$imgusers)}}" alt="profile" />
</a>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
           
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('products.index')}}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">

                            
                                <h3>{{$product->name}}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>

                            <div class="py-4">
                                <p class="clearfix">
                                    <span class="float-left">
                                       Estado
                                    </span>
                                    <span class="float-right text-muted">
                                        {{$product->status}}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Proveedor
                                    </span>
                                    <span class="float-right text-muted">
                                        <a href="{{route('providers.show',$product->provider->id)}}">
                                        {{$product->provider->name}}
                                        </a>
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Categoría
                                    </span>
                                    <span class="float-right text-muted"> 
                                        <a href="">
                                            {{$product->category->name}}
                                        </a>
                                    </span>
                                </p>
                            </div>

                           
                            @if ($product->status == 'ACTIVE')
                            <a href="{{route('change.status.products', $product)}}" class="btn btn-success btn-block">Activo</a>
                            @else
                            <a href="{{route('change.status.products', $product)}}" class="btn btn-danger btn-block">Desactivado</a>
                            @endif
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Información de producto</h4>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">

                                    <div class="form-group col-md-6">
                                        <strong><i class="far fa-circle mr-1"></i>Código</strong>
                                        <p class="text-muted">
                                            {{$product->code}}
                                        </p>
                                        <hr>
                                        <strong>
                                        <i class="fas fa-circle  mr-1"></i> Stock</strong>
                                        <p class="text-muted">
                                            {{$product->stock}}
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <strong>
                                            
                                            <i class="fas fa-dollar-sign mr-1"></i>
                                            Precio de venta</strong>
                                        <p class="text-muted">
                                            {{$product->sell_price}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-qrcode mr-1"></i>Código de barras</strong>
                                        <p class="text-muted">
                                            {!!DNS1D::getBarcodeHTML($product->code, 'EAN13'); !!}
                                        </p>
                                     
                                        <hr>
                                        <strong><i class="fas fa-map-marked-alt mr-1"></i> Categoría</strong>
                                        <p class="text-muted">
                                            {{$product->category->name ?? 'none'}}
                                        </p>
                                        <hr>  
                                         <strong><i class="fas fa-map-marked-alt mr-1"></i> Proveedor</strong>
                                        <p class="text-muted">
                                            {{$product->provider->name}}
                                        </p>
                                        <hr>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

                <div class="card-footer text-muted">
                    <a href="{{route('products.index')}}" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
<script src="{{asset('melody/js/profile-demo.js')}}"></script>
<script src="{{asset('melody/js/data-table.js')}}"></script>
<script src="{{asset('melody/js/dropify.js')}}"></script>

<script src="{{asset('melody/vendors/lightgallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('melody/js/light-gallery.js')}}"></script>
@endsection