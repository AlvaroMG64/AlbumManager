CREATE DATABASE IF NOT EXISTS `login-php`;
USE `login-php`;

DROP TABLE IF EXISTS albumes;

CREATE TABLE albumes (
    idAlbum INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    artista VARCHAR(100) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    fecha_lanzamiento DATE NOT NULL,
    num_canciones INT NOT NULL,
    es_explicit TINYINT(1) NOT NULL
);

INSERT INTO albumes (titulo, artista, genero, fecha_lanzamiento, num_canciones, es_explicit) VALUES
('Senderos de traición', 'Héroes del Silencio', 'Rock', '1990-12-04', 12, 0),
('Estopa', 'Estopa', 'Rumba Rock', '1999-10-18', 12, 0),
('Agila', 'Extremoduro', 'Rock', '1996-02-23', 13, 0),
('La flaca', 'Jarabe de Palo', 'Pop Rock', '1996-03-03', 11, 0),
('El viaje de Copperpot', 'La Oreja de Van Gogh', 'Pop', '2000-09-11', 12, 0),
('Más', 'Alejandro Sanz', 'Pop', '1997-09-09', 10, 0),
('19 días y 500 noches', 'Joaquín Sabina', 'Rock', '1999-09-06', 13, 0),
('Lágrimas desordenadas', 'Melendi', 'Pop Rock', '2012-11-13', 11, 0),
('Estrella de mar', 'Amaral', 'Pop Rock', '2002-02-04', 12, 0),
('Ultrasónica', 'Los Piratas', 'Rock Alternativo', '2001-09-10', 13, 0),
('1999', 'Love of Lesbian', 'Indie Rock', '2009-03-24', 14, 0),
('Sin documentos', 'Los Rodríguez', 'Rock', '1993-05-21', 14, 0),
('Nuclear', 'Leiva', 'Rock', '2019-03-22', 12, 0),
('Cowboys de la A3', 'Arde Bogotá', 'Rock Alternativo', '2023-05-12', 12, 0),
('Arena en los bolsillos', 'Manolo García', 'Pop Rock', '1998-04-29', 14, 0);