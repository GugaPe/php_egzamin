DROP DATABASE IF EXISTS wedkowanie;

CREATE DATABASE wedkowanie;

USE wedkowanie;

CREATE TABLE Okres_ochronny(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Ryby_id int FOREIGN KEY REFERENCES Ryby(id),
    od_miesiaca INTEGER,
    do_miesiaca INTEGER,
    wymiar_ochronny INTEGER
);

CREATE TABLE Ryby(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nazwa TEXT,
    wystepowanie TEXT,
    styl_zycia INTEGER
);

CREATE TABLE Lowisko(
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Ryby_id int FOREIGN KEY REFERENCES Ryby(id),
    akwen TEXT,
    wojewodztwo TEXT,
    rodzaj INTEGER
);