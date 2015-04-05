<!DOCTYPE html>
<html>
 <head>
    <?php include_once("header.php");?>

<style type="text/css">

body{
    background: white;
}
    ::-webkit-input-placeholder {
   color:  #722f2a;
}

:-moz-placeholder { /* Firefox 18- */
   color:  #722f2a;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color:  #722f2a;  
}

:-ms-input-placeholder {  
   color:  #722f2a;  
}
.siguiente{
    color: white;
    background-color: #006273;
    border-radius: 3px;
    border: none;
    width: 100px;
    float: right;
   margin: 60px 100px;
}


</style>
         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
<script type="text/javascript">
 //definimos la funcion
 function calculaIMC()
 {
 //declaramos las variables
var peso, altura, imc, diagnostico;
//hacemos la llamada a los datos introducidos
 peso=document.getElementById("peso").value;
 altura=document.getElementById("altura").value/100;
//calculamos el imc
 imc=peso/(altura*altura);
//enviamos el resultado a la caja correspondiente y lo reducimos a 2 decimales
 document.getElementById("imc").value="Tu Imc es de " + imc.toFixed(2) + "%";
//mediante if comparamos el resultado para determinar si es correcto el peso
if(imc<=20.5)
 {
 diagnostico="Estas bajo de perso... te sugerimos aumentar " + (altura*altura*20.5-peso).toFixed(1) + " kilos";
 }
 else if(imc>=25.5)
{
diagnostico="Tienes sobrepeso... te sugerimos bajar "+(peso-altura*altura*25.5).toFixed(1) +" kilos";
}
else
 {
 diagnostico="Estas en tu peso ideal";
 }
//enviamos el comentario al input correspondiente de diagnostico
document.getElementById("diagnostico").value=diagnostico;
 }
    

       $(document).ready(function(){
         
        $("#opciones").click(function(e){
            
            e.preventDefault();
            $.ajax({
            url:"opciones_peso.php",
            type:"post",
            data: $("#indice_masa").serialize(),
            success: function(opciones_peso){
            $("#opciones_peso").html(opciones_peso);
           
            }
        });
     
    });
           
});
     
    
</script>
 </head>
 <body>
     <?php include_once "menu.php" ?>
<form id="indice_masa" style="position:relative;">

 <h1>Hola</h1>
 <!--definimos una caja donde introducir el dato del peso-->
 <input class="etiquetas_datos"type="text" name="peso" id="peso" size="3" maxlength="4" placeholder="Peso kg">
 <input class="etiquetas_datos"type="text" name="altura" id="altura" size="3" maxlength="3" placeholder="Estatura en cm">

 <input class="siguiente "type="button" id="opciones" value="siguiente" onClick="calculaIMC()">
 
     <div class="diagnostico">
         <h1>Diagnostico</h1>
         <input  type="text" name="imc" id="imc" size="10" maxlength="15">
        
         <input type="text" name="diagnostico" id="diagnostico" size="42"><br/>
    </div>
    
</form>
     <div id="opciones_peso"></div>
     
 </body>
</html>