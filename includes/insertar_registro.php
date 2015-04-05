<?php 
    
session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie.
include_once "conexion.php";

if(isset($_POST['enviar']))//Isset determina si una variable está definida y no es NULL
{
    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '' or $_POST['email'] == '')
    {
        echo 'Por favor llene todos los campos.';//Si los campos están vacíos muestra el siguiente mensaje, caso contrario sigue el siguiente codigo.
    }
    else
    {
        $consulta_registro = 'SELECT * FROM registro_usuarios';
        $resultado = mysqli_query($consulta_registro);
        $verificar_usuario = 0;//Creamos la variable $verificar_usuario que empieza con el valor 0 y si la condición que verifica el usuario(abajo), entonces la variable toma el valor de 1 que quiere decir que ya existe ese nombre de usuario por lo tanto no se puede registrar
 
        while($row = mysqli_fetch_object($resultado))
        {
            if($row->usuario == $_POST['usuario']) //Esta condición verifica si ya existe el usuario
            {
                $verificar_usuario = 1;
            }
        }
 
        if($verificar_usuario == 0)
        {
            if($_POST['password'] == $_POST['repassword'])//Si los campos son iguales, continua el registro y caso contrario saldrá un mensaje de error.
            {
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
                $password=sha1(md5($password));
                $email = $_POST['email'];
                $fecha = date("Y-m-d");
                
               echo $consulta_registro = "INSERT INTO registro_usuarios (usuario,password,email,fecha) VALUES ('$usuario','$password','$email','$fecha')";//Se insertan los datos a la base de datos y el usuario ya fue registrado con exito.
        mysqli_query($conexion, $consulta_registro);
            echo $to = $email;
            $subject = "Sund";
            $headers = "From: webmaster@example.com" . "\r\n";
            $msg = 'Usted se ha registrado correctamente.';
            
                mail($to,$subject,$msg,$headers);
            }
            else
            {
                echo 'Las claves no son iguales, intente nuevamente.';
            }
        }
        else
        {
            echo 'Este usuario ya ha sido registrado anteriormente.';
        }
    }
}

?>