DROP DATABASE IF EXISTS wedkowanie;

CREATE DATABASE wedkowanie;

USE wedkowanie;

CREATE TABLE Ryby(
    id int UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nazwa TEXT,
    wystepowanie TEXT,
    styl_zycia INTEGER
);
CREATE TABLE Okres_ochronny(
    id int UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Ryby_id int UNSIGNED NOT NULL,
    od_miesiaca INTEGER,
    do_miesiaca INTEGER,
    wymiar_ochronny INTEGER,
    FOREIGN KEY (Ryby_id) REFERENCES Ryby(id)
);

CREATE TABLE Lowisko(
    id int UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Ryby_id int UNSIGNED NOT NULL,
    akwen TEXT,
    wojewodztwo TEXT,
    rodzaj INTEGER,
    FOREIGN KEY (Ryby_id) REFERENCES Ryby(id)
);

INSERT INTO Ryby (nazwa, wystepowanie, styl_zycia) VALUES ('Amur', 'Amur', 1);
INSERT INTO Ryby (nazwa, wystepowanie, styl_zycia) VALUES ('Amurek', 'Amurek', 1);
INSERT INTO Ryby (nazwa, wystepowanie, styl_zycia) VALUES ('Amurka', 'Amurka', 2);

INSERT INTO Lowisko (Ryby_id, akwen, wojewodztwo, rodzaj) VALUES (1, 'akwen1', 'mazowieckie', 3);
INSERT INTO Lowisko (Ryby_id, akwen, wojewodztwo, rodzaj) VALUES (2, 'akwen2', 'mazowieckie', 3);
INSERT INTO Lowisko (Ryby_id, akwen, wojewodztwo, rodzaj) VALUES (3, 'akwen3', 'mazowieckie', 2);