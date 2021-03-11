CREATE DATABASE if NOT EXISTS appordenada;
USE appordenada;
CREATE TABLE  products (
    id INT(10) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(60) NOT NULL,
    precio DECIMAL(5,2) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO products (nombre, precio) VALUES ('calculadora', 15.90);
INSERT INTO products (nombre, precio) VALUES ('regla10x10', 5.30);
INSERT INTO products (nombre, precio) VALUES ('grapadora', 20.10);
