create Database Essensziele;
use Database Essensziele;

CREATE TABLE Category (
    catID INT NOT NULL AUTO_INCREMENT,
    description VARCHAR(30) NOT NULL,
    PRIMARY KEY (catID));

CREATE TABLE Address (
    addressID INT NOT NULL AUTO_INCREMENT,
    street_num VARCHAR(35) NOT NULL,
    plz INT(5) NOT NULL,
    ort VARCHAR(20) NOT NULL,
    PRIMARY KEY (addressID));

CREATE TABLE Restaurant (
  restID int NOT NULL AUTO_INCREMENT,
  name varchar(35) NOT NULL,
  distance varchar(3) NOT NULL,
  price varchar(3) NOT NULL,
  Veggie varchar(3) NOT NULL,
  addressID INT NOT NULL Veggie,
  catID INT NOT NULL addressID,
  PRIMARY KEY (restID));