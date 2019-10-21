show databases;

-- DROP DATABASE d16test_dz11;
-- CREATE database d16test_dz11;

use d16test_dz11;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    -- fk_id_post INT,
    firstName VARCHAR(50),
    lastName VARCHAR(80),
    created_at DATETIME,
    updated_at DATETIME
    -- FOREIGN KEY (fk_id_post) REFERENCES posts (fk_id_post) ON DELETE CASCADE
);

-- INSERT INTO users
-- (firstName,lastName,created_at,updated_at)
-- VALUE
-- ('John','Doe','2019-07-30','2019-07-30'),
-- ('Vong','Booe','2019-07-30','2019-07-30');

select * from users; 

create table posts (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
-- fk_id_user INT NOT NULL,
-- fk_id_categorie INT NOT NULL,
user_id INT NOT NULL,
category_id INT NOT NULL,
post VARCHAR(255),
created_at DATETIME,
updated_at DATETIME,
FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE,
FOREIGN KEY (category_id) REFERENCES categories (id) ON DELETE CASCADE
);

-- INSERT INTO posts
-- (user_id,category_id,post,created_at,updated_at)
-- VALUE
-- ('1','1','Post 1','2019-07-30','2019-07-30'),
-- ('1','2','Post 2','2019-07-30','2019-07-30'),
-- ('2','1','Post 3','2019-07-30','2019-07-30'),
-- ('1','1','Post 4','2019-07-30','2019-07-30'),
-- ('2','2','Post 5','2019-07-30','2019-07-30');


-- alter table posts
-- add foreign key (fk_id_post)
-- references users(id);

select * from posts;

create table categories (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
-- fk_id_categorie INT NOT NULL,
category VARCHAR(255),
created_at DATETIME,
updated_at DATETIME
-- FOREIGN KEY (fk_id_categorie) REFERENCES posts (id) ON DELETE CASCADE
);

-- INSERT INTO categories
-- (category,created_at,updated_at)
-- VALUE
-- ('Categorie 1','2019-07-30','2019-07-30'),
-- ('Categorie 2','2019-07-30','2019-07-30');

select * from categories;

create table tags (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
-- tag_id INT NOT NULL,
tag VARCHAR(255),
created_at DATETIME,
updated_at DATETIME
);

-- INSERT INTO tags
-- (tag_id,tag,created_at,updated_at)
-- VALUE
-- ('1','Tag 1','2019-07-30','2019-07-30'),
-- ('2','Tag 2','2019-07-30','2019-07-30');

select * from tags;

CREATE TABLE post_tag (
  id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  post_id INT NOT NULL,
  tag_id INT NOT NULL,
  created_at DATETIME,
  updated_at DATETIME
--   FOREIGN KEY (fk_id_post)  REFERENCES posts (id) ON DELETE CASCADE,
--   FOREIGN KEY (fk_id_tag)  REFERENCES tags (id) ON DELETE CASCADE
);

select * from post_tag;
