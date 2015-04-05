<head>
     <?php include_once("header.php");?>

</head>
<style type="text/css">
    body{
        background:white;
        }
    
    .recuadro{
        color: white;
       text-align: center;
       width: 100%;
       padding: 20px 0px;
       background-color: #698846; 
    }
   
</style>
<body>
    <h1 class="recuadro">¿Qué tan activo eres?</h1>
    <input type="hidden" id="peso" value="<?php echo $_POST['peso'];?>" >
      <br/>
    
      <br/>
      <div class="warp">
    <input class="botones sedentario" type="button" value="Sedentario" onClick="calculoCal(16)">
   
    <input class="botones activo" type="button" value="Activo" onClick="calculoCal(18)">
    
    <input class="botones muy_activo" type="button" value="Muy activo" onClick="calculoCal(20)">
    </div>

   

    <h1 class="recuadro titulo_dos_perfil">¿Qué tipo de cuerpo tienes?</h1>

    <div class="warp">
         <br/>
        <input class="botones" type="button" value="ectomorfo" onClick="cuerpo(55, 25, 20)">
        <input class="botones" type="button" value="mesomorfo" onClick="cuerpo(40, 30, 30)">
        <input class="botones" type="button" value="endomorfo" onClick="cuerpo(25, 40, 35)">

    </div>
    <br/>
 <br/>
    <div class="resultados">
        <div class="warp">
            <label>Calorias</label>
            <input class="sinfondo" type="text" id="totalCal" size="10">
            <br/>
              <h2>Cantidad de porciones</h2>
            <label>carbohidratos</label>
            <input class="sinfondo" type="text" id="total_carbo" size="10" placeholder="gr">
            <label>proteínas</label>
            <input  class="sinfondo"type="text" id="total_proteina" size="10" placeholder="gr" >
            
             <label>Grasa</label>
            <input  class="sinfondo"type="text" id="total_grasa" size="10" placeholder="gr">

            <!--Formulario para ingresar los datos del usuaruio a la tabla en php -->
            <!--input de tipo hidden para que esté escondido el numero de calorias que se registrará en la tabla -->
            <input type="hidden" id="Tcal" name="calorias">
            
            <form style="float:right;"action="guardar_datos.php" method="post">
                <input id="guardado_datos" type="submit"  value="Guardar">
        </form>
            
            <script type="text/javascript">
    
    function calculoCal(actividad){
        var peso, actividad, totalCal;
        peso= document.getElementById("peso").value*2.2;
        totalCal=peso*actividad;
        document.getElementById("totalCal").value=totalCal.toFixed(1);
        document.getElementById("Tcal").value=totalCal.toFixed(1)
    }
    
    function cuerpo(carbohidrato, proteina, grasa){
        var  calorias;
        //Tomamos el resultado de las calorias totales de la función anterior
        calorias= document.getElementById("totalCal").value;
        //Definimos la variable cantidad_carbo para realizar las operaciones adecuadas y sacar la cantidad en gramos que las personas deben consumir.
        cantidad_carbo= ((carbohidrato*calorias)/100)/4;
        document.getElementById("total_carbo").value=cantidad_carbo.toFixed(1) + " gr";
        cantidad_proteina= ((proteina*calorias)/100)/4;
        document.getElementById("total_proteina").value=cantidad_proteina.toFixed(1) + " gr";
        cantidad_grasa= ((grasa*calorias)/100)/9;
        document.getElementById("total_grasa").value=cantidad_grasa.toFixed(1) + " gr";
    }    
</script>  
        </div>
    </div>    
</body>