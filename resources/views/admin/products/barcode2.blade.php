<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Códigos de barras</title>
    <style>
        #factura_detalle{
            border-collapse: collapse;
        }
        #factura_detalle thead th{
            background: #ffffff;
            color: rgb(0, 0, 0);
            padding: 5px;
            border-bottom: 1px solid  black;
            border-top: 1px solid  black;
            
        }

        #detalle_productos tr:nth-child(even) {
            background: #ededed;
        }

        .textright{
            text-align: right;
        }
        .textleft{
            text-align: left;
        }
        .textcenter{
            text-align: center;
        }

        .h3{
            font-family: 'BrixSansBlack';
            font-size: 20pt;
            display: block;
            background: #ffffff;
            color: rgb(0, 0, 0);
            border-bottom: 1px solid  black;
            text-align: center;
            padding: 3px;
            margin-bottom: 5px;
        }

    </style>
</head>
<body>
    
    <p class="h3"> <strong> INVENTARIO DE PRODUCTOS   </strong> </p>
   
            <table id="factura_detalle">
                <thead>
                    <tr>
                        <th class="textcenter" width="150px">Nombre</th>
                        <th class="textcenter" width="150px">Nombre</th>
                        <th class="textcenter" width="150px">Cantidad</th>
                        <th class="textcenter" width="150px">Precio de venta</th>
                      
                        
                     
                        
                    </tr>
                </thead>
                <tbody id="detalle_productos">
                    @foreach($products as $product)
                    <?php 
                    $color = "";
                       if( $product->stock == 1){
                        $color = 'style="background-color: rgb(251, 0, 0); color: #fff;"';
                       }else if ($product->stock == 3){
                        $color = 'style="background-color: rgb(255, 235, 28);"';
                       }else if ($product->stock == 5){
                        $color = 'style="background-color: rgb(0, 143, 92);"';
                       }  
                    ?>
                    <tr  <?php echo $color; ?> >
                        <td class="textcenter">{{$product->id}}</td>
                        <td class="textcenter">{{$product->name}}</td>
                        <td class="textcenter">{{$product->stock}}</td>
                        <td class="textcenter">{{$product->sell_price}}</td>
                   
                  
                     
                    </tr>
                    @endforeach
                </tbody>
            </table>
                      
                  
                 
        
          
        </div>
  
    </div>
</body>
</html>