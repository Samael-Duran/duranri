CREATE DATABASE duranri;
USE duranri;

CREATE TABLE Usuarios
(
    idUsuario int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR (40) NOT NULL,
    Correo VARCHAR (40) NOT NULL,
    Password VARCHAR (40) NOT NULL
);

INSERT INTO Usuarios (Nombre, Correo, Password)
VALUES (Jose1, Jose_1@****.com, Jose1.)
INSERT INTO Usuarios (Nombre, Correo, Password)
VALUES (Jose2, Jose_2@****.com, Jose2.)
INSERT INTO Usuarios (Nombre, Correo, Password)
VALUES (Jose3, Jose_3@****.com, Jose3.)
INSERT INTO Usuarios (Nombre, Correo, Password)
VALUES (Jose4, Jose_4@****.com, Jose4.)

SELECT * FROM Usuarios
