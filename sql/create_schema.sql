CREATE TABLE users(
  id int not null auto_increment primary key,
  username varchar(20) not null unique,
  password varchar(30) not null,
  first_name varchar(20) not null,
  last_name varchar(20) not null
);