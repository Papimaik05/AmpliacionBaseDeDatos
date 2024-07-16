<!DOCTYPE html>
<html>
    <head>
        <title>Proceso 2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    </head>
    <body>
        <?php
        $usuario = $_POST['nombre'];
        $contr1 = $_POST['contr'];
        $contr2 = $_POST['contr2'];
        if($contr1==$contr2){
            $dbhost="localhost";
            $dbuser="root";
            $dbpass="";
            $dbname="Ej6";

            $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(!$conn){
                exit("Fallo en la conexion");
            }

            $query="INSERT INTO login(usuario,password) VALUES ('$usuario','$contr1')";
            if($conn->query($query)){
                // $conn->query($query) == mysqli_query($conn, $query) ES EXACTAMENTE LO MISMO
                 echo "<h2>Se ha dado de alta el usuario $usuario </h2>";
             }
        }
        else{
            echo "<h2>LAS CONTRASEÑAS NOOO COINCIDEN</h2>";
            
        }
        ?>
    </body>
</html>