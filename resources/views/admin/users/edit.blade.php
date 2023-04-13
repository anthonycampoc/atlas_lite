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
        Asignación  de Roles
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Lista de usarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuario</li>
            </ol>
        </nav>
    </div>

    {!!Form::model($user,['route'=>['users.update',$user], 'method'=>'put', 'files' => true])!!}
    @csrf
    @method('PUT')
      <div class="row">
            <div class="col-lg-12">
              <div class="card">
                  <div class="card-body mb-4">

           
                  
                      <div class="form-group">
                        <label for="name">Nombres</label>
                        <input id="name" class="form-control  form-control-lg" name="name" type="text" value="{{old('name', $user->name)}}">
                        @error('name')
                            <p style="color: red;">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="" value="{{old('name', $user->email)}}" aria-describedby="helpId">
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

                     
                          @foreach($roles as $role)
                          <div>
                            <label for="">
                                  {!! Form::checkbox('roles[]', $role->id, null,['class' =>'mr-1']) !!}
                                  {{$role->name}}

                            </label>
                          </div>
                                  
                          @endforeach
                          {!!Form::submit('Actualizar', ['Class' =>'btn btn-outline-success btn-fw mt-3'])!!}

            {!!Form::close()!!}
                      


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