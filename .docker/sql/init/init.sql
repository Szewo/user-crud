CREATE DATABASE db;

use db;

CREATE TABLE User (
    user_id int PRIMARY KEY AUTO_INCREMENT,
    user_name varchar(255) NOT NULL,
    user_surname varchar(255) NOT NULL,
    user_telephone_number varchar(9) NOT NULL,
    user_address varchar(255)
);