<?php
ob_start();
include_once("conexion.php");
echo $calorias = $_POST['num_calorias'];
echo $proteina = $_POST['proteina_r'];
echo $carbohidrato = $_POST['carbohidrato_r'];
echo $grasas = $_POST['grasas_r'];
echo $imc = $_POST['imc'];
echo $tipo_cuerpo = $_POST['tipo_cuerpo'];
echo $consulta_salud= "INSERT INTO datos_salud (num_calorias, proteina_r, carbohidrato_r, grasas_r, imc, tipo_cuerpo) VALUES ('$calorias', '$proteina', '$carbohidrato', '$grasas', '$imc', '$tipo_cuerpo')";
mysqli_query($conexion, $consulta_salud);
ob_end_flush();

?>