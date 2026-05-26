create database bdpiagetnoite;
use bdpiagetnoite;
create table tbcliente(
    codigo int primary key auto_increment,
    nome varchar(90),
    email varchar (110),
    idade int
    );
    desc tbcliente;

    create table tbproduto(
        codigo int primary key auto_increment,
        produto varchar(90),
        qtde int,
        fabricante varchar(100),
        lote int
    );
 create table tbprofessor(
    codigo int primary key auto_increment,
    professor varchar(90),
    materia varchar(90),
    curso varchar(50)
);
