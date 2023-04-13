<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="Casa" />
	<title>Factura</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="receta.css">
</head>
<body>
<img class="anulada" src="img/anulado.png" alt="Anulada">
<div id="page_pdf">
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
				<div>
					<img src="img/logo.png">
				</div>
			</td>
			<td class="info_empresa">
				<div>
					<span class="h2">SIFREGRAP</span>
					<p>OLMEDO Y 10 DE AGOSTO, Esmeraldas</p>
					<p>Teléfono: 0985632145</p>
					<p>Email: sifregran@hotmail.com</p>
				</div>
			</td>
			<td class="info_factura">
				<div class="round">
					<span class="h3">Factura</span>
					<p>No. Factura: <strong>000001</strong></p>
					<p>Fecha: 20/01/2019</p>
					<p>Hora: 10:30am</p>
					<p>Vendedor: Anthony Cotera</p>
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
							<td><label>Nit:</label><p>54895468</p></td>
							<td><label>Teléfono:</label> <p>7854526</p></td>
						</tr>
						<tr>
							<td><label>Nombre:</label> <p>Angel Arana Cabrera</p></td>
							<td><label>Dirección:</label> <p>Calzada Buena Vista</p></td>
						</tr>
					</table>
				</div>
			</td>

		</tr>
	</table>

	<table id="factura_detalle">
			<thead>
				<tr>
					<th width="50px">Cant.</th>
					<th class="textleft">Descripción</th>
					<th class="textleft">RECETA</th>
					<th class="textright" width="150px">Precio Unitario.</th>
					<th class="textright" width="150px"> Precio Total</th>
				</tr>
			</thead>
			<tbody id="detalle_productos">
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td class="textright">516.67</td>
					<td class="textright">516.67</td>
				</tr>
			</tbody>
			<tfoot id="detalle_totales">
				<tr>
					<td colspan="3" class="textright"><span>SUBTOTAL Q.</span></td>
					<td class="textright"><span>516.67</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>IVA (12%)</span></td>
					<td class="textright"><span>516.67</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>TOTAL Q.</span></td>
					<td class="textright"><span>516.67</span></td>
				</tr>
		</tfoot>

		
	</table>
	<hr>
	<table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <tbody>
          <tr class="row0">
            <td class="column0 style9 null style9" colspan="7">RECETA</td>
          </tr>
          <tr class="row1">
            <td class="column0 style11 s style8" colspan="4">NOMBRE O RAZON SOCIAL</td>
            <td class="column4 style11 s style8" colspan="3">RECETA AGRICOLA</td>
          </tr>
          <tr class="row2">
            <td class="column0 style24 s style25" colspan="4">AGROPECUARIO</td>
            <td class="column4 style27 s style25" colspan="3">23</td>
          </tr>
          <tr class="row3">
            <td class="column0 style12 s style12" colspan="2">DIRECCION ALMACEN</td>
            <td class="column2 style13 s">PROVINCIA</td>
            <td class="column3 style12 s style12" colspan="2">CANTON Y PARROQUIA</td>
            <td class="column5 style14 s style15" colspan="2">CULTIVO A TRATAR</td>
          </tr>
          <tr class="row4">
            <td class="column0 style24 s style25" colspan="2">COLON Y 10 DE AGOSTO</td>
            <td class="column2 style26 s">ESMERALDA</td>
            <td class="column3 style24 s style25" colspan="2">RIOVERDE LAGARTO</td>
            <td class="column5 style7 null style6" colspan="2"></td>
          </tr>
          <tr class="row5">
            <td class="column0 style16 s style16" colspan="2">INGREDIENTE ACTIVO</td>
            <td class="column2 style16 s style16" colspan="2">NOMBRE COMERCIAL</td>
            <td class="column4 style17 s">DOSIS</td>
            <td class="column5 style18 s">CANTIDAD</td>
            <td class="column6 style19 s">UNIDADES (litro/Galon Caneca)</td>
          </tr>
       
          <tr class="row6">
            <td class="column0 style2 null">1</td>
            <td class="column1 style3 s">Paraquat y sus mesclas</td>
            <td class="column2 style4 null style4" colspan="2">INFAMIX</td>
            <td class="column4 style1 null"> 1- 1,5(1/Ha)</td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null">500ML</td>
          </tr>

    
          <tr class="row7">
            <td class="column0 style5 s style5" colspan="2">AREA A TRATAR</td>
            <td class="column2 style5 s style5" colspan="2">FECHA APLICACIÓN</td>
            <td class="column4 style5 s style5" colspan="3">PERIODO DE CARENCIA </td>
          </tr>
          <tr class="row8">
            <td class="column0 style11 s style8" colspan="2">NOMBRE DEL PROFESIONAL</td>
            <td class="column2 style23 s">N REGIS.SENESCYT</td>
            <td class="column3 style11 s style8" colspan="2">FIRMA</td>
            <td class="column5 style11 s style8" colspan="2">FECHA</td>
          </tr>
          <tr class="row9">
            <td class="column0 style20 null style21" colspan="2">juan carlos</td>
            <td class="column2 style22 null">125-45456-545646</td>
            <td class="column3 style20 s style21" colspan="2"><div>
					<img src="img/firma2.png">
				</div></td>
            <td class="column5 style20 s style21" colspan="2">12/10/2021</td>
          </tr>
        </tbody>
    </table>
	<table>

	<div>
		
		<p class="nota">Si usted tiene preguntas sobre esta factura, <br>pongase en contacto con nombre, teléfono y Email</p>
		<h4 class="label_gracias">¡Gracias por su compra!</h4>
	</div>
	</table>
  </body>
</html>

	<div>
		
		<p class="nota">Si usted tiene preguntas sobre esta factura, <br>pongase en contacto con nombre, teléfono y Email</p>
		<h4 class="label_gracias">¡Gracias por su compra!</h4>
	</div>

</div>

</body>
</html>