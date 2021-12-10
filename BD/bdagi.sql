create database if not exists dagi;
use dagi;

CREATE TABLE if not exists JUEGOS (
id INT,
nombre varchar(15) not null,
PRIMARY KEY (ID)
);
INSERT INTO JUEGOS VALUES (001,"Host");
INSERT INTO JUEGOS VALUES (002,"Memory");
INSERT INTO JUEGOS VALUES (003,"Hunt");
INSERT INTO JUEGOS VALUES (004,"Pacman");
INSERT INTO JUEGOS VALUES (005,"Shot Ball");

CREATE TABLE if not exists USERS(
id INT,
email varchar(200) not null,
contrasena varchar(100),
es_Admin boolean,
es_SuperAdmin boolean,
nickname varchar (15),
apellidos varchar(30) not null,
nombre varchar (15) not null,
ciclo varchar(5),
PRIMARY KEY (ID)
);
INSERT INTO USERS VALUES (001,"Ptoro@politecnis.barcelona","SOMOSCEP20",true,True,null,"Toro","Paco",null);
INSERT INTO USERS VALUES (002,"Jgrillo@politecnis.barcelona","SOMOSCEP20",True,False,null,"grillo","Joana",null);
INSERT INTO USERS VALUES (003,"Jlenovo@politecnis.barcelona","SOMOSCEP20",True,False,null,"Lenovo","Joan",null);
/*OPCIONAL ENCRIPTAR CONTRASEÑA*/

CREATE TABLE if not exists JUEGO_USER(
idJuego INT,
idUser INT,
juegoCompleto BOOLEAN,
score INT,
FOREIGN KEY (IDJuego) REFERENCES JUEGOS(ID),
FOREIGN KEY (IDUser) REFERENCES USERS(ID)
);
/*
CREATE TABLE if not exists CICLO(
ID INT,
Nombre varchar(75) not null,
Acrortar varchar(5) not null,
Grado varchar (9) not null,
PRIMARY KEY (ID)
);
INSERT INTO CICLO VALUES (001,"Sistemes microinformàtics i xarxes","SMX","Mitjà");
INSERT INTO CICLO VALUES (002,"Desarrollo de Aplicaciones Web","DAW","Superior");
INSERT INTO CICLO VALUES (003,"Desarrollo de Aplicaciones Multiplataforma","DAM","Superior");
INSERT INTO CICLO VALUES (004,"Activitats Comercials","AC","Mitjà");
INSERT INTO CICLO VALUES (005,"Marqueting i Publicitat","MP","Superior");
INSERT INTO CICLO VALUES (006,"Gestio de Vendes i Espais Comercials","GVEC","Superior");
INSERT INTO CICLO VALUES (007,"Comerç Internacional","CM","Superior");
INSERT INTO CICLO VALUES (008,"Agencies de Viatges i gestió d'esdeveniments","AVGE","Superior");
INSERT INTO CICLO VALUES (009,"Gestió Administrativa","GA","Mitjà");
INSERT INTO CICLO VALUES (010,"Administració i Finances","AF","Superior");
INSERT INTO CICLO VALUES (011,"Assistència a la Direccio","AD","Superior");*/