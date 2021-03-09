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
create_at_user      datetime
)ENGINE=InnoDb;

CREATE TABLE publication(
id_pub              int(255) AUTO_INCREMENT PRIMARY KEY,
id_user_pub         int(255) NOT NULL,
messeger_pub        text,
photo_pub           varchar(255),
ip_pub              varchar(255),
browser_pub         varchar(200),
create_at_pub       datetime,
CONSTRAINT fk_pub_user FOREIGN KEY(id_user_pub) REFERENCES users(id_user)
)ENGINE=InnoDb;

CREATE TABLE messege(
id_messege           int(255) AUTO_INCREMENT PRIMARY KEY,
id_emisor            int(255) NOT NULL,
id_receptor          int(255) NOT NULL,
messege              text,
photo_messege        varchar(200),
ip_messege           varchar(200),
browser_messege      varchar(200),
view                 varchar(50),
create_at_messege    datetime,
CONSTRAINT fk_messege_emisor FOREIGN KEY(id_emisor) REFERENCES users(id_user),
CONSTRAINT fk_messege_receptor FOREIGN KEY(id_receptor) REFERENCES users(id_user)
)ENGINE=InnoDb;

CREATE TABLE contact(
id_contact          int(255) AUTO_INCREMENT PRIMARY KEY,
name                varchar(100) NOT NULL,
surname             varchar(100) NOT NULL,
email               varchar(100) NOT NULL,
message             text NOT NULL,
ip_contact          varchar(200),
browser_contact     varchar(200),
create_at_contact   datetime
)ENGINE=InnoDb;