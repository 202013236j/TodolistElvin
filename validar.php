<?php
include('conexion.php');
$nombre=$_POST['nombre'];
$cod=$_POST['cod'];
session_start();
$_SESSION['nombre']=$nombre;


$conexion=mysqli_connect("localhost","root","","TodoList");

$consulta="SELECT*FROM nombre where nombre='$nombre' and cod='$cod";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
