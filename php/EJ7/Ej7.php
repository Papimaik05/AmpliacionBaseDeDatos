<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 7</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    </head>
    <body>
    <?php
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="ej7";

        $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if(!$conn){
            exit("Fallo en la conexion");
        }

        $query="SELECT DISTINCT  categoria FROM categorias ORDER BY categoria ASC";
        $result=$conn->query($query);
        
        if($result->num_rows>0){
            echo "<h2>Acceso Correcto</h2>";
            echo '<form action="Ej7.php" method="post">';
            echo'<br>';
            echo '<fieldset>';
                echo'<legend><b>EJERCICIO 7</b></legend>';
                echo'CATEGORIAS DISPONIBLES'; 
                echo '<select name ="categoria"';
                echo "<option></option>";
                while($row=mysqli_fetch_object($result)){
                    echo "<option>$row->categoria</option>";
                }
                // echo "<option></option>";
                // while($row = $result->fetch_assoc()){
                //     echo "<option value='" . $row["categoria"] . "'>" . $row["categoria"] . "</option>";
                // }

                echo '</select> <br>';
                echo 'Precio Minimo : <br><input type="text" name="minimo"><br>';
                echo 'Precio Maximo : <br><input type="text" name="maximo"><br>';
                echo'</fieldset>';
                echo'<br>';
                echo'<input type="submit" name="aceptar">';
                echo'</form><br><br>';
        }
        
        if($_POST['aceptar']){

            $query_libros = "SELECT titulo, categoria, precio FROM libros";
            $result_libros = $conn->query($query_libros);
            $categoria = $_POST['categoria'];
            $precio_min = $_POST['minimo'];
            $precio_max = $_POST['maximo'];
            $cont=0;
            while($row=mysqli_fetch_assoc($result_libros)){
                if($row['categoria'] == $categoria && $row['precio'] >= $precio_min && $row['precio'] <= $precio_max){
                    echo "<h1>$row[titulo]</h1> <br>";
                    $cont++;
                }
            }
            if($cont==0){
                echo "<h1>NO HAY NADA NENE</h1>";
            }
        }
        ?>
    </body>
</html>