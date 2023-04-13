@extends('layouts.admin')
@section('title','Gestión de empresa')
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
            Gestión de empresa
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gestión de empresa</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Gestión de empresa</h4>
                     
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <strong><i class="fas fa-file-signature mr-1"></i> Nombre </strong>

                    <p class="text-muted">
                        {{$business->name}}
                    </p>
                    <hr>
                    <strong><i class="fas fa-align-left mr-1"></i> Descripción</strong>

                    <p class="text-muted">
                        {{$business->description}}
                    </p>
                    <hr>
                    <strong><i class="fas fa-map-marked-alt mr-1"></i> Dirección</strong>

                    <p class="text-muted">
                        {{$business->address}}
                    </p>
                    <hr>

                    <strong> <i class="fas fa-tty mr-1"></i>Telefono</strong>

                    <p class="text-muted">
                        {{$business->telephone ?? 'none'}}
                    </p>
                    <hr>
              
                </div>
                <div class="form-group col-md-6">
                    <strong><i class="far fa-address-card mr-1"></i> RUC</strong>

                    <p class="text-muted">{{$business->ruc}}</p>
                    <hr>
                    <strong><i class="far fa-envelope mr-1"></i> Correo electrónico</strong>

                    <p class="text-muted">{{$business->mail}}</p>
                    <hr>
               
                    <div class="row">
                        <div class="col-md-6">
                            <strong><i class="fas fa-exclamation-circle mr-1"></i> Logo</strong><br>
                        </div>
                        <div class="col-md-6">
                            <img style="width:250px ; height:150px ;" src="{{asset('images/'.$business->logo)}}"
                                class="rounded float-left" alt="logo">
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

        </div>
        <div class="card-footer text-muted">

            <button type="button" class="btn btn-outline-success btn-fw float-right " data-toggle="modal" data-target="#exampleModal-2">Actualizar</button>

        </div>
    </div>
</div>
</div>
</div>


<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Actualizar datos de empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            {!! Form::model($business,['route'=>['business.update',$business], 'method'=>'PUT','files' => true]) !!}
                    @csrf

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" id="name" value="{{$business->name}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Direccion</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="address" id="address" value="{{$business->address}}" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Correo</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="mail" id="mail" value="{{$business->mail}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ruc</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="ruc" id="ruc" value="{{$business->ruc}}">
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                  <label for="telephone">Telefono</label>
                  <input type="text" name="telephone" id="telephone" class="form-control" value="{{$business->telephone}}" placeholder="" aria-describedby="helpId">
               
                </div>

              

                  <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" name="description" id="description"
                        rows="3">{{$business->description}}</textarea>
                </div>

                <div class="card-body">
                    <h5 class="card-title d-flex">Logo
                        <small class="ml-auto align-self-end">
                            <a href="dropify.html" class="font-weight-light" target="_blank">Seleccionar Archivo</a>
                        </small>
                    </h5>
                    <h6>Para mejor visualización de su logotipo, subirlo en formato <strong>SVG</strong> </h6>
                    <input type="file" name="picture" id="picture"  class="dropify" />
                </div>
                
               
        

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success mb-2">Actualizar</button>
                <button type="button" class="btn btn-light mb-2" data-dismiss="modal">Cancel</button>
            </div>

        {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/dropify.js') !!}
@endsection