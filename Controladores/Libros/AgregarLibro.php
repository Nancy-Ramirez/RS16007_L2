<?php
    session_start();
    require_once "../../Modelos/conexion.php";
    require_once "../../Modelos/libro.php";

    $obj = new libros();

    $datos = array(
        $datos[0] = $_POST['LibroID'],
        $datos[1] = $_POST['TituloLibro'],
        $datos[2] = $_POST['ISBN'],
        $datos[3] = $_POST['Stock'],
        $datos[4] = $_POST['AutorID'],

    );
    echo $obj -> ingresarLibro($datos);