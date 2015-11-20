<html>
<head>
<title>Registrando Pedido</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/registrar-pedido.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/lab.js"></script>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=pedidos.php">
</head>


<body>

	<div class="container registrar">
		<div class="row error">
			<img id="cargando" src="img/cargando.gif">
				<?php
                            //1. Crear conexión a la Base de Datos
                        $link = mysqli_connect("localhost","root","veotek");
                                mysqli_select_db($link, "inventario1");  
                                
                        $folio = $_POST['folio'];
                        $ref = $_POST['ref'];
                        $fecha = $_POST['fecha'];
                        $tecnico=$_POST['tecnico'];
                        $ode1=$_POST['ode'];
                        $odc1=$_POST['odc'];
                        $odej1=$_POST['odej'];
                        $oda1=$_POST['oda'];
                        $odd1=$_POST['odd'];
                        $odal1=$_POST['odal'];
                        //$odp1=$_POST['odp'];
                        //$odb1=$_POST['odb'];
                        $oie2=$_POST['oie'];
                        $oic2=$_POST['oic'];
                        $oiej2=$_POST['oiej'];
                        $oia2=$_POST['oia'];
                        $oid2=$_POST['oid'];
                        $oial2=$_POST['oial'];
                        //$oip2=$_POST['oip'];
                        //$oib2=$_POST['oib'];
                        $descrip = $_POST['descrip'];
                        $status = $_POST['status'];
                        $armazon = $_POST['armazones'];
                        $micas = $_POST['micas'];
                        $materiales = $_POST['materiales'];
                        $tratamiento = $_POST['tratamiento'];
                        $tipo = $_POST['tipo'];
                        $m_a = $_POST['medida-a'];
                        $m_b = $_POST['medida-b'];
                        $m_ed = $_POST['medida-ed'];
                        $m_dbl = $_POST['medida-dbl'];



                        //4. Insertar campos en la Base de Datos (No inserto el id_empleado ya que se genera automaticamente)
                        $res = mysqli_query($link,"select ref from pedido where ref = '$ref'");
                        $rows = mysqli_num_rows($res);
                        if($rows==0){
                            $insertar = mysqli_query($link,"insert into pedido (folio,ref,fecha,tecnico,ode1,odc1,odej1,odd1,oda1,odal1,oie2,oic2,oiej2,oid2,oia2,oial2,descripcion,status,armazon,micas,materiales,tratamiento,tipo,ma,mb,med,mdbl) values ('$folio','$ref','$fecha','$tecnico','$ode1','$odc1','$odej1','$odd1','$oda1','$odal1','$oie2','$oic2','$oiej2','$oid2','$oia2','$oial2','$descrip','$status','$armazon','$micas','$materiales','$tratamiento','$tipo','$m_a','$m_b','$m_ed','$m_dbl')");
                        }
                        else{
                            die("<h3 class='text-center'>Duplicado el valor de Referencia ".$rows. " Valores duplicados</h3>");
                        }

                        if (!$insertar) {
                        die("<h3 class='text-center'>Fallo en la insercion de registro en la Base de Datos: " . mysql_error(). "Posible dato de REFERENCIA duplidado</h3>");
                    }
                    //4. Cerrar conexión a la Base de Datos
                    mysqli_close($link);

                ?>
	            </div>
	</div>


</body>
