<?php
ob_start();
session_start();

include_once ("conexion.php"); 
$usuario = $_POST['usuario'];
 $password = $_POST['password'];
 $password=sha1(md5($password));
 
echo $query = "SELECT usuario, password, email  FROM registro_usuarios WHERE usuario = '$usuario' AND password = '$password'";
 
$resultado = mysqli_query($conexion,$query);


if(mysqli_num_rows($resultado)){
    
$array=mysqli_fetch_assoc($resultado);

$_SESSION["id"]= $array["id"];
$_SESSION["usuario"]= $array["usuario"]; 
$_SESSION["password"]= $array["password"];
$_SESSION["email"]= $array["email"];
 
 
header("Location:../bienvenida.php");
 
} else {
 
echo "<h2>Login o Password Incorrectos</h2>";
 
}
ob_end_flush();
?>