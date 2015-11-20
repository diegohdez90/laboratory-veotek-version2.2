<html>
<head>
<title>Registrando Baja</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/registrar-entrada.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/lab.js"></script>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=baja.php">
</head>


<body>

	<div class="container baja">
		<div class="row error">
			<img id="cargando" src="img/cargando.gif">
				<?php
					$sku = $_POST['sku'];
					$numsalida = $_POST['numsalida'];
                    //1. Crear conexión a la Base de Datos
                    $link = mysqli_connect("localhost","root","veotek");
                        mysqli_select_db($link, "inventario1");  

                    //4. Insertar campos en la Base de Datos (No inserto el id_empleado ya que se genera automaticamente)
                    $insertar = mysqli_query($link, "update inventario set cantidad = cantidad-'$numsalida'  where sku='$sku'");
                    if (!$insertar) {
                        die("<h3 class='text-center'>Fallo en la insercion de registro en la Base de Datos: " . mysql_error(). "</h3>");
                    }
                    //4. Cerrar conexión a la Base de Datos
                    mysqli_close($link);
                ?>
	            </div>
	</div>


</body>
