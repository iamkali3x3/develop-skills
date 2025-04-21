CREATE DATABASE complaint_db;

USE complaint_db;

CREATE TABLE complaints (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  complaint TEXT
);
