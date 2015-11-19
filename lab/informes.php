<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/informes.css">
<link rel="stylesheet" href="css/report-print.css" type="text/css" media="print" />
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
								header('Location:session.php');
							}

echo'			
			</div>
		</div>';

?>



		<div class="row">
			<div class="col-md-8 informes">




				<div class="reports">
					<img width="100%" src="../img/veotek-lab.png">
					<h3 class="text-center">Reparaciones en los &uacute;ltimas d&iacute;as</h3>
					<canvas id="canvas" height="249" width="600"></canvas>
				</div>
					<?php
							$sdatea=date("Y-m-d");
							$sdateb=date("Y-m-d",strtotime("-1 days"));
							$sdatec=date("Y-m-d",strtotime("-2 days"));
							$sdated=date("Y-m-d",strtotime("-3 days"));
							$sdatee=date("Y-m-d",strtotime("-4 days"));
							$sdatef=date("Y-m-d",strtotime("-5 days"));
							$sdateg=date("Y-m-d",strtotime("-6 days"));

					?>
								

			<script>
			var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

			var barChartData = {
				labels : ["<?php echo $sdateg; ?>","<?php echo $sdatef; ?>","<?php echo $sdatee; ?>","<?php echo $sdated; ?>","<?php echo $sdatec; ?>","<?php echo $sdateb; ?>","<?php echo $sdatea; ?>"],
				datasets : [
					{
						fillColor : "rgba(220,220,220,0.5)",
						strokeColor : "rgba(220,220,220,0.8)",
						highlightFill: "rgba(220,220,220,0.75)",
						highlightStroke: "rgba(220,220,220,1)",
						data : [<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>
								]
					}

				]

			}
			window.onload = function(){
				var ctx = document.getElementById("canvas").getContext("2d");
				window.myBar = new Chart(ctx).Bar(barChartData, {
					responsive : true
				});
			}

			</script>


			<p class="text-center">
			<a href="informes-fecha.php"><button  type="submit" class="btn btn-default form-control">INFORMES POR FECHAS</button></a>
			<a href="informes-tecnico.php"><button  type="submit" class="btn btn-default form-control">INFORMES POR TECNICOS</button></a>
			</p>

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


