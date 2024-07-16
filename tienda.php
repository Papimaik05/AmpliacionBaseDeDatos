<?php
require_once './includes/config.php';
?>
<?php
    require_once __DIR__.'/includes/experiencias.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link href= "./css/style.css" rel="stylesheet" type="text/css">
    <title>Tienda</title>
</head>
<body>
    <?php
        require ('./includes/comun/cabecera.php');
    ?>
    <div class="container">
        <h1>Tienda</h1>
        <br>
        <div class="productos">
            <section>
            <?php
            $experiencias=Experiencia::cargarExperiencias();
            if($experiencias==false){
                echo "No hay experiencias disponibles a la venta";
            }else{
                ?>
                <div class="catalogo">
                <?php  
                foreach($experiencias as $experiencia){
                ?>
                    <a class="item" <?php echo "href='vistaExperiencia.php?id=" . $experiencia->getId() . "'"; ?>>
                        <?php  
                        echo "<img src='". $experiencia->getImagen() ."' alt='imgProducto' id='img_exp'>";
                        ?>
                        <div class="texto">
                            <?php  
                            echo "<h3>".$experiencia->getNombre()."</h3>";
                            ?>
                        </div>
                    </a>    
                <?php
                }
                ?>
                </div>    
                <?php
            }
            ?>
        </section>
        </div>
        <br><br><br><br>
    </div>
    <?php
    require('./includes/comun/pie.php');
    ?>
</body>
</html>