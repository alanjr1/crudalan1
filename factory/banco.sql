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
  select *from tbproduto where produto=
