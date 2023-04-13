<div class="form-group">
    <label for="client_id">Cliente</label>
    <select class="form-control form-control-lg" name="client_id" id="client_id">
        @foreach ($clients as $client)
        <option value="{{$client->id}}">{{$client->name}} {{$client->last_name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
  <label for="code">Código de barras</label>
  <input type="text" name="code" id="code" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
</div>

  <div class="form-row">
    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="product_id">Producto</label>
            <select class="form-control form-control-lg " name="product_id" id="product_id">
               
                @foreach ($products as $product)
                <option  value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    


    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="">Stock actual</label>
            <input type="text" name="stock" id="stock" value="" class="form-control form-control-lg" disabled>
          </div>
    </div>
    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="price">Precio de venta</label>
            <input type="number" class="form-control form-control-lg" name="price" id="price" aria-describedby="helpId" disabled>
        </div>
    </div>
  </div>




  <div class="form-row">
    <div class="form-group col-md-3">
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" class="form-control form-control-lg" name="quantity" id="quantity" aria-describedby="helpId">
        </div>
    </div>

    <div class="form-group col-md-3">
        <label for="tax">Plan acumulativo</label>
        <div class="input-group">
            
            <select class="form-control form-control-lg " name="estado_abono" id="estado_abono">
                <option value="1" selected>no</option>
                <option value="2" >si</option>
            </select>
        </div>
    </div>
    <div class="form-group col-md-3">
        <label for="tax">Impuesto</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">%</span>
            </div>
            <input type="number" class="form-control form-control-lg" name="tax" id="tax" aria-describedby="basic-addon3" value="0">
        </div>
    </div>
    <div class="form-group col-md-3">
        <label for="discount">Porcentaje de descuento</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon2">%</span>
            </div>
            <input type="number" class="form-control form-control-lg " name="discount" id="discount" aria-describedby="basic-addon2" value="0">
        </div>
    </div>
  </div>







<div class="form-group">
    <button type="button" id="agregar" class="btn btn-primary float-right">Agregar producto</button>
</div>

<div class="form-group">
    <h4 class="card-title">Detalles de venta</h4>
    <div class="table-responsive col-md-12">
        <table id="detalles" class="table">
            <thead>
                <tr>
                    <th>Eliminar</th>
                    <th>Producto</th>
                    <th>Precio Venta (PEN)</th>
                    <th>Descuento</th>
                    <th>Cantidad</th>
                    <th>SubTotal (PEN)</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL:</p>
                    </th>
                    <th>
                        <p align="right"><span id="total">PEN 0.00</span> </p>
                    </th>
                </tr>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL IMPUESTO (12%):</p>
                    </th>
                    <th>
                        <p align="right"><span id="total_impuesto">PEN 0.00</span></p>
                    </th>
                </tr>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL PAGAR:</p>
                    </th>
                    <th>
                        <p align="right"><span align="right" id="total_pagar_html">PEN 0.00</span> <input type="hidden"
                                name="total" id="total_pagar"></p>
                    </th>
                </tr>
            </tfoot>
            <tbody>
            </tbody>
        </table>
    </div>
</div>