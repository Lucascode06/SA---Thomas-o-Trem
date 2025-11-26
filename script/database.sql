create database thomasdb;
use thomasdb;

create table usuarios (
    id int auto_increment primary key,
    nome varchar(255) not null,
    email varchar(255) not null unique,
    senha varchar(255) not null,
    role enum('admin', 'user') default 'user' not null,
    cep char (8) not null,
    rua varchar(255) not null,
    bairro varchar(255) not null,
    cidade varchar(255) not null,
    estado char(2) not null
    );

create table trens (
    id int auto_increment primary key,
    nome varchar(255) not null,
    modelo varchar(255) not null,
    status varchar(255) not null
);

create table rotas (
    id int auto_increment primary key,
    origem varchar(255) not null,
    destino varchar(255) not null,
    distancia_km decimal(10, 2) not null
);

create table manutencao (
    id int auto_increment primary key,
    id_trem int,
    data_manutencao date not null,
    descricao text not null,
    foreign key (id_trem) references trens(id)
);

create table notificacoes (
    id int auto_increment primary key,
    titulo varchar(255) not null,
    data_alerta datetime default current_timestamp,
    descricao text not null
);

insert into usuarios (nome, email, senha, role, cep, rua, bairro, cidade, estado) values
('Admin', 'admin@admin.com', '123', 'admin', '89225170', 'Rua Admin', 'Bairro Admin', 'Cidade Admin', 'SC');
