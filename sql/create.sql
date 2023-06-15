CREATE DATABASE crudphp;

USE crudphp;

CREATE TABLE products(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DOUBLE NOT NULL
);

INSERT INTO
    products(name, description, price)
VALUES
(
        'product1',
        'some description for product1',
        50.5
    );

CREATE TABLE comments(
    id INT PRIMARY KEY AUTO_INCREMENT,
    text TEXT NOT NULL,
    product_id INT,
    FOREIGN KEY (product_id) REFERENCES products (id) ON DELETE CASCADE
);