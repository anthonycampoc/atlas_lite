@extends('layouts.admin')
@section('title','Gestión de ventas')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
      }
      .link-none{
        color:black;
      }

      .rojo{
        background-color: rgb(251, 0, 0); color: #fff;
      }

      .amarrillo{
        background-color: rgb(255, 235, 28); color: rgb(0, 0, 0);
      }

      .verde{
        background-color: rgb(0, 143, 92); color: #fff;
      }

      .color-none{
        background-color: none;
      }

      .text_color{
          color:green;
      }

      .text_color2{
          color:rgb(240, 0, 0);
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
    <a class="nav-link" href="{{route('sales.create')}}">
      <span class="btn btn-outline-success btn-fw">+ Registrar venta</span>
    </a>
  </li>
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
          Ventas
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ventas</li>
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
                              <a href="{{route('sales.create')}}" class="dropdown-item">Registrar</a>
                        
                            </div>
                          </div>
                    </div>

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Cedula</th>
                                    <th>Fecha de venta</th>
                                    <th>Total de venta</th>
                                    <th>Estado de venta </th>
                                    <th>Plan acumulativo</th>
                                    <th>Dias de retiro</th>
                                    <th>Estado de producto</th>
                                    <th style="width:50px;" >Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sales as $sale)

                                    <?php
                            
                                            $color = "";
                                            $mensaje = "";
                                            $mensaje_dias =" Dias restantes ";
                                            //$fechaA = '2021-12-2';
                                            $fechaA = date('Y-m-d');
                                            $fechaE = $sale->fechaE;
                                            $datetime1 = date_create($fechaE);
                                            $datetime2 = date_create($fechaA);
                                            $ch = date_diff($datetime1,$datetime2);
                                            $differenceformat = '%a';
                                            $dias = $ch->format($differenceformat);

                                            if ($dias == 1) {
                                                $color = 'class ="rojo"';
                                            }else if($dias == 2){
                                                $color = 'class ="amarrillo"';
                                            }else if($dias == 3){
                                                $color = 'class ="verde"';

                                            }else if($dias == 0) {
                                                $color = 'class ="rojo"';
                                                $dias = 0;
                                            }

                                            if($dias == 0){
                                                $mensaje = ' ,revisar fecha de entrega';
                                            }

                                            if ($sale->estado == 'ENTREGADO'|| $sale->status == 'CANCELED' || $sale->estado_abono == 1 ) {
                                                $mensaje = '';
                                                $color = 'class="color-none"';
                                                $dias = '';
                                                $mensaje_dias ='------------------';
                                            }
                                    ?>
                                <tr <?php echo $color; ?> >
                                    <th scope="row"><a href="{{route('sales.show', $sale->id)}}">{{$sale->id}}</a></th>
                                  
                                    <td> <a class="link-none" href="{{route('clients.show', $sale->client)}}">{{$sale->client->name ?? 'none'}}</a></td>
                                    <td>{{$sale->client->identification ?? 'none'}}</td>
                                  
                                    <td>{{$sale->sale_date}}</td>
                                    <td>{{$sale->total}}</td>
                                    @if($sale->status =='VALID')
                                    <td>
                                        <a class="btn btn-success btn-rounded btn-fw" href="{{route('change.status.sales', $sale)}}" title="Editar">
                                            Activo 
                                        </a>
                                    </td>
                                    @else
                                    <td>
                                        <a class="btn btn-danger btn-rounded btn-fw" href="{{route('change.status.sales', $sale)}}" title="Editar">
                                            Cancelado
                                        </a>
                                    </td>
                                    @endif

                                    @if ($sale->abono == 0.00 || $sale->estado_abono == 1 )
                                        
                                        <td >
                                            <p class="text_color">TERMINADO</p>
                                        </td>
                                    @elseif($sale->abono == 1.00 || $sale->abono != 0.00  || $sale->status =='CANCELED')
                                        <td >
                                            <p class="text_color2">VIGENTE</p>
                                        </td>

                                  
                                    @endif

                                    <td><?php echo $dias.$mensaje_dias.$mensaje; ?></td>

                                    @if ( $sale->estado == 'ENTREGADO'|| $sale->estado_abono == 1)
                                    <td >
                                        <p class="btn btn-success btn-rounded btn-fw">ENTREGADO</p>
                                    </td>

                                    @elseif($sale->estado == 'PUEDE RETIRAR' || $sale->status == 'CANCELED')
                                    <td >
                                        <p class="btn btn-warning btn-rounded btn-fw">NO ENTREGADO</p>
                                    </td>
                                        
                                    @endif
                                   
                                    <td style="width: 50px;">
                                        @if ($sale->estado_abono != 1 )
                                            <a href="{{route('estado.sales', $sale->id)}}" class="jsgrid-button jsgrid-edit-button"> <i class="fas fa-check"></i></a>
                                        @endif
                                        @if ($sale->estado_abono == 2 && $sale->status =='VALID' )
                                            <a href="{{route('abono.sales', $sale->id)}}" class="jsgrid-button jsgrid-edit-button"  title="Abono"><i class="fas fa-dollar-sign"></i></a>
                                        @endif
                                        <a href="{{route('sales.pdf', $sale->id)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-file-pdf"></i></a>
                                        <a href="{{route('sales.print',$sale->id)}}" class="jsgrid-button jsgrid-edit-button"><i class="fas fa-print"></i></a> 
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