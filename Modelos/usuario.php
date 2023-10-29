<?php

class usuarios{
    public function ingresar($datos){
        $cn = new conectar();
        $conexion = $cn->conexion();
        $contraseña = sha1($datos[1]);

        $_SESSION['usuarios'] = $datos[0];
        $_SESSION['UsuarioID'] = self::traeId($datos);

        $sql = "SELECT * from usuarios
                where UsuarioAlumno = '$datos[0]' and ContraseñaAlumno = '$contraseña'";
        $result = mysqli_query($conexion, $sql);

		if (mysqli_num_rows($result) > 0) {
			return 1;
		} else {
			return 0;
		}
    }
    public function traeID($datos){
        $cn = new conectar();
        $conexion = $cn ->conexion();
        $contraseña = sha1($datos[1]);

        $sql = "SELECT UsuarioID 
					from usuarios 
					where UsuarioAlumno='$datos[0]'
					and ContraseñaAlumno='$contraseña'";
		$result = mysqli_query($conexion, $sql);

		return mysqli_fetch_row($result)[0];
    }
}