DROP database if exists geoshop;

create database geoshop;

grant all privileges on geoshop.* to 'root'@'localhost';

use geoshop;

CREATE TABLE users (
  id int PRIMARY KEY,
  name varchar(255),
  email varchar(255),
  email_verified_at timestamp,
  password varchar(255)
);

CREATE TABLE orders (
  id int PRIMARY KEY,
  buyer_id int,
  seller_id int
);

CREATE TABLE details (
  id int PRIMARY KEY,
  order_id int,
  plot_id int,
  house_id int,
  cattle_id int
);

CREATE TABLE plots (
  id int PRIMARY KEY
);

CREATE TABLE houses (
  id int PRIMARY KEY
);

CREATE TABLE cattles (
  id int PRIMARY KEY
);

CREATE TABLE user_possession (
  id int PRIMARY KEY,
  user_id int,
  plot_id int,
  house_id int,
  cattle_id int
);

ALTER TABLE orders ADD FOREIGN KEY (buyer_id) REFERENCES users (id);

ALTER TABLE orders ADD FOREIGN KEY (seller_id) REFERENCES users (id);

ALTER TABLE details ADD FOREIGN KEY (order_id) REFERENCES orders (id);

ALTER TABLE details ADD FOREIGN KEY (plot_id) REFERENCES plots (id);

ALTER TABLE details ADD FOREIGN KEY (house_id) REFERENCES houses (id);

ALTER TABLE details ADD FOREIGN KEY (cattle_id) REFERENCES cattles (id);

ALTER TABLE user_possession ADD FOREIGN KEY (user_id) REFERENCES users (id);

ALTER TABLE user_possession ADD FOREIGN KEY (plot_id) REFERENCES plots (id);

ALTER TABLE user_possession ADD FOREIGN KEY (house_id) REFERENCES houses (id);

ALTER TABLE user_possession ADD FOREIGN KEY (cattle_id) REFERENCES cattles (id);
