create database db_sistema;

use db_sistema;

create table pessoa(
   id int auto_increment not null,
   nome varchar(45) not null,
   rg varchar(45) not null,
   cpf char(11) not null,
   data_nascimento date not null,
   email varchar(255),
   telefone varchar(11),
   endereco varchar(255),
   primary key (id)
);

create table categoria_produto(
   id int auto_increment not null,
   descricao varchar(100) not null,
   primary key(id)
 );


create table produto(
    id int auto_increment not null,
    nome varchar(45) not null,
    preco varchar(100) not null,
    descricao varchar(100) not null, 
    primary key(id)
);

create table funcionario(
	id int auto_increment not null,
    nome varchar(45) not null,
    cargo varchar(45) not null,
    primary key (id)
);

create table usuario(
    id int auto_increment not null,
    email varchar(100) not null,
    senha varchar(100) not null,
    primary key (id)    
);

create table cadastro(
    id int auto_increment not null,
    nome varchar(100) not null,
    email varchar(100) not null,
    senha varchar(100) not null,
    primary key (id)
);