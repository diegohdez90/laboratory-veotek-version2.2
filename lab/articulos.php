<html>
<head>
<title>Lista de art&iacute;culos</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/articles.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
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
								header('Location:sesion.php');
							}

echo'						
			</div>
		</div>';

?>



		<div class="row">
			<div class="col-md-10 articles">

				<img width="100%" align="center" src="../img/veotek-lab.png"> <h3 class="text-center">Art&iacute;culos de Veotek</h3>
	
<?php
	include('../connection.php');
	$url = "articulos.php";
	$consulta_noticias = "SELECT * FROM inventario";
				$rs_noticias = mysql_query($consulta_noticias, $con);
				$num_total_registros = mysql_num_rows($rs_noticias);
				//Si hay registros
				if ($num_total_registros > 0) {
					//Limito la busqueda
					$TAMANO_PAGINA = 30;
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
					$consulta = "SELECT sku, descripcion, cantidad, cantidad2 FROM inventario  LIMIT ".$inicio."," . $TAMANO_PAGINA;
					$rs = mysql_query($consulta, $con); ?>
					<div class="table-responsive">
						<table class="table">
								<tr>
									<th class="sku">SKU</th>
									<th class="desc">DESCRIPCION</th>
									<th class="cant">CANTIDAD</th>
								</tr>
						<?php 	while ($row = mysql_fetch_array($rs)) { ?>
								<tr id="fonsizeta">
									<td ><?php echo $row['sku']; ?></td>
									<td><?php echo $row['descripcion']; ?></td>
									<td><?php echo $row['cantidad']; ?>
										<?php echo $row['cantidad2']; ?></td>
								</tr>
						<?php
								}
						?>
						</table>
					</div>

				
			</div>
			<div class="col-md-2 menu">
				<div class="row">
					<ul>
						<li>
							<p class="text-center"><a href="seleccionar-pedido.php"><span class="glyphicon glyphicon-list-alt select" style="font-size:44px;"></span></a><br>
	                        Modificar 	Pedidos</p>
						</li>
					</ul>
				</div>
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
						<p class="text-center"><span onclick="window.print()" class="glyphicon glyphicon-print" style="font-size:44px;"></span>
                        Imprimir</p>
					</li>
				</ul>
			</div>
		</div>	

		<div class="row footer">
			<p class="text-center">Numero de articulos <?php echo $num_total_registros;?></p>
			<p class="text-center"> <?php echo $TAMANO_PAGINA ;?> articulos</p>
			<p class="text-center">pagina <?php echo $pagina ;?> de <?php echo $total_paginas ;?> paginas</p><br>
			<p class="text-center">
						<?php
							if ($total_paginas > 1) {

								if ($pagina != 1)


								echo '<a href="'.$url.'?pagina='.($pagina-1).'"><img src="img/boton1.png" border="0"></a>';
								for ($i=1;$i<=$total_paginas;$i++) {
									if ($pagina == $i)
									//si muestro el indice de la p�gina actual, no coloco enlace
									echo '<button id="numerodepagina2">'.$pagina.'</button>';
									else
									//si el �ndice no corresponde con la p�gina mostrada actualmente,
									//coloco el enlace para ir a esa p�gina
										echo '<a href="'.$url.'?pagina='.$i.'"><button id="numerodepagina">'.$i.'</button></a>  ';
								}
							if ($pagina != $total_paginas)
				?>
						
			<?php
								echo '<a href="'.$url.'?pagina='.($pagina+1).'"><img src="img/boton2.png" border="0"></a>';
							}
						}
						?>
					</p>
		</div>
	</div>

</body>



