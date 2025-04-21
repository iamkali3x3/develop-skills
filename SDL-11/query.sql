CREATE DATABASE college_admission_db;

USE college_admission_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    roll_number VARCHAR(20),
    course VARCHAR(100),
    admission_date DATE
);
