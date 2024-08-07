<?php
require_once __DIR__.'/includes/config.php';
require_once __DIR__.'/includes/experiencias.php';
require_once './includes/compraexperiencia.php';
?>
<?php
function eliminar($cantidades, $tipo){
	foreach($cantidades as $id => $unidades){

		if(isset($_POST['borrar_'.$id.'_'.$tipo])){
			$i=0;
			$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : array();
			foreach($carrito as $index => $producto){
				if($producto['id'] == $id && $producto['tipo'] == $tipo){
					$i=$index;
				}
			}
			if (isset($carrito[$i])) {
				unset($carrito[$i]);
			}
			$_SESSION['carrito'] = $carrito;
			header("Location: vistaCarrito.php");
			exit();
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<link href= "./css/style.css" rel="stylesheet" type="text/css">
		<title>Carrito</title>
	</head>


	<body>

		<?php  
			require ('./includes/comun/cabecera.php');	
		?>
		<div class="container">
		<?php
			$username=$_SESSION["nombre"];

			if(isset($_POST['submit'])) {

				foreach ($_SESSION['carrito'] as $carrito) {
						$experiencia = Experiencia::buscaPorId($carrito['id']);
						$auxpuntos = $experiencia->getPuntos();
						compraexperiencia::compraExp($username,$carrito['id'],$auxpuntos);
						$_SESSION["puntos"]=$_SESSION["puntos"]+$auxpuntos;
						$_SESSION["level"]=level::getNombre(level::getLevel($_SESSION["puntos"]));
				}
				$_SESSION['carrito']=array();
				header("Location:felicitaciones.php");
			}
			
			if(isset($_POST['borrar'])) {
				$_SESSION['carrito'] = array();
			}
			if ($_SESSION['carrito']) {
				$cantidadesExp = array();
				foreach ($_SESSION['carrito'] as $carrito) {
					$id = $carrito['id'];
					$cantidadesExp[$id] = 1;
				}
				eliminar($cantidadesExp, 'experiencia');
			
			
			?>
			<div class="ticket">
			<img src="./img/cabeza_ticket.png" id="imgCarrito" alt="ticket">	
			<?php
				$total=0;
				foreach($cantidadesExp as $id => $unidades){
			?>
			<div class="experienciaCarrito">
				<?php 
					$experiencia = Experiencia::buscaPorId($id);
					echo  "<h1>" . $experiencia->getNombre() . "</h1>";
					echo '<img src="' . $experiencia->getImagen() . '" id="imgVistaProducto" alt="producto">';
					echo  "<h2>" . $experiencia->getPrecio() . " € </h2>";
					echo  "<h2>Esta experiencia otorga : " . $experiencia->getPuntos() . " Puntos </h2>";
					echo "<form method='post' action='vistaCarrito.php'>";
					echo "<input type='hidden' name='id' value='".$id."'>";
					echo "<input type='submit' name='borrar_".$id."_experiencia' value='Eliminar'>";
					$total=$total+$experiencia->getPrecio();
				?>
			</div>
			<?php
				}
			?>
			<h2>El precio total del carrito es: </h2>
			<?php
				echo"<h2>$total € </h2>";
			?>
			</div>
			<form method="post">
			<input type="submit" name="submit" value="Comprar">
			<input type="submit" name="borrar" value="Vaciar">
			</form> 
			<?php
				} else {
				echo '<h2>El carrito está vacío</h2>';
				}


			?>
			</div>
			<?php 
				require("./includes/comun/pie.php");
			?>

	</body>
</html>