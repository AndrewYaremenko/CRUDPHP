CREATE DATABASE crudphp;

USE crudphp;

CREATE TABLE goods(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DOUBLE NOT NULL
);

INSERT INTO
    goods(name, description, price)
VALUES
('product1', 'some description for product1', 50.5);