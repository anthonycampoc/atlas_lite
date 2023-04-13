@extends('layouts.admin')
@section('title','información del cliente')
@section('styles')

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
          
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('clients.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$client->name}}</li>
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
                                <img src="{{asset('images/'.$client->image)}}" alt="profile" class="img-lg  mb-3" />
                                <h3>{{$client->name}} {{$client->last_name}}</h3> 
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>
                            <div class="border-bottom py-4">
                                <div class="list-group">
                                    <a class="list-group-item list-group-item-action active" id="list-home-list"
                                        data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                        Sobre cliente
                                    </a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list"
                                        data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                        Historial de compras
                                    </a>
                                    <a class="list-group-item list-group-item-action"
                                    href="{{route('clients.create')}}"  aria-controls="home">
                                    Agregar Cliente
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pl-lg-5">

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" user="tabpanel"
                                    aria-labelledby="list-home-list">

                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>Información de cliente</h4>
                                        </div>
                                    </div>
                                    <div class="profile-feed">
                                        <div class="d-flex align-items-start profile-feed-item">
                                            
                                            <div class="form-group col-md-6">
                                                <strong><i class="fab fa-product-hunt mr-1"></i> Apellidos y Nombres </strong>
                                                <p class="text-muted">
                                                    {{$client->last_name}} {{$client->name}}
                                                </p>
                                                <hr>
                                                <strong><i class="fas fa-address-card mr-1"></i> Numero de Cedula</strong>
                                                <p class="text-muted">
                                                    {{$client->identification}}
                                                </p>
                                                <hr>
                                            
                                            </div>
        
                                            <div class="form-group col-md-6">
                                                <strong>
                                                    <i class="fas fa-mobile mr-1"></i>
                                                    Dirección</strong>
                                                <p class="text-muted">
                                                    {{$client->address}}
                                                </p>
                                                <hr>
                                                <strong><i class="fas fa-envelope mr-1"></i> Teléfono / Celular</strong>
                                                <p class="text-muted">
                                                    {{$client->phone}}
                                                </p>
                                                <hr>
                                                <strong><i class="fas fa-map-marked-alt mr-1"></i> Correo electrónico</strong>
                                                <p class="text-muted">
                                                    {{$client->email}}
                                                </p>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="list-profile" user="tabpanel"
                                    aria-labelledby="list-profile-list">


                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>Historial de compras</h4>
                                        </div>
                                    </div>
                                    <div class="profile-feed">
                                        <div class="d-flex align-items-start profile-feed-item">
    
                                            <div class="table-responsive">
                                                <table id="order-listing" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Fecha</th>
                                                            <th>Total</th>
                                                            <th>Estado</th>
                                                            <th style="width:50px;">Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($client->sales as $sale)
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="{{route('sales.show', $sale)}}">{{$sale->id}}</a>
                                                            </th>
                                                            <td>{{$sale->sale_date}}</td>
                                                            <td>{{$sale->total}}</td>
                        
                                                            @if ($sale->status == 'VALID')
                                                            <td>
                                                                <a class="jsgrid-button btn btn-success" href="{{route('change.status.sales', $sale)}}" title="Editar">
                                                                    Activo <i class="fas fa-check"></i>
                                                                </a>
                                                            </td>
                                                            @else
                                                            <td>
                                                                <a class="jsgrid-button btn btn-danger" href="{{route('change.status.sales', $sale)}}" title="Editar">
                                                                    Cancelado <i class="fas fa-times"></i>
                                                                </a>
                                                            </td>
                                                            @endif
                                                            <td style="width: 50px;">
                        
                                                                <a href="{{route('sales.pdf', $sale)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-file-pdf"></i></a>
                                                                {{--  <a href="#" class="jsgrid-button jsgrid-edit-button"><i class="fas fa-print"></i></a>  --}}
                                                                <a href="{{route('sales.show', $sale)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-eye"></i></a>
                                                             
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                          <td colspan="2"><strong>Total de monto comprado: </strong></td>
                                                          <td colspan="3" align="left"><strong>s/{{$total_purchases}}</strong></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
    
                                        </div>
                                    </div>

                                </div>
                            </div>





                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('clients.index')}}" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/profile-demo.js') !!}
{!! Html::script('melody/js/data-table.js') !!}
@endsection