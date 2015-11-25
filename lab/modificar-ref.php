<html>
<head>
<title>Modificar por Referencia</title>	
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/pedidos.css">
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
			<div class="col-md-10 pedidos">
				<img width="100%" align="center" src="../img/veotek-lab.png">
				<form method="post" action="registrar-cambios-pedido.php">
					<div class="col-xs-2 tec">
						<label>Modificado por:</label>
						<?php
							include("connection.php");
							$ref = $_POST['ref'];							
							$q = "select modificado from pedido where ref='$ref'";
							$result = mysql_query($q,$con);
							while($rs = mysql_fetch_assoc($result)){
								if(empty($rs['modificado'])){
									echo "<label>Nadie</label>";
								}
								else{
									echo "<label>".$rs['modificado']."</label>";
								}
							}
							include("connection.php");
							$code = $_POST['code'];
							$responsable = "select responsable from codigo where code = '$code'";
							$nombre_responsable = mysql_query($responsable,$con);
							while($rs = mysql_fetch_assoc($nombre_responsable)){
								$responsable_modificar = $rs['responsable'];
							}
						?>
						<label><b> Cambia de T&eacute;cnico</b></label>
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
								?></select>
					</div>
				<?php
				      	$queEmp = "SELECT * FROM pedido where ref='$ref'";
				    	$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
				    	$totEmp = mysql_num_rows($resEmp);
				    	if($totEmp == 0){
				    		echo "<h1>Folio no encontrado.</h1>";
				    	}	
					?>
					<?php while ($rowEmp = mysql_fetch_assoc($resEmp)) {?>	
					<div>
							<div class="col-xs-2"><label>Folio</label> <br><?php echo $rowEmp['folio']; ?> <input type="hidden" name="folio" value="<?php echo $rowEmp['folio']; ?>"></div>
							<div class="col-xs-2"><label>Referencia</label> <br><?php echo $rowEmp['ref']; ?> <input type="hidden" name="ref" value="<?php echo $rowEmp['ref']; ?>"></div>
							<div class="col-xs-2"><label>Fecha</label> <br><?php echo $rowEmp['fecha']; ?></div>
							<div class="col-xs-2"><label>Tecnico</label> <br> <?php echo $rowEmp['tecnico']; ?></div>
					<input type="hidden" value="<?php echo $responsable_modificar; ?>" name="responsable">
					</div>
					<br><br><br><br><br><br><br>


				 			<div class="col-xs-2 od"><label><b>OD</b></label></div>
				 			<div class="col-xs-2"><label>Esfera</label><input class="form-control" name="ode" value="<?php echo $rowEmp['ode1']; ?>"></div>
				 			<div class="col-xs-2"><label>Cilindro</label><input class="form-control" name="odc" vname="" alue="<?php echo $rowEmp['odc1']; ?>"></div>
				 			<div class="col-xs-2"><label>Eje</label><input class="form-control" name="odej" value="<?php echo $rowEmp['odej1']; ?>"></div>
				 			<div class="col-xs-2"><label>Add</label><input class="form-control" name="oda" value="<?php echo $rowEmp['oda1']; ?>"></div>
				 			<div class="col-xs-2"><label>DNP</label><input class="form-control" name="odd" value="<?php echo $rowEmp['odd1']; ?>"></div>
				 			<div class="col-xs-2"><label>Altura</label><input class="form-control" name="odal" value="<?php echo $rowEmp['odal1']; ?>"></div>
				 			<!--<div class="col-xs-2"><br><label>Prisma</br></label><input class="form-control" value="<?php echo $rowEmp['odp1']; ?>"></div>-->
				 			<!--<div class="col-xs-2"><br><label>Base Seg</br></label><input class="form-control" value="<?php echo $rowEmp['odb1']; ?>"></div>-->
				 		

				 			<div class="col-xs-2 oi"><label><b>OI</b></label></div>
				 			<div class="col-xs-2"><input class="form-control" name="oie" value="<?php echo $rowEmp['oie2']; ?>"></div>
				 			<div class="col-xs-2"><input class="form-control" name="oic" value="<?php echo $rowEmp['oic2']; ?>"></div>
				 			<div class="col-xs-2"><input class="form-control" name="oiej" value="<?php echo $rowEmp['oiej2']; ?>"></div>
				 			<div class="col-xs-2"><input class="form-control" name="oia" value="<?php echo $rowEmp['oia2']; ?>"></div>
				 			<div class="col-xs-2"><input class="form-control" name="oid" value="<?php echo $rowEmp['oid2']; ?>"></div>
				 			<div class="col-xs-2"><input class="form-control" name="oial" value="<?php echo $rowEmp['oial2']; ?>"></div>
				 			<!--<div class="col-xs-2"><input class="form-control" value="<?php echo $rowEmp['oip2']; ?>"></div>-->
				 			<!--<div class="col-xs-2"><input class="form-control" value="<?php echo $rowEmp['oib2']; ?>"></div>-->
				<div class="form-group">
					<div class="col-xs-3 desc">
						<label>Descripci&oacute;n</label>							

						<?php echo $rowEmp['descripcion']; ?><br>

					</div>
							
				</div>

					<div class="form-group">
						
						<div class="col-xs-3">
							<label><b>Armazones</b></label><br>
							<?php echo $rowEmp['armazon']; ?>
							<select class="form-control" id="armazones" name="armazones">
								<option value="Completos">COMPLETOS</option>
								<option value="Ranurados">RANURADOS</option>
								<option value="3 piezas">3 PIEZAS</option>
							</select>
						</div>
						
					</div>
					<div class="form-group">
						
						<div class="col-xs-3">
							<label><b>Micas</b></label><br>
							<?php echo $rowEmp['micas']; ?>
							<select class="form-control" id="micas" name="micas">						
								<option value="Monofocal">MONOFOCAL</option>
								<option value="Progresivo">PROGRESIVO</option>
								<option value="Flat-Top">FLAT-TOP</option>
								<option value="Blend">BLEND</option>
							</select>
						</div>
						
					</div>
					<div class="form-group">
						
						<div class="col-xs-3">
							<label><b>Materiales</b></label><br>
							<?php echo $rowEmp['materiales']; ?>
							<select class="form-control" id="materiales" name="materiales">						
								<option value="CR-39">CR-39</option>
								<option value="Poly">POLY</option>
								<option value="Hi-Index">HI-INDEX</option>
								<option value="Cristal">CRISTAL</option>
							</select>
						</div>
					</div>

					<div class="form-group">
							<div class="col-xs-3">
								
								<label><b>Tratamiento</b></label><br>
								<?php echo $rowEmp['tratamiento']; ?>
								<select class="form-control" id="tratamiento" name="tratamiento">	
									<option value="BCO">BCO</option>
									<option value="Antireflejante">ANTIREFLEJANTE</option>
									<option value="Fotocromatico">FOTOCROMATICO</option>
									<option value="Transitions">TRANSITIONS</option>
									<option value="Crizal">CRIZAL</option>
									<option value="Transitions-Crizal">TRANSITIONS-CRIZAL</option>
									<option value="AR-Foto">AR-FOTO</option>
									<option value="Polarizado">POLARIZADO</option>
									<option value="Polarizado-AR">POLARIZADO-AR</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3">
								<label><b>Tipo</b></label><br>
								<?php echo $rowEmp['tipo']; ?>
								<select class="form-control" id="tipo" name="tipo">							
									<option value="Terminado">TERMINADO</option>
									<option value="Procesado">PROCESADO</option>
									<option value="Rebisel">REBISEL</option>
								</select>
							</div>
						</div>

				
				<?php
					}



				?>
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<p>
					<div class="form-group">
						<p class="text-center">
		            		<input type="submit" id="submit" >
		            	</p>
		            </div>
		        </p>
				</form>	
			</div>
			<div class="col-md-2 menu">
				<div class="row">
					<ul>
						<li>
							<p class="text-center"><a href="seleccionar-pedido.php"><span class="glyphicon glyphicon-list-alt select" style="font-size:34px;"></span></a><br>
	                        Modificar Pedidos</p>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-6">
						<ul>
							<ul>
							<li>
								<p class="text-center"><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size:34px;"></span></a><br>
								Home</p>
							</li>
							<li>
								<p class="text-center"><a href="articulos.php"><span class="glyphicon glyphicon-file" style="font-size:34px;"></span></a><br>
								Articulos</p>
							</li>
							<li>
								<p class="text-center"><a href="alta.php"><span class="glyphicon glyphicon-log-in" style="font-size:34px;"></span></a><br>
		                        Entradas</p>
							</li>
							<li>
								<p class="text-center"><a href="baja.php"><span class="glyphicon glyphicon-log-out" style="font-size:34px;"></span></a><br>
		                        Salidas</p>
							</li>
							<li>
								<p class="text-center"><a href="modificar.php"><span class="glyphicon glyphicon-refresh" style="font-size:34px;"></span></a><br>
		                        Modificar</p>
							</li>
							<li>
								<p class="text-center"><a href="pedidos.php"><span class="glyphicon glyphicon-list-alt" style="font-size:34px;"></span></a><br>
		                        Pedidos</p>
							</li>
							<li>
								<p class="text-center"><a href="informes.php"><span class="glyphicon glyphicon-folder-open" style="font-size:34px;"></span></a><br>
		                        Informes</p>
							</li>
					</div>
					<div class="col-md-6">
						<ul>
							<li>
								<p class="text-center"><a href="busqueda.php"><span class="glyphicon glyphicon-search" style="font-size:34px;"></span></a><br>
		                        Busqueda</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


