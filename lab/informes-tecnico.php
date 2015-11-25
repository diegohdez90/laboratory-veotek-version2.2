<html>
<head>
<title>Informes por T&eacute;cnico</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/informes.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/articles-print.css" type="text/css" media="print" />
<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/lab.js"></script>
<script src="js/chart.js"></script>

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
			<div class="col-md-8 informes informes-tecnicos">
				<h3 class="text-center">Consultar por d&iacute;a</h3>
				<form action="tecnicos.php" method="get" enctype="multipart/form-data">
					<div class="form-group">
						<select class="form-control" id="tecnico" name="tecnico">
							<?php
								include('connection.php');
									$queEmp = "SELECT nombre FROM tecnos";
								$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
								$totEmp = mysql_num_rows($resEmp);
								while ($rowEmp = mysql_fetch_assoc($resEmp)) {?>
							<option value="<?php echo $rowEmp['nombre']; ?>"><?php echo strtoupper($rowEmp['nombre']); ?></option>	
							<?php
									}
								?>
						</select>
					</div>
						<input class="form-control" type="date" id="date" name="date"><br>
						<input class="form-control" type="submit" id="submit" value="CONSULTAR">
				</form>

				<h3 class="text-center">Consultar por rango</h3>
				<form action="tecnicos-rango.php" method="get" enctype="multipart/form-data">
					<div class="form-group">
						<select class="form-control"id="tecnico" name="tecnico">
							<?php
								include('connection.php');
									$queEmp = "SELECT nombre FROM tecnos";
								$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
								$totEmp = mysql_num_rows($resEmp);
								while ($rowEmp = mysql_fetch_assoc($resEmp)) {?>
							<option value="<?php echo $rowEmp['nombre']; ?>"><?php echo strtoupper($rowEmp['nombre']); ?></option>	
							<?php
									}
								?>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="date" id="date" name="date"><br><input class="form-control" type="date" id="date2" name="date2"><br>
						<input class="form-control" type="submit" id="submit" value="CONSULTAR">
					</div>
				</form>
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
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>


