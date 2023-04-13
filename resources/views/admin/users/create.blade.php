@extends('layouts.admin')
@section('title','Registro de usuario')
@section('styles')
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
            Registro de usuario
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de usuario</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de usuario</h4>
                    </div>
                    {!! Form::open(['route'=>'users.store', 'method'=>'POST', 'files' => true]) !!}

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
                      </div>
                      
                      <div class="form-group">
                          <label for="password">Contraseña</label>
                          <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
                      </div>

                      <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Seleccione una imagen de perfil</h4>
                            <input type="file" class="dropify" name="picture" >
                            @error('picture')
                            <p style="color: red;">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                    </div>

                    @include('admin.users._form')

                     <button type="submit" class="btn btn-outline-success btn-fw mr-2">Guardar</button>
                     <a href="{{route('users.index')}}" class="btn btn-light">
                        Cancelar
                     </a>
                     {!! Form::close() !!}
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
<script src="{{asset('melody/js/file-upload.js')}}"></script>
<script src="{{asset('melody/js/dropify.js')}}"></script>
@endsection