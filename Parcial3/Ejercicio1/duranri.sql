
CREATE DATABASE duranri;

USE duranri;

CREATE TABLE Usuarios(

    idUsuario int PRIMARY KEY NOT NULL AUTO_INCREMENT,

    Nombre VARCHAR (40) NOT NULL,

    Correo VARCHAR (40) NOT NULL,

    Contrasena VARCHAR (40) NOT NULL
);
USE duranri;

INSERT INTO Usuarios (Nombre, Correo, Contrasena)
VALUES ('Jose1', 'Jose_1@****.com', '2d59be5b10488b7890ff9b9e5581c5ee');
INSERT INTO Usuarios (Nombre, Correo, Contrasena)
VALUES ('Jose2', 'Jose_2@****.com', '4cacb1fddf3ce449032984d47e37b7c4');
INSERT INTO Usuarios (Nombre, Correo, Contrasena)
VALUES ('Jose3', 'Jose_3@****.com', '07babefaf422777d8dc3ab5da7f638b5');
INSERT INTO Usuarios (Nombre, Correo, Contrasena)
VALUES ('Jose4', 'Jose_4@****.com', '6be801ba5cfb2d30e886b5bc57d0a315');
INSERT INTO Usuarios (Nombre, Correo, Contrasena)
VALUES ('Prueba', 'samael', '6be801ba5cfb2d30e886b5bc57d0a315');
