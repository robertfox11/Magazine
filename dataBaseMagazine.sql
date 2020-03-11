CREATE DATABASE dataBaseMagazine;
USE dataBaseMagazine;
CREATE TABLE usuarios(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
rol       	varchar(255) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE category(
id      int(255) auto_increment not null,
nombre  varchar(100),
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE article (
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
categoria_id    int(255) not null,
titulo          varchar(255) not null,
descripcion     MEDIUMTEXT,
fecha           date not null,
CONSTRAINT pk_comments PRIMARY KEY(id),
CONSTRAINT fk_comments_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_comments_categoria FOREIGN KEY(categoria_id) REFERENCES category(id) ON DELETE NO ACTION
)ENGINE=InnoDb;