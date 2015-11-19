<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/pedidos.css">
<link rel="stylesheet" href="css/articles-print.css" type="text/css" media="print" />
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
								header('Location:session.php');
							}

echo'				
			</div>
		</div>';

?>



		<div class="row">
			<div class="col-md-10 pedidos">
				<form onsubmit="return confirm('¿Esta de acuerdo en proseguir?');" action="registrar-pedido.php" method="post" enctype="multipart/form-data">
    				<div class="form-group">
	    				<div class="col-xs-3">
	    				<?php
							include('connection.php');
								$queEmp = "SELECT max(folio) as folio1 FROM pedido";
							$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
							$totEmp = mysql_num_rows($resEmp);
							while ($rowEmp = mysql_fetch_assoc($resEmp)) {
								$folo=$rowEmp['folio1']; 
								$foli=$folo+1;?>
						<label><b>Folio</b></label>
						<input class="form-control" id="folio" name="folio" value="<?php echo $foli;?>" required="required">
						<?php
								}
							?>

							<?php
							$sdate=date("Y")."-".date("m")."-".date("d");
						?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-3">
							<label><b>Referencia</b></label>
							<input class="form-control"id="ref" name="ref" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-3">
							<label><b>Fecha</b></label>
							<input class="form-control" id="fecha" name="fecha" value="<?php echo "$sdate"; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-3">
							<label><b> T&eacute;cnico</b></label>
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
									?></select><br>
								</div>
							</div>
					<div class="form-group">
						<div class="col-xs-3">
							<label><b>Status</b></label>
							<select class="form-control" id="status" name="status">
								<option value="Entregado">ENTREGADO</option>
								<option value="Terminado">TERMINAOD</option>
								<option value="En proceso">EN PROCESO</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-3">
							<label><b>Armazones</b></label>
							<select class="form-control" id="armazones" name="armazones">
								<option value="Completos">COMPLETOS</option>
								<option value="Ranurados">RANURADOS</option>
								<option value="3 piezas">3 PIEZAS</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-3">
							<label><b>Micas</b></label>
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
							<label><b>Materiales</b></label>
							<select class="form-control" id="materiales" name="materiales">						
								<option value="CR-39">CR-39</option>
								<option value="Poly">POLY</option>
								<option value="Hi-Index">HI-INDEX</option>
								<option value="Cristal">CRISTAL</option>
							</select>
						</div>
					</div>
						<br><br><br>

									
										<div class="col-xs-2 od"><br><label><b>OD</b></label></div>
										<div class="col-xs-2"><label>Esfera</label><input class="form-control" id="ode" name="ode"></div>
										<div class="col-xs-2"><label>Cilindro</label><input class="form-control" id="odc" name="odc"></div>
										<div class="col-xs-2"><label>Eje</label><input class="form-control" id="odej" name="odej"></div>
										<div class="col-xs-2"><label>Add</label><input class="form-control" id="oda" name="oda"></div>
										<div class="col-xs-2"><label>DNP</label><input class="form-control" id="odd" name="odd"></div>
										<div class="col-xs-2"><label>Altura</label><input class="form-control" id="odal" name="odal"></div>
										<!--<div class="col-xs-2"><label>Prisma</label><input class="form-control" id="odp" name="odp"></div>
										<div class="col-xs-2"><label>Base S</label><input class="form-control" id="odb" name="odb"></div>-->
									<br><br><br>
										<div class="col-xs-2 oi"><label><b>OI</b></label></div> 
										<div class="col-xs-2"><input class="form-control" id="oie" name="oie"></div>
										<div class="col-xs-2"><input class="form-control" id="oic" name="oic"></div>
										<div class="col-xs-2"><input class="form-control" id="oiej" name="oiej"></div>
										<div class="col-xs-2"><input class="form-control" id="oia" name="oia"></div>
										<div class="col-xs-2"><input class="form-control" id="oid" name="oid"></div>
										<div class="col-xs-2"><input class="form-control" id="oial" name="oial"></div>
										<!--<div class="col-xs-2"><input class="form-control" id="oip" name="oip"></div>
										<div class="col-xs-2"><input class="form-control" id="oib" name="oib"></div>-->
									<br><br><br>

						



						<div class="form-group">
							<label><b>Descripcion</b> </label>
							<textarea rows="4" class="form-control" id="descrip" name="descrip" ></textarea>
						</div>
						<div class="form-group">
							<div class="col-xs-3">
								<label><b>Tratamiento</b></label>
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
								<label><b>Tipo</b></label>
								<select class="form-control" id="tipo" name="tipo">							
									<option value="Terminado">TERMINADO</option>
									<option value="Procesado">PROCESADO</option>
									<option value="Rebisel">REBISEL</option>
								</select>
							</div>
						</div>

								<label>Medidas</label><br>
								<div class="col-xs-2 medida"><label>A</label><input class="form-control" id="medida-a" name="medida-a"></div>
								<div class="col-xs-2 medida"><label>B</label><input class="form-control" id="medida-b" name="medida-b"></div>
								<div class="col-xs-2 medida"><label>ED</label><input class="form-control" id="medida-ed" name="medida-ed"></div>
								<div class="col-xs-2 medida"><label>DBL</label><input class="form-control" id="medida-dbl" name="medida-dbl"></div>
						<br><br><br><br>

						<div class="form-group">
							<p class="text-center">
			            		<input type="submit" id="submit" value="ENVIAR PEDIDO">
			            	</p>
			            </div>
				</form>
			</div>
			<div class="col-md-2 menu">
				<div class="row">
					<div class="col-md-6">
						<ul>
							<li>
								<p class="text-center small"><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size:44px;"></span></a><br>
								Home</p>
							</li>
							<li>
								<p class="text-center small"><a href="articulos.php"><span class="glyphicon glyphicon-file" style="font-size:44px;"></span></a><br>
								Articulos</p>
							</li>
							<li>
								<p class="text-center small"><a href="alta.php"><span class="glyphicon glyphicon-log-in" style="font-size:44px;"></span></a><br>
		                        Entradas</p>
							</li>
							<li>
								<p class="text-center small"><a href="baja.php"><span class="glyphicon glyphicon-log-out" style="font-size:44px;"></span></a><br>
		                        Salidas</p>
							</li>

							<li>
								<p class="text-center small"><a href="modificar.php"><span class="glyphicon glyphicon-refresh" style="font-size:44px;"></span></a><br>
		                        Modificar</p>
							</li>
							<li>
								<p class="text-center small"><a href="pedidos.php"><span class="glyphicon glyphicon-list-alt" style="font-size:44px;"></span></a><br>
		                        Pedidos</p>
							</li>
							<li>
								<p class="text-center small"><a href="informes.php"><span class="glyphicon glyphicon-folder-open" style="font-size:44px;"></span></a><br>
		                        Informes</p>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>
								<p class="text-center"><a href="seleccionar-pedido.php"><span class="glyphicon glyphicon-list-alt select" style="font-size:44px;"></span></a><br>
		                        Modificar Pedidos</p>
							</li>
							<li>
								<p class="text-center small"><a href="busqueda.php"><span class="glyphicon glyphicon-search" style="font-size:44px;"></span></a><br>
		                        Busqueda</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


