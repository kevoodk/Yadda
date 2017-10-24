drop database if exists yadda;
create database yadda;
use yadda;

create table user(
user_id int not null primary key,
username varchar(32) not null,
email varchar(64) not null,
password blob not null,
profile_picture blob not null,
activated boolean not null default false,
rank int(3) not null,
forname text not null,
biography text,
created_on DATETIME DEFAULT CURRENT_TIMESTAMP
);
create table yadda(
yadda__id int(3) not null primary key,
user_id int not null,
parent_id int not null,
text varchar(140) not null,
image blob, 
draft int(1) not null,
tags longtext not null,
created_on DATETIME DEFAULT CURRENT_TIMESTAMP,
edited_on DATETIME DEFAULT CURRENT_TIMESTAMP
);

create table vote(
vote_id int not null primary key,
user_id varchar(64) not null,
yadda_id varchar(64) not null,
flag int(2) not null
);

create table follow(
source_id int primary key,
target_id int UNIQUE key,
created_on DATETIME DEFAULT CURRENT_TIMESTAMP
);
