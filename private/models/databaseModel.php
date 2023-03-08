<?php

// database "filRouge" mal configurée au niveau de l'engine, myISAM au lieu de InnoDB, également une redondance de données imposée dans le cadre de la formation, à revoi.

// CREATE TABLE IF NOT EXISTS admin (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     email VARCHAR(255) NOT NULL,
//     password VARCHAR(255) NOT NULL
//   );
  
//   CREATE TABLE IF NOT EXISTS users (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     profile VARCHAR(255),
//     gender ENUM('M', 'F', 'O'),
//     name VARCHAR(255) NOT NULL,
//     first_name VARCHAR(255) NOT NULL,
//     email VARCHAR(255) NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     birth_date DATE,
//     phone_number VARCHAR(20),
//     street VARCHAR(255),
//     street_number VARCHAR(10),
//     apartment_number VARCHAR(10),
//     country_code VARCHAR(10),
//     city VARCHAR(255)
//   );
  
//   CREATE TABLE IF NOT EXISTS carts (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     ident_order INT,
//     price DECIMAL(10, 2),
//     ident_product INT,
//     quantity INT,
//     total_price DECIMAL(10, 2),
//     id_user INT,
//     FOREIGN KEY (id_user) REFERENCES users (id)
//   );
  
//   CREATE TABLE IF NOT EXISTS comments (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     comment TEXT,
//     comment_date DATETIME,
//     author VARCHAR(255),
//     id_product INT,
//     id_user INT,
//     FOREIGN KEY (id_product) REFERENCES products (id),
//     FOREIGN KEY (id_user) REFERENCES users (id)
//   );
  
//   CREATE TABLE IF NOT EXISTS ratings (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     score INT,
//     id_product INT,
//     id_user INT,
//     FOREIGN KEY (id_product) REFERENCES products (id),
//     FOREIGN KEY (id_user) REFERENCES users (id)
//   );
  
//   CREATE TABLE IF NOT EXISTS products (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     description TEXT,
//     price DECIMAL(10, 2),
//     ident_product INT,
//     is_enabled BOOLEAN,
//     id_category INT,
//     id_discount INT,
//     FOREIGN KEY (id_category) REFERENCES categories (id),
//     FOREIGN KEY (id_discount) REFERENCES discounts (id)
//   );
  
//   CREATE TABLE IF NOT EXISTS categories (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     description TEXT,
//     is_enabled BOOLEAN,
//     id_parent INT,
//     id_photo INT,
//     FOREIGN KEY (id_parent) REFERENCES categories (id),
//     FOREIGN KEY (id_photo) REFERENCES photos (id)
//   );
  
//   CREATE TABLE IF NOT EXISTS photos (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     path VARCHAR(255),
//     is_enabled BOOLEAN
//   );
  
//   CREATE TABLE IF NOT EXISTS product_photo (
//     id_photo INT,
//     id_product INT,
//     FOREIGN KEY (id_photo) REFERENCES photos (id),
//     FOREIGN KEY (id_product) REFERENCES products (id),
//     PRIMARY KEY (id_photo, id_product)
//   );
  
//   CREATE TABLE IF NOT EXISTS colors (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     color VARCHAR(255),
//     description TEXT,
//     is_enabled BOOLEAN,
//     inc_number INT
//   );
  
//   CREATE TABLE IF NOT EXISTS sizes (
//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     size VARCHAR(255),
//     inc_number INT,
//     description TEXT,
//     is_enabled BOOLEAN
//   );

//   CREATE TABLE product_color_size (
//     id_product INT NOT NULL,
//     id_color INT NOT NULL,
//     id_size INT NOT NULL,
//     PRIMARY KEY (id_product, id_color, id_size),
//     FOREIGN KEY (id_product) REFERENCES products (id),
//     FOREIGN KEY (id_color) REFERENCES colors (id),
//     FOREIGN KEY (id_size) REFERENCES sizes (id)
//   );
  
//   CREATE TABLE orders (
//     id INT NOT NULL AUTO_INCREMENT,
//     name VARCHAR(255) NOT NULL,
//     first_name VARCHAR(255) NOT NULL,
//     email VARCHAR(255) NOT NULL,
//     phone_number VARCHAR(20) NOT NULL,
//     street VARCHAR(255) NOT NULL,
//     street_number VARCHAR(20) NOT NULL,
//     apartment_number VARCHAR(20),
//     country_code VARCHAR(10) NOT NULL,
//     city VARCHAR(255) NOT NULL,
//     currency VARCHAR(10) NOT NULL,
//     price DECIMAL(10, 2) NOT NULL,
//     ident_cart INT NOT NULL,
//     message TEXT,
//     total_price DECIMAL(10, 2) NOT NULL,
//     created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
//     PRIMARY KEY (id),
//     FOREIGN KEY (ident_cart) REFERENCES carts (id)
//   );
  
//   CREATE TABLE bills (
//     id INT NOT NULL AUTO_INCREMENT,
//     amount DECIMAL(10, 2) NOT NULL,
//     quantity INT NOT NULL,
//     bill_number VARCHAR(255) NOT NULL,
//     created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
//     payment_method VARCHAR(255) NOT NULL,
//     id_order INT NOT NULL,
//     PRIMARY KEY (id),
//     FOREIGN KEY (id_order) REFERENCES orders (id)
//   );


// alter database filRouge engine=myisam; to engine=InnoDB;

// SET foreign_key_checks = 0;

//     SELECT concat('ALTER TABLE `', TABLE_NAME, '` ENGINE=InnoDB;') AS sql_statements
//     FROM information_schema.tables
//     WHERE table_schema = 'your_database_name' AND ENGINE = 'MyISAM';

//     SET foreign_key_checks = 1;
    
//     ALTER TABLE `admin` ENGINE=InnoDB;
//     ALTER TABLE `bills` ENGINE=InnoDB;
//     ALTER TABLE `categories` ENGINE=InnoDB;
//     ALTER TABLE `colors` ENGINE=InnoDB;
//     ALTER TABLE `comments` ENGINE=InnoDB;
//     ALTER TABLE `carts` ENGINE=InnoDB;
//     ALTER TABLE `discounts` ENGINE=InnoDB;
//     ALTER TABLE `orders` ENGINE=InnoDB;
//     ALTER TABLE `photos` ENGINE=InnoDB;
//     ALTER TABLE `product_color_size` ENGINE=InnoDB;
//     ALTER TABLE `product_photo` ENGINE=InnoDB;
//     ALTER TABLE `products` ENGINE=InnoDB;
//     ALTER TABLE `ratings` ENGINE=InnoDB;
//     ALTER TABLE `sizes` ENGINE=InnoDB;
//     ALTER TABLE `users` ENGINE=InnoDB;
