CREATE DATABASE grocery_store;

USE grocery_store;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    image VARCHAR(255)
);

INSERT INTO products (name, price, image) VALUES
('Apple', 50.00, 'apple.jpg'),
('Banana', 30.00, 'banana.jpg'),
('Milk', 60.00, 'milk.jpg'),
('Bread', 40.00, 'bread.jpg');
