create table Usuario (
	username varchar(15) not null,
	nombre varchar(20) not null,
	apellidos varchar(25) not null,
	correo varchar(35) not null,
	contrasenia varchar(32) not null,
	fechanac date not null,
	photo varchar(35) not null,
	primary key (username)
);

create table Hilo (
	codHilo int(3) not null auto_increment,
	titulo varchar(50) not null,
	descripcion varchar(100) not null,
	username varchar(15) not null,
	dia varchar(2) not null,
	mes varchar(2) not null,
	anio varchar(4) not null,
	hora varchar(2) not null,
	minuto varchar(2) not null,
	primary key (codHilo),
	foreign key (username) references Usuario(username)
);

create table Entrada (
	codEntrada int(3) not null auto_increment,
	codHilo int(3) not null,
	descripcion varchar(100) not null,
	username varchar(15) not null,
	dia varchar(2) not null,
	mes varchar(2) not null,
	anio varchar(4) not null,
	hora varchar(2) not null,
	minuto varchar(2) not null,
	primary key (codEntrada),
	foreign key (username) references Usuario(username),
	foreign key (codHilo) references Hilo(codHilo)
);
