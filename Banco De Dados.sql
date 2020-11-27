
CREATE DATABASE  `tcc` ;
USE `tcc`;


CREATE TABLE produto(
  id  int(11) NOT NULL AUTO_INCREMENT,
  produto varchar(50) DEFAULT NULL,
  cor varchar(24) DEFAULT NULL,
  valor int(50) DEFAULT NULL,
  quantidade int(54) DEFAULT NULL,
  codigo fiscal int(54) DEFAULT NULL,
  PRIMARY KEY (id)

);

CREATE TABLE usuario(

 id  int(11) NOT NULL AUTO_INCREMENT,
 nome varchar(50) DEFAULT NULL,
 senha varchar(24) DEFAULT NULL,
 PRIMARY KEY(id)
 
 );






