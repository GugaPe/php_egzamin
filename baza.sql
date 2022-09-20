CREATE DATABASE baza

USE baza
GO

CREATE TABLE lokale(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nazwa TEXT,
    miasto TEXT,
    ulica TEXT,
    numer INTEGER
);

CREATE TABLE dania(
    id int NOT NULL PRIMARY AUTO_INCREMENT,
    typ INTEGER,
    nazwa TEXT,
    cena INTEGER
);


CREATE TABLE rezerwacje(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nr_stolika INTEGER,
    data_rez DATE,
    liczba_osob INTEGER,
    telefon TEXT,
);

CREATE TABLE pracownicy(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    imie TEXT,
    nazwisko TEXT,
    stanowisko INTEGER
);