<?php 
include_once("conexion.php");
include_once("index.php");

$codigo = $_GET['cod'];
 
$querybuscar = mysqli_query($conn, "SELECT * FROM usuarios WHERE cod=$codigo");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['cod'];
    $nombre = $mostrar['nom'];
    $correo = $mostrar['correo'];
	$dni = $mostrar['dni'];
}
?>
<html>
<head>    
		<title>Todolist</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar usuario</th></tr>
		     <tr> 
                <td>Codigo</td>
                <td><input type="text" name="txtcodigo" value="<?php echo $codigo;?>" required ></td>
            </tr>
            <tr> 
                <td>Nombre de tarea</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required></td>
            </tr>
            <tr> 
                <td>Descripción de tarea</td>
                <td><input type="text" name="txtcorreo" value="<?php echo $correo;?>" required></td>
            </tr>
            <tr> 
                <td>dni</td>
                <td><input type="text" name="txtdni" value="<?php echo $dni;?>"required></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="index.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Editar" onClick="javascript: return confirm('¿Deseas modificar a este usuario?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $codigo1 = $_POST['txtcodigo'];
	
	$nombre1 	= $_POST['txtnombre'];
    $correo1 	= $_POST['txtcorreo'];
    $dni1 	= $_POST['txtdni']; 
      
    $querymodificar = mysqli_query($conn, "UPDATE usuarios SET nom='$nombre1',correo='$correo1',dni='$dni1' WHERE cod=$codigo1");

  	echo "<script>window.location= 'index.php' </script>";
    
}
?>