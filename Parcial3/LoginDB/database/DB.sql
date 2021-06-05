
CREATE DATABASE DataB;

USE DataB;

CREATE TABLE Usuarios(

    idUsuario int PRIMARY KEY NOT NULL AUTO_INCREMENT,

    Nombre VARCHAR (40) NOT NULL,

    Correo VARCHAR (40) NOT NULL,

    Contrasena VARCHAR (40) NOT NULL
);
USE DataB;

INSERT INTO Usuarios (Nombre, Correo, Contrasena)
VALUES ('Prueba', 'samael', '6be801ba5cfb2d30e886b5bc57d0a315');
