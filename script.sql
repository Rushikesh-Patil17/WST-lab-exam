DROP DATABASE IF EXISTS todo;
CREATE DATABASE todo;
USE todo;
DROP TABLE IF EXISTS category;
DROP TABLE IF EXISTS list;

CREATE TABLE category (
    category varchar(50) PRIMARY KEY,
    description varchar(300)
);

CREATE TABLE list (
    id int primary key auto_increment,
    title varchar(100),
    category varchar(50) REFERENCES category(category),
    priority tinyint,
    isComplete tinyint
);
