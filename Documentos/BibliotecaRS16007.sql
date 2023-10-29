CREATE DATABASE BibliotecaRS16007;

USE BibliotecaRS16007;

CREATE TABLE Autores (
    AutorID INT AUTO_INCREMENT PRIMARY KEY,
    PrimerNombre VARCHAR(40) NOT NULL,
    SegundoNombre VARCHAR(40),
    PrimerApellido VARCHAR(50) NOT NULL,
    SegundoApellido VARCHAR(50),
    Nacionalidad VARCHAR(50) NOT NULL
);

CREATE TABLE Libros (
    LibroID INT AUTO_INCREMENT PRIMARY KEY,
    TituloLibro VARCHAR(255) NOT NULL,
    ISBN VARCHAR(20) NOT NULL,
    Stock INT NOT NULL,
    AutorID INT NOT NULL,
    FOREIGN KEY (AutorID) REFERENCES Autores(AutorID)
);

CREATE TABLE Usuarios (
    UsuarioID INT AUTO_INCREMENT PRIMARY KEY,
    NombreUsuario VARCHAR(50) NOT NULL,
    PrimerNombreAlumno VARCHAR(30) NOT NULL,
    SegundoNombreAlumno VARCHAR(30) NOT NULL,
    PrimerApellidoAlumno VARCHAR(50) NOT NULL,
    SegundoApellidoAlumno VARCHAR(50) NOT NULL,
    EmailAlumno VARCHAR(120) NOT NULL,
    UsuarioAlumno VARCHAR(30) NOT NULL,
    ContraseñaAlumno VARCHAR(255) NOT NULL
);

