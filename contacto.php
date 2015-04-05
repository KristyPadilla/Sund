<html>
<head>
	 <?php include_once("header.php");?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
       <script>
        //cuando se envie el formuladio dentendras la funcion y utilizaras ajax en donde queremos que nos mande la información
           $(document).ready(function(){
        $("#formulario_contacto").submit(function(e){
            e.preventDefault();
            $.ajax({
            url:"includes/contacto_enviar_correo.php",
            type:"post",
            data: $("#formulario_contacto").serialize(),
            success: function(respuesta){
            $("#respuesta").html(respuesta);
            }
        });
    });
           
});
    
    </script>
</head>
<body>
	<div class="contacto">
		<div class="cuadro_contacto">

			 <h2 class="titulo_contacto">¡Contáctanos!</h2>
		 <form id="formulario_contacto">
                <input type="text" name="nombre_usuario" placeholder="Nombre">
                <input type="text" name="correo" placeholder="Correo">
		 		<input type="text" name="asunto" placeholder="Asunto">
             <textarea name="mensaje" rows ="8" cols="40"></textarea>
		 		<input type="submit" class= "boton">
		 </form>
            
            <div id="respuesta"></div>
		</div>
	</div>
    
	  <?php include_once("footer.php");?>
</body>
</html>