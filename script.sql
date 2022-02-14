drop database if exists estacionamento;

create database estacionamento
default character set utf8
default collate utf8_general_ci;

use estacionamento;

create table usuarios(
	usuario_id int not null auto_increment,
    nome varchar(100),
    login varchar(100),
    senha varchar(100),
	url_foto varchar(100),
    
    primary key(usuario_id)
)default charset utf8;

create table clientes(
	cliente_id int not null auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    telefone varchar(14) not null,
    
    primary key(cliente_id)
)default charset utf8;

create table precos(
	preco_id int not null auto_increment,
    valor decimal(10,2) not null default 0,
    tp_valor enum('men','avu') not null,
    tp_veiculo int not null,
    
    primary key(preco_id)
)default charset utf8;

create table mensalidades(
	mensalidade_id int not null auto_increment,
	preco_id int not null,
    cliente_id int not null,
    mes_pgm int not null,
    inadimplente int not null default 0,
    
    primary key(mensalidade_id),
    foreign key(preco_id) references precos(preco_id),
    foreign key(cliente_id) references clientes(cliente_id)
)default charset utf8;

create table veiculos(
	veiculo_id int not null auto_increment,
    modelo varchar(100) not null,
    marca varchar(100) not null,
    tp_veiculo int not null,
    placa varchar(8) not null,
    
	primary key(veiculo_id)
)default charset utf8;

create table cli_vei(
    clivei_id int not null auto_increment,
    veiculo_id int not null,
    cliente_id int not null,

    primary key (clivei_id),
    foreign key (veiculo_id) references veiculos (veiculo_id),
    foreign key (cliente_id) references clientes (cliente_id)
)default charset utf8;

create table ocorrencias(
	ocorrencia_id int not null auto_increment,
    placa_veiculo varchar(8) not null,
    telefone varchar(14) default 'não informado',
    hora_entrada time,
    hora_saida time,
    data_entrada date,
    data_saida date,
    preco_id int not null,
    
    primary key(ocorrencia_id),
    foreign key(preco_id) references precos(preco_id)
)default charset utf8;

create table precos_adicionais(
	pa_id int not null auto_increment,
    flag_hora_pri int not null,
    flag_hora_seg int not null,
    flag_valor_seg decimal(10,2) not null,
    flag_valor_ter decimal(10,2) not null,
    
    primary key(pa_id)
)default charset utf8;

insert into usuarios (nome, login, senha)
values('Admin', 'admin', md5('admin'));
















