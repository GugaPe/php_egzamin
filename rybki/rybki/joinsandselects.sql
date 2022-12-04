DROP DATABASE IF EXISTS baza2;

CREATE DATABASE baza2;

USE baza2;

CREATE TABLE Reservation(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    restaurant_table_id int FOREIGN KEY REFERENCES Restaurant_Table(id),
    phone_number VARCHAR(12),
    date DATETIME,
    number_of_guests INT
);

CREATE TABLE Restaurant_Table(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    number_of_guests INT,
    restaurant_id int FOREIGN KEY REFERENCES Restaurant(id)
);

CREATE TABLE Restaurant(
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(100) NOT NULL,
    city VARCHAR(100) NOT NULL,
    adress VARCHAR(255) NOT NULL,
    postcode VARCHAR(10) NOT NULL
);

CREATE TABLE Meal(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    meal_type_id int FOREIGN KEY REFERENCES MealType(id),
    restaurant_id int FOREIGN KEY REFERENCES Restaurant(id),
    price INT,
    meal_name VARCHAR(100)
);

CREATE TABLE MealType(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(100)
);

CREATE TABLE Employee(
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    first_name VARCHAR(100),
    last_name VARCHAR(225),
    personal_id_number VARCHAR(11)
);

CREATE TABLE Employment(
    employee_id int FOREIGN KEY REFERENCES Employee(id),
    employee_position_id int FOREIGN KEY REFERENCES Employee_Position(id),
    restaurant_id int FOREIGN KEY REFERENCES Restaurant(id)
);

CREATE TABLE Employee_Position(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

-- wyświetlić wszystkie stoliki i rezerwacje jeśli istnieją
SELECT * FROM Restaurant_table AS rt
JOIN Restaurant AS r ON r.id = rt.restaurant.id
LEFT JOIN Reservation AS rsv ON rsv.restaurant_table_id = rt.id

-- wyświetlić wszystkie stoliki, które nie mają rezerwacji
SELECT * FROM Restaurant_Table AS rt
JOIN Restaurant AS r On r.id = rt.restaurant_id
LEFT JOIN Reservation AS rsv ON rsv.restaurant_table_id = rt.id
WHERE rsv.restaurant_table_id is NULL

-- wyświetlić stoliki, które mają rezerwację w danej restauracji
SELECT * FROM Restaurant_table AS rt
JOIN Restaurant AS r On r.id = rt.restaurant_id
LEFT JOIN Reservation AS rsv ON rsv.restaurant_table_id = rt.id
GROUP BY r.id

--wyświetlić wszystkich pracowników oraz ich dane dot. stanowiska i zatrudnienia w restauracjach
SELECT * FROM Employee AS e
JOIN Employment AS emp ON emp.employee_id = e.id
JOIN Employee_Position AS ep ON ep.id = emp.employee_position_id
JOIN Restaurant AS r ON r.id = emp.restaurant_id

--wyświetlić pracowników nigdzie nie zatrudnionych 
SELECT * FROM Employee AS e
RIGHT JOIN Employment AS emp ON emp.employee_id = e.id
WHERE emp.employee_id IS NULL

--wyświetlić pracowników, którzy pracują w conajmniej 2 restauracjach
SELECT * FROM Employee AS e
JOIN Employment AS emp ON emp.employee_id = e.id
JOIN Restaurant AS r ON r.id = emp.restaurant_id
GROUP BY e.id
HAVING COUNT(r.id) >= 2

--cross join restauracji i pracowników
SELECT * FROM Restaurant AS r
CROSS JOIN Employee AS e