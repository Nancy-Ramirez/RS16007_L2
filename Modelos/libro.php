<?php
    class libros{
        public function ingresarLibro($datos){
            $cn = new conectar();
            $conexion = $cn -> conexion();
            $sql = "INSERT into libros (
                LibroID,
                TituloLibro,
                ISBN,
                Stock,
                AutorID)
                values(
                '$datos[0]',
                '$datos[1]',
                '$datos[2]',
                '$datos[3]',
                '$datos[4]'
                )";
                return mysqli_query($conexion, $sql);
        }
        public function nombreAutor($AutorID){
            $cn = new conectar();
            $conexion = $cn-> conexion();

            $sql = "SELECT PrimerNombre, PrimerApellido from Autores where AutorID = '$AutorID'";

            $result = mysqli_query($conexion, $sql);

            $aut = mysqli_fetch_row($result);

            return $aut[1]. " " .$aut[0];
        }

        public function obtenDatosLibro($LibroID){
            $cn = new conectar();
            $conexion = $cn -> conexion();

            $sql = "SELECT LibroID,
                        TituloLibro,
                        ISBN,
                        Stock,
                        AutorID
                    FROM libros
                    WHERE LibroID = '$LibroID'";
            $result = mysqli_query($conexion, $sql);
            $lib = mysqli_fetch_row($result);

            $datos = array(
                'LibroID' => $lib[0],
                'TituloLibro' => $lib[1],
                'ISBN' => $lib[2],
                'Stock' => $lib[3],
                'AutorID' => $lib[4]
            );
            return $datos;
        }
    }