<?php 
	$s="localhost";
	$bd="trabajo";
	$u="root";
	$p="";
	$conectar=new mysqli($s,$u,$p,$bd);
	if(!$conectar){
		echo"no se puede conectar1";
	}else{
		echo"conectado";
	}
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$calle=$_POST['calle'];
	$sql="INSERT INTO datos VALUES('$nombre','$correo','$calle')";

	$ejecutar=mysqli_query($conectar,$sql);
	if(!$ejecutar){
		echo"hubo un error";
	}
	else{
		echo"<br>Datos guardados<br><a herf='formulario.html'>Volver</a>";
	}
?>