<?php
	$con = mysqli_connect('localhost','root','','intranet');
	// checamos la conexion
	if (mysqli_connect_errno())
	{
	echo “Error al conectarse con MYSQL: “ . mysqli_connect_error();
	}
	?>