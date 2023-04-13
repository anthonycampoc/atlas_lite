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

            border: 2px;
        }
    </style>
</head>
<body>
    
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4">
               <table>
                   <tr>
                       <td>{{$product->code}}</td>
                       <td>{{$product->name}}</td>
                   </tr>
               </table>
        </div>
        @endforeach
    </div>
</body>
</html>