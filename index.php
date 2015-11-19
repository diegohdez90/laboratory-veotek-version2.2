<?php
	include ('funciones.php');
	if (verificar_usuario()){

include('connection.php');
    $queEmp = "SELECT der FROM usuario
    			where login='$_SESSION[login]'";
    $resEmp = mysql_query($queEmp, $con) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
echo "$rowEmp[der]<br>" ;


 $admin1="admin";
 $ventas="labventa";
 $lab="veoteklab";
 
 $permisos="$rowEmp[der]";
if ( $admin1 == $permisos){
	echo "Eres Administrador Bienvenido"; 
	header('Location:admin/');

}
else{
		if ( $ventas == $permisos){
			echo "Bienvenida Root"; 
			header('Location:pedido/');

		}else{
				if ( $lab == $permisos){
					echo "solisitudes"; 
					header('Location:lab/');

				}

		}
}
 }

		} else {
			header('Location:sesion.php');
		}
?>
<?php
?>