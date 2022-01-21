<?php include_once("conexion.php"); 
    
    $nombre 	= $_POST['txtnombre'];
    $correo 	= $_POST['txtcorreo'];
    $dni 	= $_POST['txtdni'];
    
	mysqli_query($conn, "INSERT INTO usuarios(nom,correo,tel) VALUES('$nombre','$correo','$dni')");
    
header("Location:index.php");
	

?>