<?php
//funcion para conectar a la base de datos y verificar la existencia del usuario
function conexiones($login, $password) {
	//conexion con el servidor de base de datos MySQL
	//$conectar = mysql_connect('localhost','root','141988');
	//mysql_select_db('imsspro',$conectar);
	include('connection.php');
	//sentencia sql para consultar el nombre del usuario
	$sql = "SELECT * FROM usuario WHERE login='$login' AND password='$password'";
	//ejecucion de la sentencia anterior
	$ejecutar_sql=mysql_query($sql,$con);
	//si existe inicia una sesion y guarda el nombre del usuario
	if (mysql_num_rows($ejecutar_sql)!=0){
		//inicio de sesion
		session_start();
		//configurar un elemento usuario dentro del arreglo global $_SESSION
		$_SESSION['login']=$login;
		//retornar verdadero
		return true;
	} else {
		//retornar falso
		return false;
	}
}
//funcion para verificar que dentro del arreglo global $_SESSION existe el nombre del usuario
function verificar_usuario(){
	//continuar una sesion iniciada
	session_start();
	//comprobar la existencia del usuario
	if ($_SESSION['login']){
		return true;
	}
}
?>

