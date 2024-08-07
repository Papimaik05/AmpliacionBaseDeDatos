<?php
require_once './includes/Usuario.php';
require_once './includes/pedido.php';
require_once './includes/experiencias.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <title>Index</title>
    </head>

    <body>
        <?php
            require ('./includes/comun/cabecera.php');        
        ?>
        <main>
            <div class="container">
                <h1>Historial de pedidos</h1>
                <?php
                    $pedidos=Pedido::cargaPedidos($_SESSION['nombre']);

                    if($pedidos == false){
                        echo "No hay pedidos realizados";
                    }
                    else{    
                        $exp=0;
                        foreach($pedidos as $pedido){
                            
                            
                                if($exp==0){
                                    echo "<h2>Experiencias compradas</h2>";
                                    $exp++;
                                }
                                ?>
                                <div class="recuadro-pedido">
                                    <?php
                                        $experiencia=Experiencia::buscaPorId($pedido->getIdProducto());
                                        echo "<img src='". $experiencia->getImagen() ."' alt = 'imgExperiencia' id='imagen_historial'>";
                                        echo "<h3>" . $experiencia->getNombre() ."</h3>";
                                        echo "<h3>Total: " . $experiencia->getPrecio() ." euros</h3>";
                                    ?>
                                </div>
                                <br>
                                <?php
                            

                        }
                    }
                    ?>
            </div> 
        </main> 
        <?php
            require('./includes/comun/pie.php');
        ?>           
    </body>
</html>