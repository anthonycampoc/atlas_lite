@extends('layouts.admin')
@section('title','Gestión de categorías')
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
           Actualizar Categoria
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Lista de Categoria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categorías</li>
            </ol>
        </nav>
    </div>

    <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <p class="card-description">
                   
                  </p>
                  <form class="forms-sample" method="POST" action="{{action('CategoriaController@update',$categoria->id)}}">
                  @csrf
                  @method('PUT')
                         
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre</label>
                      <input type="text" class="form-control form-control-lg" id="exampleInputName1" name="name" value="{{$categoria->name}}" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Descripción</label>
                      <input type="text" class="form-control form-control-lg" id="exampleInputName1" name="description" value="{{$categoria->description}}" required>
                    </div>
                   
                  
                        <button type="submit" class="btn btn-outline-success btn-fw mr-2">Actualizar</button>
                        <a   class="btn btn-light" href="{{route('categories.index')}}">Cancelar</a>
                      
                </form>

                       
                         
                </div>
              </div>
            </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('melody/js/data-table.js')}}"></script>
@endsection