CREATE TABLE titles(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE services(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE passwords(
id INT AUTO_INCREMENT PRIMARY KEY,
hashed_password VARCHAR(255) NOT NULL,
salt VARCHAR(255) NOT NULL,
iterations INT NOT NULL
);

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100) NOT NULL UNIQUE,
email VARCHAR(100) NOT NULL UNIQUE,
role ENUM('buyer','agent','seller') DEFAULT 'buyer',
password_id INT NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (password_id) REFERENCES passwords(id) ON DELETE CASCADE
);

CREATE TABLE cities (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL UNIQUE
);


CREATE TABLE offices (
id INT AUTO_INCREMENT PRIMARY KEY,
city_id INT,
address VARCHAR(255),
phone VARCHAR(20),
FOREIGN KEY (city_id) REFERENCES cities(id) ON DELETE CASCADE
);


CREATE TABLE agents(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
office_id INT,
license_no VARCHAR(50),
phone VARCHAR(20),
title_id INT,
FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL,
FOREIGN KEY (office_id) REFERENCES offices(id) ON DELETE SET NULL,
FOREIGN KEY (title_id) REFERENCES titles(id) ON DELETE SET NULL
);


CREATE TABLE agent_service(
agent_id INT,
service_id INT,
PRIMARY KEY (agent_id, service_id),
FOREIGN KEY (agent_id) REFERENCES agents(id) ON DELETE CASCADE,
FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE
);


CREATE TABLE buyers (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL UNIQUE,
preferred_city_id INT,
budget DECIMAL(12,2),
property_type ENUM('apartment','house'),
FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
FOREIGN KEY (preferred_city_id) REFERENCES cities(id) ON DELETE CASCADE
);

CREATE TABLE sellers (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL UNIQUE,
company_name VARCHAR(100),
contant_number VARCHAR(20),
verified BOOLEAN DEFAULT FALSE,
FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE properties(
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255),
description TEXT,
price DECIMAL(12,2) NOT NULL,
address VARCHAR(255),
city_id INT,
property_type ENUM('apartment', 'house') NOT NULL,
available BOOLEAN DEFAULT TRUE,
rented BOOLEAN DEFAULT FALSE,
FOREIGN KEY (city_id) REFERENCES cities(id) ON DELETE SET NULL
);

CREATE TABLE apartments (
property_id INT PRIMARY KEY,
floor INT,
area FLOAT,
bedrooms INT,
bathrooms INT,
has_elevator BOOLEAN,
FOREIGN KEY (property_id) REFERENCES properties(id) ON DELETE CASCADE
);

CREATE TABLE houses(
property_id INT PRIMARY KEY,
area FLOAT,
bedrooms INT,
bathrooms INT,
has_garage BOOLEAN,
num_floors INT,
available BOOLEAN DEFAULT TRUE,
FOREIGN KEY (property_id) REFERENCES properties(id) ON DELETE CASCADE
);

CREATE TABLE favourites(
user_id INT,
property_id INT,
PRIMARY KEY (user_id, property_id),
FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
FOREIGN KEY (property_id) REFERENCES properties(id) ON DELETE CASCADE
);

CREATE TABLE appointments (
id INT AUTO_INCREMENT PRIMARY KEY,
buyer_id INT NOT NULL,
agent_id INT NOT NULL,
property_id INT NOT NULL,
message TEXT,
FOREIGN KEY (buyer_id) REFERENCES buyers(id) ON DELETE CASCADE,
FOREIGN KEY (agent_id) REFERENCES agents(id) ON DELETE CASCADE,
FOREIGN KEY (property_id) REFERENCES properties(id) ON DELETE CASCADE
);