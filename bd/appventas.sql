create database bd_ventas;

use bd_ventas;

create table tb_marca(
codigo_marca char(5) not null primary key,
marca varchar(35) not null
);
create table tb_categoria(
codigo_categoria char(5) not null primary key,
categoria varchar(40) not null
);
create table tb_producto(
codigo_producto char(5) not null primary key,
producto varchar (50) not null,
stok_disponible int,
costo float,
ganancia float,
producto_codigo_marca char (5) not null,
producto_codigo_categoria char(5) not null, 
foreign key (producto_codigo_marca) references tb_marca(codigo_marca),
foreign key (producto_codigo_categoria) references tb_categoria(codigo_categoria)
);

insert into tb_marca values
('M0001','Acer'),
('M0002','Samsung'),
('M0003','Mabe');

insert into tb_categoria values
('C0001','Smartphone'),
('C0002','Computo'),
('C0003','Electrodomesticos');

insert into tb_producto values
('P0001','Lavadora 13kg',85,140.67,0.22,'M0003','C0003'),
('P0002','Laptop Core i3',54,1762.45,0.1635,'M0001','C0002');

select * from tb_producto;

--- Procedimiento almacenados
delimiter $$
create procedure sp_ListarMarcas()
begin
select * from tb_marca order by marca; 
end; $$
call sp_ListarMarcas();
---
delimiter $$
create procedure sp_ListarCategoria()
begin
select * from tb_categoria order by categoria; 
end; $$
call sp_ListarCategoria();
---
delimiter $$
create procedure sp_BuscarMarcaPorCodigo(in cod char(5))
begin
select * from tb_marca where codigo_marca = cod;
end; $$
call sp_BuscarMarcaPorCodigo('M0002');
---
delimiter $$
create procedure sp_ListarProductos()
begin
select * from tb_producto order by costo desc; 
end; $$
call sp_ListarProductos();
---
delimiter $$
create procedure sp_BuscarProductoPorCodigo(in cod char(5))
begin
	select * from tb_producto where codigo_producto = cod;
end; $$
call sp_BuscarProductoPorCodigo('P0002');
---
delimiter $$
create procedure sp_RegistrarProducto(in codprod char(5), in prod varchar(50),in stk int, in cst float, in gnc float, in codmar char(5), in codcat char(5))
begin
	insert into tb_producto values (codprod, prod, stk, cst, gnc, codmar, codcat);
end; $$
call sp_RegistrarProducto('P0006','smartphone galaxy s22','40','2581.47','0.123','M0002','C0003');
---
delimiter $$
create procedure sp_EditarProducto(in codprod char(5), in prod varchar(50),in stk int, in cst float, in gnc float, in codmar char(5), in codcat char(5))
begin
	update tb_producto set producto = prod, stok_disponible = stk, costo = cst, ganancia = gnc, producto_codigo_marca = codmar, producto_codigo_categoria = codcat where codigo_producto = codprod;
end; $$
call sp_EditarProducto('P0006','smartphone galaxy','40','2581.47','0.123','M0002','C0003');
---
delimiter $$
create procedure sp_BorrarProducto(in codprod char(5))
begin
	delete from tb_producto where codigo_producto = codprod;
end; $$
call sp_BorrarProducto('P0006');
---
delimiter $$
create procedure sp_FiltrarProductos(in valor varchar(50))
begin
	select * from tb_producto where producto like concat(valor,'%');
end; $$
call sp_FiltrarProductos('t');
---
drop procedure sp_EditarProducto;
declare tb_producto;

