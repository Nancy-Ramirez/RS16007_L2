<?php

session_start();
    require_once "../Modelos/conexion.php";
    require_once "../Modelos/usuario.php";

    $obj = new usuarios();

    $datos = array(
        $_POST['NombreUsuario'],
        $_POST['PrimerNombreAlumno'],
        $_POST['SegundoNombreAlumno'],
        $_POST['PrimerApellidoAlumno'],
        $_POST['SegundoApellidoAlumno'],
        $_POST['EmailAlumno'],
        $_POST['ContraseñaAlumno'],
    );

    echo $obj->registroUsuario($datos);
?>