<?php
    require_once './includes/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <title>GestorContenido</title>
    </head>

    <body>

        <?php
            require ('./includes/comun/cabecera.php');
        ?>
	    <main>
            <div class="container">
                <h1>Experiencias</h1>

                <div class="auxgestor">
                    <div class="card">
                        <figure>
                            <img src="./img/nuevo_icono.png"  alt="icono_gestor1">
                        </figure>
                        <div class="contenido">
                            <h3>Insertar Experiencia</h3>
                            <p>Haz click aquí para insertar una nueva experiencia en la tienda</p>
                            <a href="insertarExperiencia.php">Insertar</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure>
                            <img src="./img/obrera.jpg"  alt="icono_gestor2">
                        </figure>
                        <div class="contenido">
                            <h3>Modificar Experiencia</h3>
                            <p>Haz click aquí para modificar una experiencia existente en  la tienda</p>
                            <a href="modificarExperiencia.php">Modificar</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure>
                            <img src="./img/borrar.png"  alt="icono_gestor3">
                        </figure>
                        <div class="contenido">
                            <h3>Borrar Experiencia</h3>
                            <p>Haz click aquí para borrar una experiencia existente en  la tienda</p>
                            <a href="borrarExperiencia.php">Borrar</a>
                        </div>
                    </div>
                </div>
            <br><br>

            <h1>Usuarios</h1>
                <div class="auxgestor">
                    <div class="card">
                        <figure>
                            <img src="./img/anadir_usuario.jpg"  alt="icono_gestor4">
                        </figure>
                        <div class="contenido">
                            <h3>Insertar Usuario</h3>
                            <p>Haz click aquí para insertar un nuevo usuario</p>
                            <a href="insertarUsuario.php">Insertar</a>
                        </div>
                    </div>

                    <div class="card">
                        <figure>
                            <img src="./img/modificar_usuario.jpg"  alt="icono_gestor5">
                        </figure>
                        <div class="contenido">
                            <h3>Modificar Usuario</h3>
                            <p>Haz click aquí para modificar un usuario existente</p>
                            <a href="modificarUsuario.php">Modificar</a>
                        </div>
                    </div>
                
                    <div class="card">
                        <figure>
                            <img src="./img/eliminar_usuario.png"  alt="icono_gestor6">
                        </figure>
                        <div class="contenido">
                            <h3>Borrar Usuario</h3>
                            <p>Haz click aquí para borrar un usuario existente</p>
                            <a href="borrarUsuario.php">Borrar</a>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>   
	    </main> 
        <?php
            require('./includes/comun/pie.php');
        ?>        
       
</body>
</html>