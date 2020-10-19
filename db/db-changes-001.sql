-- Write here your first database changes
-- CREATE TABLE ...
-- Everyone should be possible to replicate your database schema
CREATE TABLE item (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(25),
  model varchar(25),
  price varchar(25),
PRIMARY KEY(id)
);

CREATE TABLE `alex_sandbox`.`manufacturer` ( 
  `id` INT NOT NULL AUTO_INCREMENT COMMENT 'идентификатор' , 
  `name` VARCHAR(25) NOT NULL COMMENT 'логин' , 
PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci COMMENT = 'Производитель';