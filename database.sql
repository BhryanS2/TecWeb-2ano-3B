drop database if exists TrabalhoTw;
create database if not exists TrabalhoTw;
use TrabalhoTw;

create table if not exists Usuario (
  id int NOT NULL AUTO_INCREMENT,
  firstName varchar(40) not null,
  lastName varchar(100) not null,
  birthDate date not null,
  email varchar(255) not null,
  password varchar(255) not null,
  Cpf varchar(14) not null,
  avatar varchar(1000) not null,
  PRIMARY KEY (id)
);

-- insert into Usuario values
-- (null, "firstName", "lastName", "2000-05-05", "email", "password", "Cpf", "avatar")
