<html>
<head>
<title>Bienvenidos a Bisel</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link href='https://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>
</head>


<body>

	<div class="container">
		<div class=" header row">
			<img width="100%" align="center" src="img/veotek-lab.png">
		</div>
		<div class="register row">
			<form role="form" action="inicio.php" method="post" ctype="multipart/form-data">
				<div class="form-group">
					<label>Nombre de usuario</label><input placeholder="Nombre de usuario" name="login">
				</div>
				<div class="form-group">
					<label>Passoword</label><br><input type="password" placeholder="Contrase&ntilde;a" name="password">
				</div>
				<br>
				<input class="btn btn-default" type="submit" value="Iniciar sesi&oacute;n">
			</form>
		</div>
	</div>
</body>