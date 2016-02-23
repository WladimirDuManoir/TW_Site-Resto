CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
tel varchar(10)
)
CREATE TABLE incident (
id_incident INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fk_pers INT(6) UNSIGNED,
description VARCHAR(150) ,
type int,
severite int,
pref varchar(10),
srcImage VARCHAR(50) NULL,
CONSTRAINT cfk_pers FOREIGN KEY (fk_pers) REFERENCES users(id)
)