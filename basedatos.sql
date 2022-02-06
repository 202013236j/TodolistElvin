create database TodoList;

use vaicrud1;

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
(32412, 'Luis', 'correo@gmail.com', 123456789),
(32413, 'Antonio', 'correo2@gmail.com', 342568124),
(32414, 'Marco', 'corre3@hotmail.com', 134653246),
(32425, 'Tomás', 'corre4@gmail.com', 2147483647),
(32447, 'Jorge', 'vai@gmail.com', 222222545);