<?php
	include('../Conection-DB/exist-user.php');

	$array_info = $info;
	$array_cycles = $cycles;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="form.css">
		<title>Registrarse</title>
	</head>
	<body>
		<form action="javascript:void(0);" class="form" method="post" id="in">
			<label class="title">Iniciar</label>
			<label class="label">Nombre de usuario:</label><input type="text" class="text-in" id="nick">
			<label class="label">Contraseña:</label><input type="password" class="text-in" id="passwd">
			<input type="submit">
		</form>
		<script>
			var array_info = '<?php echo json_encode($array_info) ?>';
			var array_cycles = '<?php echo $array_cycles ?>';
		</script>
		<script src="in.js"></script>
	</body>
</html>