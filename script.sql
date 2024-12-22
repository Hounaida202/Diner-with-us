

CREATE TABLE roles (
role_id INT PRIMARY KEY AUTO_INCREMENT,
role_name VARCHAR(100) NOT NULL
);
CREATE TABLE users (
user_id INT PRIMARY KEY AUTO_INCREMENT,
user_name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
role_id INT ,
FOREIGN KEY (role_id) REFERENCES roles(role_id)
 ON UPDATE CASCADE 
 ON DELETE CASCADE 
);
CREATE TABLE menus (
menu_id INT PRIMARY KEY AUTO_INCREMENT,
menu_name VARCHAR(100) NOT NULL,
user_id INT ,
FOREIGN KEY (user_id) REFERENCES users(user_id)
 ON UPDATE CASCADE 
 ON DELETE CASCADE 
);
CREATE TABLE reservations (
reservation_id INT PRIMARY KEY AUTO_INCREMENT,
date_reservation DATE NOT NULL,
nombre_guest INT NOT NULL,
user_id INT,
menu_id INT ,
FOREIGN KEY (user_id) REFERENCES users(user_id)
 ON UPDATE CASCADE 
 ON DELETE CASCADE,
 FOREIGN KEY (menu_id) REFERENCES menus(menu_id)
 ON UPDATE CASCADE 
 ON DELETE CASCADE  
);
CREATE TABLE plats (
plat_id INT PRIMARY KEY AUTO_INCREMENT,
plat_name VARCHAR(100) NOT NULL,
plat_type VARCHAR(100) NOT NULL,
picture TEXT ,
composants TEXT,
menu_id INT ,
FOREIGN KEY (menu_id) REFERENCES menus(menu_id)
 ON UPDATE CASCADE 
 ON DELETE CASCADE 
);
insert into menus (menu_name)
values('Moroccan'),('Italian'),('Vegitarian');


INSERT INTO plats (plat_name,plat_type,menu_id)
VALUES('Briouates au Fromage et Épinards',
'entrée',1),
('Tagine de Poulet au Citron Confit et Olives',
'plat principal',1),
('Pastilla aux Amandes','dessert',1),
('farine au Fromage et Épinards','entrée',2),
('plat de Poulet au Citron Confit et Olives',
'plat principal',2),
('cake aux Amandes','dessert',2); 


