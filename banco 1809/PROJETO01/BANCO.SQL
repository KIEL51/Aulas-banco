CREATE DATABASE PROJETO1;
USE PROJETO1;
CREATE TABLE ALUNO (
    idaluno int primary key auto_increment,
    nome varchar(100) not null,
    idade int not null,
    sexo enum('M', 'F') not null,
    email varchar (100) not null unique
);

--inserir um registro no banco de dados
INSERT INTO ALUNO (nome, idade, sexo, email) VALUES ('João Silva', 20, 'M', 'j@gmail.com');
