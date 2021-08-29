<?php
	include('conection.php');

	$query = 'SELECT * FROM USUARIOS';
	$result = mysqli_query($conection, $query);

	$i = 0;

	$info[$i] = array(0,1,2,3);
	
	while(($rows = mysqli_fetch_row($result)) == true){
		$info[$i][0] = $rows[0];
		$info[$i][1] = $rows[1];
		$info[$i][2] = $rows[2];
		$info[$i][3] = $rows[3];
		$i++;
	}

	$cycles = $i;
	
	mysqli_close($conection);
?>