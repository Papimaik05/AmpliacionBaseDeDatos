<?php
 function cafeote($ct){
      if($ct == "C"){
        echo " Cafe <br>";
      }
      elseif( $ct == "T"){
        echo " Te <br>";
      }
      else{
        echo " No ha elegido <br>";
      }
 }
 function obs($obs){
    if($obs == NULL){
      echo " Sin observaciones <br>";
    }
    else{
      echo " $obs <br>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Proceso</title>
    </head>
    <body>
        <div>
        <?php
            $nombre = $_POST['nom'];
            $telefono=$_POST['tel'];
            $correo=$_POST['mail'];
            $direccion=$_POST['dir'];
            echo "<h3>Primera Parte del formulario </h3>";
            echo "Nombre: $nombre <br>";
            echo "Telefono : $telefono <br>";
            echo "Correo : $correo <br>";
            echo "Direccion : $direccion <br>";

            $prim = $_POST['primero'];
            $seg=$_POST['segundo'];
            echo "<h3>Segunda Parte del formulario </h3>";
            echo "Primero: $prim <br>";
            echo "Segundo : $seg <br>";

            $ct = $_POST['cafeote'];
            echo "<h3>Cafe o te? </h3>";
            cafeote($ct);

            echo "<h3>Observaciones </h3>";
            $obs = $_POST['obs'];
            obs($obs);
            if(isset($_POST['condi'])){
                echo "<br> <h3>Ha aceptado las condiciones</h3> <br>";
            }
        
        ?>
        </div>
    </body>
</html>