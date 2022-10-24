CREATE TABLE estado(
    pk_estado INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_estado VARCHAR(50) NOT NULL
);

CREATE TABLE municipio(
    pk_municipio INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_municipio VARCHAR(50) NOT NULL,
    fk_estado INT NOT NULL,
    FOREIGN KEY (fk_estado) REFERENCES estado(pk_estado)
);

CREATE TABLE localidad(
    pk_localidad INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_localidad VARCHAR(50),
    fk_municipio INT NOT NULL,
    FOREIGN KEY (fk_municipio) REFERENCES municipio(pk_municipio)
);


CREATE TABLE persona (
    pk_persona INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    primer_apellido VARCHAR(50) NOT NULL,
    segundo_apellido VARCHAR(50) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    num_celular VARCHAR(15) NOT NULL,
    correo_electronico VARCHAR(50) NOT NULL,
    foto VARCHAR(100) NOT NULL,
    video VARCHAR(100) NULL,
    domicilio TEXT NOT NULL,
    fk_localidad INT NOT NULL,
    FOREIGN KEY (fk_localidad) REFERENCES localidad(pk_localidad)
);

CREATE TABLE alumno(
    pk_alumno INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    matricula VARCHAR(11) NOT NULL,
    frase VARCHAR(300) NULL,
    fk_persona INT NOT NULL,
    FOREIGN KEY (fk_persona) REFERENCES persona(pk_persona)
);

CREATE TABLE profesor(
    pk_profesor INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    num_empleado VARCHAR(5) NOT NULL,
    fk_persona INT NOT NULL,
    FOREIGN KEY (fk_persona) REFERENCES persona(pk_persona)
);


CREATE TABLE generacion (
    pk_generacion INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    generacion VARCHAR(50)
);

CREATE TABLE carrera(
    pk_carrera INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_carrera VARCHAR(50) NOT NULL
);

CREATE TABLE grupo (
    pk_grupo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_grupo VARCHAR(10) NOT NULL,
    fk_generacion INT NOT NULL,
    fk_profesor INT NOT NULL,
    fk_carrera INT NOT NULL,
    video_grupo VARCHAR(100) NULL,
    FOREIGN KEY (fk_generacion) REFERENCES generacion(pk_generacion),
    FOREIGN KEY (fk_profesor) REFERENCES profesor(pk_profesor),
    FOREIGN KEY (fk_carrera) REFERENCES carrera(pk_carrera)
);  

CREATE TABLE foto(
    pk_foto INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ruta_foto VARCHAR(100) NOT NULL
);

CREATE TABLE grupo_foto(
    pk_grupo_foto INT PRIMARY KEY NOT NULL,
    fk_grupo INT NOT NULL,
    fk_foto INT NOT NULL,
    FOREIGN KEY (fk_grupo) REFERENCES grupo(pk_grupo),
    FOREIGN KEY (fk_foto) REFERENCES foto(pk_foto)
);

CREATE TABLE alumno_grupo(
    pk_alumno_grupo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fk_alumno INT NOT NULL,
    fk_grupo INT NOT NULL,
    FOREIGN KEY (fk_alumno) REFERENCES alumno(pk_alumno),
    FOREIGN KEY (fk_grupo) REFERENCES grupo(pk_grupo)
);