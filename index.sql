create table driver ( driver_pk int primary key auto_increment, namr varchar(60), status varchar(60), offence_count int, vehicle_pk int unsigned, reg_time datetime default CURRENT_TIMESTAMP, foreign key(vehicle_pk) references vehicle(vehicle_pk) ) create table driver ( driver_pk int primary key auto_increment, namr varchar(60), status varchar(60), offence_count int, vehicle_pk int unsigned, reg_time datetime default CURRENT_TIMESTAMP, foreign key(vehicle_pk) references vehicle(vehicle_pk) ) 


CREATE TABLE groupp(
    group_pk INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(60),
    location VARCHAR(60),
	nature_of_goods VARCHAR(60)
)

CREATE TABLE loader(
    loader_pk INT PRIMARY KEY AUTO_INCREMENT,
    namr VARCHAR(60),
    vehicle_pk INT UNSIGNED,
    reg_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(vehicle_pk) REFERENCES vehicle(vehicle_pk)
)

CREATE TABLE offence(
    offence_pk INT PRIMARY KEY AUTO_INCREMENT,
    summary VARCHAR(60),
    driver_pk INT,
    reg_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(driver_pk) REFERENCES driver(driver_pk)
)
CREATE TABLE order_transport(
    order_pk INT PRIMARY KEY AUTO_INCREMENT,
    farmer_pk int,
    group_pk INT,
    driver_pk INT,
    loader_pk INT,
    reg_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(farmer_pk) REFERENCES farmer(farmer_pk),
    FOREIGN KEY(group_pk) REFERENCES groupp(group_pk),
    FOREIGN KEY(driver_pk) REFERENCES driver(driver_pk),
    FOREIGN KEY(loader_pk) REFERENCES loader(loader_pk),    
)

ALTER TABLE `groupp` CHANGE `name` `group_name` VARCHAR(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL; 