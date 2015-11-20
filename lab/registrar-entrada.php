<html>
<head>
<title>Registrando nuevo SKU</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/registrar-entrada.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/lab.js"></script>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=alta.php">
</head>


<body>

	<div class="container registrar">
		<div class="row error">
			<img id="cargando" src="img/cargando.gif">
	                    <?php
	                    //1. Crear conexión a la Base de Datos
	                    $link = mysqli_connect("localhost","root","veotek");
                                mysqli_select_db($link, "inventario1"); 
	                    $sku = $_POST['sku'];
	                    $descrip = $_POST['descrip'];
	                    $canti = $_POST['canti'];
	                    $canti2 = $_POST['canti2'];
	                    //4. Insertar campos en la Base de Datos (No inserto el id_empleado ya que se genera automaticamente)
	                    $insertar = mysqli_query($link, "insert into inventario (sku,descripcion,cantidad,cantidad2) values ('$sku','$descrip','$canti','$canti2')");
	                    if (!$insertar) {
	                        die("<h3 class='text-center'>Fallo en la insercion de registro en la Base de Datos: " . mysql_error(). "</h3>");
	                    }
	                    //4. Cerrar conexión a la Base de Datos
	                    mysqli_close($link);
	                ?>
	            </div>
	</div>


</body>
