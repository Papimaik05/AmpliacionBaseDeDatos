<?php

    require_once './includes/experiencias.php';   
    require_once './includes/Usuario.php'; 
    require_once './includes/config.php';
    $mensaje = "";
    $res=true;
    if($_SESSION["diferenciar"]=="Experiencia"){
        $experienciasSeleccionadas = $_POST['experiencias'];
        if (!empty($experienciasSeleccionadas)) {
            foreach ($experienciasSeleccionadas as $id) {
                if(Experiencia::borraPorId($id)){
                }
                else{
                    $res = false;
                }
            }
            if($res==false){
                $mensaje = "No se han podido eliminar todas las experiencias";
            }
            else{
                $mensaje = "Todos los elementos seleccionados se han borrado con exito";
            }
        } 
        else {
            $mensaje = "Por favor, seleccione al menos una experiencia.";
        }
        header("Location:borrarExperiencia.php?mensaje=$mensaje");
    }
    else if($_SESSION["diferenciar"]=="Usuario"){
        $usuariosSeleccionados = $_POST['usuarios'];
        if (!empty($usuariosSeleccionados)) {
            foreach ($usuariosSeleccionados as $nombre) {
                if(Usuario::borrarUsuario($nombre)){
                }
                else{
                    $res = false;
                }
            }
            if($res==false){
                $mensaje = "No se han podido eliminar todos los usuarios";
            }
            else{
                $mensaje = "Todos los elementos seleccionados se han borrado con exito";
            }
        } 
        else {
            $mensaje = "Por favor, seleccione al menos un usuario.";
        }
        header("Location:borrarUsuario.php?mensaje=$mensaje");
    }
?>