CREATE DATABASE flights_api;

USE flights_api;

CREATE TABLE planes(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    capacity int(8)
);

CREATE TABLE flights(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    plane_id int(8),
    FOREIGN KEY (plane_id) REFERENCES planes(id),
    departure varchar(32),
    arrival varchar(32),
    from_city varchar(32),
    to_city varchar(32),
    distance int(8),
    flight_number varchar(32) UNIQUE
);

CREATE TABLE passengers(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    passport_number varchar(32) UNIQUE,
    birth varchar(32)	
);

CREATE TABLE flights_passengers(
    flight_id int(8),
    FOREIGN KEY (flight_id) REFERENCES flights(id),
    passengers_id int(8),
    FOREIGN KEY (passengers_id) REFERENCES passengers(id)
);