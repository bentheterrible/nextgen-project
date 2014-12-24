CREATE TABLE fiu 	
(
	id int not null primary key,
	first_name varchar(30),
	last_name varchar(30),
	address varchar(50),
	city varchar(20),
	state varchar(2),
	zip int(11),
	phone varchar(15),
	receive_updates tinyint(1),
	email varchar(15)
);
