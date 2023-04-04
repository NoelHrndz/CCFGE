create table roles(
    cod_rol INT(10) NOT NULL PRIMARY KEY,
    nombre_rol VARCHAR(20) NOT NULL 
);

INSERT INTO roles(cod_rol,nombre_rol) VALUES ('1','Administrador');
INSERT INTO roles(cod_rol,nombre_rol) VALUES ('2','Gestor');
INSERT INTO roles(cod_rol,nombre_rol) VALUES ('3','Cliente');

create table usuarios(
    cod_usuario INT(10) NOT NULL PRIMARY KEY,
    usuario VARCHAR(20) NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    clave VARCHAR(50) NOT NULL,
    cod_rol INT(10) NOT NULL, 
    CONSTRAINT FK_usuarios_roles
	FOREIGN KEY (cod_rol) REFERENCES roles(cod_rol) 
		ON UPDATE CASCADE
		ON DELETE CASCADE
);

INSERT INTO usuarios(cod_usuario,usuario,nombre,clave,cod_rol) VALUES ('7826','nhernadez','NOEL HERNÁNDEZ','prueba','2');

create table clientes(
    cod_usuario INT(10) NOT NULL,
    prestamo INT(20) NOT NULL,
    capital FLOAT(15) NOT NULL,
    modo_g_i VARCHAR(15) NOT NULL,
    cliente VARCHAR(50) NOT NULL,
    dpi INT(20) NOT NULL,
    fecha_nacimiento_deudor DATE NOT NULL,
    nombre_grupo VARCHAR(30) NOT NULL,
    municipio VARCHAR(30) NOT NULL,
    direccion_domicilio VARCHAR(100) NOT NULL,
    aldea VARCHAR(50) NOT NULL,
    telefono_principal INT(20) NOT NULL,
    telefono_2 INT(20) NOT NULL,
    telefono_ac_deudor INT(20) NOT NULL,
    telefono_vacunas_deudor INT(20) NOT NULL,
    fecha_entrega DATE NOT NULL,
    fecha_vencimiento DATE NOT NULL,
    nombre_fiador VARCHAR(50) NOT NULL,
    dpi_fiador INT(20) NOT NULL,
    fecha_nacimiento_fiador DATE NOT NULL,
    municipio_fiador VARCHAR(30) NOT NULL,
    direccion_fiador_casa VARCHAR(50) NOT NULL,
    direccion_fiador_trabajo VARCHAR(50) NOT NULL,
    telefono_principal_fiador INT(20) NOT NULL,
    capital_condedido FLOAT(15) NOT NULL,
    pago_mes_anterior FLOAT(15) NOT NULL,
    asignado_semana CHAR(1) NOT NULL,
    asignado_dia CHAR(1) NOT NULL,
    gestion_realizada TEXT NULL, 
    observacion TEXT NULL,
    telefono_actualizado VARCHAR(20) NULL,
    probabilidad_de_pago TEXT NULL,
    PRIMARY KEY(cod_usuario,prestamo),
    CONSTRAINT FK_clientes_usuarios
	FOREIGN KEY (cod_usuario) REFERENCES usuarios(cod_usuario) 
		ON UPDATE CASCADE
		ON DELETE CASCADE
);