@extends('layouts.admin')
@section('title','Gestión de Productos')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
      }

      .link-none{
        text-decoration: none; 
        color:black; 
      }
      .rojo{
        background-color: rgb(251, 0, 0); color: #fff;
      }

      .amarrillo{
        background-color: rgb(255, 235, 28); color: #fff;
      }

      .verde{
        background-color: rgb(0, 143, 92); color: #fff;
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
            <a class="nav-link" href="{{route('products.create')}}">
              <span class="btn btn-outline-success btn-fw">+ Agregar Productos</span>
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
    @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="page-header">
        <h3 class="page-title">
            Productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
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
                              <a href="{{route('products.create')}}" class="dropdown-item">Agregar</a>

                    
                              <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal-3">Exportar códigos de barras</a>
                              <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal-4">Inventario PDF</a>
                              <a class="dropdown-item" href="{{route('products_excel_export')}}">Inventario excel</a>
                              <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal-2">Subir Productos</a>
                            </div>

                           
                          </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Precio de venta</th>
                                    <th>Estado</th>
                                    <th>Categoria</th>
                                    <th>Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                                    <?php 
                                    $color = "";
                                       if( $product->stock == 1){
                                        $color = 'class ="rojo"';
                                       }else if ($product->stock == 2){
                                        $color = 'class ="amarrillo" ';
                                       }else if ($product->stock == 3){
                                        $color = 'class ="verde" ';
                                       }  
                                    ?>
                                <tr <?php echo $color; ?>>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->code}}</td>
                                    <td>
                                        <a class="link-none" href="{{route('products.show',$product->id)}}">{{$product->name}}</a>
                                    </td>
                                    

                                    <td> {{$product->stock}} </td>
                                    <td>{{$product->sell_price}}</td>
                                    <td>{{$product->status}}</td>
                                    <td>{{$product->category->name ??'none' }}</td>
                
                                    <td>{{$product->provider->name ?? 'none'}}</td>
                            
                                    <td style="width: 50px;" >
                                    <form  method="post" action="{{action('ProductController@destroy', $product->id)}}">
                                        @csrf
                                        @method('DELETE')
                                    <a class="jsgrid-button jsgrid-edit-button" href="{{route('products.edit', $product->id)}}" title="Editar">
                                        <i class="far fa-edit"></i>
                                        </a>
                                        
                                        <button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        <a href="{{route('products.show',$product->id)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-eye"></i></a>    
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

<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Carga masivo de productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


           <form class="cmxform" id="signupForm" method="POST"  action="{{action('ProductController@import_excel')}}" enctype="multipart/form-data">
               @csrf
                <div class="modal-body">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
        
                            <input type="file" class="dropify" name="file" >
                
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit"  class="btn btn-outline-danger btn-icon-text">
                        <i class="fa fa-upload btn-icon-prepend"></i>                                                    
                        Subir
                      </button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </form>

       

        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-3">CODIGO DE BARRAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


           <form class="cmxform" id="signupForm" method="post"  action="{{action('ProductController@print_barcode')}}" >
               @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-3 ">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">De</label>
                              <div class="col-sm-9">
                                <select class="form-control"name="de" >
                                  
                                    @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->id}}</option>
                                  
                                    @endforeach
                               
                                </select>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Hasta</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="hasta">
                                
                                    @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->id}}</option>
                                  
                                    @endforeach
                               
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group row">
                              
                              <div class="col-sm-9">
                                 <a class="btn btn-outline-info btn-icon-text" href="{{route('print_barcode_all')}}" role="button"> <i class="fas fa-download btn-icon-prepend"></i>Descarga Masiva</a>
                              </div>
                            </div>
                          </div>

                          
                    
                    </div>

                    <div class="card text-center">
                     
                      <div class="card-body">
                        <h4 class="card-title">AVISO</h4>
                        <p class="card-text">Si la cantidad de producto es mayor a mil, mejor exportar los codigos por grupo de 500</p>
                      </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-danger btn-icon-text"><i class="fas fa-download"></i>Descargar</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </form>

       

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-4">INVENTARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


           <form class="cmxform" id="signupForm" method="post"  action="{{action('ProductController@print_barcode2')}}" >
               @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-3 ">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">De</label>
                              <div class="col-sm-9">
                                <select class="form-control"name="de" >
                                  
                                    @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->id}}</option>
                                  
                                    @endforeach
                               
                                </select>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-md-4 text-center">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Hasta</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="hasta">
                                
                                    @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->id}}</option>
                                  
                                    @endforeach
                               
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group row">
                              
                              <div class="col-sm-9">
                                 <a class="btn btn-outline-info btn-icon-text" href="{{route('print_barcode2_all')}}" role="button"> <i class="fas fa-download btn-icon-prepend"></i>Descarga Masiva</a>
                              </div>
                            </div>
                          </div>
                    </div>

                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-danger btn-icon-text"><i class="fas fa-download"></i>Descargar</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </form>

       

        </div>
    </div>
</div>






@endsection
@section('scripts')
<script src="{{asset('melody/js/data-table.js')}}"></script>
<script src="{{asset('melody/js/file-upload.js')}}"></script>
<script src="{{asset('melody/js/dropify.js')}}"></script>
@endsection