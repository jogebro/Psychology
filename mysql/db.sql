-- Active: 1685375354290@@127.0.0.1@3306@psychology
CREATE DATABASE psychology;
DROP DATABASE Psychology;
USE psychology;
CREATE TABLE psicologas(
    id_psico INT PRIMARY KEY AUTO_INCREMENT,
    nombre_psico VARCHAR(60),
    edad_psico INT,
    especialidad_psico VARCHAR(60)
);

CREATE TABLE campers(
  id_camper int PRIMARY KEY NOT NULL,
  imagen varchar(30) NOT NULL,
  nombre varchar(50) NOT NULL,
  edad int(11) NOT NULL,
  promedio int(11) NOT NULL,
  nivelCAmpus varchar(30) NOT NULL,
  nivelIngles varchar(30) NOT NULL,
  especialidad varchar(30) NOT NULL,
  direccion varchar(50) NOT NULL,
  celular varchar(10) NOT NULL,
  ingles float NOT NULL,
  Ser float NOT NULL,
  Review float NOT NULL,
  Skills float NOT NULL,
  Asitencia float NOT NULL
)