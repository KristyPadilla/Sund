<!DOCTYPE, html>
<html>
<head>
    
    <?php include_once("header.php");?>
    
</head>
    <body style="background:#d3d3d3;">
           
            <?php 
 session_start(); 
            echo "<h1 class='bienvenida'>Bienvenido " . $_SESSION['usuario'] . "</h1>";
            ?>
        <div class="warp">
            <ul class="nav_bienvenida">
                <a href="#"><li class="cuadros_bienvenida icon-address-book"></li></a>
                <a href="#"><li class="cuadros_bienvenida icon-spoon-knife"></li></a>
                <a href="#"><li class="cuadros_bienvenida icon-accessibility"></li></a>
                <a href="#"><li class="cuadros_bienvenida icon-book"></li></a>
            </ul>
        </div>   
    </body>
</html>