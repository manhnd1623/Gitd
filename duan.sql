CREATE DATABASE tiny_garden;
USE tiny_garden;

CREATE TABLE categories (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL
);

CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  category_id INT,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10,2),
  image VARCHAR(255),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);
