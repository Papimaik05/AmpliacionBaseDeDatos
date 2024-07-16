<?php
require_once './includes/config.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <title>Registro</title>
    </head>

<body>
<?php
require ('./includes/comun/cabecera.php');
?>
<main>
<div class="container" id="login">
    <div class="formulario">
        <h1>Registro</h1>
        <article>  
        <form action="procesarRegistro.php" method="post">
            <fieldset>
            <legend>Registro</legend>
            <div><label>Name:</label> <input type="text" name="nombre" /></div>
            <div><label>Email:</label> <input type="text" name="email" /></div>
            <div><label>Contraseña:</label> <input type="password" name="contr" /></div>
            <div><label>Repita Contraseña:</label> <input type="password" name="contr2" /></div>
            <?php
            if(isset($_GET["error"])){
                echo'<h3>'.$_GET["error"].'</h3>';
            }
            ?>    
            <br>
            <button type="submit" name="registro">Registrar</button>
            </fieldset>
            <br>
        </form>
        </article>
    </div>
</div> 
</main> 
<?php
    require('./includes/comun/pie.php');
?>            
</body>
</html>