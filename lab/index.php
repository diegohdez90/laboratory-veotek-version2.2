<?php


echo '<html>
<head>
<title>P&aacute;gina de inicio</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/lab.js"></script>

</head>
</head>
<style>
	body{
		background-color: rgb(0,172,200);
	}

	.row{
		background-color: white;
	}
</style>

<body>

	<div class="container">
		<div class=" header row">
			<div class="col-md-8">
				<img width="100%" align="center" src="../img/veotek-lab.png">	
			</div>
			<div class="col-md-4">';

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

//		include('conexion.php');


echo '
		<div class="row menu">


	        <div class="col-md-12">
	            <div class="well">
	                <div id="myCarousel" class="carousel fdi-Carousel slide">
	                 <!-- Carousel items -->
	                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
	                        <div class="carousel-inner onebyone-carosel">
	                            <div class="item active">
	                                <div class="col-xs-4">
	                                    <a href="pedidos.php"><span class="glyphicon glyphicon-list-alt" style="font-size:88px;"></span></a>
	                                    <div><p class="text-center">Pedidos</p></div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="col-xs-4">
	                                    <a href="informes.php"><span class="glyphicon glyphicon-folder-open" style="font-size:88px;"></span></a>
	                                    <div><p class="text-center">Informes</p></div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="col-xs-4">
	                                    <a href="busqueda.php"><span class="glyphicon glyphicon-search" style="font-size:88px;"></span></a>
	                                    <div><p class="text-center">Busqueda</p></div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="col-xs-4">
	                                    <a href="seleccionar-pedido.php"><span class="glyphicon glyphicon-list-alt" style="font-size:88px;"></span></a>
	                                    <div><p class="text-center">Ver pedidos</p></div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="col-xs-4">
	                                    <a href="articulos.php"><span class="glyphicon glyphicon-file" style="font-size:88px;"></span></a>
										<div><p class="text-center">Articulos</p></div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="col-xs-4">
	                                    <a href="alta.php"><span class="glyphicon glyphicon-log-in" style="font-size:88px;"></span></a>
	                                    <div><p class="text-center">Entradas</p></div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="col-xs-4">
	                                    <a href="baja.php"><span class="glyphicon glyphicon-log-out" style="font-size:88px;"></span></a>
	                                    <div><p class="text-center">Salidas</p></div>
	                                </div>
	                            </div>
	                            <div class="item">
	                                <div class="col-xs-4">
	                                    <a href="modificar.php"><span class="glyphicon glyphicon-refresh" style="font-size:88px;"></span></a>
	                                    <div><p class="text-center">Modificar</p></div>
	                                </div>
	                            </div>
	                            
	                        </div>
	                        
	                    </div>

	                    <!--/carousel-inner-->
	                </div><!--/myCarousel-->
	                <a class="left carousel-control" href="#eventCarousel" data-slide="prev">
                    	<span class="glyphicon glyphicon glyphicon-menu-left" style="font-size:25px;"></span>
                    </a>
                    <a class="right carousel-control" href="#eventCarousel" data-slide="next">
                    	<span class="glyphicon glyphicon glyphicon-menu-right" style="font-size:25px;"></span>
                    </a>
	            </div><!--/well-->
	        </div>
		</div>

	</div>
</body>
';

?>
