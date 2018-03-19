create table login(
id_login int primary key auto_increment,
login varchar(25) unique,
senha varchar(10),
email varchar(60),
permissao char(1)
);

create table autor(
id_autor int primary key auto_increment,
nome varchar(25),
sobre_nome varchar(25)
);

create table autorLogin(
id_autor int,
id_login int,
constraint pk_autorLogin_id_autor_login primary key (id_autor,id_login),
constraint FK_autorLogin_id_autor foreign key (id_autor) references autor(id_autor),
constraint FK_autorLogin_id_login foreign key (id_login) references login(id_login)
);

create table post(
id_post int primary key auto_increment,
id_autor int,
titulo varchar(100),
sub_titulo varchar(100),
noticia text,
imagem varchar(255),
data_hora timestamp null default current_timestamp,
fraseAutor varchar(255),
textoCurto varchar(255),
constraint FK_post_id_autor foreign key (id_autor) references autor(id_autor)
);

create table enderecoAutor(
id_endereco int primary key auto_increment,
id_autor int,
logradouro varchar(100),
bairro varchar(100),
localidade varchar(100),
uf char(2),
cep char(9),
constraint FK_enderecoAutor_id_autor foreign key (id_autor) references autor(id_autor)
);























