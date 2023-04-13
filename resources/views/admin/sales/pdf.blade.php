<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="Casa" />
	<title>Factura</title>
    <style>
        @import url('fonts/BrixSansRegular.css');
@import url('fonts/BrixSansBlack.css');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
p, label, span, table{
	font-family: 'BrixSansRegular';
	font-size: 12pt;
}
.h2{
	font-family: 'BrixSansBlack';
	font-size: 12pt;
}
.h3{
	font-family: 'BrixSansBlack';
	font-size: 12pt;
	display: block;
	background: #ffffff;
	color: rgb(0, 0, 0);
    border-bottom: 1px solid  black;
	text-align: center;
	padding: 3px;
	margin-bottom: 5px;
}
#page_pdf{
	width: 95%;
    height: auto;
	margin: 10px auto 5px auto;
}

#factura_head, #factura_cliente, #factura_detalle{
	width: 100%;
	margin-bottom: 10px;
}
.logo_factura, .firma{
	width: 25%;
}
.info_empresa{
	width: 50%;
	text-align: center;
}
.info_factura{
	width: 25%;
}
.info_cliente{
	width: 100%;
}
.datos_cliente{
	width: 100%;
}
.datos_cliente tr td{
	width: 50%;
}
.datos_cliente{
	padding: 10px 10px 0 10px;
}
.datos_cliente label{
	width: 75px;
	display: inline-block;
}
.datos_cliente p{
	display: inline-block;
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
.round{
	border-radius: 10px;
	border: 1px solid #000000;
	overflow: hidden;
	padding-bottom: 15px;
}
.round p{
	padding: 0 15px;
}

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
#detalle_totales span{
	font-family: 'BrixSansBlack';
}
.nota{
	font-size: 6pt;
}
.label_gracias{
	font-family: verdana;
	font-weight: bold;
	font-style: italic;
	text-align: center;
	margin-top: 20px;
}
.anulada{
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translateX(-50%) translateY(-50%);
}
    </style>
    
</head>
<body>
<div id="page_pdf">
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
            
			</td>
			<td class="info_empresa">
				<div>
					<span class="h2">{{$empresa->name}}</span>
					<p>Direccion: {{$empresa->address}}</p>
					<p>Ruc: {{$empresa->ruc}}</p>
					<p>Teléfono: {{$empresa->telephone}}</p>
					<p>Email: {{$empresa->mail}}</p>

				</div>
			</td>
			<td class="info_factura">
				<div class="round">
					<span class="h3">Factura</span>
                    <p>No. Factura: <strong>{{$sale->id}}</strong></p>
					<p>Hora: {{$sale->created_at}}</p>
					<p>Vendedor: {{$sale->users->name ?? 'none'}}</p>
				</div>
			</td>
		</tr>
	</table>

    <table id="factura_cliente">
		<tr>
			<td class="info_cliente">
				<div class="round">
					<span class="h3">Cliente</span>
					<table class="datos_cliente">
						<tr>
							<td><label>Cedula:</label><p>{{$sale->client->identification ?? 'none'}}</p></td>
							<td><label>Teléfono:</label> <p>{{$sale->client->phone ?? 'none'}}</p></td>
						</tr>
						<tr>
							<td><label>Nombre:</label> <p>{{$sale->client->name ?? 'none'}}</p></td>
							<td class="textleft"><label>Dirección:</label> <p>{{$sale->client->address ?? 'none'}}</p></td>
						</tr>
					</table>
				</div>
			</td>

		</tr>
	</table>
	
	<table id="factura_detalle">
			<thead>
				<tr>
					<th width="50px">Cantidad.</th>
					<th class="textleft">Producto.</th>
					
					<th class="textright" width="150px">Precio Compra.</th>
					<th class="textright" width="150px">Subtotal.</th>
				</tr>
			</thead>
			<tbody id="detalle_productos">
                @foreach($saleDetails as $saleDetail)
				<tr>
					<td class="textcenter">{{$saleDetail->quantity}}</td>
					<td class="textcenter">{{$saleDetail->product->name ?? 'none'}}</td>
					<td class="textright">{{$saleDetail->price}}</td>
					<td class="textright">{{number_format($saleDetail->quantity*$saleDetail->price - $saleDetail->quantity*$saleDetail->price*$saleDetail->discount/100,2)}}</td>
				</tr>
                @endforeach
			</tbody>
			<tfoot id="detalle_totales">
				<tr>
					<td colspan="3" class="textright"><span>SUBTOTAL Q.</span></td>
					<td class="textright"><span> ${{number_format($subtotal,2)}}</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>IVA ({{$sale->tax}}%)</span></td>
					<td class="textright"><span>${{number_format($subtotal*$sale->tax/100,2)}}</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>TOTAL Q.</span></td>
					<td class="textright"><span>${{number_format($sale->total,2)}}</span></td>
				</tr>
		</tfoot>

		
	</table>
	<hr>
	<table>

	<div>
		
		<p class="nota">Si usted tiene preguntas sobre esta factura, <br>pongase en contacto con nombre, teléfono y Email</p>
		<h4 class="label_gracias">¡Gracias por su compra!</h4>
	</div>
	</table>

</body>
</html>