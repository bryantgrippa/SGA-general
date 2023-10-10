create database SGA2;
use SGA2;

	CREATE TABLE producto(
codigo_producto BIGINT AUTO_INCREMENT primary key,
nombre_producto ENUM('botas negras', 'botas azules', 'botas marrones') not null,
medida_producto enum('30','32','34','36','38','40','42') not null,
nombre_proveedor VARCHAR(50) not null,
precio DECIMAL(10 , 2 ) not null,
cantidad BIGINT not null,
observaciones_producto TEXT null
);

	CREATE TABLE salida (
codigo_salida BIGINT AUTO_INCREMENT primary key,
nombre_producto ENUM('botas negras', 'botas azules', 'botas marrones') not null,  
medida_producto enum('30','32','34','36','38','40','42') not null,  
fecha DATE not null,
cantidad BIGINT not null,
observaciones_salida TEXT null,
tipo_id enum('CC','CE','PASAPORTE','NIT','DE')null,
num_id int(20) null,    
nombre_cliente VARCHAR(50)null,
telefono_cliente VARCHAR(30) null,
direccion_cliente VARCHAR(30) null,
correo_cliente VARCHAR(50) null
);

	CREATE TABLE entrada (
codigo_entrada BIGINT AUTO_INCREMENT primary key,
nombre_producto ENUM('botas negras', 'botas azules', 'botas marrones') not null,
medida_producto enum('30','32','34','36','38','40','42') not null,
fecha_compra DATETIME not null,
cantidad INT(255) not null,
precio DECIMAL(10 , 2 ) not null,
nombre_proveedor VARCHAR(50) not null,
nit int(11) not null,
telefono_proveedor VARCHAR(30) null,
direccion_proveedor VARCHAR(30) null,
correo_proveedor VARCHAR(50) null,
observaciones_entrada text null
);

	CREATE TABLE usuario (
ID int(20) not null primary key,
tipo_ID enum('CC') not null,
nombre VARCHAR(50) not null,
nombre2 VARCHAR(50) not null,
apellidos VARCHAR(50) not null,
fecha_nacimiento date not null,
correo VARCHAR(50) not null,
usuario VARCHAR(50) not null,
contraseña VARCHAR(50) not null not null
);

Alter table producto add A BIGINT null;
alter table producto add B BIGINT null;
alter table producto add C int(20) null;


alter table producto add constraint fk_producto_entrada foreign key (A) references entrada(codigo_entrada);
alter table producto add constraint fk_producto_salida foreign key (B) references salida(codigo_salida);
alter table producto add constraint fk_producto_usuario foreign key (C) references usuario(ID);
	
