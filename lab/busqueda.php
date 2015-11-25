<html>
<head>
<title>B&uacute;squeda</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/busqueda.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
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
            <div class="col-md-8 busqueda">
                <form action="pedidos-folio.php" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                <?php
                    include('connection.php');
                    $queEmp = "SELECT max(folio) as folio1 FROM pedido";
                    $resEmp = mysql_query($queEmp, $con) or die(mysql_error());
                    $totEmp = mysql_num_rows($resEmp);
                    while ($rowEmp = mysql_fetch_assoc($resEmp)) {
                ?>
                    <label><b>Folio</b></label><br>
                    <input class="form-control" id="folio" name="folio" value="<?php echo $rowEmp['folio1']; ?>" required="required">
                <?php
                    }
                ?>
                    <input type="submit" id="submit" value="BUSCAR" >
                </div>
            </form>


            <form action="pedidos-ref.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label><b>Referencia</b></label><br>
                    <input class="form-control" id="ref" name="ref" >
                    <input type="submit" id="submit" value="BUSCAR" >
                </div>
            </form>



            <form action="pedidos-tecnico.php" method="post" enctype="multipart/form-data">
                <label><b>Tecnico<b></label><br>
                <div class="form-group">
                <?php
                    include('connection.php');
                    $queEmp = "SELECT nombre FROM tecnos order by nombre ";
                    $resEmp = mysql_query($queEmp, $con) or die(mysql_error());
                    $totEmp = mysql_num_rows($resEmp);
                ?>
                <select class="form-control tech" id="tecnico" name="tecnico">
                <?php   
                    while ($rowEmp = mysql_fetch_assoc($resEmp)) {
                ?>
                <option value="<?php echo $rowEmp['nombre']; ?>"><?php echo $rowEmp['nombre']; ?></option>
                <?php
                    }
                ?>
                </select>
                    <input type="submit" id="submit" value="BUSCAR" >
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


