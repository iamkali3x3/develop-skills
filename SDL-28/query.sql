CREATE DATABASE email_verification;
USE email_verification;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  token VARCHAR(255),
  is_verified TINYINT(1) DEFAULT 0
);
