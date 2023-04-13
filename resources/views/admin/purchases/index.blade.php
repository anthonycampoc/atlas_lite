@extends('layouts.admin')
@section('title','Gestión de compras')
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
    <a class="nav-link" href="{{route('purchases.create')}}">
      <span class="btn btn-outline-success btn-fw">+ Registrar compra</span>
    </a>
  </li>
@endsection
@section('imgu')
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
    <img src="{{asset('images/'.$imgusers)}}" alt="profile" />
</a>
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
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Compras
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compras</li>
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
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('purchases.create')}}" class="dropdown-item">Registrar</a>
                        
                            </div>
                          </div>
                    </div>

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    <th style="width:50px;" >Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchases as $purchase)
                                <tr>
                                    <th scope="row">
                                        <a href="{{route('purchases.show', $purchase->id)}}">{{$purchase->id}}</a>
                                    </th>
                                    <td>{{$purchase->puchase_date}}</td>
                                    <td>{{$purchase->total}}</td>
                                    @if($purchase->status =='VALID')
                                    <td>
                                        <a class="btn btn-success btn-rounded btn-fw" href="{{route('change.status.purchases', $purchase)}}" title="Editar">
                                            Activo 
                                        </a>
                                    </td>
                                    @else
                                    <td>
                                        <a class="btn btn-danger btn-rounded btn-fw" href="{{route('change.status.purchases', $purchase)}}" title="Editar">
                                            Cancelado
                                        </a>
                                    </td>
                                    @endif

                                    <td style="width: 50px;">

                                        <a href="{{route('purchases.pdf', $purchase->id)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-file-pdf"></i></a>
                                        <a href="{{route('purchases.show', $purchase->id)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-eye"></i></a>

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