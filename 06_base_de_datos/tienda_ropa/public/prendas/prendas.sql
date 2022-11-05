USE db_tienda_ropa;

CREATE TABLE prendas (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(80) NOT NULL,
    talla VARCHAR (10) NOT NULL,
    precio NUMERIC(6,2) NOT NULL,
    categoria VARCHAR(20)
);

ALTER TABLE prendas
	ADD CONSTRAINT chk_talla_valida
    CHECK (talla IN('XS','S','M','L','XL'));
    
ALTER TABLE prendas
	ADD CONSTRAINT chk_categoria_valida
    CHECK (categoria IN('CAMISETAS','PANTALONES','ACCESORIOS'));
    
CREATE TABLE clientes (
	id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR (40) UNIQUE NOT NULL,
    nombre VARCHAR (40) NOT NULL,
    apellido_1 VARCHAR (40) NOT NULL,
    apellido_2 VARCHAR (40) NOT NULL,
    fecha_nacimiento DATE NOT NULL
);    

