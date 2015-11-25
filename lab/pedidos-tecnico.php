<html>
<head>
<title>Pedidos por t&eacute;cnico</title>
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
			<div class="col-md-8 busqueda busqueda-tecnica">
				<img width="100%" align="center" src="../img/veotek-lab.png">

					<?php
								$tecnico = $_POST['tecnico'];
								include('connection.php');			
					      		$queEmp = "SELECT * FROM pedido where tecnico='$tecnico' order by folio desc limit 30";
					    		$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
					    		$totEmp = mysql_num_rows($resEmp);
							?>
							<h3>&Uacute;ltimos trabajos de <?php echo $tecnico; ?></h3>
								<p><b>Tecnico: </b> <?php echo $tecnico ;?></p>
						<div class="table-responsive">
							<table class="table">
					  			<tr>
					    			<td>Folio</td>
					    			<td>Referencia</td>
					    			<td>Fecha</td>
					    			<td>OJO</td>
					    			<td>Esfera</td>
					    			<td>Cilindro</td>
					    			<td>Eje</td>
					    			<td>Add</td>
					    			<td>DNP</td>
					    			<td>Altura</td>
					    			<td>Prisma</td><td>Base seg</td>
					    			<td>descripcion</td>
					    			<td>status</td>
					    			<td>Armazones</td>
					    			<td>Micas</td>
					    			<td>Materiales</td>
					    			<td>Tratamiento</td>
					    			<td>Tipo</td>
					  			</tr>
							<?php while ($rowEmp = mysql_fetch_assoc($resEmp)) {?>	
								<tr>
					    			<td rowspan="2"><?php echo $rowEmp['folio']; ?></td>
					    			<td rowspan="2"><?php echo $rowEmp['ref']; ?></td>
					    			<td rowspan="2"><?php echo $rowEmp['fecha']; ?></td>
					    			<td><b>OD</b></td>
					    			<td><?php echo $rowEmp['ode1']; ?></td>
					 				<td><?php echo $rowEmp['odc1']; ?></td>
					 				<td><?php echo $rowEmp['odej1']; ?></td>
					 				<td><?php echo $rowEmp['oda1']; ?></td>
					 				<td><?php echo $rowEmp['odd1']; ?></td>
					 				<td><?php echo $rowEmp['odal1']; ?></td>
					 				<td><?php echo $rowEmp['odp1']; ?></td>
					 				<td><?php echo $rowEmp['odb1']; ?></td>
					    			<td rowspan="2"><?php echo $rowEmp['descripcion']; ?></td>
					    			<td rowspan="2"><?php echo $rowEmp['status']; ?></td>
					    			<td rowspan="2"><?php echo $rowEmp['armazon']; ?></td>
					    			<td rowspan="2"><?php echo $rowEmp['micas']; ?></td>
					    			<td rowspan="2"><?php echo $rowEmp['materiales']; ?></td>
					    			<td rowspan="2"><?php echo $rowEmp['tratamiento']; ?></td>
					    			<td rowspan="2"><?php echo $rowEmp['tipo']; ?></td>
					  			</tr>
					  			<tr>
					    			<td><b>OI</b></td>
					 				<td><?php echo $rowEmp['oie2']; ?></td>
					 				<td><?php echo $rowEmp['oic2']; ?></td>
					 				<td><?php echo $rowEmp['oiej2']; ?></td>
					 				<td><?php echo $rowEmp['oia2']; ?></td>
					 				<td><?php echo $rowEmp['oid2']; ?></td>
					 				<td><?php echo $rowEmp['oial2']; ?></td>
					 				<td><?php echo $rowEmp['oip2']; ?></td>
					 				<td><?php echo $rowEmp['oib2']; ?></td>
					  			</tr>
							<?php
					            }
					        ?>
					        </table>
					    </div>
							
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


