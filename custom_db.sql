create database test;

CREATE TABLE users (
  id INT  PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  age INT NOT NULL,
  email VARCHAR(100) NOT NULL
);

INSERT INTO users (name, age, email) VALUES
('Usuario1', 25, 'usuario1@example.com'),
('Usuario2', 30, 'usuario2@example.com'),
('Usuario3', 22, 'usuario3@example.com');
