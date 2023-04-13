@extends('layouts.admin')
@section('title','Gestión de Proveedor')
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
           Ingreso de Proveedor
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('providers.index')}}">Lista de Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Proveedor</li>
            </ol>
        </nav>
    </div>

      <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <form class="cmxform" id="signupForm" method="POST"  action="{{action('ProviderController@store')}}">
                  {{csrf_field()}}
                    <fieldset>
                      <div class="form-group">
                        <label for="name">Nombre</label>
                        <input id="name" class="form-control form-control-lg" name="name" type="text" value="{{old('name')}}">
                        @error('name')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Correo</label>
                        <input id="email" class="form-control form-control-lg" name="email" type="email" value="{{old('email')}}">
                        @error('email')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="ruc">Ruc</label>
                        <input id="ruc" class="form-control form-control-lg" name="ruc" type="text" value="{{old('ruc')}}">
                        @error('ruc')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="address">Direccion</label>
                        <input id="address" class="form-control form-control-lg" name="address" type="text" value="{{old('address')}}">
                        @error('address')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input id="phone" class="form-control form-control-lg" name="phone" type="text" value="{{old('telefono')}}">
                        @error('phone')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                        
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
@endsection