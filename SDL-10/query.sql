CREATE DATABASE pharmacy_db;

USE pharmacy_db;

CREATE TABLE medicines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    quantity INT,
    price DECIMAL(10, 2),
    expiry_date DATE
);
