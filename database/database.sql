-- Create the database
CREATE DATABASE IF NOT EXISTS student_management;
USE student_management;

-- Admin table
CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Insert a default admin user (username: admin, password: admin)
INSERT INTO admin (username, password, email) VALUES
('admin', 'admin', 'admin@example.com');

-- Student table
CREATE TABLE IF NOT EXISTS student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rollno VARCHAR(50) NOT NULL,
    name VARCHAR(100) NOT NULL,
    city VARCHAR(100) NOT NULL,
    pcont VARCHAR(20) NOT NULL,
    standard VARCHAR(10) NOT NULL,
    image VARCHAR(255) NOT NULL
);