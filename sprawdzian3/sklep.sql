CREATE DATABASE sklep;
USE sklep;

CREATE TABLE dostawcy (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(50),
    adres VARCHAR(50)
);

CREATE TABLE towary (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(20),
    cena float,
    promocja tinyint(1),
    idDostawcy INT(11),
    FOREIGN KEY (idDostawcy) REFERENCES dostawcy(id)
)