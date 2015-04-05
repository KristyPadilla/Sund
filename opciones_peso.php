
<script>
        //cuando se envie el formuladio dentendras la funcion y utilizaras ajax en donde queremos que nos mande la información
           $(document).ready(function(){
        $("#boton_bajar").click(function(e){
            e.preventDefault();
            $.ajax({
            url:"bajar_calorias.php",
            type:"post",
            data: $("#opciones").serialize(),
            success: function(n_calorias){
            $("#n_calorias").html(n_calorias);
            }
        });
    });
               
               $("#boton_mantener").click(function(e){
            e.preventDefault();
            $.ajax({
            url:"mantener_calorias.php",
            type:"post",
            data: $("#opciones").serialize(),
            success: function(n_calorias){
            $("#n_calorias").html(n_calorias);
            }
        });
    });
               
                 $("#boton_subir").click(function(e){
            e.preventDefault();
            $.ajax({
            url:"subir_calorias.php",
            type:"post",
            data: $("#opciones").serialize(),
            success: function(n_calorias){
            $("#n_calorias").html(n_calorias);
            }
        });
    });
           
});

    </script>
<div class="warp">
 <form id="opciones">
 <input class="botones boton_b" type="button" id="boton_bajar" value="Bajar">
<input class="botones boton_s" type="button" id="boton_subir" value="Subir">
<input class="botones boton_m" type="button" id="boton_mantener" value="Mantener">
     <input type="hidden" value="<?php echo $_POST['peso']; ?>">
     
</form>
    </div>
<div id="n_calorias"></div>
