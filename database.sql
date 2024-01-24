CREATE DATABASE test;
USE test;

CREATE TABLE Usuarios (
    id INT AUTO_INCREMENT,
    correo VARCHAR(100) NOT NULL,
    contrasena VARCHAR(100) NOT NULL,
    archivo TEXT,
    PRIMARY KEY (ID)
);