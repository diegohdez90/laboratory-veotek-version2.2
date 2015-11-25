<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/informes.css">
<link rel="stylesheet" href="css/print-report.css" type="text/css" media="print" />
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
			<div class="col-md-8 informes informe-total">

				<?php
				include('connection.php');
				$url = "fechas.php";

       			$fecha = $_GET['date'];
?>

				<table class="table">
					<tr>
						<th>Fecha</th>
					</tr>
					<tr>
						<td><?php echo $fecha ?> </td>
					</tr>

				</table>

<?php

       			echo "<table class='table'>";
       				echo "<tr>";
       					echo "<td rowspan='4'>";
       						echo "Armazon</td></tr>";
	       			$query_armazon_completo = "select count(*) as Completos from pedido where armazon = 'Completos' and fecha='$fecha'";
	       			$ar_com = mysql_query($query_armazon_completo,$con);


	       			while ($row = mysql_fetch_array($ar_com)) {
	       				echo "<tr><td>Completos</td><td>".$row['Completos']."</td></tr>";
	       			}

	       			$query_armazon_Ranurados = "select count(*) as Ranurados from pedido where armazon = 'Ranurados' and fecha='$fecha'";
	       			$ar_ranurado = mysql_query($query_armazon_Ranurados,$con);
	       			while ($row = mysql_fetch_array($ar_ranurado)) {
	       				echo "<tr><td>Ranurados</td><td>".$row['Ranurados']."</td></tr>";
	       			}

	       			$query_armazon_3piezas = "select count(*) as 3Piezas from pedido where armazon = '3 piezas' and fecha='$fecha'";
	       			$ar_3piezas = mysql_query($query_armazon_3piezas,$con);
	       			while ($row = mysql_fetch_array($ar_3piezas)) {
	       				echo "<tr><td>3 Piezas</td><td>".$row['3Piezas']."</td></tr>";
	       			}


       				echo "<tr>";
       					echo "<td rowspan='5'>";
       						echo "Micas</td></tr>";
	       			$query_micas_Monofocal = "select count(*) as Monofocal from pedido where micas = 'Monofocal' and fecha='$fecha'";
	       			$micas_mono = mysql_query($query_micas_Monofocal,$con);
	       			while ($row = mysql_fetch_array($micas_mono)) {
	       				echo "<tr><td>Monofocal</td><td>".$row['Monofocal']."</td></tr>";
	      			}

	       			$query_micas_Progresivo = "select count(*) as Progresivo from pedido where micas = 'Progresivo' and fecha='$fecha'";      
	       			$micas_pro = mysql_query($query_micas_Progresivo,$con);
	       			while ($row = mysql_fetch_array($micas_pro)) {
	       				echo "<tr><td>Progresivo</td><td>".$row['Progresivo']."</td></tr>";
	       			}

	       			$query_micas_FlatTop = "select count(*) as FlatTop from pedido where micas = 'Flat-Top' and fecha='$fecha'";
	       			$micas_flat = mysql_query($query_micas_FlatTop,$con);
	       			while ($row = mysql_fetch_array($micas_flat)) {
	       				echo "<tr><td>Flat-Top</td><td>".$row['FlatTop']."</td></tr>";
	       			}

	       			$query_micas_Blend = "select count(*) as Blend from pedido where micas = 'Blend' and fecha='$fecha'";
	       			$micas_blend = mysql_query($query_micas_Blend,$con);
	       			while ($row = mysql_fetch_array($micas_blend)) {
	       				echo "<tr><td>Blend</td><td>".$row['Blend']."</td></tr>";
	       			}

       				echo "<tr>";
       					echo "<td rowspan='5'>";
       						echo "Materiales</td></tr>";	       			
	       			$query_materiales_CR39 = "select count(*) as CR39 from pedido where materiales = 'CR-39' and fecha='$fecha'";
	       			$mat_CR39 = mysql_query($query_materiales_CR39,$con);
	       			while ($row = mysql_fetch_array($mat_CR39)) {
	       				echo "<tr><td>CR-39</td><td>".$row['CR39']."</td></tr>";
	       			}

	       			$query_materiales_Poly = "select count(*) as Poly from pedido where materiales = 'Poly' and fecha='$fecha'";
	       			$mat_Poly = mysql_query($query_materiales_Poly,$con);
	       			while ($row = mysql_fetch_array($mat_Poly)) {
	       				echo "<tr><td>Poly</td><td>".$row['Poly']."</td></tr>";
	       			}

	       			$query_materiales_HI_Index = "select count(*) as HIIndex from pedido where materiales = 'HI-Index' and fecha='$fecha'";
	       			$mat_Index = mysql_query($query_materiales_HI_Index,$con);
	       			while ($row = mysql_fetch_array($mat_Index)) {
	       				echo "<tr><td>HI-Index</td><td>".$row['HIIndex']."</td></tr>";
	       			}

	       			$query_materiales_Cristal = "select count(*) as Cristal from pedido where materiales = 'Cristal' and fecha='$fecha'";
	       			$mat_Cristal = mysql_query($query_materiales_Cristal,$con);
	       			while ($row = mysql_fetch_array($mat_Cristal)) {
	       				echo "<tr><td>Cristal</td><td>".$row['Cristal']."</td></tr>";
	       			}


					echo "<tr>";
       					echo "<td rowspan='10'>";
       						echo "Tratamiento</td></tr>";	 
	       			$query_tratamiento_BCO = "select count(*) as BCO from pedido where tratamiento = 'BCO' and fecha='$fecha'";
	       			$trat_BCO = mysql_query($query_tratamiento_BCO,$con);
	       			while ($row = mysql_fetch_array($trat_BCO)) {
	       				echo "<tr><td>BCO</td><td>".$row['BCO']."</td></tr>";
	       			}

	       			$query_tratamiento_Antireflejante = "select count(*) as Antireflejante from pedido where tratamiento = 'Antireflejante' and fecha='$fecha'";
	       			$trat_Anti = mysql_query($query_tratamiento_Antireflejante,$con);
	       			while ($row = mysql_fetch_array($trat_Anti)) {
	       				echo "<tr><td>Antireflejante</td><td>".$row['Antireflejante']."</td></tr>";
	       			}

	       			$query_tratamiento_Fotocromatico = "select count(*) as Fotocromatico from pedido where tratamiento = 'Fotocromatico' and fecha='$fecha'";       	
	       			$trat_foto = mysql_query($query_tratamiento_Fotocromatico,$con);
	       			while ($row = mysql_fetch_array($trat_foto)) {
	       				echo "<tr><td>Fotocromatico</td><td>".$row['Fotocromatico']."</td></tr>";
	       			}

	       			$query_tratamiento_Transitions = "select count(*) as Transitions from pedido where tratamiento = 'Transitions' and fecha='$fecha'";
	       			$trat_trans = mysql_query($query_tratamiento_Transitions,$con);
	       			while ($row = mysql_fetch_array($trat_trans)) {
	       				echo "<tr><td>Transitions</td><td>".$row['Transitions']."</td></tr>";
	       			}

	       			$query_tratamiento_Crizal = "select count(*) as Crizal from pedido where tratamiento = 'Crizal' and fecha='$fecha'";
	       			$trat_Crizal = mysql_query($query_tratamiento_Crizal,$con);
	       			while ($row = mysql_fetch_array($trat_Crizal)) {
	       				echo "<tr><td>Crizal</td><td>".$row['Crizal']."</td></tr>";
	       			}

	       			$query_tratamiento_Transitions_Crizal = "select count(*) as TransitionsCrizal from pedido where tratamiento = 'Transitions-Crizal' and fecha='$fecha'";
	       			$trat_Trans_Crizal = mysql_query($query_tratamiento_Transitions_Crizal,$con);
	       			while ($row = mysql_fetch_array($trat_Trans_Crizal)) {
	       				echo "<tr><td>Transitions-Crizal</td><td>".$row['TransitionsCrizal']."</td></tr>";
	       			}

	       			$query_tratamiento_ARFoto = "select count(*) as ARFoto from pedido where tratamiento = 'AR-Foto' and fecha='$fecha'";
	       			$trat_ARFoto = mysql_query($query_tratamiento_ARFoto,$con);
	       			while ($row = mysql_fetch_array($trat_ARFoto)) {
	       				echo "<tr><td>AR-Foto</td><td>".$row['ARFoto']."</td></tr>";
	       			}

	       			$query_tratamiento_Polarizado = "select count(*) as Polarizado from pedido where tratamiento = 'Polarizado' and fecha='$fecha'";
	       			$trat_Polarizado = mysql_query($query_tratamiento_Polarizado,$con);
	       			while ($row = mysql_fetch_array($trat_Polarizado)) {
	       				echo "<tr><td>Polarizado</td><td>".$row['Polarizado']."</td></tr>";
	       			}

	       			$query_tratamiento_PolarizadoAR = "select count(*) as PolarizadoAR from pedido where tratamiento = 'Polarizado-AR' and fecha='$fecha'";
	       			$trat_PolarizadoAR = mysql_query($query_tratamiento_PolarizadoAR,$con);
	       			while ($row = mysql_fetch_array($trat_PolarizadoAR)) {
	       				echo "<tr><td>Polarizado-AR</td><td>".$row['PolarizadoAR']."</td></tr>";
	       			}


	       			echo "<tr>";
       					echo "<td rowspan='4'>";
       						echo "Tipo</td></tr>";
	       			$query_tipo_terminado = "select count(*) as Terminado from pedido where tipo = 'Terminado' and fecha = '$fecha'";
	       			$tipo_Terminado = mysql_query($query_tipo_terminado,$con);
	       			while ($row = mysql_fetch_array($tipo_Terminado)) {
	       				echo "<tr><td>Terminado</td><td>".$row['Terminado']."</td></tr>";
	       			}

	       			$query_tipo_procesado = "select count(*) as Procesado from pedido where tipo = 'Procesado' and fecha = '$fecha'";
	       			$tipo_procesado = mysql_query($query_tipo_procesado,$con);
	       			while ($row = mysql_fetch_array($tipo_procesado)) {
	       				echo "<tr><td>Procesado</td><td>".$row['Procesado']."</td></tr>";
	       			}

	       			$query_tipo_Rebisel = "select count(*) as Rebisel from pedido where tipo = 'Rebisel' and fecha = '$fecha'";
	       			$tipo_Rebisel = mysql_query($query_tipo_Rebisel,$con);
	       			while ($row = mysql_fetch_array($tipo_Rebisel)) {
	       				echo "<tr><td>Rebisel</td><td>".$row['Rebisel']."</td></tr>";
	       			}
	       		echo "</table>";


       			$consulta_noticias = "SELECT * FROM pedido where fecha='$fecha'";
				$rs_noticias = mysql_query($consulta_noticias, $con);
				$num_total_registros = mysql_num_rows($rs_noticias);
				//Si hay registros
				if ($num_total_registros > 0) {
					//Limito la busqueda
					$TAMANO_PAGINA = 10;
        			$pagina = false;
					//examino la pagina a mostrar y el inicio del registro a mostrar
        			if (isset($_GET["pagina"]))
            		$pagina = $_GET["pagina"];        
					if (!$pagina) {
						$inicio = 0;
						$pagina = 1;
					}
					else {
						$inicio = ($pagina - 1) * $TAMANO_PAGINA;
					}
					//calculo el total de paginas
					$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);
					//pongo el n�mero de registros total, el tama�o de p�gina y la p�gina que se muestra
				?>

				


				<?php
					


					$consulta = "SELECT * FROM pedido where fecha='$fecha'  order by folio desc  LIMIT ".$inicio."," . $TAMANO_PAGINA;
					$rs = mysql_query($consulta, $con); ?>
					<div class="table-responsive">
						<table class="table" >
  							<tr>
  								<th>Tecnico</th>
    							<th>Folio</th>
    							<th>Referencia</th>
    							
    							<th>OJO</th>
    							<th>Esfera</th>
    							<th>Cilindro</th>
    							<th>Eje</th>
    							<th>Add</th>
    							<th>DNP</th>
    							<th>Altura</th>
    							<th>Prisma</th>
          						<th>Base seg</th>
          						<th>Armazon</th>
          						<th>Micas</th>
          						<th>Materiales</th>
          						<th>Tratamiento</th>
          						<th>Tipo</th>
  							</tr>
				<?php 	while ($row = mysql_fetch_array($rs)) { ?>
							<tr>
				  				<td rowspan="2"><?php echo $row['tecnico']; ?></td>
    							<td rowspan="2"><?php echo $row['folio']; ?></td>
    							<td rowspan="2"><?php echo $row['ref']; ?></td>


    							<td><b>OD</b></td>
    							<td><?php echo $row['ode1']; ?></td>
 	        					<td><?php echo $row['odc1']; ?></td>
 			    				<td><?php echo $row['odej1']; ?></td>
 			    				<td><?php echo $row['oda1']; ?></td>
 			    				<td><?php echo $row['odd1']; ?></td>
 			    				<td><?php echo $row['odal1']; ?></td>
 			    				<td><?php echo $row['odp1']; ?></td>
 			    				<td><?php echo $row['odb1']; ?></td>
 			    				<td rowspan="2"><?php echo $row['armazon']; ?></td>
 			    				<td rowspan="2"><?php echo $row['micas']; ?></td>
 			    				<td rowspan="2"><?php echo $row['materiales']; ?></td>
 			    				<td rowspan="2"><?php echo $row['tratamiento']; ?></td>
 			    				<td rowspan="2"><?php echo $row['tipo']; ?></td>

  							</tr>
  							<tr>
    							<td><b>OI</b></td>
          						<td><?php echo $row['oie2']; ?></td>
 	        					<td><?php echo $row['oic2']; ?></td>
 			    				<td><?php echo $row['oiej2']; ?></td>
 			    				<td><?php echo $row['oia2']; ?></td>
          						<td><?php echo $row['oid2']; ?></td>
          						<td><?php echo $row['oial2']; ?></td>
          						<td><?php echo $row['oip2']; ?></td>
          						<td><?php echo $row['oib2']; ?></td>
  							</tr>
  							<tr>
          						<td><b>Descripcion</b></td>
  								<td colspan="17"><?php echo $row['descripcion']; ?> </td>
  							</tr>
        					<tr>
          						<td></td>
          						<td colspan="17"> </td>
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

		<div class="row footer"><br>
				<p class="text-center">Numero de Pedidos <?php echo $num_total_registros;?></p>
				<p class="text-center">En cada pagina se muentra <?php echo $TAMANO_PAGINA ;?> pedidos</p>
				<p class="text-center">pagina <?php echo $pagina ;?> de <?php echo $total_paginas ;?> paginas</p><br>
				<p  class="text-center">
				<?php
					if ($total_paginas > 1) {
						if ($pagina != 1)
						echo '<a href="'.$url.'?pagina='.($pagina-1).'&date='.$fecha.'"><img src="img/boton1.png" border="0"></a>';
						for ($i=1;$i<=$total_paginas;$i++) {
							if ($pagina == $i)
							//si muestro el indice de la p�gina actual, no coloco enlace
							echo '<button id="numerodepagina2">'.$pagina.'</button>';
							else
							//si el �ndice no corresponde con la p�gina mostrada actualmente,
							//coloco el enlace para ir a esa p�gina
								echo '  <a href="'.$url.'?pagina='.$i.'&date='.$fecha.'"><button id="numerodepagina">'.$i.'</button></a>  ';
						}
					if ($pagina != $total_paginas)
						echo '<a href="'.$url.'?pagina='.($pagina+1).'&date='.$fecha.'"><img src="img/boton2.png" border="0"></a>';
					}
				}
				?>
			</p>
			</div>

	</div>
</body>


