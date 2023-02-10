create database store;

use store;

create table product(
id int primary key not null auto_increment,
product varchar(40) not null,
supplier varchar(40) not null,
price double not null,
available int not null,
total double not null
);

select * from product;

INSERT INTO product(product, supplier, price, available, total)
values("Tortrix", "La fonda", 10, 20, 200);