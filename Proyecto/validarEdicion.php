<?php
    require_once './includes/experiencias.php';  
    require_once './includes/level.php';  
    require_once './includes/Usuario.php'; 
    require_once './includes/rol.php'; 
    require_once './includes/config.php'; 
    $mensaje = "";
    $res=true;
    
    if(isset($_POST['experiencia'])){
        $idExperiencia=$_POST['experiencia'];
        $experiencia=Experiencia::buscaPorId($idExperiencia);
        if(!empty($_POST["nombre"])){
            $experiencia->setNombre($_POST['nombre']);
        }
        if(!empty($_POST['descripcion'])){
            $experiencia->setDescripcion($_POST['descripcion']);
        }
        if(!empty($_POST['nivelminimo'])){
            $experiencia->setNivelMinimo(level::getNumero($_POST['nivelminimo']));
        }
        if(!empty($_POST['puntos'])){
            $experiencia->setPuntos($_POST['puntos']);
        }
        if(!empty($_POST['precio'])){
            $experiencia->setPrecio($_POST['precio']);
        }
        if(isset($_FILES['imagen']) && is_uploaded_file($_FILES['imagen']['tmp_name'])){
            $nombre_img=$_FILES['imagen']['name'];         
            $tipo_img=$_FILES['imagen']['type'];
            $tamagno_img=$_FILES['imagen']['size'];
            $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/ABD_CarlosMoreno_MiguelMateos/img/';
            move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino . $nombre_img);
            $experiencia->setImagen("./img/".$nombre_img);
        }
        $experiencia->guarda();
        $mensaje =  "Experiencia modificada con exito";
    }
    elseif(isset($_POST['usuario'])){
        $nombreusuario=$_POST['usuario'];
        $usuario=Usuario::buscaUsuario(trim($nombreusuario));
        $sinerrores=true;
        if(!empty($_POST["email"])){
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mensaje="ERROR: El email no es valido";
            $sinerrores=false;
        } 
        }
        else{
            $email=$usuario->getEmail();
        }
        if(!empty($_POST['rol'])){
            $rol=rol::getNumero($_POST['rol']);
        }
        else{
            $rol=$usuario->getRol();
        }
        if(!empty($_POST['puntos'])){
            $puntos=$_POST['puntos'];
        }
        else{
            $puntos=$usuario->getPuntos();
        }
        if($sinerrores){
            $contr=$usuario->getContr();
            Usuario::cambioDatos(trim($nombreusuario),$usuario->getContr(),$email,$rol,$puntos);
            $mensaje =  "Usuario modificado con exito";
            
        } 
    }
    
    if($_GET['es']=="experiencia"){
        header("Location:modificarExperiencia.php?mensaje=$mensaje");
    }
    else if($_GET['es']=="usuario"){
        header("Location:modificarUsuario.php?mensaje=$mensaje");
    }

?>