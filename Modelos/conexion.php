<?php

    class conectar{
        private $servidor = "localhost";
        private $usuario = "admin";
        private $password = "admin";
        private $db = "BibliotecaRS16007";

        public function conexion(){
            $conexion = mysqli_connect(
            $this -> servidor,
            $this -> usuario,
            $this -> password,
            $this -> db );

            return $conexion;
        }
    }