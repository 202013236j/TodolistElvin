create database Todolist;

use Todolist;

CREATE TABLE `usuarios` (
  `cod` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `dni` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod`);
  
  ALTER TABLE `usuarios`
  MODIFY `cod` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32448;
  
  INSERT INTO `usuarios` (`cod`, `nom`, `correo`, `dni`) VALUES
(32412, 'usuario 1', 'Insertar usuario 1', 2021),
(32413, 'usuario 2', 'Insertar usuario 2', 2021),
(32414, 'usuario 3', 'Insertar usuario 3', 2021),
(32425, 'usuario 4', 'Insertar usuario 4', 2021),
(32447, 'usuario 5', 'Insertar usuario 5', 2021);