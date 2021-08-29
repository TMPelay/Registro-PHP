<?php
	include('conection.php');

	echo "new-user";

	$user = $_POST['nick'];
	$passwd = $_POST['passwd'];
	$email = $_POST['email'];

	echo "<br>" . $user . $passwd . $email;

	$insert_user = "INSERT INTO `USUARIOS`(`nick`, `passwd`, `email`) VALUES ('$user','$passwd','$email')";

	echo "<br>" . $insert_user;

	$query = mysqli_query($conection, $insert_user);

	echo "<br>" . "hasta aca bien" . "<br>";

	if ($query) {
		echo "bien";
	} else {
		echo "mal";
	}
?>