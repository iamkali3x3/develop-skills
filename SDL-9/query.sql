CREATE DATABASE toll_tax_db;

USE toll_tax_db;

CREATE TABLE toll_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vehicle_number VARCHAR(20),
    vehicle_type VARCHAR(20),
    tax_amount DECIMAL(10, 2),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
