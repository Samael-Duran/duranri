
CREATE DATABASE Inscritos;

USE Inscritos;

CREATE TABLE Inscritos(

    idInscrito int PRIMARY KEY NOT NULL AUTO_INCREMENT,

    Nombre VARCHAR (40) NOT NULL,

    PrimApellido VARCHAR (40) NOT NULL,

    SegApellido VARCHAR (40) NOT NULL,

    Edad int NOT NULL
);
USE Inscritos;

INSERT INTO Inscritos (Nombre, PrimApellido, SegApellido, Edad)
VALUES ('Jose', 'Diaz', 'Ramirez', '19');
INSERT INTO Inscritos (Nombre, PrimApellido, SegApellido, Edad)
VALUES ('Jose', 'Perez', 'Martinez', '19');
