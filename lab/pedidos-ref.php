<html>
<head>
<title>Pedido por Referencia</title>	
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/busqueda.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/print-search.css" type="text/css" media="print" />
<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/lab.js"></script>

</head>


<body>

	<div class="container">
		<div class="row header">
			<div class="col-md-8">
				<img width="100%" align="center" src="../img/veotek-lab.png">	
			</div>
			<div class="col-md-4">
				
<?php
			include ('funciones.php');
							if (verificar_usuario()){
								print "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido $_SESSION[login] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> ";
								print "<a href='salir.php'/> Cerrar Sesion</a> ";


							} else {
								header('Location:sesion.php');
							}

echo'		
			</div>
		</div>';

?>



		<div class="row">
			<div class="col-md-8 busqueda busqueda-ref">
				<img width="100%" align="center" src="../img/veotek-lab.png">
				<?php
						$ref = $_POST['ref'];
						include('connection.php');
				      	$queEmp = "SELECT * FROM pedido where ref='$ref'";
				    	$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
				    	$totEmp = mysql_num_rows($resEmp);
				    	if($totEmp == 0){
				    		echo "<h1>Folio no encontrado.</h1>";
				    	}	
					?>
					<?php while ($rowEmp = mysql_fetch_assoc($resEmp)) {?>	
					<table class="table">
						<tr>
							<th>Folio</th>
							<th>Referencia</th>
							<th>Fecha</th>
							<th>Tecnico</th>
						</tr>
						<tr>
							<td><?php echo $rowEmp['folio']; ?></td>
							<td><?php echo $rowEmp['ref']; ?></td>
							<td><?php echo $rowEmp['fecha']; ?></td>
							<td><?php echo $rowEmp['tecnico']; ?></td>
						</tr>
					</table>

					<table  class="table">
				 		<tr>
				 			<th></th>
				 			<th>Esfera</th>
				 			<th>Cilindro</th>
				 			<th>Eje</th>
				 			<th>Add</th>
				 			<th>DNP</th>
				 			<th>Altura</th>
				 			<th>Prisma</th>
				 			<th>Base Seg</th>
				 		</tr>
				 		<tr>
				 			<td><b>OD</b></td>
				 			<td><?php echo $rowEmp['ode1']; ?></td>
				 			<td><?php echo $rowEmp['odc1']; ?></td>
				 			<td><?php echo $rowEmp['odej1']; ?></td>
				 			<td><?php echo $rowEmp['oda1']; ?></td>
				 			<td><?php echo $rowEmp['odd1']; ?></td>
				 			<td><?php echo $rowEmp['odal1']; ?></td>
				 			<td><?php echo $rowEmp['odp1']; ?></td>
				 			<td><?php echo $rowEmp['odb1']; ?></td>
				 		</tr>
				 		<tr>
				 			<td><label><b>OI</b></label></td>
				 			<td><?php echo $rowEmp['oie2']; ?></td>
				 			<td><?php echo $rowEmp['oic2']; ?></td>
				 			<td><?php echo $rowEmp['oiej2']; ?></td>
				 			<td><?php echo $rowEmp['oia2']; ?></td>
				 			<td><?php echo $rowEmp['oid2']; ?></td>
				 			<td><?php echo $rowEmp['oial2']; ?></td>
				 			<td><?php echo $rowEmp['oip2']; ?></td>
				 			<td><?php echo $rowEmp['oib2']; ?></td>
				 		</tr>
					</table>

				<table class="table">
					<tr>
						<th>
							Descripci&oacute;n							
						</th>
					</tr>
					<tr>
						<td>
							<?php echo $rowEmp['descripcion']; ?><br>
						</td>
					</tr>
				</table><br>
				

				<table class="table">
					<tr>
						<th>
							Armazones							
						</th>
						<th>
							Micas						
						</th>
						<th>
							Materiales							
						</th>
						<th>
							Tratamiento							
						</th>
						<th>
							Tipo						
						</th>
					</tr>
					<tr>
						<td>
							<?php echo $rowEmp['armazon']; ?><br>
						</td>
						<td>
							<?php echo $rowEmp['micas']; ?><br>
						</td>
						<td>
							<?php echo $rowEmp['materiales']; ?><br>
						</td>
						<td>
							<?php echo $rowEmp['tratamiento']; ?><br>
						</td>
						<td>
							<?php echo $rowEmp['tipo']; ?><br>
						</td>
					</tr>
				</table><br>
				
				<?php
					}



				?>		
			</div>
			<div class="col-md-4 menu">
				<div class="row">
					<ul>
						<li>
							<p class="text-center"><a href="seleccionar-pedido.php"><span class="glyphicon glyphicon-list-alt select" style="font-size:44px;"></span></a><br>
	                        Modificar Pedidos</p>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-6">
						<ul>
							<ul>
							<li>
								<p class="text-center"><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size:44px;"></span></a><br>
								Home</p>
							</li>
							<li>
								<p class="text-center"><a href="articulos.php"><span class="glyphicon glyphicon-file" style="font-size:44px;"></span></a><br>
								Articulos</p>
							</li>
							<li>
								<p class="text-center"><a href="alta.php"><span class="glyphicon glyphicon-log-in" style="font-size:44px;"></span></a><br>
		                        Entradas</p>
							</li>
							<li>
								<p class="text-center"><a href="baja.php"><span class="glyphicon glyphicon-log-out" style="font-size:44px;"></span></a><br>
		                        Salidas</p>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>
								<p class="text-center"><a href="modificar.php"><span class="glyphicon glyphicon-refresh" style="font-size:44px;"></span></a><br>
		                        Modificar</p>
							</li>
							<li>
								<p class="text-center"><a href="pedidos.php"><span class="glyphicon glyphicon-list-alt" style="font-size:44px;"></span></a><br>
		                        Pedidos</p>
							</li>
							<li>
								<p class="text-center"><a href="informes.php"><span class="glyphicon glyphicon-folder-open" style="font-size:44px;"></span></a><br>
		                        Informes</p>
							</li>
							<li>
								<p class="text-center"><a href="busqueda.php"><span class="glyphicon glyphicon-search" style="font-size:44px;"></span></a><br>
		                        Busqueda</p>
							</li>
							<li>
								<p class="text-center"><span onclick="window.print()" class="glyphicon glyphicon-print" style="font-size:44px;"></span></a><br>
		                        Imprimir</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


