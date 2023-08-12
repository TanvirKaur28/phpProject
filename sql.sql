CREATE table admin(
	admin_id int not null auto_increment,
	username varchar (100),
	email varchar (200),
	password varchar (50),
    reEnter varchar (50),
    visibility varchar (20),
    primary key (admin_id)
);