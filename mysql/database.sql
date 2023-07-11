    -- CREATE TABLE --

CREATE TABLE users (
    id INT(11) NOT NULL PRIMARY KEY,
    mail VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nbConvives INT(10),
    allergies VARCHAR(255),
    role VARCHAR(16) NOT NULL CHECK (role in ("CLIENT","ADMIN"))
)

CREATE TABLE reservations (
    id INT(11) PRIMARY KEY NOT NULL,
    name VARCHAR(36) NOT NULL,
    mail VARCHAR(255),
    nbConvives INT(10) NOT NULL,
    date DATE NOT NULL,
    heure TIME NOT NULL,
    allergies VARCHAR(255)
)

CREATE TABLE carte (
    id INT(11) PRIMARY KEY NOT NULL,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
)

CREATE TABLE galerieImage (
    id INT(11) PRIMARY KEY NOT NULL,
    name VARCHAR(36) NOT NULL,
    imgLink VARCHAR(255) NOT NULL
)

CREATE TABLE horaire (
    id INT(3) PRIMARY KEY NOT NULL,
    day VARCHAR(36) NOT NULL,
    time VARCHAR(36) NOT NULL,
    start TIME,
    end TIME
)