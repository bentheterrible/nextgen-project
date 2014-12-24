/*
	Dec 24, 2014

	This is a template for creating tables in the nextgen db.

	Simply replace 'table_name' with the desired name of the 
	table you want and copy and paste it into the mysql command
	line and that's it.
 */ 
CREATE TABLE table_name 
 (
     id int not null auto_increment primary key,
     first_name varchar(30),
     last_name varchar(30),
     address varchar(50),
     city varchar(20),
     state varchar(2),
     zip int(11),
     phone varchar(15),
     receive_updates tinyint(1) not null default 0,
     email varchar(15)
);
