<?php
include_once('conexion.php');

$para = $_POST['correo'];
$nombre = $_POST['nombre_usuario'];
$asunto = $_POST['asunto'];
$msg = $_POST['mensaje'];
$msg_html = "<h1>Nueva peticion de contacto </h1>";
$cabeceras= "From: enviado@sund.com";

if (mail($para, $asunto, $msg_html, $cabeceras)){
 echo "Mensaje enviado exitosamente";
}else{
    echo "intenta más tarde";
}


echo $consulta_contacto = "INSERT INTO contacto (nombre_usuario,asunto,correo,mensaje) VALUES ('$para','$nombre','$asunto','$msg')";

mysqli_query($conexion, $consulta_contacto);

?>
