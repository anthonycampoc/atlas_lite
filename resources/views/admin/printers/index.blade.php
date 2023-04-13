@extends('layouts.admin')
@section('title','Gestión de impresora')
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
        <h3 class="page-title">
            Gestión de impresora
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gestión de impresora</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Gestión de impresora</h4>
                        {{--  <i class="fas fa-ellipsis-v"></i>  --}}
                        {{--  <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('clients.create')}}" class="dropdown-item">Agregar</a>
                        business
                    </div>
                </div> --}}
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <strong><i class="fas fa-file-signature mr-1"></i> Nombre </strong>

                    <p class="text-muted">
                        {{$printer->name}}
                    </p>
                    <hr>
                </div>
              
            </div>

        </div>
        <div class="card-footer text-muted">

            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal-2">Actualizar</button>

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
                <h5 class="modal-title" id="exampleModalLabel-2">Actualizar datos de impresora</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            {!! Form::model($printer,['route'=>['printers.update',$printer], 'method'=>'PUT','files' => true]) !!}
                    @csrf

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control form-control-lg" name="name" id="name" value="{{$printer->name}}">
                        </div>
                      </div>
                    </div>
                   
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