CREATE DATABASE Saep02

USE Saep02

CREATE TABLE Funcionario
(      id_Fun int primary key,
       Nome varchar(50),
       Cargo varchar(45));
       
CREATE TABLE Registros
(      id_Reg int primary key,
       Data date,
       Hora time);
       
ALTER TABLE Registros 
ADD COLUMN id_Fun int,
ADD CONSTRAINT fk_id_Funiona FOREIGN KEY (id_Fun) REFERENCES Funcionario(id_Fun) 