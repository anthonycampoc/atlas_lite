@extends('layouts.admin')
@section('title','Gestión de Cliente')
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
@section('imgnav')
<div class="profile-image">
    <img src="{{asset('images/'.$imgusers)}}" alt="image" />
</div>
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">

        <h1 class="page-title">Ingreso de Cliente</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('clients.index')}}">Lista de Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cliente</li>
            </ol>
        </nav>
    </div>

      <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Complete el formulario</h4>
                  <form class="cmxform" id="signupForm" method="POST"  action="{{action('ClientController@store')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <fieldset>
                      <div class="form-group">
                        <label for="identification">Cedula</label>
                        <input id="identification" class="form-control form-control-lg" name="identification" type="text" value="{{old('identification')}}">
                        @error('identification')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="name">Ingresar Nombres</label>
                        <input id="name" class="form-control form-control-lg" name="name"  type="text" value="{{old('name')}}">
                        @error('name')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="last_name">Apellidos</label>
                        <input id="last_name" class="form-control form-control-lg" name="last_name" type="text" value="{{old('last_name')}}">
                        @error('last_name')
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
                        <input id="phone" class="form-control form-control-lg" name="phone" type="text" value="{{old('phone')}}">
                        @error('phone')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control form-control-lg" name="email" type="email" value="{{old('email')}}">
                        @error('email')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>


                      <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Seleccione una imagen</h4>
                            <input type="file" class="dropify" name="picture" >
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
<script src="{{asset('melody/js/alerts.js')}}"></script>
<script src="{{asset('melody/js/data-table.js')}}"></script>
<script src="{{asset('melody/js/avgrund.js')}}"></script>
<script src="{{asset('melody/js/file-upload.js')}}"></script>
<script src="{{asset('melody/js/dropify.js')}}"></script>
@endsection