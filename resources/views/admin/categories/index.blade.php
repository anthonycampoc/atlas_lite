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
@section('create')

        <li class="nav-item d-none d-lg-flex">
            <a class="nav-link" href="{{route('categories.create')}}">
              <span class="btn btn-outline-success btn-fw">+ Agregar Categoria</span>
            </a>
        </li>
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
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Categorías
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categorías</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title"> </h4>
                        <div class="btn-group">
                            <a class="jsgrid-button jsgrid-edit-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('categories.create')}}" class="dropdown-item">Agregar</a>
                              
                            </div>
                          </div>
                    </div>

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($categoria as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>
                                        <a href="{{route('categories.show',$category->id)}}">{{$category->name}}</a>
                                    </td>
                                    <td>{{$category->description}}</td>
                                    <td style="width: 50px;" >
                                    <form  method="post" action="{{action('CategoriaController@destroy', $category->id)}}">
                                        @csrf
                                        @method('DELETE')
                                    <a class="jsgrid-button jsgrid-edit-button" href="{{route('categories.edit',$category->id)}}" title="Editar">
                                        <i class="far fa-edit"></i>
                                        </a>
                                        
                                        <button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    
                                    </td>
                                </tr>
                                @endforeach

                               
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('melody/js/data-table.js')}}"></script>


@endsection