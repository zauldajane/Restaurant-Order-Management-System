create database db_batch8_capstone;

use db_batch8_capstone

--Table: User
CREATE TABLE Users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    name VACHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VACHAR(255) NOT NULL,
    role ENUM('admin','customer') DEFAULT 'cutomer'
);
ALTER TABLE Users ADD role ENUM('user', 'admin') DEFAULT 'user';