create database Todolist;

use Todolist;

CREATE TABLE `usuarios` (
  `cod` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod`);
  
  ALTER TABLE `usuarios`
  MODIFY `cod` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32448;
  
  INSERT INTO `usuarios` (`cod`, `nom`, `correo`, `tel`) VALUES
(32412, 'Tarea 1', 'Descripción de la tarea', 2021),
(32413, 'Tarea 2', 'Descripción de la tarea', 2021),
(32414, 'Tarea 3', 'Descripción de la tarea', 2021),
(32425, 'Tarea 4', 'Descripción de la tarea', 2021),
(32447, 'Tarea 5', 'Descripción de la tarea', 2021);