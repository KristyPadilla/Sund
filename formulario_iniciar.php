<?php include_once("header.php");?> 

<div id="contenedor_formulario">   
       <form action="includes/iniciar_sesion.php" method="POST">
            <input type="text" class="campos" name="usuario" value="Usuario">
            <input type="password" class="campos" name="password">
            <input type="submit" id="boton_registro" value="Entrar">
        </form>
           <a href="nuevo_registro.php">Regístrate</a>   
    </div>
