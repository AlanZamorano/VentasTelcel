CREATE TABLE promotor(
    pk_promotor INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(200) NOT NULL, 
    numero VARCHAR(10)
);
CREATE TABLE color(
    pk_color INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    color VARCHAR(30) NOT NULL
);
CREATE TABLE marca(
    pk_marca INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    marca VARCHAR(30) NOT NULL
);
CREATE TABLE celular(
    pk_sku INT PRIMARY KEY NOT NULL,
    fk_marca INT NOT NULL,
    FOREIGN KEY (fk_marca) REFERENCES marca (pk_marca),
    nombre VARCHAR(80) NOT NULL,
    fk_color INT NOT NULL,
    FOREIGN KEY (fk_color) REFERENCES color (pk_color),
    telefonia VARCHAR(30) NOT NULL
    
);
CREATE TABLE venta(
    pk_venta INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fk_sku INT NOT NULL,
    FOREIGN KEY (fk_sku) REFERENCES celular (pk_sku),
    fk_promotor INT NOT NULL,
    FOREIGN KEY (fk_promotor) REFERENCES promotor (pk_promotor),
    factura VARCHAR(6) NOT NULL,
    imei VARCHAR(15) NOT NULL,
    iccid VARCHAR(19) NOT NULL,
    recarga VARCHAR(20),
    factura_re VARCHAR(6),
    fecha date
);