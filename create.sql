DROP DATABASE IF EXISTS cake3lunch;
CREATE DATABASE cake3lunch DEFAULT CHARACTER SET utf8;

SET NAMES utf8;

USE cake3lunch;

DROP TABLE IF EXISTS users;
CREATE TABLE users(
	id int(11) not null auto_increment,
	name varchar(255) not null,
	station_id int(11) ,
	password varchar(255) not null,
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS stores;
CREATE TABLE stores(
	id int(11) not null auto_increment,
	name varchar(255) not null,
	address varchar(255) default null,
	station_id int(11) not null,
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS comments;
CREATE TABLE comments(
	id int(11) not null auto_increment,
	user_id int(11) not null,
	store_id int(11) not null,
	comment text default null,
	created_at datetime default null,
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS stations;
CREATE TABLE stations(
	id int(11) not null auto_increment,
	name varchar(255) not null,
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS images;
CREATE TABLE images(
	id int(11) not null auto_increment,
	comment_id int(11) not null,
	image_url varchar(255) not null,
	PRIMARY KEY (id)
);
