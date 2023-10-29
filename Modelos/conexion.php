<?php

    class conectar{
        private $servidor = "localhost";
        private $usuario = "root";
        private $password = "";
        private $db = "bibliotecars16007";

        public function conexion(){
            $conexion = mysqli_connect(
            $this -> servidor,
            $this -> usuario,
            $this -> password,
            $this -> db );

            return $conexion;
        }
    }