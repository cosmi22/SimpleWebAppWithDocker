-- init.sql
CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);
INSERT INTO users (name) VALUES ('Cosmina');

DROP USER IF EXISTS 'cosmi'@'%';
-- Ensure the user is created before altering
CREATE USER 'cosmi'@'%' IDENTIFIED BY 'demo1234';
GRANT ALL PRIVILEGES ON mydb.* TO 'cosmi'@'%';
FLUSH PRIVILEGES;

ALTER USER 'cosmi'@'%' IDENTIFIED WITH mysql_native_password BY 'demo1234';