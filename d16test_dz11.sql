show databases;

-- DROP DATABASE d16test_dz11;
-- create database d16test_dz11;

use d16test_dz11;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    firstName VARCHAR(50),
    lastName VARCHAR(80),
    created_at DATETIME,
    updated_at DATETIME
);

select * from users;

create table posts (
id int primary key auto_increment NOT NULL,
post varchar(255),
created_at datetime not null,
updated_at datetime not null
);

select * from posts;

create table categories (
id int primary key auto_increment NOT NULL,
categorie varchar(255),
created_at datetime not null,
updated_at datetime not null
);

select * from categories;

create table tags (
id int primary key auto_increment NOT NULL,
tag varchar(255),
created_at datetime not null,
updated_at datetime not null
);

select * from tags;

CREATE TABLE post_tag (
  id int auto_increment NOT NULL,
  id_post varchar(8) NOT NULL,
  id_tag varchar(8) NOT NULL,
  created_at datetime NOT NULL,
  updated_at datetime NOT NULL,
  PRIMARY KEY (id)
--   FOREIGN KEY (id_post)  REFERENCES posts (id),
--   FOREIGN KEY (id_tag)  REFERENCES users (id)
);

select * from post_tag;
