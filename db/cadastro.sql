create database if not exists cadastro
default character set utf8
default collate utf8_general_ci;
use  cadastro;

create table pessoa(
id integer auto_increment primary key,
nome varchar (100),
email varchar (100)
);



 
