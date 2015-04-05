<?php
include_once('includes/conexion.php');
$titulo="Contactos - Administrador";
$consulta_contactos = "SELECT * FROM contacto";
$resultado = mysqli_query($conexion,$consulta_contactos);
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
        
		<h1><?php echo $titulo; ?></h1>
	
	<?php
		while ($row = mysqli_fetch_assoc($resultado)){
			echo "<tr>";
            echo "<td>" . $row['id'];
			echo "<td>" . $row['nombre_usuario'] . "</td>";
            echo "<td>" . $row['asunto'] . "</td>";
			echo "<td>" . $row['correo'] . "</td>";
			echo "<td>" . $row ['mensaje'] . "</td>" . "<br/>";
			echo "</tr>";
		}
?>	
    </body>
</html>
