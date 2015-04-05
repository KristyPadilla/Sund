<!DOCTYPE, html>
<html>
    <?php   
        include_once("header.php"); 
    ?>
    <body>
    <div class="nuevo_registro_imagen">   
    <form class="registro_usuario"action="includes/insertar_registro.php" method="post" class="registro">
    <label class="etiquetas">Usuario:</label>
    <input type="text" name="usuario">
    <label class="etiquetas">Clave:</label>
    <input type="password" name="password">
    <label class="etiquetas">Repetir Clave:</label>
    <input type="password" name="repassword">
    <label class="etiquetas">Email:</label> 
    <input type="text" name="email" size="20" maxlength="40" />

   
    <input class="boton" type="submit" name="enviar" value="Registrar">
    </form>
    </div> 
        
        <?php   
        include_once("footer.php"); 
    ?>
    </body>
</html>