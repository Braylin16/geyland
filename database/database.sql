CREATE DATABASE geyland;
USE geyland;

CREATE TABLE users(
id_user             int(255) AUTO_INCREMENT PRIMARY KEY,
name                varchar(200) NOT NULL,
surname             varchar(200) NOT NULL,
nick                varchar(100),
email               varchar(100) UNIQUE NOT NULL,
password            varchar(190) NOT NULL,
description         text,
photo_profile       varchar(255),
photo_cover         varchar(255),
day                 varchar(10),
month               varchar(50),
year                varchar(50),
orientation         varchar(255),
ip_user             varchar(255),
browser_user        varchar(200),
roll                varchar(50),
create_at_user      date
)ENGINE=InnoDb;

CREATE TABLE publication(
id_pub              int(255) AUTO_INCREMENT PRIMARY KEY,
id_user_pub         int(255) NOT NULL,
messeger_pub        text,
photo_pub           varchar(255),
ip_pub              varchar(255),
browser_pub         varchar(200),
create_at_pub       date,
CONSTRAINT fk_pub_user FOREIGN KEY(id_user_pub) REFERENCES users(id_user)
)ENGINE=InnoDb;

CREATE TABLE comment(
id_comment          int(255) AUTO_INCREMENT PRIMARY KEY,
id_user_comment     int(255) NOT NULL,
id_pub_comment      int(255) NOT NULL,
messeger_comment    text,
ip_comment          varchar(200),
browser_comment     varchar(200),
create_at_comment   date,
CONSTRAINT fk_comment_user FOREIGN KEY(id_user_comment) REFERENCES users(id_user),
CONSTRAINT fk_pub_comment FOREIGN KEY(id_pub_comment) REFERENCES publication(id_pub)
)ENGINE=InnoDb;