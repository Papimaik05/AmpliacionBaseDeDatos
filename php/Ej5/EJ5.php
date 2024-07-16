<!DOCTYPE html>
<html>
    <head> 
        <title> Ejercicio 5 </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    </head>
    <body>
        <?php
        $registrados = array(
        "Miguel" => "Mateos",
        "Carlos" => "Moreno",
        "Luis" => "Morales"
        );
        $nombre_form = $_POST['nom'];
        $cont_form = $_POST['contr'];
        if(array_key_exists($nombre_form , $registrados)){
            echo "Error: El usuario ya existe";
        }
        else{
            $registrados[$nombre_form]=$cont_form;
            echo "<h2>Usuarios registrados:</h2>";
            echo "<table>";
            echo "<tr><th>Usuario</th><th>Contraseña</th></tr>";
			foreach ($registrados as $usuario => $contraseña) {
				echo "<tr><td>$usuario</td><td>$contraseña</td></tr>";
			}
			echo "</table>";

        }
        ?>
    </body>
</html>