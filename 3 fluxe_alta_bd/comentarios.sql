CREATE DATABASE comentarios;
use comentarios;
CREATE TABLE mensajes(
    id int AUTO_INCREMENT not null PRIMARY KEY,
    nombre varchar(60),
    model varchar(60),
    screen varchar(60),
    screen_tipo varchar(60),
    pro_model varchar(60),
    ram varchar(60),
    rom varchar(60),
    email varchar(100),
    asunto varchar(200),
    mensaje text,
    hora time,
    fecha date
);
