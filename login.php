<?php
require_once './includes/config.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <title>Login</title>
    </head>

<body>

            <?php
            require ('./includes/comun/cabecera.php');
            ?>
	    <main>  
        <div class="container" id="login">
            <div class="formulario">
                <h1>Inicio de sesión</h1>
                <form action="validarLogin.php" method="post">
                <fieldset>
                    <legend>Usuario y contraseña</legend>
                    <div><label>Name:</label> <input type="text" name="nombre" /></div>
                    <br>
                    <div><label>Password:</label> <input type="password" name="contr" /></div>
                    <br>
                    <?php
            if(isset($_GET["error"])){
                echo'<h3>'.$_GET["error"].'</h3>';
            }
            ?>
                    <div><button type="submit">Entrar</button></div>
                </fieldset>
                    <div class="registrarse">
                        Regístrese <a href="registro.php" id="link">aqui</a>
                    </div>
                </form>
            </div>
        </div>
	    </main> 
        <?php
            require('./includes/comun/pie.php');
        ?>        

</body>
</html>