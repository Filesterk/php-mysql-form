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