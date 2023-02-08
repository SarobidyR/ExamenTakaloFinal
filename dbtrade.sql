create database trade;
use trade;

create table user
(
    iduser int primary key  auto_increment ,
    nom varchar(30),
    email varchar(50),
    mdp varchar(10),
    profil int
)engine=innodb;

create table items
(
  idobj int primary key auto_increment,
  nom varchar(20),
  descri varchar(50),
  photo varchar(30),
  Prix int not null default 0,
  iduser int,
 FOREIGN KEY(iduser) REFERENCES user(iduser)
)engine=innodb;

create table proposition
(
    idobj1 int,
    idobj2 int,
    dateEnvoie timestamp,
    etat int,
    FOREIGN KEY(idobj1) REFERENCES items(idobj),
    FOREIGN KEY(idobj2) REFERENCES items(idobj)
)engine=innodb;

create table itemstraded 
(
  idobjtd int primary key auto_increment,
  nom varchar(20),
  descri varchar(50),
  pic varchar(30),
  Prix int not null default 0,
  old_user int,
  new_user int,
 FOREIGN KEY(old_user) REFERENCES user(iduser),
  FOREIGN KEY(new_user) REFERENCES user(iduser)
)engine=innodb;

create table categorie
(
    idCat int primary key auto_increment,
    idobj int,
    nomitems varchar(30),
    FOREIGN KEY(idobj) REFERENCES items(idobj)
);

INSERT INTO items values(null,'ordinateur','de bureau','F:/limupa-digital-products-store-ecommerce/images/slider/2.jpg',1000,1);
INSERT INTO items values(null,'telephone','android','F:/limupa-digital-products-store-ecommerce/images/product/large-size/10.jpg',50,2);
INSERT INTO items values(null,'drone','haut crop','F:/limupa-digital-products-store-ecommerce/images/slider/8.jpg',1000,3);

INSERT INTO user VALUES ( null,'fy','fy@gmail.com','1234',1);   
INSERT INTO user VALUES ( null,'youcky','youcky@yahoo.com','0000',1);   
INSERT INTO user VALUES ( null,'sarobidy','sarobidy@mail.com','4321',0); 



INSERT INTO itemstraded values (null,'ordinateur','de bureau','F:/limupa-digital-products-store-ecommerce/images/slider/2.jpg',1000,1,2);

