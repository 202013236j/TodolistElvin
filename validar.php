<?php
include('conexion.php');
$nom=$_POST['nom'];
$cod=$_POST['cod'];
session_start();
$_SESSION['nom']=$nom;


$conn = new mysqli("localhost","root","","TodoList");

$consulta="SELECT*FROM usuarios where nom='$nom' and cod='$cod";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index.html");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
//mysqli_free_result($resultado);
mysqli_close($conexion);
