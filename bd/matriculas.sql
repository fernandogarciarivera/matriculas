-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-05-2024 a las 21:57:09
-- Versión del servidor: 5.7.44
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matriculas`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `AssignCoursesToProfessors`$$
CREATE DEFINER=`matriculasusr`@`localhost` PROCEDURE `AssignCoursesToProfessors` ()   BEGIN
    
    -- Bucle para asignar cursos a profesores
    DECLARE done INT DEFAULT FALSE;
    DECLARE profesorId INT;
    DECLARE numCursos INT;
    DECLARE numeroInicio INT;
    DECLARE diaSemana INT;
    DECLARE horaInicio TIME;
    DECLARE horaFin TIME;
    
    -- Bucle para asignar cursos a profesores
    DECLARE cur CURSOR FOR SELECT idProfesor FROM matriculas.profesor;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
    
    OPEN cur;
    read_loop: LOOP
        FETCH cur INTO profesorId;
        IF done THEN
            LEAVE read_loop;
        END IF;

        -- Seleccionar un número aleatorio de cursos que el profesor impartirá
        SET numCursos = FLOOR(RAND() * (5 - 3 + 1)) + 3;
        SET numeroInicio = FLOOR(RAND() * (SELECT COUNT(*) FROM matriculas.curso)) + 1;

        -- Seleccionar cursos aleatorios disponibles
		CREATE TEMPORARY TABLE IF NOT EXISTS TempCursosProfesor (
			idCurso INT
		);
		-- Construir la consulta dinámica
		SET @asd = CONCAT('INSERT INTO TempCursosProfesor SELECT idCurso FROM `curso` LIMIT ', numeroInicio, ',', numCursos);
		PREPARE zxc FROM @asd;
		EXECUTE zxc;
		DEALLOCATE PREPARE zxc;

        -- Insertar registros en la tabla profesor_curso
        INSERT INTO matriculas.profesor_curso (idProfesor, idCurso) SELECT profesorId, idCurso FROM TempCursosProfesor;
        
        -- Insertar registros en la tabla Horarios
        INSERT INTO matriculas.horarios (idCursoDicta, idProfesor, idCurso, numDia, txtDia, HorIni, HorFin)
        SELECT temp.idCursoDicta, temp.idProfesor, temp.idCurso, 
               temp.randnum AS numDia,
               CASE WHEN temp.randnum = 1 THEN 'Dom'
                    WHEN temp.randnum = 2 THEN 'Lun'
                    WHEN temp.randnum = 3 THEN 'Mar'
                    WHEN temp.randnum = 4 THEN 'Mie'
                    WHEN temp.randnum = 5 THEN 'Jue'
                    WHEN temp.randnum = 6 THEN 'Vie'
                    ELSE 'Sab'
               END AS txtDia,
               ADDTIME(SEC_TO_TIME(8 * 3600), SEC_TO_TIME(FLOOR(RAND() * (14 * 3600)))),
               ADDTIME(ADDTIME(SEC_TO_TIME(8 * 3600), SEC_TO_TIME(FLOOR(RAND() * (14 * 3600)))), SEC_TO_TIME(3600))
          FROM (SELECT pc.idCursoDicta, pc.idProfesor, pc.idCurso, FLOOR(RAND() * 7) + 1 AS randnum
                  FROM matriculas.profesor_curso pc
                 WHERE pc.idProfesor = profesorId) AS temp;

        -- Limpiar la tabla temporal de cursos
        DROP TEMPORARY TABLE IF EXISTS TempCursosProfesor;
    END LOOP read_loop;

    CLOSE cur;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `idAlumno` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `miFoto` varchar(100) DEFAULT 'NULL',
  `Carrera` varchar(45) NOT NULL,
  `Email` varchar(45) DEFAULT 'NULL',
  `Celular` char(10) DEFAULT 'NULL',
  `Gthub` varchar(45) DEFAULT 'NULL',
  `Web` varchar(45) DEFAULT 'NULL',
  `Password` varchar(45) NOT NULL DEFAULT '1234',
  PRIMARY KEY (`idAlumno`),
  UNIQUE KEY `idAlumno` (`idAlumno`),
  UNIQUE KEY `Password` (`Password`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `Nombres`, `Apellidos`, `miFoto`, `Carrera`, `Email`, `Celular`, `Gthub`, `Web`, `Password`) VALUES
(1, 'Juan', 'Pérez López', NULL, 'Ingeniería en Sistemas Computacionales', 'juanperez@example.com', '1234567890', 'juanperez', 'www.juanperez.com', 'password1231'),
(2, 'María', 'González Martínez', NULL, 'Ingeniería en Informática', 'mariagonzalez@example.com', '0987654321', 'mariagonzalez', 'www.mariagonzalez.com', 'password1232'),
(3, 'Carlos', 'Rodríguez Hernández', NULL, 'Tecnologías de la Información', 'carlosrodriguez@example.com', '1122334455', 'carlosrodriguez', 'www.carlosrodriguez.com', 'password1233'),
(4, 'Laura', 'López García', NULL, 'Ingeniería de Software', 'lauralopez@example.com', '9988776655', 'lauralopez', 'www.lauralopez.com', 'password1234'),
(5, 'José', 'Martínez Rodríguez', NULL, 'Ciencias de la Computación', 'josemartinez@example.com', '6677889900', 'josemartinez', 'www.josemartinez.com', 'password1235'),
(6, 'Ana', 'Hernández Pérez', NULL, 'Desarrollo de Software', 'anahernandez@example.com', '5544332211', 'anahernandez', 'www.anahernandez.com', 'password1236'),
(7, 'David', 'Gómez Sánchez', NULL, 'Ingeniería Informática', 'davidgomez@example.com', '1122445566', 'davidgomez', 'www.davidgomez.com', 'password1237'),
(8, 'Sofía', 'Pérez Martínez', NULL, 'Sistemas de Información', 'sofiaperez@example.com', '9988776655', 'sofiaperez', 'www.sofiaperez.com', 'password1238'),
(9, 'Miguel', 'Ruiz López', NULL, 'Tecnologías de la Información y Comunicación', 'miguelruiz@example.com', '6677889900', 'miguelruiz', 'www.miguelruiz.com', 'password1239'),
(10, 'Paola', 'Díaz García', NULL, 'Ingeniería en Computación', 'paoladiaz@example.com', '5544332211', 'paoladiaz', 'www.paoladiaz.com', 'password12310'),
(11, 'Jorge', 'Vázquez Hernández', NULL, 'Ingeniería de Sistemas', 'jorgevazquez@example.com', '1122334455', 'jorgevazquez', 'www.jorgevazquez.com', 'password12311'),
(12, 'Fernanda', 'Torres Pérez', NULL, 'Desarrollo Web', 'fernandatorres@example.com', '9988776655', 'fernandatorres', 'www.fernandatorres.com', 'password12312'),
(13, 'Diego', 'Mendoza Sánchez', NULL, 'Ingeniería en Tecnologías de la Información', 'diegomendoza@example.com', '6677889900', 'diegomendoza', 'www.diegomendoza.com', 'password12313'),
(14, 'Valeria', 'García Martínez', NULL, 'Ciencias de la Computación Aplicada', 'valeriagarcia@example.com', '5544332211', 'valeriagarcia', 'www.valeriagarcia.com', 'password12314'),
(15, 'Roberto', 'Fernández López', NULL, 'Ingeniería en Desarrollo de Software', 'robertofernandez@example.com', '1122445566', 'robertofernandez', 'www.robertofernandez.com', 'password12315'),
(16, 'Natalia', 'Cruz Hernández', NULL, 'Tecnologías de Información y Comunicación', 'nataliacruz@example.com', '9988776655', 'nataliacruz', 'www.nataliacruz.com', 'password12316'),
(17, 'Luis', 'Romero Pérez', NULL, 'Ingeniería de Sistemas Computacionales', 'luisromero@example.com', '6677889900', 'luisromero', 'www.luisromero.com', 'password12317'),
(18, 'Elena', 'Álvarez García', NULL, 'Ingeniería de Software y Sistemas', 'elenaalvarez@example.com', '5544332211', 'elenaalvarez', 'www.elenaalvarez.com', 'password12318'),
(19, 'Alejandro', 'Ortiz Martínez', NULL, 'Desarrollo de Aplicaciones Web', 'alejandroortiz@example.com', '1122334455', 'alejandroortiz', 'www.alejandroortiz.com', 'password12319'),
(20, 'Ana', 'Sánchez Pérez', NULL, 'Ingeniería en Tecnologías de Información', 'anitasanchez@example.com', '9988776655', 'anitasanchez', 'www.anitasanchez.com', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_profesor_curso`
--

DROP TABLE IF EXISTS `alumno_profesor_curso`;
CREATE TABLE IF NOT EXISTS `alumno_profesor_curso` (
  `IdmatriculaCab` int(10) NOT NULL,
  `idMatricula` int(11) NOT NULL AUTO_INCREMENT,
  `idAlumno` int(11) NOT NULL,
  `idCursoDicta` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `estadoCurso` int(11) DEFAULT NULL,
  `estadoMatricula` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMatricula`,`idAlumno`),
  UNIQUE KEY `idMatricula` (`idMatricula`),
  KEY `FKalumno_pro298549` (`idAlumno`),
  KEY `FKalumno_pro692497` (`idCursoDicta`,`idProfesor`,`idCurso`),
  KEY `FKalumno_pro554239` (`IdmatriculaCab`),
  KEY `FKAlumno_Pro79070` (`idCursoDicta`,`idProfesor`,`idCurso`),
  KEY `FKAlumno_Pro325116` (`idAlumno`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno_profesor_curso`
--

INSERT INTO `alumno_profesor_curso` (`IdmatriculaCab`, `idMatricula`, `idAlumno`, `idCursoDicta`, `idCurso`, `idProfesor`, `estadoCurso`, `estadoMatricula`) VALUES
(1, 1, 20, 36, 3, 8, 0, 0),
(1, 2, 20, 47, 4, 10, 0, 0),
(2, 3, 20, 36, 3, 8, 0, 0),
(2, 4, 20, 47, 4, 10, 0, 0),
(3, 5, 20, 36, 3, 8, 0, 0),
(3, 6, 20, 47, 4, 10, 0, 0),
(4, 7, 20, 36, 3, 8, 0, 0),
(4, 8, 20, 47, 4, 10, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

DROP TABLE IF EXISTS `asistencia`;
CREATE TABLE IF NOT EXISTS `asistencia` (
  `idMatricula` int(11) NOT NULL,
  `idAlumno` int(11) NOT NULL,
  `DiaClase` date NOT NULL,
  `Asitio` tinyint(1) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  KEY `FKasistencia952443` (`idMatricula`,`idAlumno`),
  KEY `FKAsistencia59900` (`idMatricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

DROP TABLE IF EXISTS `calificacion`;
CREATE TABLE IF NOT EXISTS `calificacion` (
  `idMiEvaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `idMatricula` int(11) NOT NULL,
  `idAlumno` int(11) NOT NULL,
  `idEvaluacion` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `ValorPuntos` decimal(10,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`idMiEvaluacion`,`idMatricula`),
  UNIQUE KEY `idMiEvaluacion` (`idMiEvaluacion`),
  KEY `FKcalificaci634665` (`idMatricula`,`idAlumno`),
  KEY `FKcalificaci941586` (`idEvaluacion`,`idCurso`),
  KEY `FKCalificaci673614` (`idMatricula`),
  KEY `FKCalificaci845722` (`idEvaluacion`,`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cicloescolar`
--

DROP TABLE IF EXISTS `cicloescolar`;
CREATE TABLE IF NOT EXISTS `cicloescolar` (
  `idCicloEscolar` char(5) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaTermino` date NOT NULL,
  PRIMARY KEY (`idCicloEscolar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cicloescolar`
--

INSERT INTO `cicloescolar` (`idCicloEscolar`, `FechaInicio`, `FechaTermino`) VALUES
('SEM1', '2024-01-01', '2024-12-31'),
('SEM2', '2025-01-01', '2025-12-31'),
('SEM3', '2026-01-01', '2026-12-31'),
('SEM4', '2027-01-01', '2027-12-31'),
('SEM5', '2028-01-01', '2028-12-31'),
('SEM6', '2029-01-01', '2029-12-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCurso` varchar(45) NOT NULL,
  `Seccion` char(4) NOT NULL,
  `NRC` char(4) NOT NULL,
  `miFoto` varchar(100) DEFAULT 'NULL',
  `Academia` varchar(45) NOT NULL,
  `bitacora` varchar(500) NOT NULL,
  `DiasClase` int(11) NOT NULL,
  `HorasClase` int(11) NOT NULL,
  `idCicloEscolar` char(5) NOT NULL,
  PRIMARY KEY (`idCurso`),
  UNIQUE KEY `idCurso` (`idCurso`),
  UNIQUE KEY `NRC` (`NRC`),
  KEY `FKcurso363176` (`idCicloEscolar`),
  KEY `FKCurso59519` (`idCicloEscolar`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `NombreCurso`, `Seccion`, `NRC`, `miFoto`, `Academia`, `bitacora`, `DiasClase`, `HorasClase`, `idCicloEscolar`) VALUES
(1, 'Introducción a la Programación', 'A', '1001', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 5, 4, 'SEM1'),
(2, 'Estructuras de Datos', 'B', '1002', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM1'),
(3, 'Diseño de Algoritmos', 'C', '1003', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM1'),
(4, 'Bases de Datos', 'D', '1004', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM1'),
(5, 'Desarrollo Web', 'E', '1005', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM1'),
(6, 'Redes de Computadoras', 'F', '1006', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM1'),
(7, 'Inteligencia Artificial', 'G', '1007', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM1'),
(8, 'Seguridad Informática', 'H', '1008', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM1'),
(9, 'Programación Avanzada', 'I', '1009', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 4, 'SEM1'),
(10, 'Sistemas Operativos', 'J', '1010', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM1'),
(11, 'Desarrollo de Aplicaciones Móviles', 'K', '1011', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM1'),
(12, 'Cloud Computing', 'L', '1012', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM1'),
(13, 'Análisis de Datos', 'A', '1013', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM2'),
(14, 'Ciberseguridad', 'B', '1014', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM2'),
(15, 'Diseño de Interfaces de Usuario', 'C', '1015', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM2'),
(16, 'Machine Learning', 'D', '1016', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM2'),
(17, 'Blockchain', 'E', '1017', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM2'),
(18, 'Programación Funcional', 'F', '1018', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM2'),
(19, 'Realidad Virtual y Aumentada', 'G', '1019', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM2'),
(20, 'Gestión de Proyectos de Software', 'H', '1020', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM2'),
(21, 'Big Data Analytics', 'I', '1021', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM2'),
(22, 'Desarrollo de Videojuegos', 'J', '1022', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM2'),
(23, 'Computación Cuántica', 'K', '1023', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM2'),
(24, 'Python para Ciencia de Datos', 'L', '1024', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM2'),
(25, 'Análisis Forense Digital', 'A', '1025', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM3'),
(26, 'Diseño de Sistemas Distribuidos', 'B', '1026', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM3'),
(27, 'Gestión de Redes Sociales', 'C', '1027', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM3'),
(28, 'Desarrollo Ágil de Software', 'D', '1028', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 3, 3, 'SEM3'),
(29, 'IoT (Internet de las cosas)', 'E', '1029', NULL, 'Departamento de Informática', 'Info Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.', 4, 3, 'SEM3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diafestivo`
--

DROP TABLE IF EXISTS `diafestivo`;
CREATE TABLE IF NOT EXISTS `diafestivo` (
  `DiaFestivo` date DEFAULT NULL,
  `Motivo` varchar(45) DEFAULT 'NULL',
  `idCicloEscolar` char(5) NOT NULL,
  KEY `FKdiafestivo221864` (`idCicloEscolar`),
  KEY `FKDiaFestivo347472` (`idCicloEscolar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

DROP TABLE IF EXISTS `evaluacion`;
CREATE TABLE IF NOT EXISTS `evaluacion` (
  `idEvaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `idCurso` int(11) NOT NULL,
  `Actividad` varchar(45) NOT NULL,
  `Porcentaje` int(11) NOT NULL,
  PRIMARY KEY (`idEvaluacion`,`idCurso`),
  UNIQUE KEY `idEvaluacion` (`idEvaluacion`),
  KEY `FKevaluacion931468` (`idCurso`),
  KEY `FKEvaluacion982686` (`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

DROP TABLE IF EXISTS `horarios`;
CREATE TABLE IF NOT EXISTS `horarios` (
  `IdHorario` int(11) NOT NULL AUTO_INCREMENT,
  `idCursoDicta` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `numDia` int(11) DEFAULT NULL,
  `txtDia` varchar(10) DEFAULT 'NULL',
  `HorIni` time DEFAULT NULL,
  `HorFin` time DEFAULT NULL,
  PRIMARY KEY (`IdHorario`),
  UNIQUE KEY `IdHorario` (`IdHorario`),
  KEY `FKhorarios931373` (`idCursoDicta`,`idProfesor`,`idCurso`),
  KEY `FKHorarios834068` (`idCursoDicta`,`idProfesor`,`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`IdHorario`, `idCursoDicta`, `idProfesor`, `idCurso`, `numDia`, `txtDia`, `HorIni`, `HorFin`) VALUES
(1, 1, 1, 17, 3, 'Dom', '14:09:07', '22:10:30'),
(2, 2, 1, 18, 3, 'Dom', '13:34:51', '18:12:10'),
(3, 3, 1, 19, 1, 'Vie', '15:28:01', '10:24:53'),
(4, 4, 1, 20, 7, 'Mar', '14:00:35', '11:23:42'),
(5, 5, 1, 21, 4, 'Sab', '15:03:17', '10:28:30'),
(8, 8, 2, 24, 6, 'Lun', '12:02:08', '09:03:28'),
(9, 9, 2, 25, 2, 'Mie', '11:03:40', '14:38:50'),
(10, 10, 2, 26, 3, 'Sab', '09:36:05', '14:53:39'),
(11, 11, 3, 17, 4, 'Mar', '20:09:13', '13:06:42'),
(12, 12, 3, 18, 7, 'Sab', '13:13:11', '14:47:35'),
(13, 13, 3, 19, 7, 'Sab', '21:54:41', '11:40:46'),
(14, 14, 3, 20, 7, 'Sab', '08:56:06', '18:46:32'),
(15, 15, 3, 21, 3, 'Sab', '20:13:04', '18:34:24'),
(18, 18, 4, 29, 3, 'Mie', '08:46:36', '22:12:45'),
(19, 19, 5, 28, 7, 'Sab', '11:11:36', '19:35:02'),
(20, 20, 5, 29, 1, 'Sab', '10:12:25', '10:08:57'),
(22, 22, 6, 14, 3, 'Jue', '11:00:50', '12:01:00'),
(23, 23, 6, 15, 4, 'Lun', '18:56:13', '10:37:51'),
(24, 24, 6, 16, 2, 'Mie', '12:59:24', '14:12:49'),
(25, 25, 6, 17, 6, 'Sab', '17:27:07', '19:46:39'),
(26, 26, 6, 18, 6, 'Mie', '10:04:37', '12:33:32'),
(29, 29, 7, 12, 3, 'Mie', '13:30:31', '15:15:18'),
(30, 30, 7, 13, 1, 'Mie', '21:15:01', '10:19:36'),
(31, 31, 7, 14, 5, 'Mie', '13:33:11', '16:07:02'),
(32, 32, 7, 15, 3, 'Jue', '20:10:06', '16:31:20'),
(33, 33, 7, 16, 1, 'Vie', '10:53:53', '19:16:25'),
(36, 36, 8, 3, 1, 'Dom', '15:44:15', '13:44:15'),
(37, 37, 8, 4, 1, 'Mie', '16:11:16', '16:54:34'),
(38, 38, 8, 5, 1, 'Mar', '18:21:45', '16:22:27'),
(39, 39, 9, 16, 2, 'Mie', '10:11:35', '12:04:55'),
(40, 40, 9, 17, 5, 'Mar', '11:18:39', '09:05:35'),
(41, 41, 9, 18, 3, 'Mar', '15:50:39', '20:29:04'),
(42, 42, 9, 19, 3, 'Vie', '11:16:06', '19:32:07'),
(46, 46, 10, 3, 1, 'Mar', '14:50:16', '16:22:35'),
(47, 47, 10, 4, 2, 'Mar', '08:37:58', '13:32:09'),
(48, 48, 10, 5, 4, 'Sab', '21:26:45', '09:48:48'),
(49, 49, 11, 27, 1, 'Dom', '19:45:35', '09:47:45'),
(50, 50, 11, 28, 6, 'Vie', '08:41:30', '18:33:31'),
(51, 51, 11, 29, 2, 'Sab', '14:07:56', '17:26:28'),
(52, 52, 12, 22, 3, 'Vie', '16:28:58', '16:01:54'),
(53, 53, 12, 23, 5, 'Mie', '14:04:50', '17:04:26'),
(54, 54, 12, 24, 5, 'Vie', '08:40:13', '09:36:08'),
(55, 55, 12, 25, 1, 'Sab', '20:28:51', '17:04:24'),
(56, 56, 12, 26, 2, 'Sab', '18:06:52', '09:07:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculacab`
--

DROP TABLE IF EXISTS `matriculacab`;
CREATE TABLE IF NOT EXISTS `matriculacab` (
  `IdmatriculaCab` int(10) NOT NULL AUTO_INCREMENT,
  `documento` varchar(100) DEFAULT NULL,
  `idAlumno` int(11) NOT NULL,
  `fechaRegistro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdmatriculaCab`),
  UNIQUE KEY `IdmatriculaCab` (`IdmatriculaCab`),
  KEY `FKmatriculaC647858` (`idAlumno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matriculacab`
--

INSERT INTO `matriculacab` (`IdmatriculaCab`, `documento`, `idAlumno`, `fechaRegistro`) VALUES
(1, '3b6fa10a-159f-11ef-b3f2-f0a6541d4408', 20, '2024-05-19 00:18:31'),
(2, '4776a8c7-159f-11ef-b3f2-f0a6541d4408', 20, '2024-05-19 00:18:51'),
(3, '4a2c9295-159f-11ef-b3f2-f0a6541d4408', 20, '2024-05-19 00:18:56'),
(4, '91ff601e-159f-11ef-b3f2-f0a6541d4408', 20, '2024-05-19 00:20:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `idProfesor` int(11) NOT NULL AUTO_INCREMENT,
  `NomProfesor` varchar(45) NOT NULL,
  `ApellidosProfesor` varchar(45) NOT NULL,
  `miFoto` varchar(100) DEFAULT 'NULL',
  `sexo` varchar(1) DEFAULT 'H',
  `bitacora` text,
  PRIMARY KEY (`idProfesor`),
  UNIQUE KEY `idProfesor` (`idProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idProfesor`, `NomProfesor`, `ApellidosProfesor`, `miFoto`, `sexo`, `bitacora`) VALUES
(1, 'Juan', 'Pérez', NULL, 'H', 'Experto en Matemáticas'),
(2, 'María', 'González', NULL, 'M', 'Historiadora reconocida'),
(3, 'Pedro', 'López', NULL, 'H', 'Especialista en Biología'),
(4, 'Laura', 'Martínez', NULL, 'M', 'Apasionada por la Literatura'),
(5, 'Carlos', 'Ruiz', NULL, 'H', 'Físico con experiencia'),
(6, 'Ana', 'Hernández', NULL, 'M', 'Química destacada'),
(7, 'Roberto', 'Díaz', NULL, 'H', 'Experto en Programación'),
(8, 'Sofía', 'Sánchez', NULL, 'M', 'Economista reconocida'),
(9, 'David', 'Gómez', NULL, 'H', 'Artista profesional'),
(10, 'Elena', 'Fernández', NULL, 'M', 'Psicóloga clínica'),
(11, 'Luis', 'Vázquez', NULL, 'H', 'Profesor de Inglés'),
(12, 'Carmen', 'Torres', NULL, 'M', 'Filósofa con experiencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_curso`
--

DROP TABLE IF EXISTS `profesor_curso`;
CREATE TABLE IF NOT EXISTS `profesor_curso` (
  `idCursoDicta` int(11) NOT NULL AUTO_INCREMENT,
  `idProfesor` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `fechaIni` date DEFAULT NULL,
  `fehaFin` date DEFAULT NULL,
  PRIMARY KEY (`idCursoDicta`,`idProfesor`,`idCurso`),
  UNIQUE KEY `idCursoDicta` (`idCursoDicta`),
  KEY `FKprofesor_c559376` (`idProfesor`),
  KEY `FKprofesor_c717960` (`idCurso`),
  KEY `FKProfesor_C656681` (`idProfesor`),
  KEY `FKProfesor_C154041` (`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor_curso`
--

INSERT INTO `profesor_curso` (`idCursoDicta`, `idProfesor`, `idCurso`, `fechaIni`, `fehaFin`) VALUES
(1, 1, 17, NULL, NULL),
(2, 1, 18, NULL, NULL),
(3, 1, 19, NULL, NULL),
(4, 1, 20, NULL, NULL),
(5, 1, 21, NULL, NULL),
(8, 2, 24, NULL, NULL),
(9, 2, 25, NULL, NULL),
(10, 2, 26, NULL, NULL),
(11, 3, 17, NULL, NULL),
(12, 3, 18, NULL, NULL),
(13, 3, 19, NULL, NULL),
(14, 3, 20, NULL, NULL),
(15, 3, 21, NULL, NULL),
(18, 4, 29, NULL, NULL),
(19, 5, 28, NULL, NULL),
(20, 5, 29, NULL, NULL),
(22, 6, 14, NULL, NULL),
(23, 6, 15, NULL, NULL),
(24, 6, 16, NULL, NULL),
(25, 6, 17, NULL, NULL),
(26, 6, 18, NULL, NULL),
(29, 7, 12, NULL, NULL),
(30, 7, 13, NULL, NULL),
(31, 7, 14, NULL, NULL),
(32, 7, 15, NULL, NULL),
(33, 7, 16, NULL, NULL),
(36, 8, 3, NULL, NULL),
(37, 8, 4, NULL, NULL),
(38, 8, 5, NULL, NULL),
(39, 9, 16, NULL, NULL),
(40, 9, 17, NULL, NULL),
(41, 9, 18, NULL, NULL),
(42, 9, 19, NULL, NULL),
(46, 10, 3, NULL, NULL),
(47, 10, 4, NULL, NULL),
(48, 10, 5, NULL, NULL),
(49, 11, 27, NULL, NULL),
(50, 11, 28, NULL, NULL),
(51, 11, 29, NULL, NULL),
(52, 12, 22, NULL, NULL),
(53, 12, 23, NULL, NULL),
(54, 12, 24, NULL, NULL),
(55, 12, 25, NULL, NULL),
(56, 12, 26, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `profesor_curso_horario_view`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `profesor_curso_horario_view`;
CREATE TABLE IF NOT EXISTS `profesor_curso_horario_view` (
`idCursoDicta` int(11)
,`idProfesor` int(11)
,`NomProfesor` varchar(45)
,`ApellidosProfesor` varchar(45)
,`idCurso` int(11)
,`NombreCurso` varchar(45)
,`Seccion` char(4)
,`NRC` char(4)
,`Academia` varchar(45)
,`idCicloEscolar` char(5)
,`IdHorario` int(11)
,`numDia` int(11)
,`txtDia` varchar(10)
,`HorIni` time
,`HorFin` time
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `profesor_curso_view`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `profesor_curso_view`;
CREATE TABLE IF NOT EXISTS `profesor_curso_view` (
`idCursoDicta` int(11)
,`idProfesor` int(11)
,`NomProfesor` varchar(45)
,`ApellidosProfesor` varchar(45)
,`idCurso` int(11)
,`NombreCurso` varchar(45)
,`Seccion` char(4)
,`NRC` char(4)
,`Academia` varchar(45)
,`idCicloEscolar` char(5)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `profesor_curso_horario_view`
--
DROP TABLE IF EXISTS `profesor_curso_horario_view`;

DROP VIEW IF EXISTS `profesor_curso_horario_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profesor_curso_horario_view`  AS SELECT `pc`.`idCursoDicta` AS `idCursoDicta`, `pc`.`idProfesor` AS `idProfesor`, `pc`.`NomProfesor` AS `NomProfesor`, `pc`.`ApellidosProfesor` AS `ApellidosProfesor`, `pc`.`idCurso` AS `idCurso`, `pc`.`NombreCurso` AS `NombreCurso`, `pc`.`Seccion` AS `Seccion`, `pc`.`NRC` AS `NRC`, `pc`.`Academia` AS `Academia`, `pc`.`idCicloEscolar` AS `idCicloEscolar`, `h`.`IdHorario` AS `IdHorario`, `h`.`numDia` AS `numDia`, `h`.`txtDia` AS `txtDia`, `h`.`HorIni` AS `HorIni`, `h`.`HorFin` AS `HorFin` FROM (`profesor_curso_view` `pc` join `horarios` `h` on(((`h`.`idCursoDicta` = `pc`.`idCursoDicta`) and (`h`.`idProfesor` = `pc`.`idProfesor`) and (`h`.`idCurso` = `pc`.`idCurso`)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `profesor_curso_view`
--
DROP TABLE IF EXISTS `profesor_curso_view`;

DROP VIEW IF EXISTS `profesor_curso_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profesor_curso_view`  AS SELECT `pc`.`idCursoDicta` AS `idCursoDicta`, `pc`.`idProfesor` AS `idProfesor`, `p`.`NomProfesor` AS `NomProfesor`, `p`.`ApellidosProfesor` AS `ApellidosProfesor`, `pc`.`idCurso` AS `idCurso`, `c`.`NombreCurso` AS `NombreCurso`, `c`.`Seccion` AS `Seccion`, `c`.`NRC` AS `NRC`, `c`.`Academia` AS `Academia`, `c`.`idCicloEscolar` AS `idCicloEscolar` FROM ((`profesor_curso` `pc` join `profesor` `p` on((`p`.`idProfesor` = `pc`.`idProfesor`))) join `curso` `c` on((`c`.`idCurso` = `pc`.`idCurso`))) ORDER BY `c`.`idCicloEscolar` ASC ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_profesor_curso`
--
ALTER TABLE `alumno_profesor_curso`
  ADD CONSTRAINT `FKalumno_pro298549` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`),
  ADD CONSTRAINT `FKalumno_pro554239` FOREIGN KEY (`IdmatriculaCab`) REFERENCES `matriculacab` (`IdmatriculaCab`),
  ADD CONSTRAINT `FKalumno_pro692497` FOREIGN KEY (`idCursoDicta`,`idProfesor`,`idCurso`) REFERENCES `profesor_curso` (`idCursoDicta`, `idProfesor`, `idCurso`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `FKasistencia952443` FOREIGN KEY (`idMatricula`,`idAlumno`) REFERENCES `alumno_profesor_curso` (`idMatricula`, `idAlumno`);

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `FKcalificaci634665` FOREIGN KEY (`idMatricula`,`idAlumno`) REFERENCES `alumno_profesor_curso` (`idMatricula`, `idAlumno`),
  ADD CONSTRAINT `FKcalificaci941586` FOREIGN KEY (`idEvaluacion`,`idCurso`) REFERENCES `evaluacion` (`idEvaluacion`, `idCurso`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `FKcurso363176` FOREIGN KEY (`idCicloEscolar`) REFERENCES `cicloescolar` (`idCicloEscolar`);

--
-- Filtros para la tabla `diafestivo`
--
ALTER TABLE `diafestivo`
  ADD CONSTRAINT `FKdiafestivo221864` FOREIGN KEY (`idCicloEscolar`) REFERENCES `cicloescolar` (`idCicloEscolar`);

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `FKevaluacion931468` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`);

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `FKhorarios931373` FOREIGN KEY (`idCursoDicta`,`idProfesor`,`idCurso`) REFERENCES `profesor_curso` (`idCursoDicta`, `idProfesor`, `idCurso`);

--
-- Filtros para la tabla `matriculacab`
--
ALTER TABLE `matriculacab`
  ADD CONSTRAINT `FKmatriculaC647858` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`);

--
-- Filtros para la tabla `profesor_curso`
--
ALTER TABLE `profesor_curso`
  ADD CONSTRAINT `FKprofesor_c559376` FOREIGN KEY (`idProfesor`) REFERENCES `profesor` (`idProfesor`),
  ADD CONSTRAINT `FKprofesor_c717960` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
