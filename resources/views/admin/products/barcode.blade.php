<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Códigos de barras</title>
    <style>
        .row{
            margin: 0px;
        }
        h2{

            font-size: 15px;
            margin-top: 1px;
            margin-left: 5PX
        }

        .table{
            width: auto;
            border: solid 1px;
            padding-top: 2px;
            padding-bottom: 2px; 
            
        }
       
    </style>
</head>
<body>
  <div class="row">
  
        @foreach ($products as $product)
        <table class="table">
                
                   <tr>
                       <td >  
                            {{$product->name}} <br>
                            <div style="text-align: center">{{$product->sell_price}}</div>
                        
                            <div style="text-align: center"> {!!DNS1D::getBarcodeHTML($product->code, 'EAN5'); !!}
                            <h2>{{$product->code}}</h2>
                            </div> 
                        </td>
                   </tr>
            </table>
        @endforeach


    </div>

 
</body>
</html>