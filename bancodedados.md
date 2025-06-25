CREATE DATABASE IF NOT EXISTS `login-rpg`;
USE `login-rpg`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(100) NOT NULL,
  senha VARCHAR(255) NOT NULL
);


USE `login-rpg`;
SELECT * FROM `usuarios`;
(para ver los logins)