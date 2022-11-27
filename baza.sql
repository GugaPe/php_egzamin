DROP DATABASE IF EXISTS baza;

CREATE DATABASE baza;

USE baza;

CREATE TABLE lokale(
    id int AUTO_INCREMENT PRIMARY KEY,
    nazwa TEXT,
    miasto TEXT,
    ulica TEXT,
    numer INTEGER
);

CREATE TABLE dania(
    id int AUTO_INCREMENT PRIMARY KEY,
    typ INTEGER,
    nazwa TEXT,
    cena INTEGER
);


CREATE TABLE rezerwacje(
    id int AUTO_INCREMENT PRIMARY KEY,
    nr_stolika INTEGER,
    data_rez DATE,
    liczba_osob INTEGER,
    telefon TEXT
);

CREATE TABLE pracownicy(
    id int AUTO_INCREMENT PRIMARY KEY,
    imie TEXT,
    nazwisko TEXT,
    stanowisko INTEGER
);

