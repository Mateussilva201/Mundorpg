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


### (cria a tabela fichas primeiro né)
USE `fichas`;  
CREATE TABLE `pericias` (
id INT AUTO_INCREMENT PRIMARY KEY,
pericia_acrobacia INT(100) NOT NULL,
pericia_arcanismo INT(100) NOT NULL,
pericia_atuacao INT(100) NOT NULL,
pericia_enganacao INT(100) NOT NULL,
pericia_furtividade INT(100) NOT NULL,
pericia_historia INT(100) NOT NULL,
pericia_intimidacao INT(100) NOT NULL,
pericia_intuicao INT(100) NOT NULL,
pericia_investigacao INT(100) NOT NULL,
pericia_animais INT(100) NOT NULL, 
pericia_medicina INT(100) NOT NULL,
pericia_natureza INT(100) NOT NULL,
pericia_percepcao INT(100) NOT NULL,
pericia_persuasao INT(100) NOT NULL,
pericia_prestidigitacao INT(100) NOT NULL,
pericia_religiao INT(100) NOT NULL,
pericia_sobrevivencia INT(100) NOT NULL

);
