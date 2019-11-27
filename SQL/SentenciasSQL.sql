# Creacion de la bd
CREATE DATABASE mvcGrupal;

# Utilizamos la nueva base de datos
USE mvcGrupal;

# Creacion de la tabla loginUsuarioimputaciones
CREATE TABLE LoginUsuarios (
    Id int NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) NOT NULL,
    Clave varchar(30) NOT NULL,
    PRIMARY KEY (Id)
);

-- Insertamos los valores iniciales
INSERT INTO LoginUsuarios (Nombre, Clave)
VALUES
('Elena', '1234'),
('Sergio', '1234'),
('Eduardo', '1234');

# Creacion de la tabla imputaciones
CREATE TABLE Imputaciones (
	Id int NOT NULL AUTO_INCREMENT,
    UsuarioId int,
    Dia DATE,
    HoraEntrada TIME,
    HoraSalida TIME,
    HorasTrabajadas TIME,
    PRIMARY KEY (id),
    FOREIGN KEY (UsuarioId) references LoginUsuarios(Id)	
);

# Creacion del procedimiento almacenado
# Recibe como parametros de entrada el id del usuario, la hora de entrada y la orda de salida
# la hora de salida es opcional, si no la recibe coge la hora de entrada y le suma 8 horas 
# para calcular las horas trabajadas.
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RegistrarJornada`(
	IN UsuarioId INT,
    IN HoraEntrada TIME,
    IN HoraSalida TIME)
BEGIN
	DECLARE DiaActual DATE DEFAULT CURDATE();
    DECLARE HorasSuma TIME DEFAULT '08:00:00';
    DECLARE DiferenciaHoras TIME DEFAULT '00:00:00';
    
	IF convert(HoraSalida, TIME) <> '00:00:00' THEN
		SET HoraSalida = HoraSalida;
    ELSE
		SET HoraSalida = HoraEntrada;
		SET HoraSalida = ADDTIME(HoraEntrada, HorasSuma);
    END IF;    
    
    SET DiferenciaHoras = TIMEDIFF(HoraSalida, HoraEntrada);

    IF DiferenciaHoras > 0 THEN
		INSERT INTO Imputaciones (UsuarioId, Dia, HoraEntrada, HoraSalida, HorasTrabajadas)
		VALUES  (UsuarioId, DiaActual, HoraEntrada, HoraSalida, DiferenciaHoras);
    END IF;
END$$
DELIMITER ;

# Ejemplo de lamada al procedimiento almacenado
# CALL SP_RegistrarJornada(1, '12:00:00', '15:30:00');
# CALL SP_RegistrarJornada(3, '03:13:27', null);
