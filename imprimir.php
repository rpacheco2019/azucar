<!DOCTYPE html>
<?php
    include('xcrud/xcrud.php');
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato de impresión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php
        $db = Xcrud_db::get_instance();
        $db->query("SELECT * FROM formato WHERE id =".$_GET['id']); // executes query, returns count of affected rows
        $resultados = $db->row(); // loads results as list of arrays
?>


<div class="container-fluid" style="width: 85%;">
	<br>
<div class="row">
    <div class="col">
      <h2>ODP Lluvia de azúcar</h2>
	  <br>
	  <h5>Orden: [<?php echo $resultados['id']; ?>] - Cliente [<?php echo $resultados['nombreCliente'] ?>] </h5>
      <h5>Dirección: <?php echo $resultados['direccionEntrega'] ?></h5>
    </div>
    <div class="col-md-auto">
    </div>
  </div>

		<table class="table table-sm">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Concepto:</th>
		      <th scope="col">Descripción:</th>
		      <th scope="col">Concepto:</th>
		      <th scope="col">Descripción:</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td class="table-active">Fecha compromiso</td>
		      <td><?php echo $resultados['fechaEntrega']; ?></td>
		      <td class="table-active">Fecha de producción</td>
		      <td><?php echo $resultados['fechaProduccion'] ?></td>
		    </tr>
		    <tr>
		      <td class="table-active">#ODS:</td>
		      <td><?php echo $resultados['ODS']; ?></td>
		      <td class="table-active">PAX:</td>
		      <td><?php echo  $resultados['pax'];?></td>
		    </tr>
		    <tr>
		      <td class="table-active">Producto:</td>
		      <td><?php echo $resultados['producto']?></td>
		      <td class="table-active">Evento:</td>
		      <td><?php echo $resultados['evento']; ?></td>
		    </tr>
		    <tr>
		     <td class="table-active">Tema:</td>
		      <td><?php echo $resultados['tema']; ?></td>
		      <td class="table-active">Texto en diseño:</td>
		      <td><?php echo $resultados['textoGeneral']; ?></td>
		    </tr>
		    <tr>
		        <td class="table-active">Tipo de pastel:</td>
		        <td><?php echo $resultados['tipoPastel']; ?></td>
                <td class="table-active">Tipo de flor:</td>
		        <td><?php echo $resultados['tipoFlor']; ?></td>
		    </tr>
			<tr>
		        <td class="table-active">Tipo Evento</td>
		        <td><?php echo $resultados['tipoEvento']; ?></td>
                <td class="table-active">Detalle Flor:</td>
		        <td><?php echo $resultados['descFlor']; ?></td>
		    </tr>
		    <tr>
		      <td class="table-active">Estado</td>
		      <td><?php echo $resultados['estado']; ?></td>
		      <td class="table-active">-</td>
		      <td><?php echo $resultados['notaInterna']; ?></td>
		    </tr>
		     </tbody>
		</table>

		<table class="table table-sm">
			<thead class="thead-dark">
			<tr>
				<th>#</th>
				<th>Altura</th>
				<th>Pan</th>
				<th>Relleno</th>
				<th>Relleno 2</th>
			</tr>
			</thead>

			<tbody>
				<tr>
					<td class="table-active">PAX 8</td>
					<td><?php echo $resultados['alturaPiso0']; ?></td>
					<td><?php echo $resultados['panPiso0'] ?></td>
					<td><?php echo $resultados['rellenoPiso0'] ?></td>
					<td><?php echo $resultados['relleno2Piso0'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 10</td>
					<td><?php echo $resultados['alturaPiso1']; ?></td>
					<td><?php echo $resultados['panPiso1'] ?></td>
					<td><?php echo $resultados['rellenoPiso1'] ?></td>
					<td><?php echo $resultados['relleno2Piso1'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 20</td>
					<td><?php echo $resultados['alturaPiso2']; ?></td>
					<td><?php echo $resultados['panPiso2'] ?></td>
					<td><?php echo $resultados['rellenoPiso2'] ?></td>
					<td><?php echo $resultados['relleno2Piso2'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 30</td>
					<td><?php echo $resultados['alturaPiso3']; ?></td>
					<td><?php echo $resultados['panPiso3'] ?></td>
					<td><?php echo $resultados['rellenoPiso3'] ?></td>
					<td><?php echo $resultados['relleno2Piso3'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 40</td>
					<td><?php echo $resultados['alturaPiso4']; ?></td>
					<td><?php echo $resultados['panPiso4'] ?></td>
					<td><?php echo $resultados['rellenoPiso4'] ?></td>
					<td><?php echo $resultados['relleno2Piso4'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 50</td>
					<td><?php echo $resultados['alturaPiso5']; ?></td>
					<td><?php echo $resultados['panPiso5'] ?></td>
					<td><?php echo $resultados['rellenoPiso5'] ?></td>
					<td><?php echo $resultados['relleno2Piso5'] ?></td>
				</tr>

			</tbody>
			
		</table>

<hr>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
		<p><b>Imagen de inspiración: </b> <?php ?></p>
		<img src="uploads/<?php echo $resultados['imagen'];?>" alt="" width="300" height="300">
    </div>
    <div class="col-sm-8">
		<p class=""> <b> Texto a escribir en pastel: </b> <?php echo $resultados['textoGeneral'];  ?></p>
		<p class=""> <b> Tema:</b> <?php echo $resultados['tema'];  ?></p>
		<p class=""> <b> Notas:</b> <?php echo $resultados['notaPastel'];  ?></p>
    </div>
    <div class="col-sm">
     
    </div>
  </div>
</div>

<hr>


<p>Fecha compromiso: <?php echo $resultados['fechaEntrega'];  ?> // Cliente: <?php echo $resultados['nombreCliente'];  ?> </p>
<p>Tipo de pastel: <?php echo $resultados['tipoPastel'];  ?> </p>
	
<table class="table table-sm">
			<thead class="thead-dark">
			<tr>
				<th>#</th>
				<th>Altura</th>
				<th>Pan</th>
				<th>Relleno</th>
				<th>Relleno 2</th>
			</tr>
			</thead>

			<tbody>
				<tr>
					<td class="table-active">PAX 8</td>
					<td><?php echo $resultados['alturaPiso0']; ?></td>
					<td><?php echo $resultados['panPiso0'] ?></td>
					<td><?php echo $resultados['rellenoPiso0'] ?></td>
					<td><?php echo $resultados['relleno2Piso0'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 10</td>
					<td><?php echo $resultados['alturaPiso1']; ?></td>
					<td><?php echo $resultados['panPiso1'] ?></td>
					<td><?php echo $resultados['rellenoPiso1'] ?></td>
					<td><?php echo $resultados['relleno2Piso1'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 20</td>
					<td><?php echo $resultados['alturaPiso2']; ?></td>
					<td><?php echo $resultados['panPiso2'] ?></td>
					<td><?php echo $resultados['rellenoPiso2'] ?></td>
					<td><?php echo $resultados['relleno2Piso2'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 30</td>
					<td><?php echo $resultados['alturaPiso3']; ?></td>
					<td><?php echo $resultados['panPiso3'] ?></td>
					<td><?php echo $resultados['rellenoPiso3'] ?></td>
					<td><?php echo $resultados['relleno2Piso3'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 40</td>
					<td><?php echo $resultados['alturaPiso4']; ?></td>
					<td><?php echo $resultados['panPiso4'] ?></td>
					<td><?php echo $resultados['rellenoPiso4'] ?></td>
					<td><?php echo $resultados['relleno2Piso4'] ?></td>
				</tr>

				<tr>
					<td class="table-active">PAX 50</td>
					<td><?php echo $resultados['alturaPiso5']; ?></td>
					<td><?php echo $resultados['panPiso5'] ?></td>
					<td><?php echo $resultados['rellenoPiso5'] ?></td>
					<td><?php echo $resultados['relleno2Piso5'] ?></td>
				</tr>

			</tbody>
			
		</table>
	

</div>

</body>
</html>




