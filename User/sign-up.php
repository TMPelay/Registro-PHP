<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="form.css">
		<title>Registrarse</title>
	</head>
	<body>
		<form action="../Conection-DB/new-user.php" class="form" method="post">
			<label class="title">Registro</label>
			<label class="label">Nombre de usuario:</label><input type="text" class="text-in" name="nick">
			<label class="label">Contraseña:</label><input type="password" class="text-in" name="passwd">
			<label class="label">Email:</label><input type="text" class="text-in" name="email">
			<input type="submit">
		</form>
	</body>
</html>