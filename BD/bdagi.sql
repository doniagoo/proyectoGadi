create database if not exists gadi;
use gadi;

CREATE TABLE if not exists JUEGOS (
iD INT,
nombre varchar(15) not null,
PRIMARY KEY (ID)
);
INSERT INTO JUEGOS VALUES (001,"Host");
INSERT INTO JUEGOS VALUES (002,"Memory");
INSERT INTO JUEGOS VALUES (003,"Hunt");
INSERT INTO JUEGOS VALUES (004,"Pacman");
INSERT INTO JUEGOS VALUES (005,"Shot Ball");

CREATE TABLE if not exists USERS(
id INT auto_increment,
email varchar(200) not null unique,
contrasena varchar(100),
es_admin boolean,
es_superadmin boolean,
nickname varchar (15),
apellidos varchar(30) not null,
nombre varchar (15) not null,
ciclo varchar(5),
PRIMARY KEY (ID)
);
INSERT INTO USERS VALUES (null,"Ptoro@politecnis.barcelona","$2y$04$BOh.h2duJDbSzEI5FNoUpe1nCOtOolpBjD9HJqR0nHavPW.xKYFvu",true,True,null,"Toro","Paco",null);
INSERT INTO USERS VALUES (null,"Jgrillo@politecnis.barcelona","$2y$04$BOh.h2duJDbSzEI5FNoUpe1nCOtOolpBjD9HJqR0nHavPW.xKYFvu",True,False,null,"grillo","Joana",null);
INSERT INTO USERS VALUES (null,"Jlenovo@politecnis.barcelona","$2y$04$BOh.h2duJDbSzEI5FNoUpe1nCOtOolpBjD9HJqR0nHavPW.xKYFvu",True,False,null,"Lenovo","Joan",null);
INSERT INTO USERS VALUES (null,"saedgseui",null,False,False,"awa","mobil","panrta","DAW");
INSERT INTO USERS VALUES (null,"wed",null,False,False,"afwefwwa","mobil","panrta","DAW");

CREATE TABLE if not exists JUEGO_USER(
idJuego INT auto_increment,
idUser INT,
juegoCompleto BOOLEAN,
score INT default 0,
FOREIGN KEY (IDJuego) REFERENCES JUEGOS(ID),
FOREIGN KEY (IDUser) REFERENCES USERS(ID)
);
Insert INTO JUEGO_USER VALUES (1,4,true,80);
Insert INTO JUEGO_USER VALUES (3,4,true,850);
Insert INTO JUEGO_USER VALUES (3,5,true,50);
Insert INTO JUEGO_USER VALUES (2,5,true,502);
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