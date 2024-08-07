<?php
    require_once './includes/experiencias.php';
    require_once './includes/level.php';
    require_once './includes/Usuario.php';
    require_once './includes/rol.php';
    require_once './includes/config.php';
    $mensaje = "";
    $ret=false;
    $error_pass=true;
    if(isset($_POST["nombre"],$_POST["descripcion"],$_POST["precio"],$_FILES['imagen'],$_POST["puntos"],$_POST["nivelminimo"])&&$_POST["nombre"]!=''&&$_POST["descripcion"]!=''&&$_POST["precio"]!=''&&is_uploaded_file($_FILES['imagen']['tmp_name'])&&$_POST["puntos"]!=''){
        $nombre = $_POST["nombre"];
        $descripcion = $_POST['descripcion'];
        $puntos = $_POST['puntos'];
        $precio = $_POST['precio'];
        $nombre_img=$_FILES['imagen']['name'];         
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/ABD_CarlosMoreno_MiguelMateos/img/';
        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino . $nombre_img);
        $imagen = "./img/".$nombre_img;
        $nivelminimo = level::getNumero($_POST['nivelminimo']);
        $ret = Experiencia::crea($nombre,$descripcion,$precio,$nivelminimo,$puntos,$imagen);
    }else if(isset($_POST["nombre"],$_POST["email"],$_POST["contr"],$_POST["contr2"],$_POST["rol"],$_POST["puntos"])&&$_POST["nombre"]!=''&&$_POST["email"]!=''&&$_POST["contr"]!=''&&$_POST["contr2"]!=''&&$_POST["rol"]!=''&&$_POST["puntos"]!=''){
        if ( mb_strlen($_POST["contr"]) < 3 ) {
            $mensaje2 ="ERROR: El password tiene que tener una longitud de al menos 3 caracteres";
            $error_pass=false;
        }
        if($_POST["contr"]!=$_POST["contr2"]){
            $mensaje3 = "ERROR: Las contraseñas no coinciden";
            $error_pass=false; 
        }
        if( !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $mensaje4="ERROR: El email no es valido";
            $error_pass=false;
        }
        if($error_pass){
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $contr = $_POST['contr'];
            $puntos = $_POST['puntos'];
            $rol = rol::getNumero($_POST['rol']);
            $ret = Usuario::crea($nombre,$contr,$email,$rol,$puntos);
            if($ret==false){
                $mensaje1 = "El usuario ya existe";
            }
        }           
    }
   
    if($ret==true){
        $mensaje =  "Su inserción se ha realizado con éxito";
    }
    else{
        if(isset($_GET['esUs'])){
            $mensaje0 = "Error en la inserción, vuelva a intentarlo";
            $mensaje=$mensaje0.'<br>'.$mensaje1.'<br>'.$mensaje2.'<br>'.$mensaje3.'<br>'.$mensaje4;
        }else{
            $mensaje = "Error en la inserción, vuelva a intentarlo";
        }
       
    }
    if(isset($_GET['esExp'])){
        header("Location:insertarExperiencia.php?mensaje=$mensaje");
    }
    else if(isset($_GET['esUs'])){
        header("Location:insertarUsuario.php?mensaje=$mensaje");
    }
?>
