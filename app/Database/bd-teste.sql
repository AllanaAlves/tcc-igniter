create database bs_ign 
default character set utf8mb4 
default collate utf8mb4_unicode_ci;

use bs_ign;

create table funcionario(
id_funcionario int not null primary key auto_increment,
nome_funcionario varchar(50),
cpf_funcionario char(11),
cargo varchar(30),
data_admissao date,
usuario_funcionario varchar (220) not null,
senha_funcionario varchar(100),
email_funcionario varchar(50),
celular_funcionario char(14)
);