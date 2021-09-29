<?php
$usuario=$_POST['login'];
$password=$_POST['password'];
session_start();
$_SESSION['idusername']=$usuario;

$conexion=mysqli_connect("localhost","root","prueba2020","integra");

$consulta="select * from sgeu_usuario where usuario='$usuario'"; 
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);