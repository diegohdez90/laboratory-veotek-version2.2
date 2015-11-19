<?php
include ('funciones.php');
//usuario y clave pasados por el formulario
$login = $_POST['login'];
$password = $_POST['password'];
//usa la funcion conexiones() que se ubica dentro de funciones.php
if (conexiones($login, $password)){
	//si es valido accedemos a ingreso.php
	header('Location:index.php');
} else {
	//si no es valido volvemos al formulario inicial
	header('Location: sesion.php');
}
?>

