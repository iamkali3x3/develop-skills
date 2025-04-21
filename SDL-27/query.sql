CREATE DATABASE book_catalog;
USE book_catalog;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100)
);

CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  author VARCHAR(255),
  genre VARCHAR(100)
);

INSERT INTO books (title, author, genre) VALUES
('The Alchemist', 'Paulo Coelho', 'Fiction'),
('Clean Code', 'Robert C. Martin', 'Programming'),
('Wings of Fire', 'A.P.J Abdul Kalam', 'Biography'),
('Harry Potter', 'J.K. Rowling', 'Fantasy');
