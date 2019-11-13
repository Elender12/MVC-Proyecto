#Creamos la nueva base de datos
CREATE DATABASE empresa_servidor

# Nos colocamos sobre la base de datos nueva
USE empresa_servidor

# Creamos la tabla usuarios registrados consta de un Id, Usuario y COntraseña
CREATE TABLE LoginUsuarios (
    Id int NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) NOT NULL,
    Clave varchar(30) NOT NULL,
    PRIMARY KEY (Id)
);

# Insertamos los valores iniciales
INSERT INTO LoginUsuarios ()
VALUES
(null, 'Elena', '1234'),
(null, 'Sergio', '1234'),
(null,'Eduardo', '1234');

# Creamos la tabla imputaciones que hará referencia al usuario ha iniciado sesion, la fecha del dia actual y las horas de entrada/salida
CREATE TABLE Imputaciones (
	Id int NOT NULL AUTO_INCREMENT,
    UsuarioId int,
    Dia DATE,
    HoraEntrada TIME,
    HoraSalida TIME,
    PRIMARY KEY (id),
    FOREIGN KEY (UsuarioId) references LoginUsuarios(Id)	
);

# Insertamnos datos de prueba
INSERT INTO Imputaciones(UsuarioId, Dia, HoraEntrada, HoraSalida)
VALUES 
(1, '2019-11-13', '08:00:00', '15:00:00'),
(2, '2019-11-13', '08:00:00', '15:00:00'),
(3, '2019-11-13', '08:00:00', '15:00:00'),
(1, '2019-11-13', '16:00:00', '18:00:00');


# Seleccionamos las horas del usuario 1
SELECT lg.Nombre, im.Dia, im.HoraEntrada, im.HoraSalida FROM imputaciones im, loginusuarios lg WHERE im.UsuarioId = 1 AND lg.Id = 1;

# Calculamos las horas del usuario 1 totales
SELECT TIMEDIFF(HoraSalida, HoraEntrada) FROM imputaciones where Dia like '2019-11-13' AND UsuarioId = 2;


