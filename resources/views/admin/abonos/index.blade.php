@extends('layouts.admin')
@section('title','Gestión de ventas')
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
    <a class="nav-link" href="#">
      <span class="btn btn-primary">+ Registrar compra</span>
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
      
        
    
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Abonos</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center"> <strong>Datos del cliente</strong> </h4>

                @foreach ($total_sale as $info_sale)
                
                    <div class="row">
                        <div class="col-md-6">
                        <address>
                            <p class="font-weight-bold">Apellido y Nombre</p>
                            <p>{{$info_sale->apellido}}</p>
                            <p>{{$info_sale->nombre}}</p>
                         
                        </address>
                        </div>
                        <div class="col-md-6">
                        <address class="text-primary">
                            <p class="font-weight-bold">
                            Total de venta
                            </p>
                            <p class="mb-2">
                            $ {{$info_sale->total}}
                            </p>
                            <p class="font-weight-bold">
                            Celular
                            </p>
                            <p>
                                {{$info_sale->telefono}}
                            </p>
                        </address>
                        </div>
                    </div>

                  @endforeach
              
            <form method="POST" action="{{action('AbonoController@store')}}">
                @csrf
               
                @foreach ($all_abono2 as $item)
                    <div class="form-group">
                        <label for="start">Fecha de entrega</label>
                        <input type="date" class="form-control" name="start" id="start" value="{{$item->fechaE }}" aria-describedby="helpId" placeholder=""> 
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion de pedido</label>
                        <textarea class="form-control" name="descripcion" id="" rows="3">{{$item->descripcion }}</textarea>
                    </div>
                @endforeach

            
            
               
           

                    <div class="form-group">
                        <label for="abono">Ingresar Abono</label>
                        <input type="text" class="form-control form-control-lg  @error('abono') is-invalid @enderror " id="abono" name="abono" >
                        @error('abono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="saldo"> <strong>Saldo</strong> </label>
    
                        @foreach ($abonos as $abono_sale)
                        <input type="text" class="form-control form-control-lg @error('saldo') is-invalid @enderror" name="saldo" id="saldo" value=" {{old('saldo', $abono_sale->saldo )}}" aria-describedby="helpId"  >
                        @error('saldo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input type="hidden" class="form-control" name="sale_id" id="" aria-describedby="helpId"  value="{{$info_sale->id}}">
                        @endforeach
    
                           
                    </div>

                    <div class="form-group d-none ">
                        <label for="exampleInputName1"></label>
                        @foreach ($abonos as $abono_sale)
                           <input type="text" class="form-control" name="saldo2" id=""  aria-describedby="helpId"  value="{{$abono_sale->saldo}}">
                        @error('saldo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    
                        @endforeach
                    </div>

                    @foreach ($total_sale as $info_sale)
                            <div class="form-group d-none">
                              <label for=""></label>
                              <input type="text" class="form-control" name="total_sale" id="" aria-describedby="helpId" placeholder="" value="{{$info_sale->total}}">
                            
                            </div>

                    @endforeach

                   <button type="submit" class="btn btn-outline-success btn-fw ml-3">Guardar</button>
                 
                    <a href="{{route('sales.index')}}" class="btn btn-outline-dark btn-fw ml-3">Regresar</a>
              
            </form>
              </div>
            </div>
          </div>

          <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Abono</th>
                                <th>Saldo</th>
                                <th>Fecha</th>
                                <th>Accion</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($all_abono as $all_bonos)
                           <tr>

                           
                                    <td>{{$all_bonos->id}}</td>
                                    <td>{{$all_bonos->abono}}</td>
                                    <td>{{$all_bonos->saldo}}</td>
                                    <td>{{$all_bonos->abono_date}}</td>
                                    <td>
                                        <form  method="post" action="{{action('AbonoController@destroy', $all_bonos->id)}}">
                                            @csrf
                                            @method('DELETE')
                                    
                                            
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

    
   
    
    <!-- Modal -->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">AGENDA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">

                    <form action="" method="post">

                        @csrf

                        <div class="form-group d-none">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                    
                        </div>

                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                        
                        </div>


                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>

                        <div class="form-group d-none">
                            <label for="start">Star</label>
                            <input type="date" class="form-control" name="start" id="star" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="form-group d-none">
                            <label for="end">end</label>
                            <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success"   id="btnguardar" >Guardar</button>
                    <button type="button" class="btn btn-warning" id="btnmodificar" >Modificar</button>
                    <button type="button" class="btn btn-danger" id="btneliminar"  >Eliminar</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div id="agenda"></div> --}}

@endsection
@section('scripts')
<script src="{{asset('melody/js/data-table.js')}}"></script>
<script src="{{asset('fullcalender/js/main.min.js')}}" defer></script>
<script src="{{asset('fullcalender/js/locales-all.js')}}" defer></script>
<script src="{{asset('fullcalender/js/agenda.js')}}" defer></script>
@endsection