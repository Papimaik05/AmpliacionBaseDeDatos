<?php
require_once './includes/level.php';
require_once './includes/Usuario.php';
function reconocerUsuario() {
  if (isset($_SESSION["login"]) && ($_SESSION["login"]===true)){ 
    echo'Rol: '.Usuario::getNombreRol($_SESSION['rol']);
    $level=level::getLevel($_SESSION["puntos"]);
    if($level == level::cangrejo){
      echo '<form method="post" action="micuenta.php">
      <input type="image" src="./img/cangrejo.jpg" name="boton" width="50" alt="Botón icono cangrejo"  height="50" />
      </form>';
      echo 'Bienvenido ' . $_SESSION['nombre'] . '! ';
      echo '<a href="logout.php">(salir)</a>';
    }
    else if($level == level::delfin){
      echo '<form method="post" action="micuenta.php">
      <input type="image" src="./img/delfin.jpg" name="boton" width="50" alt="Botón icono delfin"  height="50" />
      </form>';
      echo 'Bienvenido ' . $_SESSION['nombre'] . '! ';
      echo '<a href="logout.php">(salir)</a>';
    }
    else if($level == level::megalodon){
      echo '<form method="post" action="micuenta.php">
      <input type="image" src="./img/tiburon.jpg" name="boton" width="50" alt="Botón icono tiburon"  height="50" />
      </form>';
      echo 'Bienvenido ' . $_SESSION['nombre'] . '! ';
      echo '<a href="logout.php">(salir)</a>';
    }
    else if($level == level::poseidon){
      echo '<form method="post" action="micuenta.php">
      <input type="image" src="./img/poseidon.jpg" name="boton" width="50" alt="Botón icono poseidon"  height="50" />
      </form>';
      echo 'Bienvenido ' . $_SESSION['nombre'] . '! ';
      echo '<a href="logout.php">(salir)</a>';
    }
  } else {
    echo '<form method="post" action="login.php">
    <input type="image" src="./img/usuariodesconocido.jpg" name="boton" width="50" alt="Botón para ir a login"  height="50" />
    </form>';
    echo 'Usuario desconocido. ';
    echo '<a href="login.php">Login </a>';
  }
}

?>
<header class ="header">
  <div class="cont logo-nav-cont" >
    <a class="logo">Amigos Marinos</a>
    <nav class="navigation">
      <ul>
        <li><a href="index.php ">Inicio</a></li>
        <li><a href="tienda.php">Tienda</a></li>
        <?php
        if (isset($_SESSION["login"]) && ($_SESSION["login"]===true)){
          ?>
          <li><a href="vistaCarrito.php">Carrito</a></li>
          <?php
          if($_SESSION["rol"] == "0"){
            ?>
            <li><a href="gestor.php">Gestor</a></li>
            <?php
          }
        }?>
      <ul>
    </nav>
  </div>    
	<div class="login" >
		<?php    
		reconocerUsuario();
		?>  
	</div>
</header>