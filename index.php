<?php
include_once("conexion.php"); 
?>
<!--Busca por VaidrollTeam para más proyectos. -->
<html>
<head>    
		<title>VaidrollTeam</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
	<img src="logo.png">
			
		<form method="POST">
		
		</form>
		</div>
			<tr><th colspan="5"><h1>LISTAR DE TAREAS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>Código</th>
            <th>Nombre de la tarea</th>
            <th>Descripción de la tarea</th>
            <th>#</th>
            
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT cod,nom,correo,tel FROM usuarios where nom like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY cod asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
			echo "<td>".$numerofila."</td>";
            
            echo "<td>".$mostrar['nom']."</td>";
            echo "<td>".$mostrar['correo']."</td>";    
			echo "<td>".$mostrar['tel']."</td>";  
            echo "<td style='width:26%'><a href=\"editar.php?cod=$mostrar[cod]\">Modificar</a> | <a href=\"eliminar.php?cod=$mostrar[cod]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[nom]?')\">Eliminar</a></td>";           
}
        ?>
    </table>
	 <script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Agragra nueva tarea</th></tr>
            <tr> 
                <td>Nombre de tarea</td>
                <td><input type="text" name="txtnombre" required></td>
            </tr>
            <tr> 
                <td>Descripción de la tarea</td>
                <td><input type="text" name="txtcorreo" required></td>
            </tr>
            <tr> 
                <td>#</td>
                <td><input type="number" name="txttelefono" required></td>
            </tr>
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>