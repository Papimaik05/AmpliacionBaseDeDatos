<!DOCTYPE html>
<html>
    <head>
        <title>Proceso</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    </head>
    <body>
        <?php
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="Ej6";

        $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if(!$conn){
            exit("Fallo en la conexion");
        }

        $nombre=$_POST["nombre"];
        $contr=$_POST["contr"];

        $query="SELECT * FROM login WHERE usuario='$nombre' AND password='$contr'";
        $resultado=mysqli_query($conn, $query);
        
        if(mysqli_num_rows($resultado)==1){
            echo "<h2>Acceso Correcto</h2>";
            echo "Bienvenido <b>$nombre<b>";
        }
        else{
            echo "<h2>Acceso Denegado</h2>";
            echo "No hay nadie registrado con ese nombre";
            echo'<br>';
            echo '<form action="proceso2.php" method="post">';
            echo'<br>';
            echo '<fieldset>';
                echo'<legend><b>DATOS USUARIO</b></legend>';
                echo'Usuario : <br><input type="text" name="nombre" >'; 
                echo'<br>';
                echo'Contraseña :<br><input type="text" name="contr" >'; 
                echo'<br>';
                echo'Repetir Contraseña :<br><input type="text" name="contr2" >'; 
                echo'</fieldset>';
                echo'<br>';
                echo'<input type="submit" name="aceptar">';
                echo'</form>';
        }


        ?>
    </body>
</html>